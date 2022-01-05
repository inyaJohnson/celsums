@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Balance</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg d-flex flex-column">
        <div class="doc-section-title d-flex justify-content-center">
            <h2 class="doc-section-title">Record client's Balance</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center text-success">Edit {{$user->first_name}} current balance
                    ${{number_format($user->finance->current_balance)}} </div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{route('balance.update', $hashIds->encode($user->id))}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="type">Type</label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="product">Investment Plan</option>
                            <option value="stock">Stock</option>
                        </select>
                        @if ($errors->has('type'))
                            <div class="error">{{ $errors->first('type') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" required/>
                        @if ($errors->has('amount'))
                            <div class="error">{{ $errors->first('amount') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <select name="action" class="form-control" required>
                            <option value="add" {{ old('action') === 'add' ? 'Selected' : '' }}>Add</option>
                            <option value="reduce" {{ old('action') === 'reduce' ? 'Selected' : '' }}>Reduce</option>
                        </select>
                        @if ($errors->has('action'))
                            <div class="error">{{ $errors->first('action') }}</div>
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
            Payment will be recorded and reflected on user dashboard.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection


