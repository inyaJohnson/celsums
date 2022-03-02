@extends('layouts.template')
@section('content')
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1">
                    <picture>
                        <source srcset="/template/assets/img/promo_1.jpg" media="(min-width: 835px)" />
                        <source srcset="/template/assets/img/834promo_1.jpg" media="(min-width: 376px)" /><img
                            class="img--bg" src="/template/assets/img/375promo_1.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>We help all people in need</span>
                                                <span>around the world.</span>
                                            </h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish
                                                smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier
                                                fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a
                                                class="button promo-slider__button button--primary" href="#">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="/template/assets/img/promo_2.jpg" media="(min-width: 835px)" />
                        <source srcset="/template/assets/img/834promo_2.jpg" media="(min-width: 376px)" /><img
                            class="img--bg" src="/template/assets/img/375promo_2.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Our Helping</span><br /><span>around the
                                                    world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish
                                                smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier
                                                fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a
                                                class="button promo-slider__button button--primary" href="#">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-3">
                    <picture>
                        <source srcset="/template/assets/img/promo_3.jpg" media="(min-width: 835px)" />
                        <source srcset="/template/assets/img/834promo_3.jpg" media="(min-width: 376px)" /><img
                            class="img--bg" src="/template/assets/img/375promo_3.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Helpo Volounteers</span><br /><span>Around
                                                    the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish
                                                smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier
                                                fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a
                                                class="button promo-slider__button button--primary" href="#">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- promo socials start-->
            <ul class="promo-socials">
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a></li>
            </ul>
            <!-- promo socials end-->
            <!-- promo pannel start-->
            <div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
                <div class="promo-pannel__video"><img class="img--bg" src="img/video_block.jpg" alt="image" /><a
                        class="video-trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span>Watch our
                            video</span><i class="fa fa-play" aria-hidden="true"></i></a></div>
                <div class="promo-pannel__phones">
                    <p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+180012345678">+
                        1800 - 123 456 78</a><a class="promo-pannel__link" href="tel:+18009756511">+ 1800 - 975 65 11</a>
                </div>
                <div class="promo-pannel__email">
                    <p class="promo-pannel__title">Email</p><a class="promo-pannel__link"
                        href="mailto:support@helpo.org">support@helpo.org</a>
                </div>
            </div>
            <!-- promo pannel end-->
            <!-- slider nav start-->
            <div class="slider__nav slider__nav--promo">
                <div class="promo-slider__count"></div>
                <div class="slider__arrows">
                    <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- slider nav end-->
        </section>
        <!-- promo end-->
        <!-- about us start-->
        <section class="section about-us" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
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
                        <a class="button button--primary" href="{{ route('about') }}">More About</a>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="info-box"><img class="img--layout" src="/template/assets/img/about_layout.png"
                                alt="img" /><img class="img--bg" src="/template/assets/img/about-us.jpg" alt="img" />
                            <h4 class="info-box__title">We are Awesome Volounteer Team</h4>
                            <p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish
                                shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                            <a class="info-box__link" href="volunteer.html">Become a volounteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us end-->
        <!-- icons section start-->
        <section class="section icons-section no-padding-top">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--center"><span class="heading__pre-title">Services</span>
                            <h2 class="heading__title"><span>What we do</span> <span>for all people</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_1-1.png"
                                    alt="img" />
                                <svg class="icon icon-item__icon icon--red">
                                    <use xlink:href="#donation"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>Medicine Help</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout"
                                    src="/template/assets/img/icon_2-2.png" alt="img" />
                                <svg class="icon icon-item__icon icon--orange">
                                    <use xlink:href="#church"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>We Build and Create</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout"
                                    src="/template/assets/img/icon_3-3.png" alt="img" />
                                <svg class="icon icon-item__icon icon--green">
                                    <use xlink:href="#blood"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>Water Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout"
                                    src="/template/assets/img/icon_4-4.png" alt="img" />
                                <svg class="icon icon-item__icon icon--blue">
                                    <use xlink:href="#charity"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>We Care About</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- icons section end-->
        <!-- causes start-->
        <section class="section causes"><img class="causes__bg" src="/template/assets/img/causes_img.png" alt="img" />
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
                            <h2 class="heading__title"><span>Helpo</span> <span>Causes</span></h2>
                            <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento
                                splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 d-none d-xl-block">
                        <div class="row offset-margin">
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    <div class="counter-item__top">
                                        <h6 class="counter-item__title">People We Helped on 2018</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">200</span><span>k</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    <div class="counter-item__top">
                                        <h6 class="counter-item__title">Dollars We Collected</h6>
                                    </div>
                                    <div class="counter-item__lower"><span
                                            class="js-counter">65</span><span>bil</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end margin-bottom">
                    <div class="col-sm-6"><a class="button button--primary" href="/template/assets/causes.html">More
                            Causes</a></div>
                    <div class="col-sm-6 d-flex justify-content-sm-end">
                        <!-- slider nav start-->
                        <div class="slider__nav causes-slider__nav">
                            <div class="slider__arrows">
                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </div>
                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- slider nav end-->
                    </div>
                </div>
            </div>
            <div class="causes-holder offset-margin">
                <div class="causes-holder__wrapper">
                    <div class="causes-slider offset-margin">
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="/template/assets/cause-details.html">Water
                                                Delivery in Africa</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery
                                        </div><img class="img--bg" src="/template/assets/img/causes_1.jpg"
                                            alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>25 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged:
                                                </span><span>20 350$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a
                                                href="/template/assets/cause-details.html">Health in other Countries</a>
                                        </h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #F36F8F">Medicine</div>
                                        <img class="img--bg" src="/template/assets/img/causes_2.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 23%;">
                                                <div class="progress-bar__value">23%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>14 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged: </span><span>6
                                                    098$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="/template/assets/cause-details.html">We
                                                Build and Create</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #2EC774">Education</div>
                                        <img class="img--bg" src="/template/assets/img/causes_3.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 51%;">
                                                <div class="progress-bar__value">51%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>150 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged:
                                                </span><span>76 500$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a
                                                href="/template/assets/cause-details.html">Healthy Food</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #F8AC3A">Food</div><img
                                            class="img--bg" src="/template/assets/img/causes_4.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 50%;">
                                                <div class="progress-bar__value">50%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>50 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged:
                                                </span><span>25 000$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- causes end-->
        <!-- projects start-->
        <section class="section projects no-padding-top no-padding-bottom">
            <div class="container">
                <div class="row align-items-end margin-bottom">
                    <div class="col-lg-9">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
                            <h2 class="heading__title"><span>Helpo</span> <span>Projects</span></h2>
                            <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray
                                deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc
                                sucker, yellowtail kingfish </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters projects-masonry">
                <div
                    class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--vertical">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_1.jpg" alt="img" /></div>
                    <div class="projects-masonry__text" style="background-color: #2EC774;">
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #49C2DF;">Water Delivery</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">More than
                                    One Life Changed</a></h3>
                            <p>Rockweed gunnel; candlefish mail-cheeked fish, yellowtail snapper cuskfish elasmobranch
                                seamoth triggerfish gar </p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_2.jpg" alt="img" /></div>
                    <div class="projects-masonry__text" style="background-color: #9BC35E;">
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #F36F8F;">Medicine</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">Helpo for
                                    Help</a></h3>
                            <p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish
                                shortnose greeneye fusilier fish silver carp</p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_3.jpg" alt="img" />
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #F8AC3A;">Food</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">Help for
                                    Children of the East</a></h3>
                            <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                                pelican eel. Spinefoot coelacanth eagle ray </p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_4.jpg" alt="img" />
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #2EC774;">Education</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">Help for
                                    Children of the East</a></h3>
                            <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                                pelican eel. Spinefoot coelacanth eagle ray </p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_5.jpg" alt="img" /></div>
                    <div class="projects-masonry__text" style="background-color: #E78F51;">
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #2EC774;">Education</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">Help for
                                    Children of the East</a></h3>
                            <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                                pelican eel. Spinefoot coelacanth eagle ray </p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                    <div class="projects-masonry__img"><img class="img--bg"
                            src="/template/assets/img/projects_6.jpg" alt="img" />
                        <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                style="background: #F36F8F;">Medicine</span>
                            <h3 class="projects-masonry__title"> <a href="/template/assets/cause-details.html">Helpo for
                                    Help</a></h3>
                            <p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish
                                shortnose greeneye fusilier fish silver carp</p>
                            <div class="projects-masonry__details-holder">
                                <div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
                                <div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- projects end-->

        <!-- events start-->
        @isset($events)
            <section class="section events"><img class="events__bg" src="/template/assets/img/events_bg.png" alt="img" />
                <div class="container">
                    <div class="row margin-bottom">
                        <div class="col-12">
                            <div class="heading heading--primary heading--center"><span
                                    class="heading__pre-title">Events</span>
                                <h2 class="heading__title"><span>{{ config('app.name') }} Holds</span> <span>for You</span>
                                </h2>
                                <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray
                                    deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-md-6 col-lg-4">
                                <div class="event-item">
                                    <div class="event-item__img"><img class="img--bg"
                                            src="/store/{{ $event->image }}" alt="img" /></div>
                                    <div class="event-item__content">
                                        <h6 class="event-item__title"><a
                                                href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></h6>
                                        <p><b>{{ $event->venue }}</b> </p>
                                        <p><strong>{{ \Carbon\Carbon::parse($event->start_date)->format('F d,') }}</strong>
                                            {{ \Carbon\Carbon::parse($event->start_date)->format('h:i A') }} -
                                            <strong>{{ \Carbon\Carbon::parse($event->end_date)->format('F d,') }}
                                            </strong> {{ \Carbon\Carbon::parse($event->end_date)->format('h:i A') }}
                                        </p>
                                        @if ($event->email != null)
                                            <p><b>Email</b> - {{ $event->email }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 text-center"><a class="button button--primary"
                                href="{{ route('events.index') }}">View all events</a></div>
                    </div>
                </div>
            </section>
        @endisset
        <!-- events end-->
        <!-- text section start-->
        <section class="section text-section"><img class="text-section__bg" src="/template/assets/img/text-section.png"
                alt="img" />
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-section__heading">Volunteer</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
                        <h3 class="text-section__title">Delivering help and hope <br />to children through sponsorship.
                        </h3>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento
                            splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p><a
                            class="button button--primary" href="#">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- text section end-->
        <!-- testimonials style-2 start-->
        <section class="section testimonials--style-2">
            <div class="testimonials--style-2__bg jarallax">
                <picture>
                    <source srcset="/template/assets/img/testimonials_2.jpg" media="(min-width: 992px)" /><img
                        class="jarallax-img" src="/template/assets/img/testimonials_2.jpg" alt="img" />
                </picture>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
                            <h2 class="heading__title"><span>What People</span><br /><span>Says About Us</span></h2>
                        </div>
                        <!-- slider nav start-->
                        <div class="slider__nav testimonials-style-2__nav">
                            <div class="slider__arrows">
                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </div>
                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- slider nav end-->
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonials-slider testimonials-slider--style-2">
                            <div class="testimonials-slider__item">
                                <div class="testimonials-slider__icon">“</div>
                                <div class="testimonials-slider__text">
                                    <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach
                                        summer flounder European minnow black dragonfish orbicular batfish stingray
                                        tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European
                                        eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black
                                        triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned
                                        pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth
                                        yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark
                                        catfish cutlassfish broadband dogfish whalefish.</p>
                                    <div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack
                                            Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider__item">
                                <div class="testimonials-slider__icon">“</div>
                                <div class="testimonials-slider__text">
                                    <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach
                                        summer flounder European minnow black dragonfish orbicular batfish stingray
                                        tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European
                                        eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black
                                        triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned
                                        pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth
                                        yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark
                                        catfish cutlassfish broadband dogfish whalefish.</p>
                                    <div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack
                                            Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider__item">
                                <div class="testimonials-slider__icon">“</div>
                                <div class="testimonials-slider__text">
                                    <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach
                                        summer flounder European minnow black dragonfish orbicular batfish stingray
                                        tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European
                                        eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black
                                        triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned
                                        pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth
                                        yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark
                                        catfish cutlassfish broadband dogfish whalefish.</p>
                                    <div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack
                                            Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials style-2 end-->
        <!-- blog start-->
        @isset($blogs)
            <section class="section blog"><img class="blog__bg" src="/template/assets/img/blog_bg.png" alt="img" />
                <div class="container">
                    <div class="row margin-bottom">
                        <div class="col-12">
                            <div class="heading heading--primary heading--center"><span class="heading__pre-title">News</span>
                                <h2 class="heading__title no-margin-bottom"><span>{{ config('app.name') }}</span>
                                    <span>Blog</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-margin">
                        @foreach ($blogs as $blog)
                            @if ($blog->category->name != 'Food' && $blog->category->name != 'Education')
                                <div class="col-md-6 col-lg-5 col-xl-4" >
                                    <div class="blog-item blog-item--style-1">
                                        <div class="blog-item__img"><img class="img--bg"
                                                src="/store/{{ $blog->image }}" alt="img" /><span class="blog-item__badge"
                                                style="background-color: {{ categoryLabelColor($blog->category->name) }};">{{ $blog->category->name }}</span>
                                        </div>
                                        <div class="blog-item__content">
                                            <h6 class="blog-item__title"><a
                                                    href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                            </h6>
                                            <p>{!! $blog->caption !!}</p>
                                            <div class="blog-item__details"><span
                                                    class="blog-item__date">{{ \Carbon\Carbon::parse($blog->created_at)->format("d M' y") }}</span><span>
                                                    <svg class="icon">
                                                        <use xlink:href="#comment"></use>
                                                    </svg> 501</span></div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-6 col-lg-7 col-xl-8" >
                                    <div class="blog-item blog-item--style-2"><img class="img--bg"
                                            src="/store/{{ $blog->image }}" alt="img" />
                                        <div class="blog-item__content"><span class="blog-item__badge"
                                                style="background-color:{{ categoryLabelColor($blog->category->name) }} ;">{{ $blog->category->name }}</span>
                                            <h6 class="blog-item__title"><a
                                                    href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                            </h6>
                                            <p>{!! $blog->caption !!}</p>
                                        </div>
                                        <div class="blog-item__details"><span class="blog-item__date">
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format("d M' y") }}</span><span>
                                                <svg class="icon">
                                                    <use xlink:href="#comment"></use>
                                                </svg> 501</span></div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endisset
        <!-- blog end-->
        <!-- donors start-->
        <section class="section donors no-padding-top">
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
        <!-- instagram start-->
        <section class="section instagram no-padding-bottom">
            <div class="container">
                <div class="row align-items-end margin-bottom">
                    <div class="col-md-7 col-lg-8">
                        <div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
                            <h2 class="heading__title no-margin-bottom"><span># helpocharity</span></h2>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 text-md-right">
                        <!-- slider nav start-->
                        <div class="slider__nav instagram-slider__nav">
                            <div class="slider__arrows">
                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </div>
                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- slider nav end-->
                    </div>
                </div>
            </div>
            <div class="instagram-slider">
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_1.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_2.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_3.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_4.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_5.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_6.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
                <a class="instagram-slider__item" href="#"><img class="img--bg" src="/template/assets/img/ig_4.jpg"
                        alt="img" /><span class="instagram-slider__icon"><i class="fa fa-instagram"
                            aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i
                            class="fa fa-instagram" aria-hidden="true"></i></span></a>
            </div>
        </section>
        <!-- instagram end-->
        <!-- subscribe start-->
        <section class="subscribe">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4">
                        <h2 class="subscribe__title">Subscribe.</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="subscribe-form" action="javascript:void(0);">
                            <input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail"
                                required="required" />
                            <input class="subscribe-form__submit" type="submit" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe end-->
    </main>
@endsection
