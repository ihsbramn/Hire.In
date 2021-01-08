@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="admin" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <div class="alert alert-success text-center shadow " role="alert">
                    Wellcome Admin
                </div>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow" style="border-radius : 1rem">
                            <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                                alt="" class="card-img-top" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Courses</h5>

                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ url('course') }}" class="btn btn-info text-white">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow " style="border-radius : 1rem">
                            <img src="https://blush.design/api/download?shareUri=MTWir60Tr&s=0.3%7EC68E80-0.5%7EF7D3BB-0.6%7EF7D3BB&w=800&h=800&fm=png"
                                alt="" class="card-img-top" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Seminar</h5>

                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ url('seminar') }}" class="btn btn-info text-white">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow" style=" border-radius : 1rem">
                            <img src="https://blush.design/api/download?shareUri=v9_UULwN4&w=800&h=800&fm=png" alt=""
                                class="card-img-top" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certification</h5>

                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ url('certification') }}" class="btn btn-info text-white">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <br><br>
        <section id="admin" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card h-100 shadow" style="border-radius : 1rem  ">
                            <img src="https://blush.design/api/download?shareUri=Nran815oV&s=0.1.0%7EF6CBC3-0.1.1%7E7D4439-0.1.2%7EF6CBC3&w=800&h=800&fm=png"
                                alt="" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title text-center">Vacancies</h5>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ url('vacancy') }}" class="btn btn-info text-white">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
@endsection
