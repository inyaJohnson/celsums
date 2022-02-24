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
                    href="{{ route('users.create') }}">Add new User </a>
            </div>
        </div>
    </div>
    <div class="container pt-lg">
        @include('layouts.message')
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($users as $user)
                        <div class="col-xl-4 col-lg-4 mb-md">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-md">
                                        <div class="initials top admin">
                                            <h3>{{ strtoupper(substr($user->first_name, 0, 1)) . ' ' . strtoupper(substr($user->last_name, 0, 1)) }}
                                            </h3>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="material-icons">more_horiz</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('email.create', $hashIds->encode($user->id)) }}"><i
                                                        class="material-icons icon icon-sm">email</i>Send Email</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('users.messages.store', $hashIds->encode($user->id)) }}"><i
                                                        class="material-icons icon icon-sm">chat</i>Quick Chat
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="card-title mb-2">
                                            <a class="link-alt font-weight-semi" href="#">{{ $user->first_name }}
                                                {{ $user->last_name }}</a> <small>{!! $user->verified ? "<span class='text-success'>is Verified</span>" : "<span class='text-danger'>is Unverified</span>" !!}</small>
                                        </p>
                                        <div class="mb-md">
                                            <div class="">
                                                @switch($user)
                                                    @case($user->verified == 1)
                                                        <a class="btn btn-opacity btn-danger btn-sm my-sm mr-sm"
                                                            href="{{ route('users.unverify', $user->id) }}">Unverify
                                                        </a>
                                                    @break
                                                    @case($user->verified == 0)
                                                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm"
                                                            href="{{ route('users.verify', $user->id) }}">Verify
                                                        </a>
                                                    @break
                                                    @default
                                                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm"
                                                            href="{{ route('users.verify', $user->id) }}">Verify
                                                        </a>
                                                @endswitch
                                            </div>

                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                                            <p class="text-muted text-small m-0">
                                                {{ \Carbon\Carbon::parse($user->created_at)->addHour()->format('M d Y') }}
                                            </p>
                                            <div class="d-flex flex-wrap justify-content-end">
                                                <button type="button"
                                                    class="btn btn-opacity btn-primary btn-sm my-sm mr-sm delete-user"
                                                    data-id="{{ $hashIds->encode($user->id) }}">DELETE
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

@section('script')
    <script src="dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
    <script>
        $('document').ready(function() {
            $('.delete-user').on('click', function() {
                var userId = $(this).attr('data-id');
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
                            url: '/user-delete/' + userId,
                            type: 'GET',
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
                                location.reload();
                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
