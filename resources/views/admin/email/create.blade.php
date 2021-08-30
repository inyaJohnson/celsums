@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <h3 class="subheader-title">Spacing</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">System Utilities</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Spacing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Send a mail to {{$user->name()}}</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="clearfix">&nbsp;</div>
                <form id="help-form" action="{{route('email.send')}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="help-form-group">
                        <input class="form-control" type="text" placeholder="Enter your name *"
                               name="name" readonly
                               required
                               value="{{$user->first_name}}  {{$user->first_name}}">
                    </div>
                    <div class="help-form-group">
                        <input class="form-control" type="email" placeholder="To *"
                               name="to" required
                               value="{{$user->email}}"
                        >
                    </div>
                    <div class="help-form-group">
                        <input class="form-control" type="text" placeholder="Enter Message Subject *"
                               name="subject" required
                               value="{{old('subject')}}">
                    </div>
                    <div class="help-form-group">
                                <textarea aria-required="true" required class="form-control" rows="10" cols="70%"
                                          name="message" aria-invalid="true" placeholder="Enter Message*"
                                          value="{{old('message')}}"></textarea>
                    </div>
                    <p>Ask us a question and we'll write back to you promptly! Simply fill out the form
                        below and
                        click Send Email.</p>
                    <p>Thanks. Items marked with an asterisk (<span class="star">*</span>) are required
                        fields.</p>
                    <div class="help-form-group">
                        <input type="file" class="form-control" name="attachment">
                    </div>
                    <div class="help-form-bottom">
                        <div>
                            <input type="checkbox" name="copy">
                            <span>Send copy to yourself</span>
                        </div>
                        <div class="spacer"></div>
                        <div class="help-form-submit">
                            <button type="submit"
                                    class="form-control btn btn-opacity btn-primary btn-sm my-sm mr-sm">Send Email
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="card-footer">
            This mail will be sent immediately.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection