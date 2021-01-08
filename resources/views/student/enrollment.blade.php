@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>My Enrollment</h1>
        <br>
        <a href="{{ url('/student') }}" class="btn btn-dark shadow"> Back</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment as $py)
                    <tr>
                        <td>{{ $py->name }}</td>
                        <td>{{ $py->place }}</td>
                        <td>{{ $py->date }}</td>
                        <td>{{ $py->time }}</td>
                        <td>{{ $py->status }}</td>
                    </tr>
            </tbody>
            @endforeach
        </table>

    </div>

@endsection
