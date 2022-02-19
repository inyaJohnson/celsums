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
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2"
                    href="{{ route('admin.blogs.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-lg">
        <div class="row mb-md">
            <div class="col-12 text-center pt-l">
                <h1 class="mb-xl"> Create Frequently Asked Questions</h1>
                @include('layouts.message')
            </div>
        </div>
        <form id="blog-form" action="{{ route('blogs.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="doc-example">
                <div class="form-group ">
                    <input class="form-control" id="title" name="title" required value="{{ old('title') }}" autofocus
                        placeholder="Enter Title" />
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control js-example-basic-single" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selceted' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" >Story</label>
                    <textarea id="description" name="description" required> {{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="caption">Summary <span class="text-danger">(Optional)</span></label>
                    <textarea id="caption" name="caption">{{ old('caption') }}</textarea>
                </div>

                <div class="form-group">
                    <h2 class="doc-section-title" id="examples"> Upload Blog Image <small class="text-danger">(Optional)</small></h2>
                    <div class="doc-example">
                        <input name='image' type="file" />
                    </div>
                </div>

                <div class="form-group d-fle">
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
    <script src="/dashboard/dist/assets/js/custom/blog.js"></script>
@endsection
