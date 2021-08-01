@extends('layouts.dashboard')
@section('current_page')
    Payment
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid admin-div">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="title-3">Record client's stock payment</p>
                            </div>
                            <div class="card-body card-block col-lg-8 withdrawal">
                                @include('layouts.message')
                                <div class="text-center text-success">Current Stock Balance is
                                    ${{number_format($user->finance->stock)}} </div>
                                <div class="clearfix">&nbsp;</div>
                                <form action="{{route('stock-payment.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label" for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="stock">Stock</label>
                                        <select class="form-control" name="stock" id="stock">
                                            @foreach($availableStock as $stock)
                                                <option value="{{$stock->symbol}}">{{$stock->symbol}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="status">Payment Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value=1>Confirmed</option>
                                            <option value=0>Pending</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="user_id" value="{{$user->id}}"/>

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
                                Payment will be recorded and reflected on user dashboard.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT-->
@endsection
