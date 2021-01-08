@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="seminar_create" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <h1 style="text-align: center">Edit Seminar</h1>
                <hr>
                <form action="/seminar/{{ $seminar->id }}" id="update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $seminar->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">seminar Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $seminar->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                name="description">{{ $seminar->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="speaker">Speaker</label>
                            <input type="text" class="form-control" id="speaker" name="speaker"
                                value="{{ $seminar->speaker }}">
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <input type="place" class="form-control" id="place" name="place" value="{{ $seminar->place }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Started</label>
                            <input type="date" class="form-control datepicker" id="date" name="date"
                                value="{{ $seminar->date }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Time Started</label>
                            <input type="time" class="form-control timepicker" id="time" name="time"
                                value="{{ $seminar->time }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price " value="{{ $seminar->price }}">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="photo">Select a photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ $seminar->photo }}">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Submit</button>
                    <a href="{{ url('/seminar') }}" class="btn btn-danger">Back</a>
                </form>
                <br>
            </div>
        </section>
    </div>
@endsection
