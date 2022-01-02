@extends('layouts.template')
@section('content')
    <div class="section-bg-image added-style parallax-window text-center section-middle-img" data-natural-height="1080"
        data-natural-width="1920" data-parallax="scroll" data-image-src="/template/images/hd-1.jpg">
        <div class="container content">
            <hr class="space" />
            <h1 class="white">Grow your business with Flowsign</h1>
            <p class="text-l">Your partner in social and business relations</p>
            <hr class="space" />
            <div>
                <a href="{{ route('register') }}" class="circle-button btn btn-lg">Get started</a>
            </div>
            <hr class="space s" />
            {{-- <div class="middle-img" data-anima="fade-bottom" data-anima-time="1000"><img src="/template/images/mk-4.png"
                                                                                         alt=""/></div> --}}
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="fa fa-bitcoin icon circle anima"></i>
                        <h3>Cryptocurrency</h3>
                        <p>
                            We trade on Cryptocurrencies to help increase our clients profit margin.
                            They include but are not limited to Bitcoin, Ethereum and Litecoin.
                        </p>
                        {{-- <a href="#" class="circle-button btn-border btn btn-lg">See more</a> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="fa fa-dollar icon circle anima"></i>
                        <h3>Forex</h3>
                        <p>
                            For years, we help clients trade on Forex with an aim of using minimal
                            effort and knowledge to maximizing passive and consistent profit.
                        </p>
                        {{-- <a href="#" class="circle-button btn-border btn btn-lg">See more</a> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="fa fa-line-chart icon circle anima"></i>
                        <h3>Stock and Shares</h3>
                        <p>
                            We are a reputable and fully certified shares trading and brokerage
                            agency.
                            We buy shares and stocks and grow them on behalf of customers for little
                            fee.
                        </p>
                        {{-- <a href="#" class="circle-button btn-border btn btn-lg">See more</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image bg-top no-paddings-y" style="background-image: url(/template/images/bg-gradient.png)">
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <hr class="space" />
                    <hr class="space" />
                    <h2>About Us</h2>
                    <p>
                        Capital Investment Fund is the result of the effective work of professionals and leaders
                        of
                        the financial markets. A regulated broker with the Securities and Exchange Commission
                        (SEC).
                        Formally established in 2003, trading Binary Options initially as Option Investment,
                        till
                        expansion into Forex and eventually, Cryptocurrency and shares.
                    </p>
                    <p>
                        Our mission is to provide professional financial trading services through state-of-art
                        trading platform, which is
                        specially developed for users’ convenience. Trading Experience from Capital Investment
                        Fund
                        will surely meet the requirements of both experienced and beginner traders thanks to its
                        simplicity and functionality.
                    </p>
                    <hr class="space m" />
                    <ul class="fa-ul text-m text-color">
                        <li><i class="fa-li fa fa-check-circle-o"></i> Advanced Security & Customer Support</li>
                        <li><i class="fa-li fa fa-check-circle-o"></i>Relevant Innovation & SEO</li>
                        <li><i class="fa-li fa fa-check-circle-o"></i>Guide & Data-Driven Market Analysis</li>
                    </ul>
                    <hr class="space" />
                    <hr class="space" />
                    <hr class="space" />
                    <hr class="space" />
                </div>
                <div class="col-md-4">
                    <hr class="space" />
                    <img class="abs-image" src="/template/images/mk-1.png" alt="" />
                    <hr class="space" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920"
        data-parallax="scroll" data-image-src="/template/images/hd-1.jpg">
        <div class="container content">
            <div class="row">
                <div class="col-md-7">
                    <img src="/template/images/mk-2.png" alt="" />
                </div>
                <div class="col-md-5">
                    <div class="flexslider slider visible-dir-nav nav-bottom-left"
                        data-options="controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <h2>Next Generation</h2>
                                <p>Our financial brokers are smart and technologically inclined lads.
                                    These Brokers are well equipped and Informed with knowledge to help you grow
                                    your investment.</p>
                            </li>
                            <li>
                                <h2>Learn Cryptocurreny</h2>
                                <p>You can trade your way into becoming a millionaire with
                                    cryptocurrencies. Join us and learn from experience and successful brokers.</p>
                            </li>

                            <li>
                                <h2>Yes To Sucess</h2>
                                <p> Unlock your financial potential today with trading. At Capital Investment
                                    Fund
                                    success in trading and wealth growth is assured.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-empty text-center">
        <div class="container content">
            <h2>Check our pricing!</h2>
            <hr class="space" />
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>300+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Bronze plan</h3>
                        </div>
                        <div class="list-group-item">
                            50% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            20% Trading Commission
                        </div>
                        <div class="list-group-item">
                            40% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>1,000+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Silver plan</h3>
                        </div>
                        <div class="list-group-item">
                            50% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            20% Trading Commission
                        </div>
                        <div class="list-group-item">
                            50% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>5,000+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Gold plan</h3>
                        </div>
                        <div class="list-group-item">
                            70% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            20% Trading Commission
                        </div>
                        <div class="list-group-item">
                            65% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>10,000+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Diamond plan</h3>
                        </div>
                        <div class="list-group-item">
                            80% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            20% Trading Commission
                        </div>
                        <div class="list-group-item">
                            100% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>20,000+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Premium plan</h3>
                        </div>
                        <div class="list-group-item">
                            100% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            12% Trading Commission
                        </div>
                        <div class="list-group-item">
                            100% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group pricing-table">
                        <div class="list-group-item pricing-price">
                            <span>$</span>50,000+<span>/mon</span>
                        </div>
                        <div class="list-group-item pricing-name">
                            <h3>Special plan</h3>
                        </div>
                        <div class="list-group-item">
                            100% Profits Monthly
                        </div>
                        <div class="list-group-item">
                            Monthly Withdrawal
                        </div>
                        <div class="list-group-item">
                            12% Trading Commission
                        </div>
                        <div class="list-group-item">
                            100% Guaranteed
                        </div>
                        <div class="list-group-item">
                            Quick Withdrawals
                        </div>
                        <div class="list-group-item pricing-btn">
                            <a class="btn btn-sm btn-border circle-button" href="{{ route('register') }}"> Invest now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space" />
            <!-- Review Section -->
            <div class="row">
                <div class="col-md-9 col-center">
                    <h2>Investor's Review</h2>
                    @if (!$reviews->isEmpty())

                        @foreach ($reviews as $review)
                            <p>
                                {{ $review->message }}
                            </p>
                            <h5>
                                by <span class="font_200 pink_color"> {{ $review->name }}</span>
                                On {{ \Carbon\Carbon::parse($review->created_at)->addHour()->format('F d, Y  h:i a') }}
                            </h5>
                        @endforeach
                    @endif
                    <div class="list-group-item pricing-btn">
                        <a class="btn btn-sm btn-border circle-button" href="{{route('reviews.create')}}">  Create Review
                        </a>
                    </div>
                </div>
            </div>
            <hr class="space" />
        </div>
    </div>
@endsection
