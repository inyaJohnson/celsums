@extends('layouts.template')
@section('content')
    <main class="main"><img class="img--bg" src="/template/assets/img/404.jpg" alt="img" />
        <section class="section error">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        <div class="align-container">
                            <div class="align-container__item">
                                <h1 class="error__title">404</h1>
                                <h3 class="error__subtitle">Page not found</h3>
                                <p class="error__text">Gray eel-catfish longnose whiptail catfish smalleye squaretail
                                    longnose whiptail catfish smalleye squaretail Lorem, ipsum dolor.</p>
                                @if (auth()->check())
                                    <a class="button button--primary" href="{{ route('home') }}">Home Page</a>
                                @else
                                    <a class="button button--primary" href="{{ route('welcome') }}">Welcome Page</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
