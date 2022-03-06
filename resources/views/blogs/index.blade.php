@extends('layouts.template')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/blog.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="img/blog.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{config('app.name')}}</span>
                                <h1 class="promo-primary__title"><span>Blog</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog start-->
        <section class="section blog background--brown"><img class="blog__bg"
                src="/template/assets/img/events_inner-bg.png" alt="img" />
            <div class="container">
                <div class="row offset-margin">
                    @foreach ($blogs as $blog)
                        @if ($blog->category->name == 'Food' || $blog->category->name == 'Education')
                            <div class="col-md-6 col-lg-7 col-xl-8">
                                <div class="blog-item blog-item--style-2"><img class="img--bg"
                                        src="/store/{{$blog->image}}" alt="img" />
                                    <div class="blog-item__content"><span class="blog-item__badge"
                                            style="background-color:{{ categoryLabelColor($blog->category->name) }} ;">{{ $blog->category->name }}</span>
                                        <h6 class="blog-item__title"><a
                                                href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h6>
                                        <p>{!! $blog->caption !!}</p>
                                    </div>
                                    <div class="blog-item__details"><span class="blog-item__date">
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format("d M' y") }}</span><span>
                                            <svg type="button" class="icon comment">
                                                <use xlink:href="#comment"></use>
                                            </svg> 501</span></div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 col-lg-5 col-xl-4">
                                <div class="blog-item blog-item--style-1">
                                    <div class="blog-item__img"><img class="img--bg"
                                            src="/store/{{ $blog->image }}" alt="img" /><span class="blog-item__badge"
                                            style="background-color: {{ categoryLabelColor($blog->category->name) }};">{{ $blog->category->name }}</span>
                                    </div>
                                    <div class="blog-item__content">
                                        <h6 class="blog-item__title"><a
                                                href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h6>
                                        <p>{!! $blog->caption !!}</p>
                                        <div class="blog-item__details"><span
                                                class="blog-item__date">{{ \Carbon\Carbon::parse($blog->created_at)->format("d M' y") }}</span><span>
                                                <svg type="button" class="icon comment" data-id="{{$blog->id}}" >
                                                    <use xlink:href="#comment"></use>
                                                </svg> 501</span></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- pagination start-->
                        {{$blogs->links("layouts.pagination-links")}}
                        <!-- pagination end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end-->
        <!-- bottom bg start-->
        <section class="bottom-background background--brown">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-background__img"><img src="/template/assets/img/bottom-bg.png" alt="img" /></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bottom bg end-->
    </main>
@endsection
@section('script')
<script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
<script src="/dashboard/dist/assets/js/custom/comment.js"></script>
@endsection

