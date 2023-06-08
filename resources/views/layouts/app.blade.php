<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Main Style -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- Start of header Section -->
        <header>
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center py-2">
                    <div class="info d-flex align-items-center">
                        <div class="phone d-flex align-items-center">
                            <span class="material-symbols-outlined me-1">
                                call
                            </span>
                            <a href="tel:+20100000000"><span class="fw-light  text-small"> +201000000000</span></a>
                        </div>
                        <div class="location align-items-center d-flex">
                            <span class="material-symbols-outlined me-1">
                                location_on
                            </span>
                            <a href=""><span class="fw-light text-small">Giza , Egypt</span></a>
                        </div>
                        <div class="email align-items-center d-flex">
                            <span class="material-symbols-outlined me-1">
                                email
                            </span>
                            <a href=""> <span class="fw-light text-small"> info@example.com</span></a>
                        </div>
                        <div class="open-at align-items-center d-flex">
                            <span class="material-symbols-outlined me-1">
                                schedule
                            </span>
                            <a href=""><span class="fw-light text-small">Sat - Thu 9.00 - 18.00</span></a>
                        </div>
                    </div>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header Section -->

        <!-- Start of navbar Section -->

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Tourism
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        <div class="dot"><span></span></div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <div class="dot"><span></span></div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Departments</a>
                        </li>
                        <div class="dot"><span></span></div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Services</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of navbar Section -->



        <main>
            @yield('content')
        </main>
        <!-- Start of footer Section -->

        <footer>
            <section class="footer">
                <div class="container">
                    <div class="footer-content">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <h2 class="fw-bold italic">Tourism</h2>
                                <span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Repellendus, minus facere fugiat iste reprehenderit labore!</span>
                            </div>
                            <div class="col-md-4">
                                <h6>Quick Links</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="d-flex align align-items-center">
                                            <span class="material-symbols-outlined me-1">
                                                chevron_right
                                            </span>
                                            <a href="">Home</a>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="d-flex align align-items-center">
                                            <span class="material-symbols-outlined me-1">
                                                chevron_right
                                            </span>
                                            <a href="">About</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align align-items-center">
                                            <span class="material-symbols-outlined me-1">
                                                chevron_right
                                            </span>
                                            <a href="">Departments</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align align-items-center">
                                            <span class="material-symbols-outlined me-1">
                                                chevron_right
                                            </span>
                                            <a href="">Services</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h6>CONTACT INFO</h6>
                                <div class="info d-flex flex-column ">
                                    <div class="phone d-flex align-items-center">
                                        <span class="material-symbols-outlined me-2">
                                            call
                                        </span>
                                        <a href="tel:+20100000000"><span class="fw-light  text-small">
                                                +201000000000</span></a>
                                    </div>
                                    <div class="location align-items-center d-flex mt-1">
                                        <span class="material-symbols-outlined me-2">
                                            location_on
                                        </span>
                                        <a href=""><span class="fw-light text-small">Giza , Egypt</span></a>
                                    </div>
                                    <div class="email align-items-center d-flex mt-1">
                                        <span class="material-symbols-outlined me-2">
                                            email
                                        </span>
                                        <a href=""> <span class="fw-light text-small">
                                                info@example.com</span></a>
                                    </div>
                                    <div class="open-at align-items-center d-flex mt-1">
                                        <span class="material-symbols-outlined me-2">
                                            schedule
                                        </span>
                                        <a href=""><span class="fw-light text-small">Sat - Thu 9.00 -
                                                18.00</span></a>
                                    </div>
                                    <div class="open-at align-items-center d-flex mt-1">
                                        <span class="material-symbols-outlined me-2">
                                            language
                                            </span>
                                        <a href=""><span class="fw-light text-small">www.tourism.com</span></a>
                                    </div>

                                </div>
                                <div class="social mt-3">
                                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                 </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </section>

        </footer>
        <!-- Start of footer Section -->

        <div class="footer-bottom py-5 text-center">
            <div class="container">
                    <div class="footer-copyrights">
                        ©2020 All Rights Reserved by <a href="">Tourism</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>