@extends('layouts.dashboard')
@section('current_page')
    Email
@endsection
@section('content')
    <div class="container admin-div">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="help-form-div">
                            <form id="help-form" action="{{route('email.send')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @include('layouts.message')
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
                                        <button type="submit" class="form-control btn btn-success">Send Email
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection