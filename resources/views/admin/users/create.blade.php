@extends('layouts.auth')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/css/plugins/plugins.bundle.css">
    <link rel="stylesheet" href="/dashboard/dist/assets/css/pages/session/session.v2.min.css">
@endsection
@section('custom_content')
    <div class="sign2">
        <div class="section-left">
        </div>
        <div class="form-holder signup-2 px-xxl" data-suppress-scroll-x="true">
            <form class="signup-form" method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="form-headline text-center mt-md mb-xxxl">
                    <h3 class="heading">Create a user get unlimited access</h3>
                </div>
                <div class="mb-xxl signin-right-image">
                    <a href="{{ route('home') }}">
                        <img src="/dashboard/dist/assets/images/illustrations/breaking_barriers.svg" width="200px"
                            style="height: 100px">
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-md">
                        <div class="input-group  input-light mb-3">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required
                                autocomplete="first_name" autofocus>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-sm">
                        <div class="input-group  input-light mb-3">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required
                                autocomplete="last_name">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-sm">
                        <div class="input-group  input-light mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email Address" name="email" value="{{ old('email') }}" required
                                autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-sm">
                        <div class="input-group  input-light mb-3">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required
                                autocomplete="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-sm">
                        <div class="input-group  input-light mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-sm">
                        <div class="input-group  input-light mb-3">
                            <input type="password" class="form-control" name="password_confirmation" required
                                placeholder="Confirm Password" autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-raised btn-raised-primary btn-block">Create</button>
            </form>
        </div>
    </div>
@endsection
