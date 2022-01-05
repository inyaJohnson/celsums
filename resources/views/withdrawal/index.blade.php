@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Withdraw</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Fill the form below to request a Withdrawal</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">Your Balance is $1,400
                </div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('withdrawal.request')}}" method="POST">
                    @csrf
                    <div id="withdrawal-message"></div>
                    <div class="form-group ">
                        <label class="control-label" for="name">Full Name <span
                                    class="help"> e.g. "James Brown"</span></label>
                        <input class="form-control" name="name" id="name" required/>
                        @if($errors->has('name'))
                            <div class="text-danger"> {{$errors->first('name')}}</div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="amount">Amount to Withdraw</label>
                        <input type="number" class="form-control" name="amount"
                               required id="amount"/>
                        @if($errors->has('amount'))
                            <div class="text-danger"> {{$errors->first('amount')}}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="details">Please enter your Bitcoin Wallet address or <span
                                    class="help"> Bank account details</span></label>
                        <textarea class="form-control" name="details" id="details"
                                  required rows="5"></textarea>
                        @if($errors->has('details'))
                            <div class="text-danger"> {{$errors->first('details')}}</div>
                        @endif
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

        </div>
        <div class="card-footer">
            Withdrawal will be process within 24hrs.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
