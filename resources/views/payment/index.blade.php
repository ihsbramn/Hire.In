@extends('layouts.app')

@section('content')

    <div class="container">
        @if (auth()->user()->is_admin == 1)
            <h1>Confirmation</h1>
        @else
            <h1>My Enrollment</h1>
        @endif

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
                    <th>
                        @if (auth()->user()->is_admin == 1)
                            Edit
                        @else
                            Action
                        @endif
                    </th>
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
                        <td>
                            @if (auth()->user()->is_admin == 1)
                                <a href="/payment/{{ $py->id }}/edit" class="btn btn-primary">Edit</a>
                            @else
                                <a href="/payment/{{ $py->id }}/edit" class="btn btn-primary">Print Bukti</a>
                            @endif
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>

    </div>

@endsection
