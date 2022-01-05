@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Review</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <h2 class="doc-section-title" id="examples">Client Reviews<a class="section-link" href="#examples"></a></h2>
        @include('layouts.message')
        <div class="doc-example">
            <div class="parent ex-1">
                <div class="row">
                    @foreach($reviews as $review)
                        <div class="card mb-md cursor-pointer col-md-6 col-xs-12">
                            <div class="card-body">
                                <div class="d-sm-flex text-sm-left text-center"><img class="avatar-md rounded mr-2"
                                                                                     src="/dashboard/dist/assets/images/faces/3.jpg"
                                                                                     alt=""
                                                                                     srcset=""/>
                                    <div class="flex-1">
                                        <h6 class="font-weight-normal mb-1">{{$review->name}}</h6>
                                        <p class="text-muted text-12">{{\Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($review->created_at))}} Days ago.</p>
                                    </div>
                                </div>
                                <div class="text-sm-left text-center my-lg">
                                    <p>{{$review->message}}</p>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-5 avatar-group m-0 text-sm-left text-center">
                                        {{--{{$review->email}}--}}
                                    </div>
                                    <div class="col-lg-6 col-sm-7 text-sm-right text-center"><span> <a href="{{route('reviews.edit', $hashIds->encode($review->id))}}"
                                                                                                       title="Edit Review"><i class="material-icons nav-icon">edit_note</i></a></span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection






