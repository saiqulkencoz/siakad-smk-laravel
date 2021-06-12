<?php

namespace App\Http\Controllers;
Use \App\User;
USe \App\Kelas;
Use \App\Siswa;
Use \App\Mapel;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(Request $request){
        $data_kelas = Kelas::all();
        if($request->has('cari')){
            $data_siswa = Siswa::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_siswa = Siswa::all();
        }
        return view('nilai.index',['data_siswa' => $data_siswa],['data_kelas' => $data_kelas]);
    }

    public function profile($id){
        $siswa = Siswa::find($id);
        $s =1;
        $kelas = Kelas::find($siswa->kelas_id)->mapel;
        return view('nilai.profile', compact('siswa','s','kelas'));
    }

    public function addnilai(Request $request, $id){
        // dd($request->all());
        $siswa = Siswa::find($id);
        if($siswa->mapel()->where('mapel_id',$request->mapel_id)->exists()){
            return redirect('data-nilai/'.$id.'/profile')->with('Error', 'Data nilai sudah ada');
        }
        $siswa->mapel()->attach($request->mapel_id,['nilai'=>$request->nilai]);

        return redirect('data-nilai/'.$id.'/profile')->with('Sukses', 'Data nilai berhasil ditambahkan');
    }

    public function delete($idsiswa,$idmapel){
        $siswa = Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);
        return redirect()->back()->with('Sukses', 'Data nilai berhasil dihapus');
    }
}
