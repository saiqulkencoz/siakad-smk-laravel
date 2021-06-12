@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-container">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: center">Edit Data Kelas</h1>
                @if(session('Sukses'))
                <div class="alert alert-success mt-2" role="alert">
                    {{session('Sukses')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/data-kelas/{{$kelas->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>NAMA KELAS</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Kelas" value="{{$kelas->nama}}">
                            </div>
                            <div class="form-group">
                                <label>JURUSAN</label>
                                <input class="form-control" type="text" name="jurusan" placeholder="Masukkan Jurusan" value="{{$kelas->jurusan}}">
                            </div>
                            <div class="form-group">
                                <label>WALI KELAS</label>
                                <select class="form-control" name="guru_id">
                                @foreach ($data_guru as $guru)
                                <option value="{{$guru->id}}">{{$guru->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg" style="width: 15%">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection