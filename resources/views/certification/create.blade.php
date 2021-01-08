@extends('layouts.app')

@section('content')
    <div class="container">

        <section id="certification_create" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <h1 style="text-align: center">Create New Certification</h1>
                <hr>
                <form action="/certification" id="create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <label for="name">Certification Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Ventor">Vendor</label>
                            <input type="text" class="form-control" id="vendor" name="vendor">
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <input type="place" class="form-control" id="place" name="place">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Started</label>
                            <input type="date" class="form-control datepicker" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="time">Time Started</label>
                            <input type="time" class="form-control timepicker" id="time" name="time">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="photo">Select a photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
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
