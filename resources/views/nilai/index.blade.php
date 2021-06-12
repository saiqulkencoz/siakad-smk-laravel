@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Input Nilai Siswa</h3>
                                {{-- <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div> --}}
                            </div>
                            @if(session('Sukses'))
                            <div class="col-lg-12 mt-1">
                                <div class="alert alert-success mt-2" role="alert">
                                    {{session('Sukses')}}
                                </div>
                            </div>
                            @endif
                            <div class="panel-body">
                                <form action="{{route('data-siswa')}}" method="GET">
                                    <div class="input-group">
                                        <input class="form-control" name="cari" type="text" placeholder="Cari Nama ...">
                                        <span class="input-group-btn"><button class="btn btn-primary" type="submit">Search</button></span>
                                    </div>
                                </form>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>NAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>TEMPAT LAHIR</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>JURUSAN</th>
                                            <th>KELAS</th>
                                            {{-- <th>AKSI</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_siswa as $siswa)
                                        <tr>
                                            <td>{{$siswa->nis}}</td>
                                            <td><a href="/data-nilai/{{$siswa->id}}/profile">{{$siswa->nama}}</a></td>
                                            <td>{{$siswa->jenis_kelamin}}</td>
                                            <td>{{$siswa->tmp_lahir}}</td>
                                            <td>{{$siswa->tgl_lahir}}</td>
                                            <td>{{$siswa->kelas->jurusan}}</td>
                                            <td>{{$siswa->kelas->nama}}</td>
                                            {{-- <td>
                                                <a href="/data-siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                                                <a href="/data-siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                            </td> --}}
                                        </tr>            
                                        @endforeach
                                    </tbody>
                                </table>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{route('add-siswa')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" type="text" name="nis" placeholder="Masukkan Kode NIS">
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
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
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tmp_lahir" placeholder="Masukkan Tempat Lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="text" name="tgl_lahir" placeholder="DD/MM/YYYY">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas_id">
                        @foreach ($data_kelas as $opt_kelas)
                        <option value="{{$opt_kelas->id}}">{{$opt_kelas->nama}}</option>
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