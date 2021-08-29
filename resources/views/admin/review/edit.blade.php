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
            <h2 class="doc-section-title">{{$review->name}}'s Review</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('reviews.update', $hashIds->encode($review->id))}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" name="name" value="{{$review->name}}" required/>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{$review->email}}" required/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="message">Enter Your Comment</label>
                        <textarea class="form-control" rows="6"
                                  id="message" name="message" required>{{$review->message}}</textarea>
                    </div>

                    <input type="hidden" id="id" name="id" value="{{$review->id}}" />

                    <div class="form-group col-lg-6" style="margin:auto;">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <div class="card-footer">
            Changes to Review will be displayed on the welcome page
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
