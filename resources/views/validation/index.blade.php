@extends('layouts.dashboard')
@section('current_page')
    Withdrawal
@endsection
@section('content')
    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="title-3">Upload a valid means of identification</p>
                            </div>
                            <div class="card-body card-block col-lg-8 withdrawal">
                                @include('layouts.message')
                                <div class="clearfix">&nbsp;</div>
                                <form action="{{route('validation.upload')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label" for="document">Please upload a valid means of Identification</label>
                                        <input type="file" class="form-control" name="document" id="document" required >
                                        <span class="text-danger">Maximum file size is 2MB</span>
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
                            <div class="card-footer">
                                Verification will be process within 24hrs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT-->
@endsection
