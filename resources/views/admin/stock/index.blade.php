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
                                <p class="title-3">Available stock options</p>
                            </div>
                            <div class="card-body card-block col-lg-8 withdrawal">
                                @include('layouts.message')
                                <div class="text-center text-success">Select stocks to be displayed</div>
                                <div class="clearfix">&nbsp;</div>
                                <form action="{{route('stock.store')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        @foreach($stocks as $stock)
                                            <div class="stock-option">
                                                <input type="checkbox" id="{{$stock}}" name="selected_stocks[]"
                                                       value="{{$stock}}">
                                                <label class="control-label" for="{{$stock}}">{{$stock}}</label>
                                            </div>
                                        @endforeach
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
                                Selected stocks will be reflected on user dashboard.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
