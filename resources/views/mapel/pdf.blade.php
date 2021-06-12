<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapel PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center><h5>Daftar Mapel</h5></center>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>MATA PELAJARAN</th>
                <th>GURU PENGAJAR</th>
                <th>KELAS</th>
                <th>JAM</th>
                <th>HARI</th>
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
            </tr>            
            @endforeach
        </tbody>
    </table>
</body>
</html>