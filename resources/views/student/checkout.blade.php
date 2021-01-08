@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ url('/student/daftar') }}" class="btn btn-dark shadow"> Back</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Biaya</th>
                    <th scope="col"> Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $std)
                    <tr>
                        <td>{{ $std->name }}</td>
                        <td>{{ $std->price }}</td>
                        <td>
                            <form action="{{ $std->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Cancel</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
        <form action="/payment" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" id="name" name="name" value="{{ $std->name }}">
            <input type="hidden" class="form-control" id="place" name="place" value="{{ $std->place }}">
            <input type="hidden" class="form-control" id="date" name="date" value="{{ $std->date }}">
            <input type="hidden" class="form-control" id="time" name="time" value="{{ $std->time }}">
            <input type="hidden" class="form-control" id="price" name="price" value=" {{ $std->price }}">
            <br>
            <h3>Metode Pembayaran</h3>
            <p>Pembayaran Transfer ke Rekeningn <b>BCA 123456 a.n Pamunggas Putra </b></p>
            <p>Silahkan Upload Bukti Pembayaran Terlebih Dahulu</p>
            <p>Setelah itu lakukan checkout</p>
            <br>

            <div class="form-group">
                <div class="custom-file">
                    <label for="photo">Upload Bukti Bayar</label>
                    <input type="file" class="form-control" id="buktibayar" name="buktibayar">
                </div>
            </div>
            <input type="hidden" class="form-control" id="status" name="status" value="Menunggu Konfirmasi">
            <button href="submit" class="btn btn-dark">Lakukan Pembayaran</button>
        </form>
        @endforeach
        <br><br>

    </div>

@endsection
