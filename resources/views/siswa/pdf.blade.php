<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center><h5>Daftar Siswa</h5></center>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{$siswa->tmp_lahir}}</td>
                <td>{{$siswa->tgl_lahir}}</td>
                <td>{{$siswa->kelas->jurusan}}</td>
                <td>{{$siswa->kelas->nama}}</td>
            </tr>            
            @endforeach
        </tbody>
    </table>
</body>
</html>