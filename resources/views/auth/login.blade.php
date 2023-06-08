@extends('layouts.app')

@section('content')
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card text-center py-5 px-3 mt-5 rounded-1">
                        <div class="card-head">
                            <h3 class="mb-1">Welcome Back !</h3>
                            <p>Sign in now and enjoy exclusive features!</p>
                        </div>
                        <div class="card-body mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3 text-start w-75 mx-auto">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Email">
                                </div>
                                <div class="mb-3 text-start w-75 mx-auto">
                                    <input type="password" id="inputPassword5" class="form-control"
                                        aria-labelledby="passwordHelpBlock" placeholder="Password">
                                    <div id="passwordHelpBlock" class="form-text pass-hint">
                                        Your password must be 8-20 characters long
                                    </div>
                                </div>
                                <div class="submit mt-4 mb-3">
                                    <button type="submit"
                                        class="btn main-btn text-uppercase form-btn">Login</button>
                                </div>
                            </form>
                            <p class="text-center">Don't have an account? <a href="" class="ms-1 main-color"> Sign
                                    up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
