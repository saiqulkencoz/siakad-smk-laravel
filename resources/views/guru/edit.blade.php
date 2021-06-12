@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-container">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: center">Edit Data Guru</h1>
                @if(session('Sukses'))
                <div class="alert alert-success mt-2" role="alert">
                    {{session('Sukses')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/data-guru/{{$guru->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>NIP</label>
                                <input class="form-control" type="text" name="nip" placeholder="Masukkan Kode NIP" value="{{$guru->nip}}">
                            </div>
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" value="{{$guru->nama}}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                @if($guru->jenis_kelamin=='L')
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="L" selected >Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                @else
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="L">Laki - Laki</option>
                                    <option value="P" selected>Perempuan</option>
                                </select>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <input class="form-control" type="text" name="agama" placeholder="Masukkan agama" value="{{$guru->agama}}">
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input class="form-control" type="text" name="telepon" placeholder="Masukkan No. Telepon" value="{{$guru->telepon}}">
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg" style="width: 15%">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection