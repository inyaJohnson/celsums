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
            <h2 class="doc-section-title">Edit client's stock transaction</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">Edit ${{number_format($transaction->amount)}} made
                    by {{$transaction->user->first_name}}
                </div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('stock.transactions.update', $hashIds->encode($transaction->id))}}"
                      method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                               value="{{$transaction->amount}}"/>
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
                        <label class="control-label" for="method_of_payment">Transaction Method</label>
                        <select class="form-control" name="method_of_payment" id="method_of_payment">
                            <option value="Bitcoin" @php echo ($transaction->method_of_payment === "Coin")? 'selected':''; @endphp>Coin</option>
                            <option value="Bank Wire" @php echo ($transaction->method_of_payment === "Bank Wire")? 'selected':''; @endphp>Bank Wire</option>
                            <option value="Western Union" @php echo ($transaction->method_of_payment === "Western Union")? 'selected':''; @endphp>Western Union</option>
                            <option value="Money Gram" @php echo ($transaction->method_of_payment === "Money Gram")? 'selected':''; @endphp>Money Gram</option>
                            <option value="Others" @php echo ($transaction->method_of_payment === "Others")? 'selected':''; @endphp>Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="status">Transaction Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value=1 {{($transaction->status)? 'selected':''}}>
                                Confirm
                            </option>
                            <option value=0 {{(!$transaction->status)? 'selected':''}}>
                                Pending
                            </option>
                        </select>
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
            Transaction will be recorded and reflected on user dashboard.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

