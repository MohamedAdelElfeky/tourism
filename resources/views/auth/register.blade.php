@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @extends('layouts.app')

@section('content')
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card text-center py-5 px-3 mt-5 rounded-1">
                        <div class="card-head">
                            <h3 class="mb-1">Create Your account</h3>
                            <p>Sign up now and unlock exclusive access!</p>
                        </div>
                        <div class="card-body mt-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3 text-start w-75 mx-auto">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="First Name">
                                </div>
                                <div class="mb-3 text-start w-75 mx-auto">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Last Name">
                                </div>
                                <div class="mb-3 text-start w-75 mx-auto">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Country">
                                </div>
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
                                    <button type="submit" class="btn main-btn text-uppercase form-btn">Register</button>
                                </div>
                            </form>
                            <p class="text-center">Already have an account? <a href="" class="ms-1 main-color"> Sign
                                    in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
