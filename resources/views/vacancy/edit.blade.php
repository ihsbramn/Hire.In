divdiv@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="vacancy_create" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <h1 style="text-align: center">Edit Vacancy</h1>
                <hr>
                <form action="/vacancy/{{ $vacancy->id }}" id="update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $vacancy->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Vacancy Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $vacancy->name }}">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company"
                                value="{{ $vacancy->company }}">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="city" class="form-control" id="city" name="city" value="{{ $vacancy->city }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type (Freelance, Intern, etc)</label>
                            <input type="type" class="form-control" id="type" name="type" value="{{ $vacancy->type }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                name="description">{{ $vacancy->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="photo">Select a photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ $vacancy->photo }}">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Submit</button>
                    <a href="{{ url('/vacancy') }}" class="btn btn-danger">Back</a>
                </form>
                <br>
            </div>
        </section>
    </div>
@endsection
