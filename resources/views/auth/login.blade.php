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
<div class="section-left">
    <div class="section-left-content">
        <h1 class="text-36 font-weight-light text-white">Don't have an account?</h1>
        <p class="mb-24 text-small">Stop wasting time and money. It's free!</p>
        <a href="{{ route('register') }}" type="button" class="btn btn-raised btn-raised-warning">Sign Up</a>
    </div>
</div>
<div class="form-holder signin-2 px-xxl">
    <div data-perfect-scrollbar='' data-suppress-scroll-x='true'>
        <div class="d-flex flex-column align-items-center mt-lg mb-xxl">
            <img class="card-img-top signup" src="/dashboard/dist/assets/images/arctic-admin.svg" style="height: 100px"
                 alt="Card image cap">
            <span class="text-primary text-18 d-block font-weight-bold"> Arctic Admin </span>
            <span class="mb-md text-muted mb-lg d-block">Sign in to your account</span>
        </div>
        <form class="" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group with-icon input-light mb-xl">
                <div class="input-group-prepend">
                    <i class="input-group-text material-icons">perm_identity</i>
                </div>
                <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email Address" value="{{ old('email') }}" aria-label="email" required
                       autocomplete="email" autofocus aria-describedby="basic-addon1">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group with-icon input-light mb-xl">
                <div class="input-group-prepend">
                    <i class="input-group-text material-icons">lock</i>
                </div>
                <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="With icon"
                       aria-label="Username" aria-describedby="basic-addon1" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="mb-md custom-control custom-checkbox checkbox-primary mb-xl">
                <input type="checkbox"  class="custom-control-input" id="customCheck2" name="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customCheck2">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-raised btn-raised-primary btn-block">Sign In</button>
            <div class="border-bottom mt-xxl mb-lg"></div>
            <div class="text-center">
                <p>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </p>
            </div>
        </form>
    </div>
</div>
</body>
<script src="/dashboard/dist/assets/js/vendors.bundle.min.js"></script>
<script src="/dashboard/dist/assets/js/main.bundle.min.js"></script>