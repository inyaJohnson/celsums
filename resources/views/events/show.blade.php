@extends('layouts.template')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/event-details.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="/template/assets/img/event-details.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Happiness</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Celsums</span>
                                <h1 class="promo-primary__title"><span>{{$event->name}}</span> <span>Event</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article start-->
        <section class="section article"><img class="article__bg" src="/template/assets/img/events_inner-bg.png" alt="img" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <div class="article__img"><img src="/store/{{$event->image}}" alt="img" /></div>
                        <p><strong>{{$event->title}}</strong></p>
                        {!! $event->description !!}
                        <div class="article__text-filled text-filled">{!! $event->caption !!}</div>

                        <div class="article-information">
                            <div class="row offset-30">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="article-information__item" style="background: #32C876;">
                                        <h6 class="article-information__title">Details</h6>
                                        <div class="article-information__details">
                                            <div class="article-information__details-item">
                                                <span>Start:</span><span> {{\Carbon\Carbon::parse($event->start_date)->format("F d' y")}}</span></div>
                                            <div class="article-information__details-item"><span>Finish:</span><span>{{\Carbon\Carbon::parse($event->end_date)->format("F d' y")}}</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="article-information__item" style="background: #F76588;">
                                        <h6 class="article-information__title">Organizer</h6>
                                        <div class="article-information__details">
                                            <div class="article-information__details-item"><span>Phone:</span><a
                                                href="tel:{{$event->phone}}">{{$event->phone}}</a></div>
                                            <div class="article-information__details-item"><span class="fas fa-envelop"></span><a
                                                    href="mailto:{{$event->email}}">{{$event->email}}</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="article-information__item" style="background: #49C2DF;">
                                        <h6 class="article-information__title">Venue</h6>
                                        <div class="article-information__details">
                                            <div class="article-information__details-item"><span>Location:</span><span>{{$event->venue}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article end-->
        <!-- additional events start-->
        <section class="section additional-events no-padding-top no-padding-bottom">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="additional-event"><a class="additional-event__img" href="event-details.html"><img
                                class="img--bg" src="/template/assets/img/additional_1.jpg" alt="img" />
                            <div class="additional-event__text"><span>The Culture of</span><span>India. Volunteer</span>
                            </div>
                        </a></div>
                </div>
                <div class="col-md-6">
                    <div class="additional-event"><a class="additional-event__img" href="event-details.html"><img
                                class="img--bg" src="/template/assets/img/additional_2.jpg" alt="img" />
                            <div class="additional-event__text"><span>Trinity</span><span>Trash Bash</span></div>
                        </a></div>
                </div>
            </div>
        </section>
        <!-- additional events end-->
    </main>
@endsection
