@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('course.create') }}" class="btn btn-primary shadow"> Create New Course</a>
        <a href="{{ route('admin') }}" class="btn btn-dark shadow"> Back</a>

        <br><br>
        <div class="row">
            <div class="col">
                @foreach ($course as $cr)
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
                            <a href="/course/{{ $cr->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ route('course.destroy', $cr->id) }}" method="post" class="d-inline">
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
