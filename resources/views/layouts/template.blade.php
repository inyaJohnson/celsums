<!DOCTYPE html>
<!--[if lt IE 10]>
<html lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Multipurpose HTML template.">
    <script src="/template/HTWF/scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="/template/HTWF/scripts/bootstrap/css/bootstrap.css">
    <script src="/template/HTWF/scripts/script.js"></script>
    <link rel="stylesheet" href="/template/HTWF/style.css">
    <link rel="stylesheet" href="/template/HTWF/css/content-box.css">
    <link rel="stylesheet" href="/template/HTWF/css/image-box.css">
    <link rel="stylesheet" href="/template/HTWF/css/animations.css">
    <link rel="stylesheet" href="/template/HTWF/css/components.css">
    <link rel="stylesheet" href="/template/HTWF/scripts/flexslider/flexslider.css">
    <link rel="stylesheet" href="/template/HTWF/scripts/magnific-popup.css">
    <link rel="stylesheet" href="/template/HTWF/scripts/php/contact-form.css">
    <link rel="icon" href="/template/images/favicon.png">
    <link rel="stylesheet" href="/template/skin.css">
</head>
<body class="transparent-header">
<div id="preloader"></div>
<header class="fixed-top scroll-change bg-transparent menu-transparent" data-menu-anima="fade-bottom">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand scroll-hide" href="index.html">
                        <img class="logo-default" src="/template/images/logo.png" alt="logo"/>
                        <img class="logo-retina" src="/template/images/logo-retina.png" alt="logo"/>
                    </a>
                    <a class="navbar-brand scroll-show" href="index.html">
                        <img class="logo-default" src="/template/images/logo-black.png" alt="logo"/>
                        <img class="logo-retina" src="/template/images/logo-retina-black.png" alt="logo"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ route('welcome') }}" role="button">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}" role="button">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" role="button">Login</a>
                            </li>
                            <li>
                                <a  href="{{ route('register') }}" role="button">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--content--}}
@yield('content')
{{--content end--}}
<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
<footer class="footer-base">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-center text-left">
                    <img width="120" src="/template/images/logo.png" alt=""/>

                </div>
                <div class="col-md-6 footer-left text-left">
                    <p>Collins Street West 8007, San Fransico, United States.</p>
                    <div class="tag-row">
                        <span>support@company.com</span>
                        <span>+02 3205550678</span>
                    </div>
                </div>
                <div class="col-md-3 footer-left text-right text-left-sm">
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="#" data-social="share-facebook">
                            <i class="fa fa-facebook text-xs circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter">
                            <i class="fa fa-twitter text-xs circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-google">
                            <i class="fa fa-google-plus text-xs circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin">
                            <i class="fa fa-linkedin text-xs circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copy-row">
            <div class="col-md-12 copy-text">
                © 2018 Signflow - Multipurpose & Tech Business Template <span>Handmade by <a href="http://schiocco.io/">schiocco.io</a></span>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/template/HTWF/scripts/font-awesome/css/font-awesome.css">
    <script async src="/template/HTWF/scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="/template/HTWF/scripts/imagesloaded.min.js"></script>
    <script src="/template/HTWF/scripts/parallax.min.js"></script>
    <script src="/template/HTWF/scripts/flexslider/jquery.flexslider-min.js"></script>
    <script async src="/template/HTWF/scripts/isotope.min.js"></script>
    <script async src="/template/HTWF/scripts/php/contact-form.js"></script>
    <script async src="/template/HTWF/scripts/jquery.progress-counter.js"></script>
    <script async src="/template/HTWF/scripts/jquery.tab-accordion.js"></script>
    <script async src="/template/HTWF/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
    <script async src="/template/HTWF/scripts/jquery.magnific-popup.min.js"></script>
    <script src="/template/HTWF/scripts/social.stream.min.js"></script>
    <script src="/template/HTWF/scripts/jquery.slimscroll.min.js"></script>
    <script src="/template/HTWF/scripts/google.maps.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="/template/HTWF/scripts/smooth.scroll.min.js"></script>
</footer>
</body>
</html>
