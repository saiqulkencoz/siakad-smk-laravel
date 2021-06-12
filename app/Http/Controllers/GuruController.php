<?php

namespace App\Http\Controllers;
use App\Guru;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class GuruController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_guru = Guru::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_guru = Guru::all();
        }
        return view('guru.index',['data_guru' => $data_guru]);
    }
    public function create(Request $request){
        
        //auto create user guru -> user
        $user = new User;
        $user -> name = $request->nama;
        $user -> level = 'guru';
        $user -> email = $request->email;
        $user -> password = bcrypt('rahasia');
        $user -> remember_token = Str::random(60);
        $user -> save();
        
        //insert data guru -> guru
        $request->request->add(['user_id'=> $user->id]);
        $guru = Guru::create($request->all());

        return redirect()->back()->with('Sukses','Data Berhasil Diinput');
    }
    public function update_index($id){
        $guru = Guru::find($id);
        // dd($guru);
        return view('guru.edit',['guru' => $guru]);
    }
    public function update(Request $request,$id){
        $guru = Guru::find($id);
        $guru->update($request->all());
        return redirect('/data-guru')->with('Sukses','Data Berhasil Di Update');
    }
    public function delete($id){
        //delete data guru
        $guru = Guru::find($id);
        $guru->delete($guru);
        
        // auto delete data user
        $user = User::find($guru->user_id);
        $user->delete();

        return redirect()->back()->with('Sukses','Data Berhasil Dihapus');
    }
    public function profile($id){
        $guru = Guru::find($id);
        return view('layouts.guru.profile',['guru' => $guru]);
    }
    public function cetak_pdf()
    {
    	$guru = Guru::all();
 
    	$pdf = PDF::loadview('guru.pdf',['data_guru'=>$guru]);
    	return $pdf->download('daftar-guru-pdf');
    }

}
