@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('student') }}" class="btn btn-dark shadow"> Back</a>

        <br><br>
        <div class="row">
            <div class="col">
                @foreach ($seminar as $sm)
                    <div class="card shadow" style="border-radius : 1rem">
                        <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                            alt="" class="card-img-top img-fluid" height="100px" width="100px">
                        <div class="card-body">
                            <h3 class=" card-title">{{ $sm->name }}</h3>
                            <p class="card-text"> {{ $sm->dessmiption }}</p>
                            <p class="card-text">Speaker : <b>{{ $sm->speaker }}</b></p>
                            <hr>
                            <p class="card-text"> Tempat : <b>{{ $sm->place }}</b></p>
                            <p class="card-text"> Tanggal : <b>{{ $sm->date }}</b></p>
                            <p class="card-text"> Waktu : <b>{{ $sm->time }}</b></p>
                            <hr>
                            <p class="card-text"> Harga : <b>{{ $sm->price }}</b></p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="/student/checkout" id="checkout" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="name" name="name" value="{{ $sm->name }}">
                                <input type="hidden" class="form-control" id="place" name="place" value="{{ $sm->place }}">
                                <input type="hidden" class="form-control" id="date" name="date" value="{{ $sm->date }}">
                                <input type="hidden" class="form-control" id="time" name="time" value="{{ $sm->time }}">
                                <input type="hidden" class="form-control" id="price" name="price" value=" {{ $sm->price }}">
                                <button href="submit" class="btn btn-dark">Attend this seminar</button>
                            </form>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    @endsection
