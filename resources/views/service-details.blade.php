@extends('layouts.app')

@section('content')
    <div class="service-details-page">
        <div class="services-hero d-flex align-items-end">
            <div class="links position-absolute mb-3">
                <h3 class="ps-5">Service Details Name</h3>
                <ul class="ps-5 d-flex align-items-center">
                    <li class="nav-link">
                        <a href="">Home</a>
                    </li>
                    <i class="fa-solid fa-angle-right"></i>
                    <li class="nav-link">
                        <a href="">Services</a>
                    </li>
                    <i class="fa-solid fa-angle-right"></i>
                    <li class="nav-link active">
                        <a href="">Service Details</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="service-details-content py-5">
                <div class="service-info d-flex flex-column justify-content-between flex-lg-row mb-5">

                    <div class="d-flex align-items-center py-2 px-3 bg-light rounded-1">
                        <i class="fa-regular fa-calendar-days me-2"></i>
                        <span>Created at : 31 May 2023</span>
                    </div>
                    <div class="d-flex align-items-center py-2 px-3 bg-light rounded-1">
                        <i class="fa-solid fa-star me-2"></i>
                        <span>4.5</span>
                    </div>
                    <div class="d-flex align-items-center py-2 px-3 bg-light rounded-1">
                        <i class="fa-solid fa-user me-2"></i>
                        <span>223</span>
                    </div>

                    <div class="d-flex align-items-center  py-2 px-3 bg-light rounded-1">
                        <i class="fa-solid fa-money-check-dollar me-2"></i>
                        <span class="text-muted fw-bold">$350</span>
                        <span class="price-before text-muted ms-2">$400</span>
                        <span class="bg-danger px-1 rounded-1 ms-2 text-white  fs-14 ">Save 30%</span>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6">
                        <img class="img-fluid rounded-2 shadow main-show" src="{{ asset('/imgs/services.jpeg') }}"
                            alt="">
                        <div class="service-imgs mt-2 overflow-scroll d-flex">
                            <img class="img-fluid rounded-2 shadow" src="{{ asset('/imgs/services.jpeg') }}">
                            <img class="img-fluid rounded-2 shadow" src="{{ asset('/imgs/img-1.jpeg') }}">
                            <img class="img-fluid rounded-2 shadow" src="{{ asset('/imgs/img-2.jpeg') }}">
                            <img class="img-fluid rounded-2 shadow" src="{{ asset('/imgs/img-3.jpeg') }}">
                            <img class="img-fluid rounded-2 shadow" src="{{ asset('/imgs/services.jpeg') }}">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div class="service-details-box">
                            <div class="bg-light">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page">Details</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="service-details-text px-2 py-4">
                                <h3>Service Details Name</h3>
                                <p class="service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste natus
                                    accusantium rerum
                                    quasi officiis tempora a totam repellendus facilis accusamus, nostrum, assumenda harum
                                    quam iusto! Voluptatem sapiente voluptates dolores debitis.
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda temporibus magnam
                                    ratione sapiente repudiandae non culpa deleniti nobis ipsum nostrum excepturi voluptates
                                </p>
                                <span class="text-main fw-bold see-more" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">See
                                    More</span>
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">

                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content px-3">
                                            {{-- <div class="container"> --}}

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">
                                                    Service Details Name
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body pt-3 text-center">
                                                <img class="img-fluid"src="{{ asset('/imgs/services.jpeg') }}">
                                                <p class="pt-3">Lorem ipsum dolor, sit amet
                                                    consectetur adipisicing elit. Libero, ipsam? Id autem vero quisquam
                                                    tempore,
                                                    pariatur iure sint? Sit voluptas fugiat necessitatibus nobis aperiam
                                                    rem?
                                                    Ipsa suscipit quo non fugit!
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Accusantium
                                                    cum
                                                    officia quae. A ratione odio veritatis minima magni repellat rerum
                                                    esse
                                                    repellendus delectus fugit! Deleniti facilis sequi ad aliquam
                                                    reiciendis?
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius id
                                                    excepturi
                                                    aspernatur nesciunt illo, modi labore? Fugiat, similique modi est
                                                    doloremque
                                                    sint corporis, veritatis itaque tempora, molestias eum cum
                                                    assumenda.
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                                    neque
                                                    repellendus, odio veritatis debitis voluptatum iure recusandae
                                                    ratione
                                                    maiores. Incidunt itaque illo quia quos assumenda, enim odit
                                                    obcaecati
                                                    cumque maxime!
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                                                    quos quo facere, numquam dicta autem suscipit fugit cum placeat
                                                    molestiae sed similique necessitatibus eaque, debitis inventore
                                                    rerum, aliquam ipsum laboriosam.
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
                                                    doloremque odit similique sapiente, consectetur vero quas beatae
                                                    dolore architecto! Adipisci beatae explicabo obcaecati quo mollitia
                                                    id pariatur, molestias officia eius.
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore
                                                    veritatis distinctio cupiditate aspernatur voluptas odit
                                                    consequatur, blanditiis consectetur, deleniti velit at accusantium
                                                    laudantium eligendi? Magni mollitia alias dolorem perspiciatis
                                                    animi.
                                                </p>
                                                <div class="modal-footer justify-content-center">
                                                    <div class="book-now btn info-btn rounded-0">
                                                        <a class="d-flex align-items-center justify-content-center"
                                                            href="/payment">
                                                            Book Now
                                                            <span class="material-symbols-outlined">
                                                                chevron_right
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="book-now btn info-btn rounded-0">
                            <a class="d-flex align-items-center justify-content-center" href="/payment">
                                Book Now
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="customer-reviews">
                <h4>Customer reviews</h4>
                <div class="reviews mt-5">
                    <div class="review border p-3 rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="user-info d-flex align-items-center">
                                <i class="fa-solid fs-2 fa-circle-user me-2"></i>
                                <h6 class="mb-0 fw-bold">User Name</h6>
                            </div>
                            <div class="time">
                                <span class="fs-14 text-muted">24 April 2023</span>
                            </div>
                        </div>
                        <hr>

                        <div class="review-text mt-2">
                            <div class="rate my-2">
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas quaerat voluptate, saepe
                                fugit culpa perferendis. Esse molestiae, minus, explicabo, adipisci maxime repellat
                                perspiciatis deserunt nulla eius doloribus ad distinctio!
                            </span>

                        </div>
                    </div>
                    <div class="review mt-3 border p-3 rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="user-info d-flex align-items-center">
                                <i class="fa-solid fs-2 fa-circle-user me-2"></i>
                                <h6 class="mb-0 fw-bold">User Name</h6>
                            </div>
                            <div class="time">
                                <span class="fs-14 text-muted">24 April 2023</span>
                            </div>
                        </div>
                        <hr>
                        <div class="review-text mt-2">
                            <div class="rate my-2">
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star active-rate"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas quaerat voluptate, saepe
                                fugit culpa perferendis. Esse molestiae, minus, explicabo, adipisci maxime repellat
                                perspiciatis deserunt nulla eius doloribus ad distinctio!
                            </span>

                        </div>
                    </div>
                </div>
                <div class="add-review btn info-btn rounded-0 mt-3">
                    <a class="d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                        data-bs-target="#comment">
                        Write a rewive
                         <span class="material-symbols-outlined">
                            chevron_right
                        </span> </a>

                </div>
                <div class="modal fade" id="comment" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">
                                    Review
                                </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pt-3">
                                <div class="add-rate my-2">
                                    <i class="fa-solid fa-star my-star" data-star='1'></i>
                                    <i class="fa-solid fa-star my-star" data-star='2'></i>
                                    <i class="fa-solid fa-star my-star" data-star='3'></i>
                                    <i class="fa-solid fa-star my-star" data-star='4'></i>
                                    <i class="fa-solid fa-star my-star" data-star='5'></i>
                                    {{-- <input type="number" readonly id="output"> --}}

                                </div>
                                <div class="mt-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Describe your experience (optional)"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <div class="book-now btn info-btn rounded-0">
                                    <a class="d-flex align-items-center justify-content-center" href="">
                                        Post
                                        <span class="material-symbols-outlined">
                                            chevron_right
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="related mb-5">
                <h4>Related Services</h4>
                <div class="all-related  mt-5">
                    <div class="row gy-5 justify-content-center">
                        <div class="col-xl-4 col-md-6">
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
                        <div class="col-xl-4 col-md-6">
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
                        <div class="col-xl-4 col-md-6">
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

                    </div>

                </div>
            </div>
        @endsection
