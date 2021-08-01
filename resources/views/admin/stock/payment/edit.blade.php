@extends('layouts.dashboard')
@section('current_page')
    Edit Payment
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid admin-div">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="title-3">Edit client's stock payment</p>
                            </div>
                            <div class="card-body card-block col-lg-8 withdrawal">
                                @include('layouts.message')
                                <div class="text-center text-success">Edit ${{number_format($payment->amount)}} made
                                    by {{$payment->user->first_name}} </div>
                                <div class="clearfix">&nbsp;</div>
                                <form action="{{route('stock-payment.update', $hashIds->encode($payment->id))}}"
                                      method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label" for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount"
                                               value="{{$payment->amount}}"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="stock">Stock</label>
                                        <select class="form-control" name="stock" id="stock">
                                            @foreach($stocks as $stock)
                                                <option value={{$stock->symbol}}>
                                                    {{$stock->symbol}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="status">Payment Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value=1 @php echo ($payment->status)? 'selected':''; @endphp>
                                                Confirm
                                            </option>
                                            <option value=0 @php echo (!$payment->status)? 'selected':''; @endphp>
                                                Pending
                                            </option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="user_id" value="{{$payment->user->id}}"/>
                                    <input type="hidden" name="prev_amount" value="{{$payment->amount}}"/>

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
