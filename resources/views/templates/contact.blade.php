@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/contacts.jpg" media="(min-width: 992px)" /><img class="img--bg"
                    src="/template/assets/img/contacts.jpg" alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{config('app.name')}}</span>
                                <h1 class="promo-primary__title"><span>Contacts</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start-->
        <section class="section contacts">
            <div class="container">
                <div class="row offset-margin">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_1-1.png" alt="img" />
                                <svg class="icon icon-item__icon icon--red">
                                    <use xlink:href="#location-pin"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>Adress: No 2, Ayoola street Olonkoro, Osogbo</p>
                                <p>Alt. Adress: 15 Gowers street Rochdale OL162LN, Manchester</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_2-2.png" alt="img" />
                                <svg class="icon icon-item__icon icon--orange">
                                    <use xlink:href="#phone-call"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>Phone: <a class="icon-item__link" href="tel:+2348033487828">+ 234 803 3487 828</a> <a
                                        class="icon-item__link" href="tel:+2347401407122">+234 740 1407 122</a>
                                        <a
                                        class="icon-item__link" href="tel:+2348033890408">+234 803 3890 408</a>
                                    </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_3-3.png" alt="img" />
                                <svg class="icon icon-item__icon icon--green">
                                    <use xlink:href="#envelope"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>Email: <a class="icon-item__link" href="mailto:support@celsum.com">support@celsum.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="/template/assets/img/icon_4-4.png" alt="img" />
                                <svg class="icon icon-item__icon icon--blue">
                                    <use xlink:href="#share"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <!-- socials start-->
                                <ul class="socials">
                                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link" href="#"><i
                                                class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i
                                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                                <!-- socials end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->
        <!-- contacts start-->
        <section class="section contacts no-padding-top">
            <div class="contacts-wrapper">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-6">
                            <form id='contact-form' class="form message-form"  method="POST" action="{{route('contactMessage')}}">
                                @csrf
                                <h6 class="form__title">Send Message</h6><span class="form__text">* The following
                                    info is required</span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="form__field" type="text" name="first_name"
                                            placeholder="First Name *" required="required" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field" type="text" name="last_name" placeholder="Last Name *"
                                            required="required" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field" type="email" name="email" placeholder="Email *"
                                            required="required" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field" type="tel" name="phone_number" placeholder="Phone" />
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form__message form__field" name="message"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="form__submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contacts-wrapper__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0885017886685!2d4.552599814154516!3d7.780440709434628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103787e707c1f9a7%3A0x34150d316472e717!2s2%20Ayoola%20St%2C%20230103%2C%20Osogbo!5e0!3m2!1sen!2sng!4v1646371999757!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- contacts end-->
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
@section('script')
    <script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
    <script src="/template/assets/js/custom/contact.js"></script>
@endsection

