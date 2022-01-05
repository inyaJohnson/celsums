@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Available stock options</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">Select stocks to be displayed</div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('stock.store')}}" method="post">
                    @csrf
                    <div class="row">
                        @foreach($stocks as $stock)
                            <div class="col-xs-3" >
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

        </div>
        <div class="card-footer">
            Selected stocks will be reflected on user dashboard.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
