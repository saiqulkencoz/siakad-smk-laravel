<?php

namespace App\Http\Controllers;
use \App\Mapel;
use \App\Kelas;
use \App\Guru;
Use PDF;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(Request $request){
        $data_kelas = Kelas::all();
        $data_guru = Guru::all();
        if($request->has('cari')){
            $data_mapel = Mapel::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_mapel = Mapel::all();
        }
        return view('mapel.index', compact('data_mapel','data_kelas','data_guru'));
    }

    public function create(Request $request){
        // return dd($request->all());
        $mapel = Mapel::create($request->all());
        return redirect()->route('data-mapel')->with('Sukses','Data Berhasil Di Input');
    }

    public function update_index($id){
        $index_mapel = Mapel::find($id);
        $index_kelas = Kelas::all();
        $index_guru = Guru::all();
        // dd($guru);
        return view('mapel.edit', compact('index_mapel','index_kelas','index_guru'));
    }

    public function update(Request $request,$id){
        $mapel = Mapel::find($id);
        $mapel->update($request->all());
        return redirect()->route('data-mapel')->with('Sukses','Data Berhasil Di Update');
    }

    public function delete($id){
        $mapel = Mapel::find($id);
        $mapel->delete($mapel);
        return redirect()->route('data-mapel')->with('Sukses','Data Berhasil Di Hapus');
    }
    public function cetak_pdf()
    {
    	$mapel = Mapel::all();
 
    	$pdf = PDF::loadview('mapel.pdf',['data_mapel'=>$mapel]);
    	return $pdf->download('daftar-mapel-pdf');
    }
}
