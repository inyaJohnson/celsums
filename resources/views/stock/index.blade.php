@extends('layouts.dashboard')
@section('current_page')
    Stock
@endsection
@section('statistics')
    @include('layouts.stock_statistics')
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="stock">
                    @foreach($stocks as $stock)
                        <div class="stock-row">
                            <div class="symbol">
                                <h5>{{$stock['symbol']}}</h5>
                                <small>{{$stock['shortName']}}</small>
                            </div>
                            <div class="last-price">
                                <h5>{{$stock['regularMarketPrice']}}</h5>
                            </div>
                            <div class="change">
                                <h5>
                                <span class="badge @php echo($stock['regularMarketChange'] > 0)?'badge-success':'badge-danger'; @endphp">
                                    {{number_format((float)$stock['regularMarketChange'], 2)}}
                                </span>
                                </h5>
                                <small class="@php echo($stock['regularMarketChange'] > 0)?'statistics-success':'statistics-danger'; @endphp">
                                    {{number_format((float)$stock['regularMarketChange'], 2)}}%
                                </small>
                            </div>
                        </div>
                        <hr>

                    @endforeach
                </div>
                <div style="margin-top: 40px!important;">&nbsp;</div>
            </div>
        </div>
    </section>
@endsection
