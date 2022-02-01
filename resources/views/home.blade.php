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
            <div class="subheader-toolbar">
                @switch($user)
                    @case($user->identification !== null && $user->verified == 1)
                        <a class="btn btn-opacity-success btn-sm mr-2">Verified <i class="fa fa-check-circle"></i></a>
                    @break
                    @case($user->identification !== null && $user->verified == 0)
                        <a class="btn btn-opacity-warning btn-sm mr-2">Pending Verification <i
                                class="fa fa-spinner fa-pulse fa-1x fa-fw"></i></a>
                    @break
                    @case($user->identification !== null && $user->verified == 2)
                        <a class="btn btn-opacity-danger btn-sm mr-2" href="{{route('validation.index')}}"> Failed Verification <i
                                class="fa fa-warning"></i></a>
                    @break
                    @default
                        <a class="btn btn-opacity-danger btn-sm mr-2" href="{{route('validation.index')}}"> Unverified <i class="fa fa-times-circle"></i></a>
                @endswitch
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        @include('layouts.message')
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <div class="row">
                            <div class="col-lg-3 mb-md">
                                <div class="card bg-warning h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">Statisitics.</p>
                                                <div class="card-title text-white m-0">{{number_format(1000, 2)}} USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-md">
                                <div class="card bg-primary h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">Statisitics.</p>
                                                <div class="card-title text-white m-0">{{number_format(1000, 2)}} USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-md">
                                <div class="card bg-success h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">Statisitics.</p>
                                                <div class="card-title text-white m-0">{{number_format(1000, 2)}} USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-md">
                                <div class="card bg-danger h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">Statisitics</p>
                                                <div class="card-title text-white m-0">{{number_format(1000, 2)}} USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-xl">
                        <div class="card">
                            <div class="card-body pb-sm pl-0">
                                <div class="card-title mx-lg">Live Coin Chart</div>
                                <div id="cryptoCurrencyOne">
                                    <div
                                        style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                                        <div style="height:540px; padding:0px; margin:0px; width: 100%; background-color:#FFF">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-md">
                <div class="card-header">
                    <h2 class="p-1 m-0 text-16 font-weight-semi">Transaction History</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="basicDatatable" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Sender</th>
                                    <th>Type</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->created_at->format('M d Y') }}</td>
                                        <td>{{ $transaction->user->name() }}</td>
                                        <td>{{ ucfirst($transaction->type) }}</td>
                                        <td>{{ $transaction->method_of_payment }}</td>
                                        <td>{!! $transaction->status ? "<span class='badge badge-success'>Completed</span>" : "<span class='badge badge-warning'>Pending</span>" !!} </td>
                                        <td>${{ $transaction->amount }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
