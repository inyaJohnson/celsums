@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <h3 class="subheader-title d-none d-sm-block">Cryptocurrency</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cryptocurrency</li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm btn-icon mr-2"><i
                        class="far fa-calendar-alt"></i></a><a class="btn btn-opacity-primary btn-sm btn-icon mr-2"><i
                        class="fa fa-plus"></i></a>
                <button class="btn btn-sm btn-opacity btn-primary" id="reportrange"><i
                        class="fa fa-calendar mr-sm"></i><span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <div class="row">
                            <div class="col-lg-4 mb-md">
                                <div class="card bg-warning h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">300.57</p>
                                                <div class="card-title text-white m-0">459.32 USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-md">
                                <div class="card bg-primary h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">24H Charge</p>
                                                <div class="card-title text-white m-0">743.930 USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-md">
                                <div class="card bg-danger h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div
                                            class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-white">42H Charge</p>
                                                <div class="card-title text-white m-0">1074.3930 USDT</div>
                                            </div>
                                            <i class="material-icons">monetization_on</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-md">
                        <div class="card">
                            <div class="card-body px-0 pb-sm">
                                <div class="card-title mx-lg">Current Watch List</div>
                                <div id="cryptoCurrencyTwo"></div>
                            </div>
                            <div class="tab-content ul-cryptocurrency-tab-scroll" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Coin</th>
                                                    <th scope="col">Last Price</th>
                                                    <th scope="col">Change</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($stocks as $stock)
                                                    <tr>
                                                        <td>{{ $stock['symbol'] }}</td>
                                                        <td
                                                            class="{{ $stock['regularMarketChange'] > 0 ? 'text-success' : 'text-danger' }}">
                                                            {{ number_format($stock['regularMarketPrice'], 2) }}</td>
                                                        <td class="font-weight-semi">
                                                            {{ number_format($stock['regularMarketChange'], 2) }}<span
                                                                class="badge {{ $stock['regularMarketChangePercent'] > 0 ? 'badge-success' : 'badge-danger' }} ml-1">{{ number_format($stock['regularMarketChangePercent'], 2) }}%</span>
                                                        </td>
                                                        <td><a class="btn btn-raised btn-raised-primary btn-sm" href="{{route('stock.invoice', $stock['symbol'])}}" type="button">
                                                                Buy
                                                                <div class="ripple-container"></div>
                                                        </a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
