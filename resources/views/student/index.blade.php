@extends('layouts.app')

@section('content')
    <section id="jumbotron" class=" shadow">
        <div class="jumbotron jumbotron-fluid bg-dark"
            style="background-image: url('images/tron_home.jpg'); background-size: cover; height: 300px; width: auto;">
            <div class="container">
                <h1 class="text-light text-center"> <b>Selamat Datang di Hire.in</b> </h1>
                <h2 class="text-light text-center">Tingkatkan keahlian mu melalui program kami !</h2>
                <p class="text-light text-center">Bersama Hire.in Kamu Bisa !</p>
            </div>
        </div>
    </section>

    <section id=" layanan" class="shadow">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ url('images/courses_user.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light"><b> Courses</b></h2>
                        <h4 class="text-light"> <b> Daftar Kursus Sekarang Juga !</b></h4>
                        <a href="{{ url('student/daftar') }}" class="btn btn-info text-blue">Enroll</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ url('images/seminar_user.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light"> <b> Seminar</b></h2>
                        <h4 class="text-light"> <b> Ikuti Seminar Pembicara Ternama </b></h4>
                        <a href="{{ url('student/daftar') }}" class="btn btn-info text-blue">Enroll</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('images/certification_user.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light"> <b> Certification</b></h2>
                        <h4 class="text-light"> <b> Ambil Sertifikasi dan Raih Pekerjaan Impian Mu! </b></h4>
                        <a href="{{ url('student/daftar') }}" class="btn btn-info text-blue">Enroll</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>
@endsection
