@extends('layouts.dashboard')
@section('css')
    {{-- <link rel="stylesheet" href="dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" /> --}}
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/quill/dist/quill.snow.css" />
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
            <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm mr-2" href="#">Add new User </a>
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
        
        <h2 class="doc-section-title" id="examples">Quill Editor<a class="section-link" href="#examples"></a></h2>
        <div class="doc-example">
            <div id="quill-container">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br /></p>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection

@section('script')
    <script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
    <script src="/dashboard/dist/assets/vendors/quill/dist/quill.min.js"></script>
    <script type="text/javascript">
        var toolbarOptions = [
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            ['blockquote', 'code-block'],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
        var quill = new Quill('#quill-container', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow' // or 'bubble'
        });
    </script>
@endsection
