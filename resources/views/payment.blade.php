@extends('layouts.app')

@section('content')
    <div class="payment-page">
        <div class="payment-hero d-flex align-items-end">
            <div class="links position-absolute mb-3">
                <h3 class="ps-5">Book Now</h3>
                <ul class="ps-5 d-flex align-items-center">
                    <li class="nav-link">
                        <a href="">Home</a>
                    </li>
                    <i class="fa-solid fa-angle-right"></i>
                    <li class="nav-link ">
                        <a href="">Services</a>
                    </li>
                    <i class="fa-solid fa-angle-right"></i>

                    <li class="nav-link ">
                        <a href="">Services Details</a>
                    </li>
                    <i class="fa-solid fa-angle-right"></i>

                    <li class="nav-link active">
                        <a href="">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="sec-header mb-5">
                    <span>Book Now</span>
                    <h3 class="mt-1">Book This Services</h3>
                    <div class="sec-line"><span></span></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, inventore.</p>
                </div>
                <div class="col-lg-8 col bg-white p-4 rounded shadow d-flex justify-content-center align-items-center">
                    <div class="form-box w-100">
                        <form action="">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control " placeholder="E-mail" aria-label="email">
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="tel" class="form-control" placeholder="Phone">
                            </div>
                            <div class="mt-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Nationality</option>
                                    <option value="">Egyptian</option>
                                    <option value="">Australian</option>
                                    <option value="">Canadian</option>
                                    <option value="">American</option>
                                    <option value="">Chinese</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <input type="number" class="form-control" placeholder="Card Number">
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="CCV" aria-label="name">
                                </div>
                                <div class="col">
                                    <input type="text" onfocus="(this.type='month')" class="form-control " placeholder="Expire Date">
                                </div>
                            </div>
                            <div class="mt-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Notes"></textarea>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn info-btn">
                                    <div class="d-flex justify-content-between align-items-center">
                                        Pay Now
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
@endsection
