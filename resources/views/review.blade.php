@extends('layouts.template')
@section('content')
    <div class="section-empty">
        <div class="container content">

            <div class="row proporzional-row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="text-color">Drop Your Review</h2>
                    <hr class="space s" />
                    @include('layouts.message')
                    <form action="{{ route('reviews.store') }}" method="POST" class="form-box">
                        @csrf
                        <div class="row">
                            <div class="mew_form clearfix">
                                <div class="col-sm-12" id="result"></div>
                                <div class="col-md-6">
                                    <p>Name</p>
                                    <input class="form-control  form-value @error('name') is-invalid @enderror" id="name"
                                        name="name" required="required">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <p>Email</p>
                                    <input class="form-control  form-value @error('email') is-invalid @enderror" id="email"
                                        name="email" required="required">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <hr class="space xs" />
                                <div class="col-md-12">
                                    <p>Comment</p>
                                    <textarea class="form-control  form-value @error('message') is-invalid @enderror"
                                        id="message" name="message" required="required"></textarea>

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <hr class="space m" />
                                <div class="col-md-12">
                                    <button class="btn-sm btn circle-button" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 boxed-inverse shadow-1 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li>
                                    <i class="fa-li fa fa-home"></i>
                                    388 Greenwich Street Tower Building,
                                    New York, NY 10013.

                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-phone"></i> +1(332) 213-0247</li>
                                <li><i class="fa-li fa fa-envelope-o"></i>support@citigrouptrade.com</li>
                                <li><i class="fa-li fa fa-envelope-o"></i>info@citigrouptrade.com</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip" data-placement="top"
                            title="Facebook">
                            <i class="fa fa-facebook text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top"
                            title="Twitter">
                            <i class="fa fa-twitter text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top"
                            title="Google+">
                            <i class="fa fa-google-plus text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin" data-toggle="tooltip" data-placement="top"
                            title="LinkedIn">
                            <i class="fa fa-linkedin text-s circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
