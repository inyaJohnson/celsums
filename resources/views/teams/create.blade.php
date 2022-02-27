@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main d-none d-lg-flex">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                    </ol>
                </nav>
            </div>
            <div class="flex-grow-1"></div>
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2" href="{{route('admin.teams.index')}}">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-lg">
        <div class="row mb-md">
            <div class="col-12 text-center pt-l">
                <h1 class="mb-xl"> Add Team Member</h1>
                @include('layouts.message')
            </div>
        </div>
        <form id="team-form" action="{{ route('teams.store') }}" method="post">
            @csrf
            <div class="doc-example">
                <div class="d-flex justify-content-between">
                    <div class="form-group event">
                        <label for="first_name">First Name<span class="text-danger">*</span></label>
                        <input class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" />
                    </div>
                    <div class="form-group event">
                        <label for="last_name">Last Name<span class="text-danger">*</span></label>
                        <input class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" />
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group event">
                        <label for="position">Position<span class="text-danger">*</span></label>
                        <input class="form-control" id="position" name="position" value="{{ old('position') }}" />
                    </div>
                    <div class="form-group event">
                        <label for="facebook">Facebook<small class="text-danger">(Optional)</small></label>
                        <input class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}" />
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group event">
                        <label for="twitter">Twitter<small class="text-danger">(Optional)</small></label>
                        <input class="form-control" id="twitter" name="twitter" value="{{ old('twitter') }}" />
                    </div>
                    <div class="form-group event">
                        <label for="youtube">Youtube<small class="text-danger">(Optional)</small></label>
                        <input class="form-control" id="youtube" name="youtube" value="{{ old('youtube') }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="image"> Upload Blog Image <small class="text-danger">(Optional)</small></label>
                    <div>
                        <input id='image' name='image' type="file" />
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-opacity-primary btn-sm mr-2">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

@section('script')
<script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
<script src="/dashboard/dist/assets/js/custom/team.js"></script>
@endsection
