@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <h3 class="subheader-title">Spacing</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">System Utilities</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Spacing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Record client's stock payment</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">Current Stock Balance is
                    ${{number_format($user->finance->stock)}}
                </div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('stock.transactions.store')}}" method="post">
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

        </div>
        <div class="card-footer">
            Payment will be recorded and reflected on user dashboard.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
