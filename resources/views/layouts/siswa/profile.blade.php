@extends('layouts.master-siswa')

@section('header')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('content')
    	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="https://koni.pekanbaru.go.id/assets/vendor/logo/avat.png" style="max-width: 50%;max-height: 50%;" class="img-circle" alt="Avatar">
										<h3 class="name">{{$siswa->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									{{-- <div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												45 <span>Projects</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div> --}}
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama <span>{{$siswa->nama}}</span></li>
											<li>Kelas <span>{{$siswa->kelas->nama}}</span></li>
											<li>Tempat Lahir <span>{{$siswa->tmp_lahir}}</span></li>
											<li>Tanggal Lahir <span>{{$siswa->tgl_lahir}}</a></span></li>
										</ul>
									</div>
									{{-- <div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div> --}}
									{{-- <div class="profile-info">
										<h4 class="heading">About</h4>
										<p>Interactively fashion excellent information after distinctive outsourcing.</p>
									</div> --}}
									{{-- <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div> --}}
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								{{-- @if(session('Sukses'))
								<div class="col-lg-12 mt-1">
									<div class="alert alert-success mt-2" role="alert">
										{{session('Sukses')}}
									</div>
								</div>
								@endif
			
								@if(session('Error'))
								<div class="col-lg-12 mt-1">
									<div class="alert alert-danger mt-2" role="alert">
										{{session('Error')}}
									</div>
								</div>
								@endif --}}

                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Nilai
                                    </button> --}}
								{{-- <h4 class="heading">Daftar Nilai</h4> --}}
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Nilai</h3>
								</div>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No.</th>
												<th>Mata Pelajaran</th>
												<th>Nilai</th>
												{{-- <th>Aksi</th> --}}
											</tr>
										</thead>
										<tbody>
                                            @foreach($siswa->mapel as $mapel)
                                            <tr>
                                                <td>{{$s++}}</td>
                                                <td>{{$mapel->nama}}</td>
                                                <td>{{$mapel->pivot->nilai}}</td>
												{{-- <td><a href="/data-nilai/{{$siswa->id}}/{{$mapel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">DELETE</a></td> --}}
                                            </tr>    
                                            @endforeach
										</tbody>
									</table>
							</div>
							<!-- END TABLE STRIPED -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

@endsection

@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>	
<script>
	$(document).ready(function() {
        $('.nilai').editable();
    });
</script>
@endsection