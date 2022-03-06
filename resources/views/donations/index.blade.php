@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.css" />
@endsection
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/template/assets/img/donors.jpg" media="(min-width: 992px)" /><img class="img--bg" src="/template/assets/img/donors.jpg"
                    alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Mercy</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{config('app.name')}}</span>
                                <h1 class="promo-primary__title"><span>Donations</span> <span>& Help</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contacts start-->
        <section class="section contacts padding-top">
            <div class="contacts-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <form id='donation-form' class="form message-form"  method="POST" action="{{route('donations.store')}}">
                                @csrf
                                <h6 class="form__title">Make a Donation</h6><span class="form__text">* The following
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
                                        <select class="form__field" name="item"  required  >
                                            <option value="Money">Money</option>
                                            <option value="Clothes">Clothes</option>
                                            <option value="Food items">Food items</option>
                                            <option value="Mosquito nets">Mosquito nets</option>
                                            <option value="School stationery">School stationery</option>
                                        </select>
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
            </div>
        </section>
        <!-- contacts end-->
        <!-- text section start-->
        <section class="section text-section text-section--style-2"><img class="text-section__bg-left"
                src="/template/assets/img/text-section_left.png" alt="img" /><img class="text-section__bg-right"
                src="/template/assets/img/text-section_right.png" alt="img" />
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-section__heading">Thank You</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
                        <h3 class="text-section__title">To all our donors, <br />partners and volunteers</h3>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento
                            splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- text section end-->
    </main>
@endsection
@section('script')
<script src="/dashboard/dist/assets/vendors/sweetalert2/dist/sweetalert2.js"></script>
<script src="/dashboard/dist/assets/js/custom/donation.js"></script>
@endsection
