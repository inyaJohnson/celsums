@extends('layouts.dashboard')
@section('current_page')
    Reviews
@endsection
@section('content')

    <section class="small-padding">
        @include('layouts.message')
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($reviews as $review)
                            <div class="card wow fadeInUp" data-wow-iteration="1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10 transaction-info">{{$review->message}}<br><br>
                                            <span>by {{$review->name}}
                                                on {{$review->created_at->format('M d, Y H:i a')}}</span>
                                        </div>
                                        <div class="col-2 text-right">
                                            <a href="{{route('reviews.edit', $hashIds->encode($review->id))}}"
                                               title="Edit Review"><i class="fa fa-pencil-square-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
