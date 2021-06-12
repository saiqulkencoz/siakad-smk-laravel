@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Kelas</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            @if(session('Sukses'))
                            <div class="col-lg-12 mt-1">
                                <div class="alert alert-success mt-2" role="alert">
                                    {{session('Sukses')}}
                                </div>
                            </div>
                            @endif
                            <div class="panel-body">
                                <form action="{{route('data-kelas')}}" method="GET">
                                    <div class="input-group">
                                        <input class="form-control" name="cari" type="text" placeholder="Cari Nama Kelas...">
                                        <span class="input-group-btn"><button class="btn btn-primary" type="submit">Search</button></span>
                                    </div>
                                </form>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>NAMA KELAS</th>
                                            <th>JURUSAN</th>
                                            <th>WALI KELAS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kelas as $kelas)
                                        <tr>
                                            <td>{{$kelas->nama}}</td>
                                            <td>{{$kelas->jurusan}}</td>
                                            <td>{{$kelas->guru->nama}}</td>
                                            <td>
                                                <a href="/data-kelas/{{$kelas->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                                                <a href="/data-kelas/{{$kelas->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                            </td>
                                        </tr>            
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('cetak-kelas')}}" class="btn btn-success btn-md">Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{route('add-kelas')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Kelas">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="Teknik Instatalasi Tenaga Listrik">Teknik Instatalasi Tenaga Listrik</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                        <option value="Teknik Gambar Bangunan">Teknik Gambar Bangunan</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label>Wali Kelas</label>
                    <select class="form-control" name="guru_id">
                        @foreach ($data_guru as $guru)
                        <option value="{{$guru->id}}">{{$guru->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>
@endsection