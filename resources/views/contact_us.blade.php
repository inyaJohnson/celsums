@extends('layouts.template')
@section('content')
    <div class="section-empty">
        <div class="container content">
            <div class="google-map row-17" data-marker-pos-top="25" data-coords="40.741895,-73.989308" data-skin=""
                data-marker="http://templates.framework-y.com/signflow/images/marker-map.png"></div>
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
                                    Sturlly Technologies
                                    PO Box 16122, Collins Street West,

                                </li>
                                <li>
                                    <i class="fa-li fa fa-home"></i>
                                    Studio Massimo
                                    PO Box 16120, Street
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-skype"></i> Company.name</li>
                                <li><i class="fa-li fa fa-headphones"></i> (123) 0 123 455669</li>
                                <li><i class="fa-li fa fa-fax"></i> (123) 0 123 455600</li>
                                <li><i class="fa-li fa fa-envelope-o"></i> info@company.com</li>
                                <li><i class="fa-li fa fa-envelope-o"></i> sales@company.com</li>
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
