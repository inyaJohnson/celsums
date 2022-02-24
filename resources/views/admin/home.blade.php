@extends('layouts.dashboard')
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
        </div>
    </div>
    <div class="container mt-lg">
        @include('layouts.message')
        <div class="row">
            <div class="col-lg-6 mb-md">
                <div class="card bg-warning h-100">
                    <div class="card-body d-flex align-items-center">
                        <a href="{{ route('admin.blogs.index') }}"
                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center p-4">
                            <div>
                                <p class="m-0 text-white">Blogs</p>
                                <div class="card-title text-white m-0">{{ number_format($blogCount) }} Blogs</div>
                            </div>
                            <i class="material-icons">comment</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-md">
                <div class="card bg-primary h-100">
                    <div class="card-body d-flex align-items-center">
                        <a href="{{ route('admin.events.index') }}"
                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center p-4">
                            <div>
                                <p class="m-0 text-white">Events</p>
                                <div class="card-title text-white m-0">{{ number_format($eventCount) }} Events</div>
                            </div>
                            <i class="material-icons">event</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-md">
                <div class="card bg-success h-100">
                    <div class="card-body d-flex align-items-center">
                        <a href="{{ route('admin.galleries.index') }}"
                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center p-4">
                            <div>
                                <p class="m-0 text-white">Gallery</p>
                                <div class="card-title text-white m-0">{{ number_format($galleryCount) }} Photos</div>
                            </div>
                            <i class="material-icons">photo</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-md">
                <div class="card bg-danger h-100">
                    <div class="card-body d-flex align-items-center">
                        <a href="{{ route('admin.faqs.index') }}"
                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center p-4">
                            <div>
                                <p class="m-0 text-white">FAQs</p>
                                <div class="card-title text-white m-0">{{ number_format($faqCount) }} FAQs</div>
                            </div>
                            <i class="material-icons">help</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-md">
                <div class="card bg-info h-100">
                    <div class="card-body d-flex align-items-center">
                        <a href="{{ route('users.index') }}"
                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center p-4">
                            <div>
                                <p class="m-0 text-white">User</p>
                                <div class="card-title text-white m-0">{{ number_format($userCount) }} Users</div>
                            </div>
                            <i class="material-icons">person</i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
