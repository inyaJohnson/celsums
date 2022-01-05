@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('transactions.index')}}">Transactions</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Record client's transaction</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">
                    Edit ${{number_format($transaction->amount)}} made by {{$transaction->user->first_name .' '. $transaction->user->last_name}}
                </div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('transactions.update', $hashIds->encode($transaction->id))}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label class="control-label" for="name">Sender Name</label>
                        <input class="form-control" id="name" name="name" value="{{$transaction->user->first_name .' '. $transaction->user->last_name}}"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="units">Units</label>
                        <input type="number" class="form-control" id="units" name="units" value="{{$transaction->units}}" />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="amount">Amount to Paid</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{$transaction->amount}}" />
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
                            <option value=0 @php echo ($transaction->status == 0)? 'selected':''; @endphp>Pending</option>
                            <option value=1 @php echo ($transaction->status == 1)? 'selected':''; @endphp>Confirmed</option>
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
