@extends('layouts.app')
@section('header')
    <title>About</title>
    {{-- <link href="/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://blackrockdigital.github.io/startbootstrap-agency/css/agency.min.css" rel="stylesheet">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Welcome to our team</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            {{-- <img class="img-circle img-responsive" src="home/img/hong_profile.jpg" alt=""> --}}
                            <img class="img-circle img-responsive" src="https://blackrockdigital.github.io/startbootstrap-agency/img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <br></br>
                                <br></br>
                                <h4 class="subheading">Nguyễn Hữu Hồng</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Sinh viên Khoa CNTT, trường ĐH Công nghệ, ĐHQGHN. Sở thích: Lập trình. Sở trường: Chơi game</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            {{-- <img class="img-circle img-responsive" src="home/img/thanh_profile.jpg" alt=""> --}}
                            <img class="img-circle img-responsive" src="https://blackrockdigital.github.io/startbootstrap-agency/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <br></br>
                                <h4 class="subheading">Trần Trịnh Bình Thành</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Sinh viên Khoa CNTT, trường ĐH Công nghệ, ĐHQGHN. Sở thích: lập trình. Sở trường: Tán gái</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            {{-- <img class="img-circle img-responsive" src="home/img/thuat_profile.png" alt=""> --}}
                            <img class="img-circle img-responsive" src="https://blackrockdigital.github.io/startbootstrap-agency/img/about/3.jpg" alt="">

                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <br></br>
                                <h4 class="subheading">Trần Như Thuật</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Sinh viên Khoa CNTT, trường ĐH Công nghệ, ĐHQGHN. Sở thích: Bóng đá. Sở trường: Đá bóng</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            {{-- <img class="img-circle img-responsive" src="home/img/hong_profile.jpg" alt=""> --}}
                            <img class="img-circle img-responsive" src="https://blackrockdigital.github.io/startbootstrap-agency/img/about/4.jpg" alt="">

                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <br></br>
                                <h4 class="subheading">Trần Văn Liên</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Sinh viên Khoa CNTT, trường ĐH Công nghệ, ĐHQGHN. Sở thích: Chém gió. Sở trường: Lập trình</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Coding Project
                                <br>Building
                                <br>The Future</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
