@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('student') }}" class="btn btn-dark shadow"> Back</a>

        <br><br>
        <div class="row">
            <div class="col">
                @foreach ($course as $cr)
                    <form method="post" action="{{ url('student/checkout') }}"></form>
                    <div class="card shadow" style="border-radius : 1rem">
                        <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                            alt="" class="card-img-top img-fluid" height="100px" width="100px">
                        <div class="card-body">
                            <h3 class=" card-title">{{ $cr->name }}</h3>
                            <p class="card-text"> {{ $cr->description }}</p>
                            <p class="card-text">Mentor : <b>{{ $cr->mentor }}</b></p>
                            <hr>
                            <p class="card-text"> Tempat : <b>{{ $cr->place }}</b></p>
                            <p class="card-text"> Tanggal : <b>{{ $cr->date }}</b></p>
                            <p class="card-text"> Waktu : <b>{{ $cr->time }}</b></p>
                            <hr>
                            <p class="card-text"> Harga : <b>{{ $cr->price }}</b></p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="/student/checkout" id="checkout" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="name" name="name" value="{{ $cr->name }}">
                                <input type="hidden" class="form-control" id="place" name="place" value="{{ $cr->place }}">
                                <input type="hidden" class="form-control" id="date" name="date" value="{{ $cr->date }}">
                                <input type="hidden" class="form-control" id="time" name="time" value="{{ $cr->time }}">
                                <input type="hidden" class="form-control" id="price" name="price" value=" {{ $cr->price }}">
                                <button href="submit" class="btn btn-dark">Take Course</button>
                            </form>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    @endsection
