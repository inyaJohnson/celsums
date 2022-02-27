@extends('layouts.template')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/typography.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="/template/assets/img/typography.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Charity</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{config('app.name')}}</span>
                                <h1 class="promo-primary__title"><span>Gallery</span> <span>Masonry</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery start-->
        <section class="section gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- filter panel start-->
                        <ul class="filter-panel">
                            <li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All</span></li>
                            @foreach ($categories as $category)
                                <li class="filter-panel__item" data-filter=".category_{{ $category->id }}">
                                    <span>{{ $category->name }}</span></li>
                            @endforeach
                        </ul>
                        <!-- filter panel end-->
                    </div>
                </div>
            </div>
            <div class="row no-gutters gallery-masonry">

                @foreach ($photos as $photo)
                    <div class="col-6 col-md-4 gallery-masonry__item category_{{$photo->id}}"><a
                            class="gallery-masonry__img gallery-masonry__item--height-2"
                            href="/store/{{$photo->image}}" data-fancybox="gallery"><img class="img--bg"
                                src="/store/{{$photo->image}}" alt="img" />
                            <h6 class="gallery-masonry__description">{{$photo->title}}</h6>
                        </a></div>
                @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center"><a class="button gallery__button button--primary" href="#">More
                            Images</a></div>
                </div>
            </div>
        </section>
        <!-- gallery end-->
        <!-- bottom bg start-->
        <section class="bottom-background">
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
