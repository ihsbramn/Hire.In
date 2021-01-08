@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <a href="{{ route('vacancy.create') }}" class="btn btn-primary shadow"> Create New Vacancy</a>
        <a href="{{ route('admin') }}" class="btn btn-dark shadow"> Back</a>

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
                        <div class="card-footer text-center">
                            <a href="/vacancy/{{ $va->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ route('vacancy.destroy', $va->id) }}" method="post" class="d-inline">
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
