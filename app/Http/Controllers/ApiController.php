<?php

namespace App\Http\Controllers;

Use \App\User;
USe \App\Kelas;
Use \App\Siswa;
Use \App\Mapel;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editnilai(Request $request,$id){
        // return $request->all();
        $siswa = Siswa::find($id);
        $siswa->mapel()->updateExistingPivot($request->pk,['nilai'=>$request->value]);
    }
}
