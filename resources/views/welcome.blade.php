<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- fontawsome stylesheet -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Wellcome to Hire.in</title>
    <!-- navbar warna transisi -->
    <style>
        .bg-dark {
            transition: 750ms ease;
            background: transparent !important;
        }

        .bg-dark.scolled {
            background: #eeeeee !important;
        }

    </style>
    <!-- navbar warna transisi -->
</head>

<body>
    <!-- navbar -->
    <section id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand landing-scroll" href="/">
                    <img src="{{ url('images/blue_logo.png') }}" class="img-fluid" alt="blue_logo" height="35px"
                        width="120px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link landing-scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing-scroll" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing-scroll" href="#layanan">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing-scroll" href="#help">Help</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Route::has('login'))
                                    @auth
                                        @if (auth()->user()->is_admin == 1)
                                            <li><a class="dropdown-item" href="{{ url('admin') }}">Home</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="{{ url('student') }}">Home</a></li>
                                        @endif
                                    @else
                                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar -->

    <!-- jumbotron -->
    <section id="jumbotron" class="shadow" style="background-color: #A9CEC2;">
        <div class="jumbotron " style="background-color: #A9CEC2;">
            <div class="container">
                <br><br>
                <h1 class="display-4" style="text-align: center;"> <b>#1 Training
                        for High School and Vocational School Student!</b> </h1>
                <p class="lead  " style="text-align: center;">We provide certification, course, and seminar
                    for increase your skill.</p>
                <hr class="my-4">
            </div>
            <center>
                <img src="https://blush.design/api/download?shareUri=9kIXz0gOI&s=0.1%7ED4A181-0.2%7EEAC7A8-0.3%7ED4A181&w=800&h=800&fm=png"
                    class="img-fluid" alt="student">
                <br><br>
                <a class="btn btn-info btn-lg shadow" href="/register" role="button">Join Us!</a>
            </center>
        </div>
    </section>
    <!-- jumbotron -->
    <!-- About Us -->
    <section id="aboutus" class="shadow bg-light" style="height: 1080px">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br>
            <h3 style="text-align: center;">About Us</h3>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="col">
                    <img src="{{ url('images/collab.svg') }}" class="img-fluid" alt="contact" height="325px"
                        width="500px">
                </div>
                <div class="col text-center">
                    <img src="{{ url('images/black_logo.png') }}" alt="">
                    <br> <br>
                    <p>Hire.in is a website that provide course, certification, seminar. all the features offered
                        are for people who love to learn new things ! </p>
                    <br>
                    <p>Our feature will help you to find best job that suites your capability. So lets take the course
                        and join big tech company !</p>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- About Us -->

    <!-- layanan -->
    <section id="layanan" class="" style="height: 1080px">
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-sm">
                    <h3 style="text-align: center;">We Provide</h3>
                    <br>
                    <hr>
                    <br><br>
                    <div class="card-deck">
                        <div class="card shadow" style="border-radius: 2rem">
                            <img src="https://blush.design/api/download?shareUri=Pyyk1-PZR&s=0.5%7EF7D3BB&w=800&h=800&fm=png"
                                alt="" class="card-img-top" height="250px" width="250px">
                            <div class="card-body">
                                <h3 style="text-align: center;">Online Course</h3>
                                <br>
                                <p></p>
                                <br><br>
                                <center>
                                    <a class="" href="">Learn More</a>
                                </center>
                            </div>
                        </div>
                        <div class="card shadow" style="border-radius: 2rem">
                            <img src="https://blush.design/api/download?shareUri=v9_UULwN4&w=800&h=800&fm=png" alt=""
                                class="card-img-top" height="250px" width="250px">
                            <div class="card-body">
                                <h3 style="text-align: center;">Certification</h3>
                                <br>
                                <p></p>
                                <br><br>
                                <center>
                                    <a class="" href="">Learn More</a>
                                </center>
                            </div>
                        </div>
                        <div class="card shadow" style="border-radius: 2rem">
                            <div class="card-top">
                                <img src="https://blush.design/api/download?shareUri=MTWir60Tr&s=0.3%7EC68E80-0.5%7EF7D3BB-0.6%7EF7D3BB&w=800&h=800&fm=png"
                                    alt="" class="card-img-top" height="250px" width="250px">
                            </div>
                            <div class="card-body">
                                <h3 style="text-align: center;">Seminar</h3>
                                <br>
                                <p></p>
                                <br><br>
                                <center>
                                    <a class="" href="">Learn More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- layanan -->
    <!-- our team -->
    <section id="team" class="shadow bg-light" style="height: 1080px">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br>
            <h3 style="text-align: center;">Our Team</h3>
            <hr>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="card-deck">
                        <div class="card">
                            <img src="{{ url('images/anto.png') }}" alt="" class="card-img-top img-fluid" height="190px"
                                width="250px">
                            <br>
                            <p style="text-align: center;"> <b>Dwi Kurnianto Utomo </b> </p>
                            <p style="text-align: center;">Project Lead</p>
                            <center>
                                <div class="card-body">
                                    <a class="fab fa-instagram" href="https://www.instagram.com/dwikurniantoo"></a>
                                    <a class="far fa-envelope" href="mailto: dwikurniantou@gmail.com"></a>
                                </div>
                            </center>
                        </div>
                        <div class="card">
                            <img src="{{ url('images/rizal.png') }}" alt="" class="card-img-top img-fluid"
                                height="190px" width="250px">
                            <br>
                            <p style="text-align: center;"> <b> Rizal Indera </b></p>
                            <p style="text-align: center;">Back-End Developer</p>
                            <center>
                                <div class="card-body">
                                    <a class="fab fa-instagram" href="https://www.instagram.com/rzlindr"></a>
                                    <a class="far fa-envelope" href="mailto: rizalindera@gmail.com"></a>
                                </div>
                            </center>
                        </div>
                        <div class="card">
                            <img src="{{ url('images/ikhsan.png') }}" alt="" class="card-img-top img-fluid"
                                height="190px" width="250px">
                            <br>
                            <p style="text-align: center;"> <b> Ikhsan Abdurachman </b></p>
                            <p style="text-align: center;">Front-End Developer</p>
                            <center>
                                <div class="card-body">
                                    <a class="fab fa-instagram" href="https://www.instagram.com/ihsbramn"></a>
                                    <a class="far fa-envelope" href="mailto: abdurahmanihsan25@gmail.com"></a>
                                </div>
                            </center>
                        </div>
                        <div class="card">
                            <img src="{{ url('images/naufal.png') }}" alt="" class="card-img-top img-fluid"
                                height="190px" width="250px">
                            <br>
                            <p style="text-align: center;"> <b>Naufal Alam Rasendriya </b> </p>
                            <p style="text-align: center;">Database Architecture</p>
                            <center>
                                <div class="card-body">
                                    <a class="fab fa-instagram" href="https://www.instagram.com/naufal70alam"></a>
                                    <a class="far fa-envelope" href="mailto: naufal70alam@gmail.com"></a>
                                </div>
                            </center>
                        </div>
                        <div class="card">
                            <img src="{{ url('images/firdy.png') }}" alt="" class="card-img-top img-fluid"
                                height="190px" width="250px">
                            <br>
                            <p style="text-align: center;"> <b>Firdy Bari Rayhadin </b> </p>
                            <p style="text-align: center;">UI/UX Designer</p>
                            <center>
                                <div class="card-body">
                                    <a class="fab fa-instagram" href="https://www.instagram.com/firdybari"></a>
                                    <a class="far fa-envelope" href="mailto: firdybari02@gmail.com"></a>
                                </div>
                            </center>
                        </div>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </section>
    <!-- our team -->
    <br><br>
    <!-- form  contact us -->
    <section id="help" style="height: 1080px">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br>
            <h3 style="text-align: center;">Get in touch</h3>
            <p style="text-align: center;">Contact us</p>
            <hr>
            <div class="row">
                <div class="col">
                    <img src="{{ url('images/teamwork.png') }}" class="img-fluid" alt="contact" height="325px"
                        width="500px">
                </div>
                <div class="col">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="example@email.com">
                        </div>
                        <div class="form-group">
                            <textarea type="textarea" class="form-control" rows="3"
                                placeholder="Your Messages"></textarea>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
    </section>
    <!-- form  contact us -->

    <!-- footer -->
    <section id="footer" style="background-color: #5f5c6d;">
        <div class="container">
            <footer class="page-footer font-small blue pt-4">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3 text-light">
                            <!-- Content -->
                            <h5>Hire.in</h5>
                            <p>Course, Certification, and Seminar</p>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3 text-light">
                            <!-- Links -->
                            <h5 class="text-uppercase text-light">Menu</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="text-light">Courses</a>
                                </li>
                                <li>
                                    <a href="#" class="text-light">Certification</a>
                                </li>
                                <li>
                                    <a href="#" class="text-light">Seminar</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->
                </div>
                <!-- Footer Links -->
                <br><br><br><br>
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright
                    <a href="/" class="text-light"> Hire.in</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </section>
    <!-- footer -->


    <section id="js">
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- navbar warna transisi js -->
        <script>
            $(window).scroll(function() {
                $('nav').toggleClass('scolled', $(this).scrollTop() > 950);
            });

        </script>
        <!-- navbar warna transisi js -->
        <script>
            // efek scroll
            $('.landing-scroll').on('click', function(e) {
                //ambil reff
                var href = $(this).attr('href');
                //tangkap elemen 
                var ref = $(href);
                $('html, body').animate({
                    scrollTop: ref.offset().top
                });
                e.preventDefault();
            });

        </script>
    </section>
</body>

</html>
