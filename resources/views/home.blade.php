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
                <button class="btn btn-sm btn-opacity btn-primary" id="reportrange"><i class="fa fa-calendar mr-sm"></i><span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <div class="row">
                            <div class="col-lg-4 mb-md">
                                <div class="card bg-warning h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
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
                                        <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
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
                                        <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
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
                    <div class="col-lg-12 mb-xl">
                        <div class="card">
                            <div class="card-body pb-sm pl-0">
                                <div class="card-title mx-lg">Live Coin Chart</div>
                                <div id="cryptoCurrencyOne">
                                    <div
                                            style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                                        <div style="height:540px; padding:0px; margin:0px; width: 100%;">
                                            <iframe
                                                    src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505"
                                                    width="100%" height="536px" scrolling="auto" marginwidth="0"
                                                    marginheight="0" frameborder="0" border="0"
                                                    style="border:0;margin:0;padding:0;line-height:14px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-md">
                <div class="ul-cryptocurrency-tab">
                    <div class="nav-pills-primary">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item mb-2"><a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                         href="#pills-home" role="tab" aria-controls="pills-home"
                                                         aria-selected="true">USDT</a></li>
                            <li class="nav-item mb-2"><a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                         href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                         aria-selected="false">Market Trading</a></li>
                        </ul>
                        <script type="text/javascript"
                                src="https://widget.coinlore.com/widgets/coinlore-list-widget.js"></script>
                        <div class="coinlore-list-widget" data-mcap="0" data-mcurrency="usd" data-top="19"
                             data-cwidth="300" data-bcolor="#fff" data-coincolor="#428bca" data-pricecolor="#4c4c4c"
                             style="min-height: 382px; width: 300px;"></div>
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
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->created_at}}</td>
                                    <td>{{$transaction->name}}</td>
                                    <td>{{$transaction->method}}</td>
                                    <td class="@php echo ($transaction->status === "Confirmed")? 'text-success':'text-warning'; @endphp">{{$transaction->status}}</td>
                                    <td>${{number_format($transaction->amount)}}</td>
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
