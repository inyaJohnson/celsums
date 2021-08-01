@extends('layouts.dashboard')
@section('current_page')
    Users
@endsection
@section('content')
    <section class="small-padding">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('layouts.message')
                <div class="row">
                    <div class="col-md-12">
                        @foreach($users as $user)
                            <div class="card wow fadeInUp" data-wow-iteration="1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8 transaction-info">{{$user->first_name}} {{$user->last_name}}
                                            <br>
                                            <a href="{{route('user.verify', $user->id)}}" class="btn btn-primary">Verify</a>
                                        </div>
                                        <div class="col-4 text-right">{!!  ($user->verified)?"<span class='text-success'>Verified</span>":"<span class='text-danger'>Unverified</span>"!!}
                                            <br>
                                            @if($user->identification !== null )
                                                <a href="{{url('/store/'.$user->identification)}}" rel="noreferrer noopener" target="_blank" download>Download</a>
                                            @endif
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
