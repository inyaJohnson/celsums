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
                    href="{{ route('galleries.create') }}">Add new Photo </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-l">
            <div class="col-md-12 text-center pt-l">
                <h1 class="mb-xl">Gallery</h1>
            </div>
        </div>
        @include('layouts.message')
        <div class="doc-example">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="heading">Media Gallery</h3>
                            <div class="row">
                                @if ($photos->count() > 0)
                                    @foreach ($photos as $photo)
                                        <div class="col-md-4 p-0">
                                            <img src="/store/{{ $photo->image }}" width="100%" height="248" />
                                            <button type="button" style="position: absolute; top:0px; right:0px;"
                                                class="btn btn-opacity btn-danger btn-sm delete-photo" title="Delete"
                                                data-id="{{ $photo->id }}"><i class="material-icons icon icon-sm">delete</i>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12 text-center pt-l">
                                        <h4 class="mb-xl">No Photos Yet</h1>
                                    </div>
                                @endif

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
            $('.delete-photo').on('click', function() {
                var photoId = $(this).attr('data-id');
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
                            url: '/galleries/' + photoId,
                            data : {
                                _token: "{{ csrf_token() }}",
                                id : photoId
                            },
                            type: 'DELETE',
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success...',
                                        text: response.message
                                    })
                                } else if (response.error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Ooops...',
                                        text: response.message
                                    })
                                }
                                window.location = '/admin/galleries';
                            }
                        })
                    }
                })
            })
        })
    </script>

@endsection
