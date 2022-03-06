@extends('layouts.template')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/events.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="/template/assets/img/events.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Happiness</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span
                                    class="promo-primary__pre-title">{{ config('app.name') }}</span>
                                <h1 class="promo-primary__title"><span>Our</span> <span>Events</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events inner start-->
        <section class="section events-inner"><img class="events-inner__bg" src="/template/assets/img/events_inner-bg.png"
                alt="img" />
            <div class="container">
                <div class="row offset-30">
                    @foreach ($events as $event)
                        <div class="col-xl-10 offset-xl-1">
                            <div class="upcoming-item">
                                <div class="upcoming-item__date">
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d') }}</span><span>{{ \Carbon\Carbon::parse($event->start_date)->format('M, y') }}</span>
                                </div>
                                <div class="upcoming-item__body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-xl-4">
                                            <div class="upcoming-item__img"><img class="img--bg"
                                                    src="/store/{{ $event->image }}" alt="img" /></div>
                                        </div>
                                        <div class="col-lg-7 col-xl-8">
                                            <div class="upcoming-item__description">
                                                <h6 class="upcoming-item__title"><a
                                                        href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
                                                </h6>
                                                <p>{!! $event->caption !!}</p>
                                                <div class="upcoming-item__details">
                                                    <p>
                                                        <svg class="icon">
                                                            <use xlink:href="#clock"></use>
                                                        </svg>
                                                        <strong>{{ \Carbon\Carbon::parse($event->start_date)->format('F d,') }}</strong>
                                                        {{ \Carbon\Carbon::parse($event->start_date)->format('h:i A') }} -
                                                        <strong>{{ \Carbon\Carbon::parse($event->end_date)->format('F d,') }}
                                                        </strong>
                                                        {{ \Carbon\Carbon::parse($event->end_date)->format('h:i A') }}
                                                    </p>
                                                    <p>
                                                        <svg class="icon">
                                                            <use xlink:href="#placeholder"></use>
                                                        </svg> <strong>{{ $event->venue }}</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- pagination start-->
                        {{ $events->links('layouts.pagination-links') }}
                        <!-- pagination end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- events inner end-->
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
