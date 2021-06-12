<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center><h5>Daftar Guru</h5></center>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>NO. TELEPON</th>
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
            </tr>            
            @endforeach
        </tbody>
    </table>
</body>
</html>