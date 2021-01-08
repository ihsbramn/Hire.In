@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('student') }}" class="btn btn-dark shadow"> Back</a>

        <br><br>
        <div class="row">
            <div class="col">
                @foreach ($vacancy as $va)
                    <div class="card shadow" style="border-radius : 1rem">
                        <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                            alt="" class="card-img-top img-fluid" height="100px" width="100px">
                        <div class="card-body">
                            <h3 class=" card-title">{{ $va->name }}</h3>
                            <p class="card-text"> Type : <b>{{ $va->type }}</b></p>
                            <p class="card-text">Company : <b>{{ $va->company }}</b></p>
                            <p class="card-text"> Tempat : <b>{{ $va->city }}</b></p>
                            <hr>
                            <p class="card-text"> {{ $va->description }}</p>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    @endsection
