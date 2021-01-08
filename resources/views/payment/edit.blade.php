@extends('layouts.app')

@section('content')
    @auth
        @if (auth()->user()->is_admin == 1)
            <div class="container">
                <br>
                <a href="{{ url('/admin') }}" class="btn btn-dark shadow"> Back</a>
                <br>
                <h1 style="text-align: center">Confirmation</h1>
                <hr>
                <form action="/payment/{{ $payment->id }}" id="update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $payment->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Payment Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $payment->name }}">
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <input type="place" class="form-control" id="place" name="place" value="{{ $payment->place }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Started</label>
                            <input type="date" class="form-control datepicker" id="date" name="date"
                                value="{{ $payment->date }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Time Started</label>
                            <input type="time" class="form-control timepicker" id="time" name="time"
                                value="{{ $payment->time }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price " value="{{ $payment->price }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status " value="{{ $payment->status }}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="status" name="status "
                                value="{{ $payment->buktibayar }}">
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Submit</button>
                    <a href="{{ url('/admin') }}" class="btn btn-danger">Back</a>
                </form>
            </div>
        @else
            <div class="container">
                <br>
                <button onclick="window.print()" class=" btn btn-primary shadow">Print Bukti</button>
                <a href="{{ url('/student') }}" class="btn btn-dark shadow"> Back</a>
                <br>
                <br>
                <section id="bukti" class="shadow" style="border-radius: 1rem; background-color: white;">
                    <div class="container">
                        <div class="container">
                            <br>
                            <h1 style="text-align: center"> Bukti Pembayaran</h1>
                            <hr>
                            <br>
                            <h5>Pembayaran Atas Nama :<b> {{ Auth::user()->name }}</b></h5>
                            <h5>Peruntukan Pembayaran : <b> {{ $payment->name }} </b></h5>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <h5>Keterangan </h5>
                                    <h5>Tempat Pelaksanaan : <b> {{ $payment->place }}</b></h5>
                                    <h5>Tanggal Pelaksanaan : <b> {{ $payment->date }}</b></h5>
                                    <h5>Tanggal Pelaksanaan : <b> {{ $payment->date }}</b></h5>
                                    <h5>Waktu Pelaksanaan : <b> {{ $payment->time }} </b></h5>
                                    <h5>Harga : <b> {{ $payment->price }}</b></h5>
                                </div>
                                <div class="col">
                                    <img src="{{ url('images/lunas.jpg') }}" alt="lunas" class="img-fluid" height="250px"
                                        width="250px">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </section>

            </div>
        @endif
    @endauth

@endsection
