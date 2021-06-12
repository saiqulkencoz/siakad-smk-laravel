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
                        <form action="/data-siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>NIS</label>
                                <input class="form-control" type="text" name="nis" placeholder="Masukkan Kode NIS" value="{{$siswa->nis}}">
                            </div>
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" value="{{$siswa->nama}}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                @if($siswa->jenis_kelamin=='L')
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
                                <input class="form-control" type="text" name="agama" placeholder="Masukkan agama" value="{{$siswa->agama}}">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" type="text" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" value="{{$siswa->tmp_lahir}}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="text" name="tgl_lahir" placeholder="DD/MM/YYYY" value="{{$siswa->tgl_lahir}}">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="form-control" name="kelas_id">
                                    @foreach ($data_kelas as $opt_kelas)
                                        <option value="{{$opt_kelas->id}}">{{$opt_kelas->nama}}</option>
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