<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use \App\Siswa;
use \App\Kelas;
use \App\Mapel;

class SiswaViewController extends Controller
{
    public function profile(){
        $user = User::find(Auth()->user()->id);
        $siswa = Siswa::find($user->siswa->id);
        $s =1;
        $mapel = Kelas::find($siswa->kelas_id)->mapel;
        return view('layouts.siswa.profile', compact('siswa','s','mapel'));
    }
    public function jadwal(){
        $user = User::find(Auth()->user()->id);
        $siswa = Siswa::find($user->siswa->id);
        $s =1;
        $mapel = Kelas::find($siswa->kelas_id)->mapel;
        return view('layouts.siswa.jadwal', compact('mapel','s'));
    }
}
