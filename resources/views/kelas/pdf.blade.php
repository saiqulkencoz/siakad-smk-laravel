<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center><h5>Daftar Kelas</h5></center>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NAMA KELAS</th>
                <th>JURUSAN</th>
                <th>WALI KELAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_kelas as $kelas)
            <tr>
                <td>{{$kelas->nama}}</td>
                <td>{{$kelas->jurusan}}</td>
                <td>{{$kelas->guru->nama}}</td>
            </tr>            
            @endforeach
        </tbody>
    </table>
</body>
</html>