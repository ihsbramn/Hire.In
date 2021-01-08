@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('certification.create') }}" class="btn btn-primary shadow"> Create New Certification</a>
        <a href="{{ route('admin') }}" class="btn btn-dark shadow"> Back</a>

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
                            <a href="/certification/{{ $ce->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ route('certification.destroy', $ce->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    @endsection
