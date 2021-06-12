@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-container">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: center">Edit Data Mapel</h1>
                @if(session('Sukses'))
                <div class="alert alert-success mt-2" role="alert">
                    {{session('Sukses')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/data-mapel/{{$index_mapel->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nama Mata Pelajaran</label>
                                <input class="form-control" type="text" name="nip" placeholder="Masukkan Kode NIP" value="{{$index_mapel->nama}}">
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
                                <label>Nama Guru Pengampu</label>
                                <select class="form-control" name="guru_id">
                                    @foreach ($index_guru as $guru)
                                        <option value="{{$guru->id}}">{{$guru->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <select class="form-control" name="kelas_id">
                                    @foreach ($index_kelas as $a)
                                        <option value="{{$a->id}}">{{$a->nama}}</option>
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