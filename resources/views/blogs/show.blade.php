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
                    src="/template/assets/img/blog.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Celsums</span>
                                <h1 class="promo-primary__title"><span>Blog</span> <span>Post</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog post start-->
        <section class="section blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="blog-post__top">
                            <div class="blog-post__img"><img class="img--bg" src="/store/{{ $blog->image }}"
                                    alt="img" />
                            </div>
                            <div class="blog-post__description">
                                <div class="row">
                                    <div class="col-6"><span
                                            class="blog-post__name">Posted By - {{ $blog->creator->first_name . ' ' . $blog->creator->last_name }}</span>
                                    </div>
                                    <div class="col-6 text-right"><span
                                            class="blog-post__date">{{ $blog->created_at->format("d M' y") }}</span><span>
                                            <svg type="button" class="icon comment">
                                                <use xlink:href="#comment"></use>
                                            </svg>{{ $blog->comments_count }}</span></div>
                                </div>
                            </div>
                        </div>
                        <h5 class="blog-post__title">{{ $blog->title }}</h5>
                        {!! $blog->content !!}
                        <div class="text-filled">{!! $blog->caption !!}</div>
                        <div class="blog-post__details">
                            <div class="row align-items-center">
                                <div class="col-lg-3 text-center text-lg-left"><span
                                        class="blog-post__name">{{ $blog->creator->first_name . ' ' . $blog->creator->last_name }}</span>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="tags"><a class="blog-post__tag" href="#">#Donate</a><a
                                            class="blog-post__tag" href="#">#Homelesspeople</a><a class="blog-post__tag"
                                            href="#">#Poor</a><a class="blog-post__tag" href="#">#Child</a></div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="blog-post__socials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h6 class="blog-post__title">Comments</h6>
                        <div class="comments">
                            @foreach ($blog->comments as $comment)
                                <div class="comments__item">
                                    <div class="comments__item-img"><img class="img--bg"
                                            src="/template/assets/img/comment_2.jpg" alt="img" /></div>
                                    <div class="comments__item-description">
                                        <div class="row align-items-center">
                                            <div class="col-9 d-flex flex-wrap align-items-baseline">
                                                    {{-- <span class="comments__item-name">John Walker</span> --}}
                                                    <span class="comments__item-date"> {{ $comment->created_at->format("d M' y H:ia") }}</span></div>
                                            <div class="col-3 text-right"><span class="comments__item-action">
                                                    <svg class="icon">
                                                        <use xlink:href="#previous"></use>
                                                    </svg></span></div>
                                            <div class="col-12">
                                                <div class="comments__item-text">
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="comments__item comments__item--sub">
                                    <div class="comments__item-img"><img class="img--bg"
                                            src="/template/assets/img/comment_3.jpg" alt="img" /></div>
                                    <div class="comments__item-description">
                                        <div class="row align-items-center">
                                            <div class="col-9 d-flex flex-wrap align-items-baseline">
                                                <span class="comments__item-name">Helen Dollens</span>
                                                <span
                                                    class="comments__item-date">23 Jan'19 02:15PM</span></div>
                                            <div class="col-3 text-right"><span class="comments__item-action">
                                                    <svg class="icon">
                                                        <use xlink:href="#previous"></use>
                                                    </svg></span></div>
                                            <div class="col-12">
                                                <div class="comments__item-text">
                                                    <p>Cow shark herring smelt trout-perch Asian carps sailback
                                                        scorpionfish; dragon goby lemon sole triplefin blenny hog sucker.
                                                        Smelt sleeper shovelnose sturgeon merluccid hake </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="blog-post__category-holder">
                            <h6 class="blog-post__title">Category</h6>
                            <ul class="blog-post__category">

                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <h6 class="blog-post__title">Recent Posts</h6>
                        <div class="recent-posts">
                            @foreach ($recentBlogs as $recentBlog)
                                <div class="recent-posts__item">
                                    <div class="recent-posts__item-img"><img class="img--bg"
                                            src="/store/{{ $recentBlog->image }}" alt="img" /></div>
                                    <div class="recent-posts__item-description"><a class="recent-posts__item-link"
                                            href="blog-post.html">{{ $recentBlog->title }}</a><span
                                            class="recent-posts__item-value">{{ $recentBlog->created_at->format("d M' y") }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog post end-->
        <!-- section start-->
        <section class="section background--brown">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary">
                            <h2 class="heading__title no-margin-bottom"><span>Similar</span> <span>Posts</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row offset-margin">
                    @foreach ($similarBlogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item blog-item--style-1">
                                <div class="blog-item__img"><img class="img--bg" src="/store/{{ $blog->image }}"
                                        alt="img" /><span class="blog-item__badge"
                                        style="background-color: {{ categoryLabelColor($blog->category->name) }};">{{ $blog->category->name }}</span>
                                </div>
                                <div class="blog-item__content">
                                    <h6 class="blog-item__title"><a
                                            href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    <p>{!! $blog->caption !!}</p>
                                    <div class="blog-item__details"><span
                                            class="blog-item__date">{{ \Carbon\Carbon::parse($blog->created_at)->format("d M' y") }}</span><span>
                                            <svg class="icon">
                                                <use xlink:href="#comment"></use>
                                            </svg> 501</span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- section end-->
        <!-- bottom bg start-->
        <section class="bottom-background background--brown">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-background__img"><img src="/template/assets/img/bottom-bg.png" alt="img" />
                        </div>
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
