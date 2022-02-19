@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/summernote/summernote-lite.min.css" />
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
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2" href="{{route('admin.faqs.index')}}">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-lg">
        <div class="row mb-md">
            <div class="col-12 text-center pt-l">
                <h1 class="mb-xl"> Edit Frequently Asked Questions</h1>
                @include('layouts.message')
            </div>
        </div>
        <form id="faq-form" action="{{ route('faqs.update', $faq->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="doc-example">
                <div class="form-group ">
                    <input class="form-control" id="question" name="question" required placeholder="Enter Question"
                        value="{{ $faq->question }}" />
                </div>

                <textarea id="summernote" name="answer">{!! $faq->answer !!}</textarea>

                <div class="form-group d-flex justify-content-end">
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
<script src="/dashboard/dist/assets/vendors/summernote/summernote-lite.min.js"></script>
<script src="/dashboard/dist/assets/js/custom/faq.js"></script>
@endsection
