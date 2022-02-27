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
                    href="{{ route('teams.create') }}">Add New Team Member </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-l">
            <div class="col-md-12 text-center pt-l">
                <h1 class="mb-xl">Team</h1>
            </div>
        </div>
        @include('layouts.message')
        <div class="doc-example">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="heading">Team Members</h3>
                            <div class="row">
                                @if ($teams->count() > 0)
                                    @foreach ($teams as $member)
                                        <div class="col-md-4 p-0">
                                            <img src="/store/{{ $member->image }}" width="100%" height="248" />
                                            <button type="button" style="position: absolute; top:0px; right:0px;"
                                                class="btn btn-opacity btn-danger btn-sm delete-member" title="Delete"
                                                data-id="{{ $member->id }}"><i
                                                    class="material-icons icon icon-sm">delete</i>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-12 text-center pt-l">
                                        <h4 class="mb-xl">No Team Yet</h1>
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
            $('.delete-member').on('click', function() {
                var teamId = $(this).attr('data-id');
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
                            url: '/teams/' + teamId,
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: teamId
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
                                window.location = '/admin/teams';
                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
