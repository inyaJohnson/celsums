@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <h3 class="subheader-title">List</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Column Row</li>
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
            @foreach($transactions as $transaction)
                <div class="ul-column-list-row mb-md col-xs-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="ul-list-row d-flex align-items-center justify-content-between">
                                <div class="initials top admin">
                                    <h3>{{strtoupper(substr($transaction->user->first_name, 0, 1)).' '.strtoupper(substr($transaction->user->last_name, 0, 1))}}</h3>
                                </div>                                <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                                    <div class="ul-list-row-label flex-grow-1">
                                        <p class="font-weight-semi m-0">{{$transaction->user->first_name .' '. $transaction->user->last_name}}</p>
                                        <span class="text-muted">{{$transaction->method_of_payment .' ('.$transaction->coin_type.')'}}</span>
                                    </div>
                                    <div class="flex-grow-1 my-md mr-lg">
                                        <h4>${{number_format($transaction->amount)}}</h4>
                                    </div>
                                    <div class="ul-list-row-link flex-grow-1 transaction-badge" >
                                        <div class="">
                                            {!! ($transaction->status)? "<span class='badge badge-solid mr-sm badge-success'>Confirmed</span>":"<span class='badge badge-solid mr-sm badge-danger'>Pending</span>" !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                            <p class="text-muted text-small m-0">Paid On {{\Carbon\Carbon::parse($transaction->created_at)->addHour()->format('M d Y')}}</p>
                            <div class="d-flex flex-wrap justify-content-end">
                                <a type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm" href="{{route('transactions.edit', $hashIds->encode($transaction->id))}}"
                                   title="Edit Transaction">EDIT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Start:: content (Your custom content)-->

@endsection