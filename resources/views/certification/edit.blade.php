@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="certification_create" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <h1 style="text-align: center">Edit Certification</h1>
                <hr>
                <form action="/certification/{{ $certification->id }}" id="update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $certification->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Certification Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $certification->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                name="description">{{ $certification->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor</label>
                            <input type="text" class="form-control" id="vendor" name="vendor"
                                value="{{ $certification->vendor }}">
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <input type="place" class="form-control" id="place" name="place"
                                value="{{ $certification->place }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Started</label>
                            <input type="date" class="form-control datepicker" id="date" name="date"
                                value="{{ $certification->date }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Time Started</label>
                            <input type="time" class="form-control timepicker" id="time" name="time"
                                value="{{ $certification->time }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price "
                                value="{{ $certification->price }}">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="photo">Select a photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ $certification->photo }}">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Submit</button>
                    <a href="{{ url('/certification') }}" class="btn btn-danger">Back</a>
                </form>
                <br>
            </div>
        </section>
    </div>
@endsection
