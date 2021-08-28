@extends('layouts.dashboard')
@section('custom_content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid admin-div">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="title-3">{{$review->name}}'s Review</p>
                            </div>
                            <div class="card-body card-block col-lg-8 withdrawal">
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
                            <div class="card-footer">
                                Changes to Review will be displayed on the welcome page
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT-->
@endsection
