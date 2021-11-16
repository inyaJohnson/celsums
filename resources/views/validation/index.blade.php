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
            <h2 class="doc-section-title">Upload a valid means of identification</h2>
        </div>
        <div class="doc-example d-flex justify-content-center">
            <div class="col-lg-8">
                @include('layouts.message')
                <div class="text-center">Eg. International Passports, License, Voter ID, Permits</div>
                <div class="clearfix">&nbsp;</div>
                <form action="{{ route('validation.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group upload">
                        <div class="file-div">
                            <div>
                                <label class="control-label" for="front_view">Front View</label>
                                <input type="file" class="form-control @error('front_view') is-invalid @enderror"
                                    name="front_view" required>
                                @error('front_view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <label class="control-label" for="back_view">Back View</label>
                                <input type="file" class="form-control @error('back_view') is-invalid @enderror"
                                    name="back_view" required>
                                @error('back_view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-danger text-center">Maximum file sizes is 2MB</div>
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
            Verification will be process within 24hrs.
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
