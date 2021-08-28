<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400|Roboto:300,400,500,700,900|Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="/dashboard/dist/assets/css/plugins/plugins.bundle.css">
    <link rel="stylesheet" href="/dashboard/dist/assets/css/pages/session/session.v2.min.css">
    <link rel="stylesheet" href="/dashboard/dist/assets/css/main.bundle.min.css">
</head>

<body>
<div class="sign2">
    <div class="section-left">
    </div>
    <div class="form-holder signup-2 px-xxl" data-suppress-scroll-x="true">
        <form class="signup-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-headline text-center mt-md mb-xxxl">
                <h3 class="heading">Create an account get unlimited access</h3>
            </div>
            <div class="mb-xxl signin-right-image">
                <img src="/dashboard/dist/assets/images/illustrations/breaking_barriers.svg" width="200px" style="height: 100px">
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
                               autocomplete="last_name" autofocus>
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
                               autocomplete="email" autofocus>
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
                               autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                               required autocomplete="new-password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password"
                               autocomplete="new-password" autofocus>
                    </div>
                </div>
            </div>
            <div class="mb-md custom-control custom-checkbox checkbox-primary mb-xl">
                <input type="checkbox" class="custom-control-input" id="customCheck2" required>
                <label class="custom-control-label" for="customCheck2">I Agree with Terms And Conditions</label>
            </div>
            <button type="submit" class="btn btn-raised btn-raised-primary btn-block">Sign Up</button>
            <div class="border-bottom mt-xxl mb-lg"></div>
            <div class="text-center">
                <p>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Already have an account? Login.') }}
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
<script src="/dashboard/dist/assets/js/vendors.bundle.min.js"></script>
<script src="/dashboard/dist/assets/js/main.bundle.min.js"></script>
</body>