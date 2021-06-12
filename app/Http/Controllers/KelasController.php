<?php

namespace App\Http\Controllers;
use App\Kelas;
use App\Guru;
use PDF;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request){
        $guru = Guru::all();
        if($request->has('cari')){
            $data_kelas = Kelas::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_kelas = Kelas::all();
        }
        return view('kelas.index',['data_kelas' => $data_kelas], ['data_guru' => $guru]);
    }

    public function create(Request $request){
        // return dd($request->all());
        $kelas = Kelas::create($request->all());
        return redirect()->back()->with('Sukses','Data Berhasil Diinput');
    }

    public function update_index($id){
        $guru = Guru::all();
        $kelas = Kelas::find($id);
        // dd($guru);
        return view('kelas.edit',['kelas' => $kelas], ['data_guru' => $guru]);
    }

    public function update(Request $request,$id){
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/data-kelas')->with('Sukses','Data Berhasil Di Update');
    }

    public function delete($id){
        $kelas = Kelas::find($id);
        $kelas->delete($kelas);
        return redirect()->back()->with('Sukses','Data Berhasil Dihapus');
    }
    public function cetak_pdf()
    {
    	$kelas = Kelas::all();
    	$pdf = PDF::loadview('kelas.pdf',['data_kelas'=>$kelas]);
    	return $pdf->download('daftar-kelas-pdf');
    }
    
}
