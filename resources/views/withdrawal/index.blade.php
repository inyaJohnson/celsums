@extends('layouts.dashboard')
@section('current_page')
    Withdrawal
@endsection
@section('content')
<section>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <p class="title-3">Fill the form below to request a Withdrawal</p>
                        </div>
                        <div class="card-body card-block col-lg-8 withdrawal">
                            @include('layouts.message')
                            <div class="text-center text-success">Your Balance is ${{number_format(auth()->user()->finance->current_balance)}}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <form action="{{route('withdrawal.request')}}" method="post">
                                @csrf
                                <div id="withdrawal-message"></div>
                                <div class="form-group ">
                                    <label class="control-label" for="name">Full Name <span
                                            class="help"> e.g. "James Brown"</span></label>
                                    <input  class="form-control" name="name" id="name" required/>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="amount">Amount to Withdraw</label>
                                    <input type="number" class="form-control" name="amount"
                                           required id="amount"/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="details">Please enter your Bitcoin Wallet address or <span
                                            class="help"> Bank account details</span></label>
                                    <textarea class="form-control" name="details" id="details"
                                              required rows="5"></textarea>
                                </div>

                                <div class="form-group col-lg-6" style="margin:auto;">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            Withdrawal will be process within 24hrs.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END MAIN CONTENT-->
@endsection
