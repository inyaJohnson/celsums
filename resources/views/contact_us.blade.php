@extends('layouts.template')
@section('content')
    <div class="section-empty">
        <div class="container content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.8789030811517!2d-74.01334028517587!3d40.720682245022346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259f5c0810ba9%3A0xd3b7d8557176e603!2s388%20Greenwich%20Street%2C%20388%20Greenwich%20St%2C%20New%20York%2C%20NY%2010013%2C%20USA!5e0!3m2!1sen!2sng!4v1641366162185!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <hr class="space" />
            <div class="row proporzional-row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="text-color">Contact us now</h2>
                    <hr class="space s" />
                    @include('layouts.message')
                    <form action="{{ route('contact') }}" class="form-box" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <p>Your name</p>
                                <input id="name" name="name" placeholder="" type="text"
                                    class="form-control form-value @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email"
                                    class="form-control form-value @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <p>Subject</p>
                                <input id="subject" name="subject" placeholder="" type="text"
                                    class="form-control form-value @error('subject') is-invalid @enderror">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <p>Your message</p>
                                <textarea id="message" name="message" placeholder=""
                                    class="form-control form-value @error('message') is-invalid @enderror"
                                    required></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <hr class="space s" />
                                <button class="btn-sm btn circle-button" type="submit"><i class="fa fa-envelope-o"></i>Send
                                    messagge</button>
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
