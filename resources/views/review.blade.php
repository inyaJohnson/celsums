@extends('layouts.template')

@section('parent-section')
    <!-- Parent Section -->

    <section class="page_content_parent_section">


        <!-- Header Section -->

        <header>

            <!-- Navbar Section -->

            <!-- Navbar Section -->

            <nav class="navbar navbar-fixed-top ">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <!--second nav button -->
                    <div id="menu_bars" class="right menu_bars">
                        <span class="t1"></span>
                        <span class="t2"></span>
                        <span class="t3"></span>
                    </div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand blue_logo" href="{{url('/')}}"><img src="{{asset('template/images/logo.png')}}"
                                                                            alt="logo"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse  ">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="{{url('/')}}#home">Home</a></li>
                                <li><a href="{{url('/')}}#about">About</a></li>
                                <li><a href="{{url('/')}}#services">Services</a></li>
                                <li><a href="{{url('/')}}#pricing_table">Pricing</a></li>
                                <li><a href="{{url('/')}}#team">Team</a></li>
                                <li><a href="{{url('/')}}#review" >Review</a></li>
                                <li><a href="{{url('/')}}#contact-form" >Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- /.navbar-collapse -->

                    </div>
                    <div class="sidebar_menu">
                        <nav class="pushmenu pushmenu-right">
                            <a class="push-logo" href="{{url('/')}}"><img src="{{asset('template/images/logo-dark.png')}}"
                                                               alt="logo"></a>
                            <ul class="push_nav centered">
                                <li class="clearfix">
                                    <a href="{{url('/')}}#home"><span>01.</span>Home</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{url('/')}}#about"> <span>02.</span>About</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{url('/')}}#services"> <span>03.</span>Services</a>

                                </li>

                                <li class="clearfix">
                                    <a href="{{url('/')}}#pricing_table"> <span>04.</span>Pricing</a>

                                </li>

                                <li class="clearfix">
                                    <a href="{{url('/')}}#team"> <span>05.</span>Team</a>

                                </li>

                                <li class="clearfix">
                                    <a href="{{url('/')}}#review"> <span>06.</span>Review</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{url('/')}}#contact-form"> <span>07.</span>Contact Us</a>

                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <ul class="social_icon black top25 bottom20 list-inline">

                                <li><a href="https://www.facebook.com/richard.joseph.lammars" class="navy_blue facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                                <li><a href="#" class="navy_blue twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                                <li><a href="#" class="navy_blue pinterest"><i class="fa fa-fw fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="navy_blue linkedin"><i class="fa fa-linkedin"
                                                                              aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>

            <!-- /Navbar Section -->

        </header>

        <!-- /Header Section -->

        <section class="consult_banner_section"
                 style="background-image: linear-gradient(60deg,  #337ab7, #337ab7); padding: 50px">
        </section>

        <!-- Contact Form Section -->

        <section class="contact_form_section" id="contact-form">

            <div class="container">

                <div class="row">

                    <div class="contact_form_inner big_padding clearfix">
                        <div class="col-md-6 wow slideInLeft">

                            <div class="contact_form_detail  center_on_mobile">

                                <p class="default_small_heading raleway blue_color font_200">Say Something</p>

                                <h3 class="default_section_heading raleway navy_blue"><span
                                            class="font_200">Drop your</span> Review</h3>

                                <hr class="default_divider default_divider_blue " style="margin-left: 0;">

                                <p class="default_text_light default_text open_sans">
                                    At Capital Investment Fund we provide professional financial trading services through state-of-art
                                    trading platform, which is specially developed for users’ convenience.
                                </p>

                                <div class="row">

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-map-marker blue_color text-center form_icon"
                                               aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <p class="default_text form_text open_sans default_text_light">

                                                Floor 34, 600 Lexington Ave,
                                            </p>

                                            <p class="default_text form_text open_sans default_text_light">
                                                New York, NY 10022
                                            </p>

                                        </div>

                                    </div>

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-phone blue_color text-center form_icon"
                                               aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <p class="default_text form_text open_sans default_text_light">

                                                +1(267) 527-9488

                                            </p>

                                            <p class="default_text form_text open_sans default_text_light">


                                            </p>

                                        </div>

                                    </div>

                                    <div class="contact_form_extra_inner clearfix center_on_mobile">

                                        <div class="col-md-1 col-sm-12 form_padding_left_0">

                                            <i class="fa fa-globe blue_color text-center form_icon"
                                               aria-hidden="true"></i>

                                        </div>

                                        <div class="col-md-11 col-sm-12">

                                            <a href="#." class="anchor_style_default">

                                                <p class="default_text form_text open_sans default_text_light">

                                                    {{--email@website.com--}}

                                                </p>

                                            </a>

                                            <a href="https://www.capinvesmentfund.com" class="anchor_style_default">

                                                <p class="default_text form_text open_sans default_text_light">
                                                    www.capinvesmentfund.com
                                                </p>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-6 wow slideInRight">
                            @include('layouts.message')
                            <form action="{{route('reviews.store')}}" method="POST" class="form_class">
                                @csrf
                                <div class="row">

                                    <div class="mew_form clearfix">
                                        <div class="col-sm-12" id="result"></div>

                                        <div class="col-sm-6">

                                            <input placeholder="Your Name" class="form_inputs @error('name') is-invalid @enderror" id="name" name="name"
                                                   required="required">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror('name')

                                        </div>

                                        <div class="col-sm-6">

                                            <input placeholder="Email"
                                                   class="form_inputs @error('email') is-invalid @enderror"
                                                   id="email" name="email"
                                                   required="required">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12">

                                        <textarea placeholder="Your Review" class="form_inputs form_textarea @error('message') is-invalid @enderror"
                                                  id="message" name="message" required="required"></textarea>

                                            @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-xs-12">

                                            <div class="button_div  center_on_mobile">
                                                <input id="submit_handle" type="submit" style="display: none"/>
                                                <a href="javascript:" id="submit_btn"
                                                   class="bg_pink button button_default_style open_sans bg_before_navy">
                                                    <i
                                                            class="fa fa-envelope" aria-hidden="true"></i> Submit</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- /Contact Form  Section -->


        <!-- Footer Section -->

        <footer class="footer_section big_padding bg_navy">

            <div class="container">

                <div class="footer_detail">

                    <ul class="footer_links text-center">

                        <li>

                            <a class="anchor_style_default facebook wow zoomInDown" href="#.">

                                <i class="text-center fa fa-facebook "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default twitter wow zoomInUp" href="#.">

                                <i class="text-center fa fa-twitter "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default g_plus wow zoomInDown" href="#.">

                                <i class="text-center fa fa-google-plus "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default linkedin wow zoomInUp" href="#.">

                                <i class="text-center fa fa-linkedin "></i>

                            </a>

                        </li>

                        <li>

                            <a class="anchor_style_default  pinterest wow zoomInDown" href="#.">

                                <i class="text-center fa fa-pinterest"></i>

                            </a>

                        </li>

                    </ul>

                    <p class="text-center default_text open_sans white_color">&copy; {{\Carbon\Carbon::now()->year}} CapInvestmentFund, All rights
                        reserved. </p>

                </div>

            </div>

        </footer>

        <!-- /Footer Section -->

    </section>

    <!-- /Parent Section Ended -->

@endsection