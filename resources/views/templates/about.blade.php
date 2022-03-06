@extends('layouts.template')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/about.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="/template/assets/img/about.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Donation</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span
                                    class="promo-primary__pre-title">{{ config('app.name') }}</span>
                                <h1 class="promo-primary__title"><span>About</span><br /><span>Organization</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us start-->
        <section class="section about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="img-box"><img class="img--layout"
                                src="/template/assets/img/about_layout-reverse.png" alt="img" />
                            <div class="img-box__img"><img class="img--bg" src="/template/assets/img/about_2.png"
                                    alt="img" /></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                        <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                            <h2 class="heading__title"><span>Help is Our</span> <span>Main Goal</span></h2>
                        </div>
                        <p><strong>To support women, vulnerable children and youths who are at the receiving end of societal
                                problems to live quality life</strong></p>
                        <p>Centre for Life Support Mission (CELSUM) is a non-governmental, non-profit organization and
                            registered with Corporate Affair Commission (CAC) in Nigeria. We are also variously registered
                            with different units of government, organizations and coalitions in many states in Nigeria.
                        </p>
                        <p>
                            Our
                            vision is ‘empowering rural community members
                            especially women, vulnerable children, orphans and youths with information, education, training,
                            counseling and skill acquisition that will reduce the vulnerability to easily avoidable health
                            and development problems, to live quality life’.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us end-->
        <!-- about us style-2 start-->
        <section class="section about-us about-us--style-2 no-padding-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="about-us__subtitle">Improved reproductive health and social wellbeing of women,
                            vulnerable children, youths and orphans in Nigeria by</h4>
                        <ul>
                            <li>Enhancing risk reduction of individuals and communities in social hazard.</li>
                            <li>Carrying out researches with the view to using reports emanating from such researches to
                                find solutions to social and cultural problems.</li>
                            <li>Disseminating information and educate society on reproductive health and its related issues.
                            </li>
                            <li>Raising awareness within the society and to create an environment that gives help and
                                support to people.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="about-us__text-aside">Our Mission</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us style-2 end-->
        <!-- video block start-->
        <section class="section video-block no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-frame"><img class="img--bg" src="/template/assets/img/video_frame.png"
                                alt="frame" /><a class="video-trigger video-frame__trigger"
                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span class="video-frame__icon"><i
                                        class="fa fa-play" aria-hidden="true"></i></span><span
                                    class="video-frame__text">Watch our video</span></a><img class="video-frame__img-layout"
                                src="/template/assets/img/video_frame-layout.png" alt="layout" /></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video block end-->
        <!-- statistics start-->
        <section class="section statistics no-padding-top">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary heading--center"><span class="heading__pre-title">What we
                                Do</span>
                            <h2 class="heading__title no-margin-bottom"><span>Our</span> <span>Statistics</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row offset-margin">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_1.png"
                                    alt="img" /><span class="js-counter">20</span></div>
                            <div class="icon-item__text">
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_2.png"
                                    alt="img" /><span class="js-counter">32</span></div>
                            <div class="icon-item__text">
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_3.png"
                                    alt="img" /><span class="js-counter">200 </span><span>+</span></div>
                            <div class="icon-item__text">
                                <p>Thousand People Helped</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_4.png"
                                    alt="img" /><span class="js-counter">65 </span><span>+</span></div>
                            <div class="icon-item__text">
                                <p>Outreach Organized</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- statistics end-->
        <!-- team start-->
        <section class="section team">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading heading--primary"><span class="heading__pre-title">Team</span>
                            <h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom">
                    @foreach ($team as $member)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <!-- iteam start-->
                            <div class="team-item team-item--rounded">
                                <ul class="team-item__socials">
                                    @if (isset($member->facebook) && $member->facebook != null)
                                        <li><a href="{{ $member->facebook }}"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                    @endif
                                    @if (isset($member->twitter) && $member->twitter != null)
                                        <li><a href="{{ $member->twitter }}"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                    @endif
                                    @if (isset($member->youtube) && $member->youtube != null)
                                        <li><a href="{{ $member->youtube }}"><i class="fa fa-youtube-play"
                                                    aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                                <div class="team-item__img-holder"><img class="img--layout"
                                        src="/template/assets/img/team_1.png" alt="layout" />
                                    <div class="team-item__img"><img class="img--bg"
                                            src="/store/{{ $member->image }}" alt="teammate" /></div>
                                </div>
                                <div class="team-item__description">
                                    <div class="team-item__name">{{ $member->first_name . ' ' . $member->last_name }}
                                    </div>
                                    <div class="team-item__position">{{ $member->position }}</div>
                                </div>
                            </div>
                            <!-- iteam end-->
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- pagination start-->
                        {{ $team->links('layouts.pagination-links') }}
                        <!-- pagination end-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center"><a class="button button--primary"
                            href="#">Become our
                            volunteer</a></div>
                </div>


            </div>
        </section>
        <!-- team end-->
        <!-- donors start-->
        <section class="section donors">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary heading--center"><span
                                class="heading__pre-title">Donors</span>
                            <h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- donors slider start-->
                        <div class="slider-holder">
                            <div class="donors-slider donors-slider--style-1">
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="/template/assets/img/donor_1.png"
                                            alt="donor" /></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="/template/assets/img/donor_2.png"
                                            alt="donor" /></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="/template/assets/img/donor_3.png"
                                            alt="donor" /></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="/template/assets/img/donor_4.png"
                                            alt="donor" /></div>
                                </div>
                            </div>
                        </div>
                        <!-- donors slider end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- donors end-->
    </main>
@endsection
