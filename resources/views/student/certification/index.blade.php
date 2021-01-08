@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('student') }}" class="btn btn-dark shadow"> Back</a>

        <br><br>
        <div class="row">
            <div class="col">
                @foreach ($certification as $ce)
                    <div class="card shadow" style="border-radius : 1rem">
                        <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                            alt="" class="card-img-top img-fluid" height="100px" width="100px">
                        <div class="card-body">
                            <h3 class=" card-title">{{ $ce->name }}</h3>
                            <p class="card-text"> {{ $ce->description }}</p>
                            <p class="card-text">Vendor : <b>{{ $ce->vendor }}</b></p>
                            <hr>
                            <p class="card-text"> Tempat : <b>{{ $ce->place }}</b></p>
                            <p class="card-text"> Tanggal : <b>{{ $ce->date }}</b></p>
                            <p class="card-text"> Waktu : <b>{{ $ce->time }}</b></p>
                            <hr>
                            <p class="card-text"> Harga : <b>{{ $ce->price }}</b></p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="/student/checkout" id="checkout" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="name" name="name" value="{{ $ce->name }}">
                                <input type="hidden" class="form-control" id="place" name="place" value="{{ $ce->place }}">
                                <input type="hidden" class="form-control" id="date" name="date" value="{{ $ce->date }}">
                                <input type="hidden" class="form-control" id="time" name="time" value="{{ $ce->time }}">
                                <input type="hidden" class="form-control" id="price" name="price" value=" {{ $ce->price }}">
                                <button href="submit" class="btn btn-dark">Take Certification</button>
                            </form>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    @endsection
