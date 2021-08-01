@extends('layouts.dashboard')
@section('current_page')
    Payment
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    {{--<h3 class="title-3">Payments</h3>--}}
                    <!-- DATA TABLE-->
                        <div class="row">
                            @foreach($stockPayments as $payment)
                                <div class="col-xs-12 col-md-6 sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>Payment by {{$payment->user->first_name}}</h4>
                                            <div>
                                                <a href="{{route('stock-payment.edit', $hashIds->encode($payment->id))}}"
                                                   title="Edit Payment"><i class="fa fa-pencil-square-o"></i></a>
                                            </div>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>Amount - ${{number_format($payment->amount)}}</strong>
                                                <span>Date - {{\Carbon\Carbon::parse($payment->created_at)->addHour()->format('M d Y')}}</span>
                                            </li>
                                            <li>
                                                <strong>Stock - {{$payment->stock}}</strong>
                                                @if($payment->status)
                                                    <span class="text-success">Confirmed</span>
                                                @else
                                                    <span class="text-warning">Pending</span>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        @endforeach
                        <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
