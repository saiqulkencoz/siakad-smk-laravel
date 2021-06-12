@extends('layouts.master')
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
                                    <img src="{{asset('admin/assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
                                    <h3 class="name">{{$guru->nama}}</h3>
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
                                    <h4 class="heading" style="text-align: center">Basic Info</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>NIP<span>{{$guru->nip}}</span></li>
                                        <li>Nama<span>{{$guru->nama}}</span></li>
                                        <li>Jenis Kelamin
                                            @if($guru->jenis_kelamin=="L")
                                                <span>Laki - Laki</span>
                                            @else
                                                <span>Perempuan</span>
                                            @endif
                                        </li>
                                        <li>Agama<span>{{$guru->agama}}</span></li>
                                        <li>Telepon<span>{{$guru->telepon}}</span></li>
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
                                <div class="text-center"><a href="" class="btn btn-primary">Edit Profile Photo</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">

                            <!-- TABBED CONTENT -->
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-bottom-left1">
                                    <ul class="list-unstyled activity-timeline">
                                        <li>
                                            <i class="fa fa-comment activity-icon"></i>
                                            <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-cloud-upload activity-icon"></i>
                                            <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-plus activity-icon"></i>
                                            <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check activity-icon"></i>
                                            <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
                                        </li>
                                    </ul>
                                    {{-- <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div> --}}
                                </div>
                            </div>
                            <!-- END TABBED CONTENT -->
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
