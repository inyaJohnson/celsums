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
                    href="{{ route('faqs.create') }}">Add new FAQ </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-l">
            <div class="col-md-12 text-center pt-l">
                <h1 class="mb-xl">Frequently Asked Questions</h1>
            </div>
        </div>
        @include('layouts.message')
        <div class="row">
            <div class="col-md-12 py-xl mb-lg">
                <div class="nav-pills-primary">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="accordion" id="accordion1">
                                @if ($faqs->count() > 0)
                                    @foreach ($faqs as $key => $faq)
                                        <div class="card">
                                            <div class="card-header" id="heading{{ $faq->id }}"
                                                data-toggle="collapse" data-target="#collapse{{ $faq->id }}"
                                                aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse {{ $key == 0 ? 'show' : '' }}"
                                                id="collapse{{ $faq->id }}"
                                                aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion1">
                                                <div class="card-body">
                                                    {!! $faq->answer !!}
                                                </div>
                                                <div>
                                                    <hr>
                                                    <div class="d-flex justify-content-end">
                                                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm " href="{{ route('faqs.edit', $faq->id) }}" title="Edit">Edit</a>
                                                        <button type="button"
                                                            class="btn btn-opacity btn-danger btn-sm my-sm mr-sm delete-faq"
                                                            data-id="{{ $faq->id }}">Delete
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <div class="row pt-l">
                                        <div class="col-md-12 text-center pt-l">
                                            <h4 class="mb-xl">No Frequently Asked Questions Yet</h1>
                                        </div>
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
            $('.delete-faq').on('click', function() {
                var faqId = $(this).attr('data-id');
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
                            url: '/faqs/' + faqId,
                            data : {
                                _token: "{{ csrf_token() }}",
                                id : faqId
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
                                window.location = '/admin/faqs';
                            }
                        })
                    }
                })
            })
        })
    </script>

@endsection
