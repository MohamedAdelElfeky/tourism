@extends('layouts.app')
@section('content')
    <!-- Start of Hero Section -->
    <div class="hero">
        <div class="bg-video h-auto">
            <video src="{{ asset('/video/video.mp4') }}" autoplay muted loop>
            </video>
            <div class="overlay"></div>

        </div>
        <div class="content">
            <div class="container">
                <div class="hero-text">
                    <h1>Love where you're going</h1>
                    <p>Book incredible things to do around the Middle East.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Hero Section -->


    <!-- Start of dream Section -->
    <section class="dream">
        <div class="container">
            <div class="d-flex align-items-center justify-content-lg-between flex-column flex-lg-row">
                <h3>Want to plan your dream vacation now?</h3>

                <a href="">
                    <button class="btn transparent-btn email-contact mt-2 mt-lg-0">
                        <div class="d-flex justify-content-between align-items-center">
                            CONTACT US
                            <i class="fa-solid fa-envelope mx-2"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- End of dream Section -->


    <!-- Start of About Section -->
    {{-- <section class="about">
        <div class="container">

            <div class="sec-content">
                <div class="card p-5 shadow border-0">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded shadow" src="{{ asset('imgs/about1.jpeg') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-header">
                                <h3>About Us</h3>
                                <div class="sec-line"><span></span></div>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="about-text mt-5">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate similique omnis
                                    corporis neque eius ex velit minus, voluptas voluptates, reprehenderit autem modi
                                    tempora quod deserunt eveniet assumenda. Doloribus, repellendus dolor!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- End of About Section -->

    <!-- Start of Services Section -->
    <section class="services">
        <div class="container">
            <div class="sec-header">
                <span>Why choose us ?</span>
                <h3 class="mt-1">Our Services</h3>
                <div class="sec-line"><span></span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
            </div>
            <div class="sec-content">
                {{-- <div class="row g-5">
                    <div class="col-md-6">
                        <a href="">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <h4><span class="text-main">AZUR</span> HOTELS</h6>
                                    <p class="mt-3 mb-4">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic minus dolorem quo dignissimos. Animi asperiores
                                        corporis accusamus, placeat expedita eligendi,
                                        fugiat dolorem tempora, quasi officia minus architecto
                                        reprehenderit porro omnis.
                                    </p>
                                    <img class="img-fluid shadow rounded" src="{{ asset('/imgs/hotels.jpeg') }}"
                                        alt="">
                                    <hr>
                                    <div
                                        class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined text-muted time">
                                                schedule
                                            </span>
                                            <span class="ms-1 text-muted">3 Hours</span>
                                        </div>
                                        <a href="" class="btn info-btn mt-2 mt-lg-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request info
                                                <span class="material-symbols-outlined">
                                                    chevron_right
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <h4><span class="text-main">NILE</span> CRUISES</h6>
                                    <p class="mt-3 mb-4">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic minus dolorem quo dignissimos. Animi asperiores
                                        corporis accusamus, placeat expedita eligendi,
                                        fugiat dolorem tempora, quasi officia minus architecto
                                        reprehenderit porro omnis.
                                    </p>
                                    <img class="img-fluid shadow rounded" src="{{ asset('/imgs/nile.jpeg') }}"
                                        alt="">
                                    <hr>
                                    <div
                                        class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined text-muted time">
                                                schedule
                                            </span>
                                            <span class="ms-1 text-muted">3 Hours</span>
                                        </div>
                                        <a href="" class="btn info-btn mt-2 mt-lg-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request info
                                                <span class="material-symbols-outlined">
                                                    chevron_right
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <h4><span class="text-main">EXCURSIONS</span> & TOURS</h6>
                                    <p class="mt-3 mb-4">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic minus dolorem quo dignissimos. Animi asperiores
                                        corporis accusamus, placeat expedita eligendi,
                                        fugiat dolorem tempora, quasi officia minus architecto
                                        reprehenderit porro omnis.
                                    </p>
                                    <img class="img-fluid shadow rounded" src="{{ asset('/imgs/tour.jpeg') }}"
                                        alt="">
                                    <hr>
                                    <div
                                        class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined text-muted time">
                                                schedule
                                            </span>
                                            <span class="ms-1 text-muted">3 Hours</span>
                                        </div>
                                        <a href="" class="btn info-btn mt-2 mt-lg-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request info
                                                <span class="material-symbols-outlined">
                                                    chevron_right
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <h4><span class="text-main">EXCURSIONS</span> & TOURS</h6>
                                    <p class="mt-3 mb-4">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic minus dolorem quo dignissimos. Animi asperiores
                                        corporis accusamus, placeat expedita eligendi,
                                        fugiat dolorem tempora, quasi officia minus architecto
                                        reprehenderit porro omnis.
                                    </p>
                                    <img class="img-fluid shadow rounded" src="{{ asset('/imgs/tour.jpeg') }}"
                                        alt="">
                                    <hr>
                                    <div
                                        class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined text-muted time">
                                                schedule
                                            </span>
                                            <span class="ms-1 text-muted">3 Hours</span>
                                        </div>
                                        <a href="" class="btn info-btn mt-2 mt-lg-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request info
                                                <span class="material-symbols-outlined">
                                                    chevron_right
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="row g-5">
                    <div class="col-lg-6" box-type="service1">
                        <a href="{{ url('/service-details') }}">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <div class="service-price shadow rounded-start">$300</div>
                                <h5><span class="text-main">AZUR</span> HOTELS</h5>
                                <p class="mt-3 mb-4">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Hic minus dolorem quo dignissimos. Animi asperiores
                                    corporis accusamus, placeat expedita eligendi,
                                    fugiat dolorem tempora, quasi officia minus architecto
                                    reprehenderit porro omnis.
                                </p>
                                <img class="img-fluid shadow rounded" src="{{ asset('/imgs/hotels.jpeg') }}" alt="">
                                <hr>
                                <div
                                    class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                    <div class="d-flex align-items-center">
                                        <span class="material-symbols-outlined text-muted time">
                                            schedule
                                        </span>
                                        <span class="ms-1 text-muted">3 Hours</span>
                                    </div>
                                    <a href="" class="btn info-btn mt-2 mt-lg-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Request info
                                            <span class="material-symbols-outlined">
                                                chevron_right
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </a>
                    </div>
                    <div class="col-lg-6" box-type="service1">
                        <a href="{{ url('/service-details') }}">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <div class="service-price shadow rounded-start">$300</div>
                                <h5><span class="text-main">NILE</span> CRUISES</h5>
                                <p class="mt-3 mb-4">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Hic minus dolorem quo dignissimos. Animi asperiores
                                    corporis accusamus, placeat expedita eligendi,
                                    fugiat dolorem tempora, quasi officia minus architecto
                                    reprehenderit porro omnis.
                                </p>
                                <img class="img-fluid shadow rounded" src="{{ asset('/imgs/nile.jpeg') }}" alt="">
                                <hr>
                                <div
                                    class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                    <div class="d-flex align-items-center">
                                        <span class="material-symbols-outlined text-muted time">
                                            schedule
                                        </span>
                                        <span class="ms-1 text-muted">3 Hours</span>
                                    </div>
                                    <a href="" class="btn info-btn mt-2 mt-lg-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Request info
                                            <span class="material-symbols-outlined">
                                                chevron_right
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6" box-type="service3">
                        <a href="{{ url('/service-details') }}">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <div class="service-price shadow rounded-start">$200</div>
                                <h5><span class="text-main">EXCURSIONS</span> & TOURS</h5>
                                <p class="mt-3 mb-4">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Hic minus dolorem quo dignissimos. Animi asperiores
                                    corporis accusamus, placeat expedita eligendi,
                                    fugiat dolorem tempora, quasi officia minus architecto
                                    reprehenderit porro omnis.
                                </p>
                                <img class="img-fluid shadow rounded" src="{{ asset('/imgs/tour.jpeg') }}" alt="">
                                <hr>
                                <div
                                    class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                    <div class="d-flex align-items-center">
                                        <span class="material-symbols-outlined text-muted time">
                                            schedule
                                        </span>
                                        <span class="ms-1 text-muted">3 Hours</span>
                                    </div>
                                    <a href="" class="btn info-btn mt-2 mt-lg-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Request info
                                            <span class="material-symbols-outlined">
                                                chevron_right
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6" box-type="service2">
                        <a href="{{ url('/service-details') }}">
                            <div class="card px-5 py-4 text-center border-0 shadow">
                                <div class="service-price shadow rounded-start">$230</div>
                                <h5><span class="text-main">EXCURSIONS</span> & TOURS</h5>
                                <p class="mt-3 mb-4">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Hic minus dolorem quo dignissimos. Animi asperiores
                                    corporis accusamus, placeat expedita eligendi,
                                    fugiat dolorem tempora, quasi officia minus architecto
                                    reprehenderit porro omnis.
                                </p>
                                <img class="img-fluid shadow rounded" src="{{ asset('/imgs/dolphin.jpeg') }}"
                                    alt="">
                                <hr>
                                <div
                                    class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                    <div class="d-flex align-items-center">
                                        <span class="material-symbols-outlined text-muted time">
                                            schedule
                                        </span>
                                        <span class="ms-1 text-muted">3 Hours</span>
                                    </div>
                                    <a href="" class="btn info-btn mt-2 mt-lg-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Request info
                                            <span class="material-symbols-outlined">
                                                chevron_right
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="text-center mt-5">
                <a href="">
                    <button class="btn info-btn">
                        <div class="d-flex justify-content-between align-items-center">
                            SEE ALL SERVICES
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                    </button>
                </a>
            </div>
            </div>
        </div>
    </section>
    <!-- End of Services Section -->


    <!-- Start of offers Section -->
    <section class="offers">
        <div class="container">
            <div class="sec-header-dark">
                <h3 class="mt-1">Special Offers & Discounts</h3>
                <div class="sec-line"><span></span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
            </div>
            <div class="sec-content">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top" src="{{ asset('/imgs/buggy.jpeg') }}" alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="">

                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top" src="{{ asset('/imgs/boat.jpeg') }}" alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top" src="{{ asset('/imgs/diving.jpeg') }}"
                                    alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top" src="{{ asset('/imgs/dolphin.jpeg') }}"
                                    alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top"s src="{{ asset('/imgs/visit.jpeg') }}"
                                    alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="card border-0 shadow">
                                <img class="img-fluid rounded-top" src="{{ asset('/imgs/boat-trip.jpeg') }}"
                                    alt="">
                                <div class="info p-3">
                                    <h5>Morning Quad Bike Desert Safari</h3>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="{{ asset('/imgs/egypt.png') }}" alt="">
                                            <span class="fw-light ms-2 text-small ">Egypt - Dahab</span>
                                        </div>
                                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Reiciendis,
                                            sint quos odio adipisci at aliquam, incidunt harum repellat tenetur expedita
                                            provident vel hic fugit facere tempora mollitia voluptate repudiandae ipsam!
                                        </p>
                                        <hr>
                                        <div
                                            class="more-info d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                                            <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined text-muted time">
                                                    schedule
                                                </span>
                                                <span class="ms-1 text-muted">3 Hours</span>
                                            </div>
                                            <a href="" class="btn info-btn mt-2 mt-lg-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Request info
                                                    <span class="material-symbols-outlined">
                                                        chevron_right
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of offers Section -->


    <!-- Start of dream Section -->
    <section class="dream">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Want to plan your dream vacation now?</h3>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <button class="btn transparent-btn whats-app">
                            <div class="d-flex justify-content-between align-items-center">
                                CONTACT US
                                <i class="fa-brands fa-whatsapp mx-2"></i>

                        </button>
                    </a>


                </div>
            </div>
        </div>
    </section>
    <!-- End of dream Section -->


    <!-- Start of WhyUs Section -->
    <section class="why-us">
        <div class="container">
            <div class="sec-header-dark">
                <h3 class="mt-1">Our WHY CHOOSE Tourism TRAVEL?</h3>
                <div class="sec-line"><span></span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
            </div>
            <div class="sec-content">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="why-us-item">
                            <div class="d-flex align-items-center">
                                <span class="material-symbols-outlined">
                                    airline_stops
                                </span>
                                <h4 class="mb-3">Best Travel Agent</h3>
                            </div>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur minima hic, corporis
                                perspiciatis voluptatem dolore totam fugiat quidem fugit, nulla sequi facilis dicta
                                reiciendis mollitia velit vel architecto odit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-us-item">
                            <div class="d-flex align-items-center">
                                <span class="material-symbols-outlined">
                                    airplane_ticket
                                </span>
                                <h4 class="mb-3">Trust & Safety</h3>
                            </div>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur minima hic, corporis
                                perspiciatis voluptatem dolore totam fugiat quidem fugit, nulla sequi facilis dicta
                                reiciendis mollitia velit vel architecto odit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-us-item">
                            <div class="d-flex align-items-center">
                                <span class="material-symbols-outlined">
                                    sell
                                </span>
                                <h4 class="mb-3">Best Price Guarantee</h3>
                            </div>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur minima hic, corporis
                                perspiciatis voluptatem dolore totam fugiat quidem fugit, nulla sequi facilis dicta
                                reiciendis mollitia velit vel architecto odit!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of WhyUs Section -->


    <!-- Start of Gallery Section -->
    <section class="gallery">
        <div class="container">
            <div class="sec-header">
                <span>Discover More</span>
                <h3 class="mt-1">Our Gallery</h3>
                <div class="sec-line"><span></span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
            </div>
            <div class="sec-content">
                <div class="row g-3">
                    <div class="col-md-8 d-flex flex-column">
                        <div class="img-box">
                            <img class="img-fluid shadow rounded" src="{{ asset('imgs/img1.jpeg') }}" alt="">
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img class="img-fluid shadow rounded" src="{{ asset('imgs/img2.jpeg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img class="img-fluid shadow rounded" src="{{ asset('imgs/img4.jpeg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="img-box">
                            <img class="img-fluid shadow rounded h-100" src="{{ asset('imgs/img3.jpeg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Gallery Section -->


    <!-- Start of Testimonials Section -->
    <section class="testimonials">
        <svg class="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2E2E2E" fill-opacity="1"
                d="M0,256L24,261.3C48,267,96,277,144,240C192,203,240,117,288,90.7C336,64,384,96,432,128C480,160,528,192,576,197.3C624,203,672,181,720,154.7C768,128,816,96,864,117.3C912,139,960,213,1008,229.3C1056,245,1104,203,1152,170.7C1200,139,1248,117,1296,128C1344,139,1392,181,1416,202.7L1440,224L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
            </path>
        </svg>
        <svg class="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fbe2dd" fill-opacity="1"
                d="M0,256L26.7,245.3C53.3,235,107,213,160,213.3C213.3,213,267,235,320,208C373.3,181,427,107,480,64C533.3,21,587,11,640,16C693.3,21,747,43,800,96C853.3,149,907,235,960,245.3C1013.3,256,1067,192,1120,192C1173.3,192,1227,256,1280,261.3C1333.3,267,1387,213,1413,186.7L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg>
        <div class="testimonials-content">
            <div class="container">
                <div class="sec-header">
                    <h3 class="mt-1">What Our Guests Say</h3>
                    <div class="sec-line"><span></span></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
                </div>
                <div class="sec-content">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img">
                                    <img class="img-fluid rounded-circle shadow" src="{{ asset('imgs/person1.jpeg') }}"
                                        alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero pariatur velit
                                        veniam sed dicta? Veritatis?</p>
                                    <div class="client-info">
                                        <h5> John Doe </h5>
                                        <p>USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img">
                                    <img class="img-fluid rounded-circle shadow" src="{{ asset('imgs/person2.jpeg') }}"
                                        alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero pariatur velit
                                        veniam sed dicta? Veritatis?</p>
                                    <div class="client-info">
                                        <h5> John Doe </h5>
                                        <p>USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img">
                                    <img class="img-fluid rounded-circle shadow" src="{{ asset('imgs/person3.jpeg') }}"
                                        alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero pariatur velit
                                        veniam sed dicta? Veritatis?</p>
                                    <div class="client-info">
                                        <h5> John Doe </h5>
                                        <p>USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img">
                                    <img class="img-fluid rounded-circle shadow" src="{{ asset('imgs/person4.jpeg') }}"
                                        alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero pariatur velit
                                        veniam sed dicta? Veritatis?</p>
                                    <div class="client-info">
                                        <h5> John Doe </h5>
                                        <p>USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#F3F4F5" fill-opacity="1"
                    d="M0,256L26.7,245.3C53.3,235,107,213,160,213.3C213.3,213,267,235,320,208C373.3,181,427,107,480,64C533.3,21,587,11,640,16C693.3,21,747,43,800,96C853.3,149,907,235,960,245.3C1013.3,256,1067,192,1120,192C1173.3,192,1227,256,1280,261.3C1333.3,267,1387,213,1413,186.7L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                </path>
            </svg>
        </div>
    </section>
    <!-- End of Testimonials Section -->



    <!-- Start of contact Section -->
    <section class="contact">
        <div class="container">
            <div class="sec-header">
                <span>Feel Free</span>
                <h3 class="mt-1">Contact Us</h3>
                <div class="sec-line"><span></span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
            </div>
            <div class="sec-content">
                <div class="container">

                    <div class="row justify-content-center">
                        <div
                            class="col-lg-6 col bg-white p-4 rounded shadow d-flex justify-content-center align-items-center">
                            <div class="form-box w-100">
                                <form action="">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name"
                                                aria-label="name">
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control " placeholder="E-mail"
                                                aria-label="email">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <input type="tel" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="mt-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button type="submit" class="btn info-btn">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Send Message
                                                <span class="material-symbols-outlined">
                                                    chevron_right
                                                </span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact Section -->
@endsection
