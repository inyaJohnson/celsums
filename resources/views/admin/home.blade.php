@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('custom_content')
    <section xmlns="http://www.w3.org/1999/html">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('layouts.message')
                <div class="row">
                    @foreach($users as $user)
                        @if($user->role->name != 'admin')
                            <div class="col-xs-12 col-md-6 sale-box wow fadeInUp" data-wow-iteration="1">
                                <div class="sale-box-inner">
                                    <div class="sale-box-head">
                                        <h4>{{$user->first_name}} {{$user->last_name}}</h4>
                                        <div>
                                            <a href="{{route('email.create', $hashIds->encode($user->id))}}"
                                               title="Send Mail"><i class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <ul class="sale-box-desc">
                                        <li>
                                            <strong>
                                                Current Balance - ${{number_format($user->finance->current_balance)}}
                                                &nbsp;
                                                <a href="{{route('balance.edit', $hashIds->encode($user->id))}}"
                                                   title="Update Balance"><i class="fa fa-pencil-square-o"></i></a>
                                            </strong>
                                            <span>Previous Balance - ${{number_format($user->finance->previous_balance)}}</span>
                                        </li>
                                        <li>
                                            <strong>Stock - ${{$user->finance->stock}}</strong>
                                            <span>Joined - {{\Carbon\Carbon::parse($user->created_at)->addHour()->format('M d Y')}}</span>
                                        </li>
                                        <li class="sale-box-action">
                                            <a href="{{route('stock.transactions.create', $hashIds->encode($user->id))}}"
                                               title="Update Stock Payment"><i class="fa fa-line-chart"></i></a>
                                            <a href="{{route('transactions.create', $hashIds->encode($user->id))}}"
                                               title="Update Payment"><i class="fa fa-money-bill-alt"></i></a>
                                            <button class="delete-user" data-id="{{$hashIds->encode($user->id)}}"><i
                                                        class="fa fa-trash"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <h3 class="subheader-title">List</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Column 3</li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2" href="#">Add new User </a>
            </div>
        </div>
    </div>
    <div class="container pt-lg">
        <div class="row">
            @include('layouts.message')
            <div class="col-lg-12">
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-xl-4 col-lg-4 mb-md">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-md">
                                        <img class="avatar-lg" src="assets/images/avatars/001-man.svg">
                                        <div class="dropdown">
                                            <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i class="material-icons">more_horiz</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i
                                                            class="material-icons icon icon-sm">account_circle</i>View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="material-icons icon icon-sm">person_add</i>Add to a
                                                    team</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="card-title mb-2">
                                            <a class="link-alt font-weight-semi"
                                               href="#">{{$user->first_name}} {{$user->last_name}}</a>
                                        </p>
                                        <div class="mb-md">
                                            <div class="">
                                                Current Balance - ${{number_format($user->finance->current_balance)}}
                                            </div>
                                            <div class="">
                                                Previous Balance - ${{number_format($user->finance->previous_balance)}}
                                            </div>
                                            <div class="">
                                                Stock - ${{$user->finance->stock}}
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                                            <p class="text-muted text-small m-0">{{\Carbon\Carbon::parse($user->created_at)->addHour()->format('M d Y')}}</p>
                                            <div class="d-flex flex-wrap justify-content-end">
                                                <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm delete-user"
                                                        data-id="{{$hashIds->encode($user->id)}}"
                                                   >DELETE</button>
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
        $('document').ready(function () {
            $('.delete-user').on('click', function () {
                var userId = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function (result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/user-delete/' + userId,
                            type: 'GET',
                            success: function (response) {
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

