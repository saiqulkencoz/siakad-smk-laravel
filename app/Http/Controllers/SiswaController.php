<?php

namespace App\Http\Controllers;
Use \App\User;
USe \App\Kelas;
Use \App\Siswa;
Use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function index(Request $request){
        $data_kelas = Kelas::all();
        if($request->has('cari')){
            $data_siswa = Siswa::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_siswa = Siswa::all();
        }
        return view('siswa.index',['data_siswa' => $data_siswa],['data_kelas' => $data_kelas]);
    }
    public function create(Request $request){
        
        //auto create user siswa -> user
        $user = new User;
        $user -> name = $request->nama;
        $user -> level = 'siswa';
        $user -> email = $request->email;
        $user -> password = bcrypt('rahasia');
        $user -> remember_token = Str::random(60);
        $user -> save();
        
        //insert data guru -> guru
        $request->request->add(['user_id'=> $user->id]);
        $siswa = Siswa::create($request->all());

        return redirect()->route('data-siswa')->with('Sukses','Data Berhasil Diinput');
    }
    public function update_index($id){
        $siswa = Siswa::find($id);
        $data_kelas = Kelas::all();
        // dd($guru);
        return view('siswa.edit',['siswa' => $siswa],['data_kelas' => $data_kelas]);
    }
    public function update(Request $request,$id){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect()->route('data-siswa')->with('Sukses','Data Berhasil Di Update');
    }
    public function delete($id){
        //delete data guru
        $siswa = Siswa::find($id);
        $siswa->delete($siswa);
        
        // auto delete data user
        $user = User::find($siswa->user_id);
        $user->delete();

        return redirect()->route('data-siswa')->with('Sukses','Data Berhasil Dihapus');
    }
    public function cetak_pdf()
    {
    	$siswa = Siswa::all();
 
    	$pdf = PDF::loadview('siswa.pdf',['data_siswa'=>$siswa]);
    	return $pdf->download('daftar-siswa-pdf');
    }
}
