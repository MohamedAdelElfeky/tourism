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
            <div class="row g-5 justify-content-center py-5">

                <div class="col-lg-6">
                    <h6 class="mb-3 fw-bold">Payment Method</h6>
                    <div class="form-box bg-white p-4 rounded shadow">
                        <div>
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                                value="" aria-label="...">
                            <img class="img-fluid ms-3" style="width: 100px" src="{{ asset('/imgs/paypal.png') }}">
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                                    value="" aria-label="...">
                                <span class="ms-3">Credit or debit card</span>
                            </div>
                            <div>
                                <img class="img-fluid" style="width: 40px" src="{{ asset('/imgs/visa.png') }}">
                                <img class="img-fluid" style="width: 50px" src="{{ asset('/imgs/master.png') }}">

                            </div>
                        </div>
                        <form action="">
                            <div class="bg-light p-3 py-4 mt-3 rounded">
                                <div>
                                    <input type="number" class="form-control" placeholder="Card Number">
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="CVC" aria-label="name">
                                    </div>
                                    <div class="col">
                                        <input type="text" onfocus="(this.type='month')" class="form-control "
                                            placeholder="Expire Date">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" placeholder="Cardholder name">
                                </div>
                            </div>

                            <div class="mt-3 px-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Notes"></textarea>
                            </div>

                        </form>

                    </div>

                </div>
                <div class="col-lg-6">
                    <h6 class="mb-3 fw-bold">Summary</h6>
                    <div class="form-box bg-white p-4 rounded shadow">
                        <div class="payment-info mt-3 px-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted fs-14">Subtotal</span>
                                <span class="text-muted fw-bold">$200.00</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted fs-14"> VAT (20%)</span>
                                <span class="text-muted fw-bold">$4.00</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center px-3 mt-2">
                            <span class=" fs-14">Total</span>
                            <span class="fw-bold">$204.00</span>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn info-btn w-75">
                                <div class="d-flex justify-content-center align-items-center">
                                    Pay Now
                                    <span class="material-symbols-outlined">
                                        chevron_right
                                    </span>
                                </div>
                            </button>
                        </div>
                        <div class="secure mt-2 text-muted d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-lock fs-14 me-2"></i>
                            <span class="fs-14">Payments are secure and encrypted</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
@endsection
