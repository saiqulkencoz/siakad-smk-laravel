@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Guru</h3>
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
                                <form action="{{route('data-guru')}}" method="GET">
                                    <div class="input-group">
                                        <input class="form-control" name="cari" type="text" placeholder="Cari Nama ...">
                                        <span class="input-group-btn"><button class="btn btn-primary" type="submit">Search</button></span>
                                    </div>
                                </form>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>NAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>AGAMA</th>
                                            <th>NO. TELEPON</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_guru as $guru)
                                        <tr>
                                            <td>{{$guru->nip}}</td>
                                            <td>{{$guru->nama}}</td>
                                            <td>{{$guru->jenis_kelamin}}</td>
                                            <td>{{$guru->agama}}</td>
                                            <td>{{$guru->telepon}}</td>
                                            <td>
                                                <a href="/data-guru/{{$guru->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                                                <a href="/data-guru/{{$guru->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                            </td>
                                        </tr>            
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('cetak-guru')}}" class="btn btn-success btn-md">Cetak</a>
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
            <form action="{{route('add-guru')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" type="text" name="nip" placeholder="Masukkan Kode NIP">
                </div>
                <div class="form-group">
                    <label>Nama Guru</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="L" selected >Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control" type="text" name="agama" placeholder="Masukkan agama">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input class="form-control" type="text" name="telepon" placeholder="Masukkan No. Telepon">
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