@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2"
                    href="{{ route('events.create') }}">Add new Event </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-l">
            <div class="col-md-12 text-center pt-l">
                <h1 class="mb-xl">Events</h1>
            </div>
        </div>
        @include('layouts.message')
        <div class="row">
            <div class="col-md-12 py-xl mb-lg">
                @if ($events->count() > 0)
                    @foreach ($events as $event)
                        <div class="card mb-lg">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>{{ $event->name }}</div>
                                    <div><a class="btn btn-link btn-link-primary m-0"
                                            href="{{ route('admin.events.show', $event->id) }}">View More</a>.</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row pt-l">
                        <div class="col-md-12 text-center pt-l">
                            <h4 class="mb-xl">No Events Yet</h1>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
