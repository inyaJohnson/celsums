@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('deposit')}}">Pricing</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            {{-- <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2"
                                              href="pages/invoice/invoice.edit.v2.html">Create new Invoice</a></div> --}}
        </div>
    </div>
    <div class="container my-lg">
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden">

                    <div class="py-md">
                        <div class="w-80 mx-auto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pt-xl pb-xl d-flex justify-content-between flex-wrap">
                                        <h1 class="display-3">INVOICE</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="py-md gray-200">
                        <div class="w-80 mx-auto">
                            <form id="deposit-form" action="{{route('deposit.store', $token)}}" method="POST">
                                @csrf
                                <input class="form-control" style="border:solid thin" type="number" name="units" id="units" placeholder="Enter Units"/>
                                {{-- <select name="coin_type" class="form-control" required style="border:solid thin; margin-top:5px;">
                                    <option value='Bitcoin' {{ old('coin_type') === 'Bitcoin' ? 'Selected' : '' }}>Bitcoin</option>
                                    <option value='Ethereum' {{ old('coin_type') === 'Ethereum' ? 'Selected' : '' }}>Ethereum</option>
                                    <option value='Doge' {{ old('coin_type') === 'Doge' ? 'Selected' : '' }}>Doge</option>
                                </select> --}}
                            </form>
                            <div class="table-responsive mb-xxxl">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="pl-0" scope="col">DESCRIPTION</th>
                                        <th scope="col">UNITS</th>
                                        <th scope="col">RATE</th>
                                        <th class="text-right pr-0" scope="col">TOTAL AMOUNT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-bold pl-0">{{ucfirst($product->name)}} Plan</td>
                                        <td class="font-weight-bold" id="deposit-units">1</td>
                                        <td class="font-weight-bold">${{number_format($product->amount, 2)}}</td>
                                        <td class="font-weight-bold text-primary text-right pr-0" id="deposit-total">${{number_format($product->amount, 2)}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="py-md">
                        <div class="w-80 mx-auto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ul-divider mt-xl mb-xl"></div>
                                    <div class="ul-invoice-header-v1-items d-flex justify-content-between flex-column">
                                        <div class="ul-invoice-v1-header-left d-flex justify-content-between flex-wrap">
                                            <span>BITCOIN WALLET:</span>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                    id="copy-bitcoin-wallet">
                                                <i class="fa fa-copy"></i> Copy
                                            </button>
                                        </div>
                                        <div>
                                            <input id="bitcoin-wallet" class="text-gray-500 form-control" size="40"
                                                   value="1DQR9qTyWtoFjhG65NsZbWc7FirgL9eZhg"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="ul-divider mt-xl mb-xl"></div>
                                    <div class="ul-invoice-header-v1-items d-flex justify-content-between flex-column">
                                        <div class="ul-invoice-v1-header-left d-flex justify-content-between flex-wrap">
                                            <span>ETHEREUM WALLET:</span>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                    id="copy-ethereum-wallet">
                                                <i class="fa fa-copy"></i> Copy
                                            </button>
                                        </div>
                                        <div>
                                            <input class="text-gray-500 form-control" size="40" id="ethereum-wallet"
                                                   value="0x54802C0A8cFA58468567700204488Dc87F1C81FF"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="ul-divider mt-xl mb-xl"></div>
                                    <div class="ul-invoice-header-v1-items d-flex justify-content-between flex-column">
                                        <div class="ul-invoice-v1-header-left d-flex justify-content-between flex-wrap">
                                            <span>DOGE WALLET:</span>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                    id="copy-doge-wallet">
                                                <i class="fa fa-copy"></i> Copy
                                            </button>
                                        </div>
                                        <div>
                                            <input class="text-gray-500 form-control" size="40" id="doge-wallet"
                                                   value="D5vfiRB5CmAbJX2YjPEHjbnY6YxEgFg8z9"/>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="py-md gray-200" style="padding: 2px !important;">
                    </div>
                    <div class="py-md">
                        <div class="w-80 mx-auto">
                            <div class="d-flex justify-content-between">
                                <span></span>
                                <button class="btn btn-raised btn-raised-primary" type="submit" form="deposit-form">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

@section('script')
    <!--SCRIPT TO COPY WALLET NUMBER-->
    <script>
        $(document).ready(function () {

            function addCommas(x) {
                var parts = x.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }

            $('input[name=units]').change(function () {
                $('td[id=deposit-units]').html($(this).val());
                var total = $(this).val() * {{$product->amount}};
                $('td[id=deposit-total]').html('$' + addCommas(total) + '.00')
            })


            $('#copy-bitcoin-wallet').on('click', function () {
                var copyText = document.getElementById('bitcoin-wallet');
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand('copy');
                alert("Copied : " + copyText.value);

            })

            $('#copy-ethereum-wallet').on('click', function () {
                var copyText = document.getElementById('ethereum-wallet');
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand('copy');
                alert("Copied : " + copyText.value);

            })


            $('#copy-doge-wallet').on('click', function () {
                var copyText = document.getElementById('doge-wallet');
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand('copy');
                alert("Copied : " + copyText.value);

            })
        })
    </script>
@endsection
