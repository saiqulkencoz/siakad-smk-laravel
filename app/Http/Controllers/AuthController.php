<?php

namespace App\Http\Controllers;
use Auth;
use \App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('layouts.login');
    }
    public function postlogin(Request $request){
        // return dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            if(Auth()->user()->level=="siswa"){
                return redirect('/profile');
            }
            else{
                return redirect('/data-guru');
            }
        }
        return redirect('/login');
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
