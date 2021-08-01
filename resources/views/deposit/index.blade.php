@extends('layouts.dashboard')
@section('current_page')
    Deposit
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="title-3">Kindly Pay to any of the Wallet Addresses below</p>
                            </div>
                            <div class="card-body card-block col-lg-8 deposit">
                                <div class="text-center text-success">Bitcoin Wallets</div>
                                <div class="clearfix">&nbsp;</div>
                                <input class="text-center form-control" id="wallet"
                                       value="1DQR9qTyWtoFjhG65NsZbWc7FirgL9eZhg"/>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="copy-wallet">
                                        <i class="fa fa-copy"></i> Copy
                                    </button>
                                </div>
                            </div>

                            <div class="card-footer">
                                Click copy to copy any of the Bitcoin wallets
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
