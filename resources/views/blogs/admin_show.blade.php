@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
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
                    href="{{ route('blogs.create') }}">Add new Blog </a>
            </div>
        </div>
    </div>
    <div class="container my-lg">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card mb-md">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-lg"><span> </span>
                            <div class="text-center"><img class="avatar-xl rounded-circle"
                                    src="{{ url("/store/$blog->image") }}" alt="" />
                                <div class="card-title my-md font-weight-bold">By - {{ $blog->creator->first_name }}</div>
                                <div class="d-flex align-items-center flex-wrap justify-content-center mb-3">
                                    <p class="font-weight-bold text-14 mr-2 mb-0">5.0</p><i
                                        class="material-icons text-warning align-middle">star</i><span
                                        class="text-muted">({{ $blog->comments->count() }} Comments)</span>
                                </div><span class="badge badge-success">Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-lg">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="card-title m-0">Comments</div>
                        <button class="btn btn-opacity btn-primary rounded">Show<div class="ripple-container"></div>
                            </button>
                    </div>
                </div>
                <div class="card my-lg">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm "
                            href="{{ route('blogs.edit', $blog->id) }}" title="Edit">Edit</a>
                        <button type="button" class="btn btn-opacity btn-danger btn-sm my-sm mr-sm delete-blog"
                            data-id="{{ $blog->id }}">Delete
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="d-flex align-items-end">
                    <p class="font-weight-semi mr-3 mb-3">{{ $blog->title }}</p>
                    <hr class="flex-1" />
                </div>
                <div class="card mb-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="card-title">Summary/Caption</div>
                                <p class="text-muted font-weight-semi">{!! $blog->caption !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-lg">
                    <div class="card-body">
                        <div class="mb-lg">
                            <div class="card-title">Blog Content</div>
                        </div>
                        <div class="row mb-lg">
                            <div class="col-md-12 mb-md">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

@section('script')
    <script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
    <script>
        $('document').ready(function() {
            $('.delete-blog').on('click', function() {
                var blogId = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/blogs/' + blogId,
                            data : {
                                _token: "{{ csrf_token() }}",
                                id : blogId
                            },
                            type: 'DELETE',
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success...',
                                        text: response.success
                                    })
                                } else if (response.error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Ooops...',
                                        text: response.error
                                    })
                                }
                                window.location = '/admin/blogs';
                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
