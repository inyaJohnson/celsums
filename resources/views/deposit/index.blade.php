@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <h3 class="subheader-title">Pricing</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">Pricing</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pricing v2</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <div class="row">
            <div class="col-md-12 mb-xxxl">
                <h1 class="text-center font-weight-bold mb-xxl">Simple Pricing</h1>
                <div class="nav-pills-primary">
                    <div class="text-center mb-xxl">
                        <ul class="nav nav-pills nav-pill-rounded mb-3 shadow-3dp" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="demo-1" data-toggle="pill"
                                                    href="#demo-pills-1" role="tab" aria-controls="demo-pills-1"
                                                    aria-selected="true">Monthly Fees</a></li>
                            <li class="nav-item"><a class="nav-link" id="demo-2" data-toggle="pill" href="#demo-pills-2"
                                                    role="tab" aria-controls="demo-pills-2" aria-selected="false">Annual
                                    Fees</a></li>
                        </ul>
                    </div>
                    <div class="tab-content bg-transparent shadow-none" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="demo-pills-1" role="tabpanel"
                             aria-labelledby="demo-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4 bg-primary">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingLeaves"><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/>
                                                    </div>
                                                    <i class="flaticon-business-and-trade text-white text-72"></i>
                                                </div>
                                                <h4 class="card-title text-gray-200 font-weight-normal">Enterprise</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-gray-300 text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-200 display-1 mr-1">775 </h1>
                                                    <div class="text-gray-300 ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-primary text-white border-white btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingClouds"><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 20px"/><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 10px"/><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 18px"/><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 10px"/><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 10px"/><img
                                                                src="assets/images/illustrations/backgrounds/cloud-1.svg"
                                                                style="width: 14px"/></div>
                                                    <i class="flaticon-rocket text-primary text-72"></i>
                                                </div>
                                                <h4 class="card-title font-weight-normal">Startup</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-muted text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-700 display-1 mr-1">75 </h1>
                                                    <div class="text-muted ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-primary btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4 bg-primary">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingLeaves"><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/>
                                                    </div>
                                                    <i class="flaticon-business-and-trade text-white text-72"></i>
                                                </div>
                                                <h4 class="card-title text-gray-200 font-weight-normal">Enterprise</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-gray-300 text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-200 display-1 mr-1">775 </h1>
                                                    <div class="text-gray-300 ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-primary text-white border-white btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="demo-pills-2" role="tabpanel" aria-labelledby="demo-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4 bg-success">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingLeaves"><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/>
                                                    </div>
                                                    <i class="flaticon-business-and-trade text-white text-72"></i>
                                                </div>
                                                <h4 class="card-title text-gray-200 font-weight-normal">Enterprise</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-gray-300 text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-200 display-1 mr-1">775 </h1>
                                                    <div class="text-gray-300 ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-success text-white border-white btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingLeaves"><img
                                                                src="assets/images/illustrations/leaf-1.svg"/><img
                                                                src="assets/images/illustrations/leaf-1.svg"/><img
                                                                src="assets/images/illustrations/leaf-1.svg"/><img
                                                                src="assets/images/illustrations/leaf-1.svg"/><img
                                                                src="assets/images/illustrations/leaf-1.svg"/><img
                                                                src="assets/images/illustrations/leaf-1.svg"/></div>
                                                    <i class="flaticon-rocket text-primary text-72"></i>
                                                </div>
                                                <h4 class="card-title font-weight-normal">Startup</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-muted text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-700 display-1 mr-1">75 </h1>
                                                    <div class="text-muted ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-warning btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-lg">
                                    <div class="card ul-icon-box-animate-onhover pt-4 pb-4 bg-success">
                                        <div class="card-body">
                                            <div class="ul-pricing-v2 text-center">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                    <div class="bg-group ul-animate fallingLeaves"><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/><img
                                                                src="assets/images/illustrations/leaf-1-white.svg"/>
                                                    </div>
                                                    <i class="flaticon-business-and-trade text-white text-72"></i>
                                                </div>
                                                <h4 class="card-title text-gray-200 font-weight-normal">Enterprise</h4>
                                                <div class="d-flex justify-content-center align-items-start mb-xxl">
                                                    <p class="m-0 text-gray-300 text-20 mt-1">$</p>
                                                    <h1 class="font-weight-bold text-gray-200 display-1 mr-1">775 </h1>
                                                    <div class="text-gray-300 ul-pricing-v2-month">/month</div>
                                                </div>
                                                <button type="button"
                                                        class="btn btn-outline btn-outline-success text-white border-white btn-rounded btn-lg">
                                                    Purchase
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection