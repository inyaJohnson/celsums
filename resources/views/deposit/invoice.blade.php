@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <h3 class="subheader-title">Invoice v2</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice v2</li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2"
                                              href="pages/invoice/invoice.edit.v2.html">Create new Invoice</a></div>
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
                            <div class="table-responsive mb-xxxl">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="pl-0" scope="col">DESCRIPTION</th>
                                        <th scope="col">UNITS</th>
                                        <th scope="col">RATE</th>
                                        <th class="text-right pr-0" scope="col">AMOUNT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-bold pl-0">UI/UX for Mobile App</td>
                                        <td class="font-weight-bold">50</td>
                                        <td class="font-weight-bold">$50.00</td>
                                        <td class="font-weight-bold text-primary text-right pr-0">$2500.00</td>
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
                                <button class="btn btn-raised btn-raised-primary" type="button">Print invoice</button>
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