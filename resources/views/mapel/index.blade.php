@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Mapel</h3>
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
                                <form action="{{route('data-mapel')}}" method="GET">
                                    <div class="input-group">
                                        <input class="form-control" name="cari" type="text" placeholder="Cari Nama ...">
                                        <span class="input-group-btn"><button class="btn btn-primary" type="submit">Search</button></span>
                                    </div>
                                </form>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>MATA PELAJARAN</th>
                                            <th>GURU PENGAJAR</th>
                                            <th>KELAS</th>
                                            <th>JAM</th>
                                            <th>HARI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_mapel as $mapel)
                                        <tr>
                                            <td>{{$mapel->nama}}</td>
                                            <td>{{$mapel->guru->nama}}</td>
                                            <td>{{$mapel->kelas->nama}}</td>
                                            <td>{{$mapel->jam_awal}} - {{$mapel->jam_akhir}}</td>
                                            <td>{{$mapel->hari}}</td>
                                            <td>
                                                <a href="/data-mapel/{{$mapel->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                                                <a href="/data-mapel/{{$mapel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                            </td>
                                        </tr>            
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('cetak-mapel')}}" class="btn btn-success btn-md">Cetak</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{route('add-mapel')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Mata Pelajaran">
                </div>
                <div class="form-group">
                    <label>Jam Awal</label>
                    <select class="form-control" name="jam_awal">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jam Akhir</label>
                    <select class="form-control" name="jam_akhir">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option>
                        <option value="X">X</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Hari</label>
                    <select class="form-control" name="hari">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <select class="form-control" name="kelas_id">
                        @foreach ($data_kelas as $opt_kelas)
                            <option value="{{$opt_kelas->id}}">{{$opt_kelas->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Guru Pengampu</label>
                    <select class="form-control" name="guru_id">
                        @foreach ($data_guru as $opt_guru)
                            <option value="{{$opt_guru->id}}">{{$opt_guru->nama}}</option>
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