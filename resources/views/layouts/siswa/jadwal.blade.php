@extends('layouts.master-siswa')

@section('header')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Jadwal Mata Pelajaran</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Mata Pelajaran</th>
                                            <th>Hari</th>
                                            <th>Jam Pelajaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mapel as $data)
                                            <tr>
                                                <td>{{$s++}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->hari}}</td>
                                                <td>{{$data->jam_awal}} - {{$data->jam_akhir}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="page-title">Daftar Jam Pelajaran</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Khusus Senin</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Keterangan</th>
                                            <th style="text-align: center">Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center">
                                        <tr>
                                            <td>Upacara Bendera</td>
                                            <td>07.00 - 07.30</td>
                                        </tr>
                                        <tr>
                                            <td>I</td>
                                            <td>07.30 - 08.15</td>
                                        </tr>
                                        <tr>
                                            <td>II</td>
                                            <td>08.15 - 09.00</td>
                                        </tr>
                                        <tr>
                                            <td>III</td>
                                            <td>09.00 - 09.45</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat I</td>
                                            <td>09.45 - 10.00</td>
                                        </tr>
                                        <tr>
                                            <td>IV</td>
                                            <td>10.00 - 10.45</td>
                                        </tr>
                                        <tr>
                                            <td>V</td>
                                            <td>10.45 - 11.30</td>
                                        </tr>
                                        <tr>
                                            <td>VI</td>
                                            <td>11.30 - 12.15</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat II</td>
                                            <td>12.15 - 12.45</td>
                                        </tr>
                                        <tr>
                                            <td>VII</td>
                                            <td>12.45 - 13.30</td>
                                        </tr>
                                        <tr>
                                            <td>VIII</td>
                                            <td>13.30 - 14.15</td>
                                        </tr>
                                        <tr>
                                            <td>IX</td>
                                            <td>14.15 - 15.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Selasa - Jum'at</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Keterangan</th>
                                            <th style="text-align: center">Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center">
                                        <tr>
                                            <td>1</td>
                                            <td>07.00 - 07.40</td>
                                        </tr>
                                        <tr>
                                            <td>II</td>
                                            <td>07.40 - 08.30</td>
                                        </tr>
                                        <tr>
                                            <td>III</td>
                                            <td>08.30 - 09.15</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat I</td>
                                            <td>09.15 - 09.30</td>
                                        </tr>
                                        <tr>
                                            <td>IV</td>
                                            <td>09.30 - 10.15</td>
                                        </tr>
                                        <tr>
                                            <td>V</td>
                                            <td>10.15 - 11.00</td>
                                        </tr>
                                        <tr>
                                            <td>VI</td>
                                            <td>11.00 - 11.40</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat II</td>
                                            <td>11.45 - 12.30</td>
                                        </tr>
                                        <tr>
                                            <td>VII</td>
                                            <td>12.30 - 13.15</td>
                                        </tr>
                                        <tr>
                                            <td>VIII</td>
                                            <td>13.15 - 14.30</td>
                                        </tr>
                                        <tr>
                                            <td>IX</td>
                                            <td>14.30 - 15.15</td>
                                        </tr>
                                        <tr>
                                            <td>X</td>
                                            <td>15.15 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection