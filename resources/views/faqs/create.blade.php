@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
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
        <form id="faq-form" action="{{ route('faqs.store') }}" method="post">
            @csrf
            <div class="doc-example">
                <div class="form-group ">
                    <input class="form-control" id="question" name="question" required placeholder="Enter Question" />
                </div>
                <div class="quill-container">
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
    <script src="/dashboard/dist/assets/vendors/quill/dist/quill.min.js"></script>
    <script>
        $(document).ready(function() {
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
            var quill = new Quill('.quill-container', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow', // or 'bubble'
                placeholder: 'Enter Answer to Question...'
            });

            $('#faq-form').on('submit', function(e) {
                e.preventDefault();
                var myEditor = document.querySelector('.quill-container');
                var answer = myEditor.children[0].innerHTML;
                $.ajax({
                    'type': 'POST',
                    'data': $(this).serialize() + '&answer=' + answer,
                    'url': $(this).attr('action'),
                    'success': function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success...',
                                text: response.message
                            }).then(function(result) {
                                if (result.value) {
                                    window.location = "/admin/faqs";
                                }
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Ooops...',
                                text: response.message
                            })
                        }
                    },
                    'error': function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ooops...',
                            text: response.error
                        })
                    }
                });
            });
        })
    </script>
@endsection
