@extends('layouts.app')
@section('body')
<body>

<!--preloader start-->
<div class="preloader" style="background: white !important;">
{{--    <img src="assets/images/loading-logo.png" alt="image">--}}
    <img src="{{asset('/assets/images/100x56.png')}}" alt="image">
</div>
<!--preloader end-->

<!--header section start-->

<section class="hero">
    <div class="hero__wrapper">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h1 class="main-heading color-black">It’s an Online Love-Uffur!</h1>
{{--                    <p class="paragraph"><span>Zapper<sup>TM</sup></span> is an app that helps you organize--}}
{{--                        yourself on the daily basis using systematic--}}
{{--                        algorithms to achieve success.</p>--}}
                    <p class="paragraph">Connecting all furry baby parents with the best pet shops while granting them exclusive discounts for a furrever happier journey!</p>

{{--                    <div class="download-buttons">--}}
{{--                        <a href="#" class="google-play">--}}
{{--                            <i class="fab fa-google-play"></i>--}}
{{--                            <div class="button-content">--}}
{{--                                <h6>GET IT ON <span>Google Play</span></h6>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="apple-store">--}}
{{--                            <i class="fab fa-apple"></i>--}}
{{--                            <div class="button-content">--}}
{{--                                <h6>GET IT ON <span>Apple Store</span></h6>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="questions-img hero-img color-black background-color:'white'">
                    <div>
                        <img src="{{asset('/assets/images/5.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--feature section start-->
<section class="feature" id="intro">
    <div class="container">
        <h2 class="section-heading color-black">Unlock Pawsome Features</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="feature__box feature__box--3">
                    <div class="icon icon-2">
                        <i class="fad fa-user-astronaut"></i>
                    </div>
                    <div class="feature__box__wrapper">
                        <div class="feature__box--content feature__box--content-1">
                            <h3>Join The App in Fun Easy Steps</h3>
                            <p class="paragraph dark">The app is super friendly to use with easy search navigation by pet category. Subscribe once and earn well-deserved discounts for up to one year while receiving custom notifications on your pet’s birthday.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature__box feature__box--2">
                    <div class="icon icon-3">
                        <i class="fad fa-lightbulb-on"></i>
                    </div>
                    <div class="feature__box__wrapper">
                        <div class="feature__box--content feature__box--content-2">
                            <h3>Pick Year or Monthly Plans</h3>
                            <p class="paragraph dark">Enjoy Regular, Premium, and Platinum plans with different ranges of discounts. Flexible subscriptions are available for a month or a whole year or pawsomeness!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature__box feature__box--3">
                    <div class="icon icon-2">
                        <i class="fad fa-solar-system"></i>
                    </div>
                    <div class="feature__box__wrapper">
                        <div class="feature__box--content feature__box--content-3">
                            <h3>Track Your Savings </h3>
                            <p class="paragraph dark">See the difference yourself. With each program you join, you get to see the amount of savings you have benefited from, all live on the app!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature__box feature__box--2">
                    <div class="icon icon-3">
                        <i class="fad fa-rocket-launch"></i>
                    </div>
                    <div class="feature__box__wrapper">
                        <div class="feature__box--content feature__box--content-4">
                            <h3>Earn Loyalty Points </h3>
                            <p class="paragraph dark">The more you pamper your furry baby, the more you earn loyalty points which can be instantly redeemed with products from pet stores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section end-->


<!--growth section start-->
<section class="growth" id="feature">
    <div class="growth__wrapper">
        <div class="container">
            <h2 class="section-heading color-black">The App That Encourages Unconditional Love.</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-user-astronaut"></i>
                        </div>
                        <div class="content">
                            <h3>Start Easily</h3>
                            <p class="paragraph dark">Simple log-in procedure. Fill in your account details, and you are ready to join the app journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-lightbulb-on"></i>
                        </div>
                        <div class="content">
                            <h3>Pick Your Plan</h3>
                            <p class="paragraph dark">3 Options to choose from based on your budget: Regular, Premium or Platinum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-solar-system"></i>
                        </div>
                        <div class="content">
                            <h3>Monthly or Yearly Subscriptions</h3>
                            <p class="paragraph dark">Pick between monthly or yearly subscriptions for abundant discounts and savings for your furry babies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-backpack"></i>
                        </div>
                        <div class="content">
                            <h3>Loyalty Points</h3>
                            <p class="paragraph dark">Earn extra points with every purchase no matter what your plan is.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-rocket-launch"></i>
                        </div>
                        <div class="content">
                            <h3>Create Customized Pet Profiles</h3>
                            <p class="paragraph dark">Benefit from custom and personalized notification once you fill in personal info of your furry baby.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="growth__box">
                        <div class="icon">
                            <i class="fad fa-user-astronaut"></i>
                        </div>
                        <div class="content">
                            <h3>Track Savings</h3>
                            <p class="paragraph dark">See how much you have saved on the spot based on your convenient plan.</p>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="button__wrapper">--}}
{{--                    <a href="#" class="button">--}}
{{--                        <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="button">--}}
{{--                        <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!--growth section end-->

<!--step section start-->
<section class="step">
    <div class="step__wrapper">
        <div class="container">
            <h2 class="section-heading color-black">Make Your Furry Furriend Happier </h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="step__box">
                        <div class="image">
                            <img src="{{asset('/assets/images/2.png')}}" alt="image">
                        </div>
{{--                        <div class="content">--}}
{{--                            <h3>EASY TO<span>Register.</span></h3>--}}
{{--                            <p class="paragraph dark">Join the app in 3 easy steps and get--}}
{{--                                started with your progresso daily.</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="step__box">
                        <div class="image">
                            <img src="{{asset('/assets/images/15.png')}}" alt="image">
                        </div>
{{--                        <div class="content">--}}
{{--                            <h3>SIMPLE TO<span>Create.</span></h3>--}}
{{--                            <p class="paragraph dark">Once you’re signed up you can create--}}
{{--                                as many polls you want to watch.</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="step__box">
                        <div class="image">
                            <img src="{{asset('/assets/images/20.png')}}" alt="image">
                        </div>
{{--                        <div class="content">--}}
{{--                            <h3>FUN TO<span>Measure.</span></h3>--}}
{{--                            <p class="paragraph dark">Share your growth results with your--}}
{{--                                friends and inspre others.</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="button__wrapper">
{{--                    <a href="#" class="button">--}}
{{--                        <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="button">--}}
{{--                        <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--step section end-->


<!--client section end-->

<!--questions section start-->
<section class="questions" id="faq">
    <div class="questions__wrapper">
        <div class="container">
            <h2 class="section-heading color-black">Some frequently asked questions.</h2>
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div id="accordion">
                        <div class="card" id="card-1">
                            <div class="card-header" id="heading-1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                                            aria-controls="collapse-1">
                                        Do I get more discounts if I have more than one pet?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                                        are contending with a mountain
                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                                        and oversight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card-2">
                            <div class="card-header" id="heading-2">
                                <h5 class="mb-0 hidden">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2"
                                            aria-expanded="false" aria-controls="collapse-2">
                                        Which areas in UAE are included?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                                        are contending with a mountain
                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                                        and oversight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card-3">
                            <div class="card-header" id="heading-3">
                                <h5 class="mb-0 hidden">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3"
                                            aria-expanded="false" aria-controls="collapse-3">
                                        How do I switch from one plan to the other?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                                        are contending with a mountain
                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                                        and oversight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card-4">
                            <div class="card-header" id="heading-4">
                                <h5 class="mb-0 hidden">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4"
                                            aria-expanded="false" aria-controls="collapse-4">
                                        How can I redeem my points?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                                        are contending with a mountain
                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                                        and oversight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="card-5">
                            <div class="card-header" id="heading-5">
                                <h5 class="mb-0 hidden">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5"
                                            aria-expanded="false" aria-controls="collapse-5">
                                        How do I collect my items from the store?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                                        are contending with a mountain
                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                                        and oversight.</p>
                                </div>
                            </div>
                        </div>
{{--                        <div class="card" id="card-6">--}}
{{--                            <div class="card-header" id="heading-6">--}}
{{--                                <h5 class="mb-0 hidden">--}}
{{--                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6"--}}
{{--                                            aria-expanded="false" aria-controls="collapse-6">--}}
{{--                                        What is a business rules engine?--}}
{{--                                    </button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies--}}
{{--                                        are contending with a mountain--}}
{{--                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility--}}
{{--                                        and oversight.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card" id="card-7">--}}
{{--                            <div class="card-header" id="heading-7">--}}
{{--                                <h5 class="mb-0 hidden">--}}
{{--                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7"--}}
{{--                                            aria-expanded="false" aria-controls="collapse-7">--}}
{{--                                        What are the types of datadirect drivers?--}}
{{--                                    </button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="paragraph">With increasing calls for government accountability and cost savings, agencies--}}
{{--                                        are contending with a mountain--}}
{{--                                        of rule and policy changes affecting everything from pensions and benefits, to client eligibility--}}
{{--                                        and oversight.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="questions-img">
                        <img src="{{asset('/assets/images/20.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--questions section end-->

<!--pricing section start-->
<section class="pricing" id="pricing">
   {{--  <div class="pricing__wrapper">
        <h2 class="section-heading color-black">Cool Pricing Plans for Your Fur Babies.</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing__single pricing__single-1">
                        <div class="icon">
                            <i class="fad fa-user-graduate"></i>
                        </div>
                        <h4>Regular</h4>
                        <h3>AED 1000</h3>
{{--                        <h6>1 to 2 users</h6>--}}
                        {{-- <div class="list">
                            <ul> --}}
{{--                                <li>20 polls per month</li>--}}
{{--                                <li>1 email address</li>--}}
{{--                                <li>2GB cloud storage</li>--}}
{{--                                <li class="not-included">No customer support</li>--}}
{{--                                <li class="not-included">Extra features</li>--}}
{{--                                <li class="not-included">In-app products</li>--}}
                            {{-- </ul>
                        </div> --}}
{{--                        <a href="#" class="button">--}}
{{--                            <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                        </a>--}}
                    {{-- </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing__single pricing__single-2">
                        <div class="icon">
                            <i class="fad fa-user-cowboy"></i>
                        </div>
                        <h4>Premium</h4>
                        <h3>AED 2000</h3>
{{--                        <h6>3 to 19 users</h6>--}}
                        {{-- <div class="list">
                            <ul> --}}
{{--                                <li>20 polls per month</li>--}}
{{--                                <li>1 email address</li>--}}
{{--                                <li>2GB cloud storage</li>--}}
{{--                                <li>No customer support</li>--}}
{{--                                <li class="not-included">Extra features</li>--}}
{{--                                <li class="not-included">In-app products</li>--}}
                            {{-- </ul>
                        </div> --}}
{{--                        <a href="#" class="button">--}}
{{--                            <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                        </a>--}}
                    {{-- </div>
                </div> --}}
                {{-- <div class="col-lg-4">
                    <div class="pricing__single pricing__single-3">
                        <div class="icon">
                            <i class="fad fa-user-astronaut"></i>
                        </div>
                        <h4>Platinum</h4>
                        <h3>AED 3000</h3>
{{--                        <h6>20 to 50 users</h6>--}}
                        {{-- <div class="list">
                            <ul> --}}
{{--                                <li>20 polls per month</li>--}}
{{--                                <li>1 email address</li>--}}
{{--                                <li>2GB cloud storage</li>--}}
{{--                                <li>No customer support</li>--}}
{{--                                <li>Extra features</li>--}}
{{--                                <li>In-app products</li>--}}
                            {{-- </ul>
                        </div> --}}
{{--                        <a href="#" class="button">--}}
{{--                            <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>--}}
{{--                        </a>--}}
                    {{-- </div>
                </div>

            </div>
        </div>
    </div> --}}
</section>
<!--pricing section end-->

<!--screenshot section start-->
<section class="screenshot" id="preview">
    <div class="screenshot__wrapper">
        <div class="container">
            <div class="screenshot__info">
                <h2 class="section-heading color-black">Have a look at more Pawsomeness</h2>
                <div class="screenshot-nav">
                    <div class="screenshot-nav-prev"><i class="fad fa-long-arrow-left"></i></div>
                    <div class="screenshot-nav-next"><i class="fad fa-long-arrow-right"></i></div>
                </div>
            </div>
        </div>
        <div class="swiper-container screenshot-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/6.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/10.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/11.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/12.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/14.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/15.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/16.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/17.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/19.png')}}" alt="image">
                </div>
                <div class="swiper-slide screenshot-slide">
                    <img src="{{asset('/assets/images/20.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="contact_from" id="contactForm">
    <div class="tab-menu">
        <ul>
            <li><a href="javascript:void(0)" onclick="tabM(this)" class="tab-a active-a" data-id="tab1">Individual</a></li>
            <li><a href="javascript:void(0)"  onclick="tabM(this)" class="tab-a" data-id="tab2">Corporate</a></li>
        </ul>
    </div>
    <div class="tab tab-active" data-id="tab1">
    <form action="{{url('contact-us/submitContactForm')}}" id="contact_form" method="post" class="form-validator" enctype="multipart/form-data">
            <input type="hidden" name="type" value="individual">
            @csrf

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Fullname</label>
                        <input type="text" name="full_name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="email@example.com">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Phone Number</label>
                        <input type="text" name="phone">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>What are you interested in?</label>
                        <select name="interested">
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="input_row">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="input_row">
                        <label>Your Message</label>
                        <textarea name="message" placeholder="Write your message"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="messages"></div>
                    <div class="input_btn">
                        <input type="button" value="Send Message" name="" class="btn_form">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="tab" data-id="tab2">
    <form action="{{url('contact-us/submitContactForm')}}" id="corporate_form" method="post" class="form-validator" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="type" value="corporate">

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Fullname</label>
                        <input type="text" name="full_name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Name of your company</label>
                        <input type="text" name="company">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Phone Number</label>
                        <input type="text" name="phone">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="email@example.com">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>What are you interested in?</label>
                        <select name="interested">
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input_row">
                        <label>Subject</label>
                        <input type="text" name="subject">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="input_row">
                        <label>Your Message</label>
                        <textarea name="message" placeholder="Write your message"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="messages"></div>
                    <div class="input_btn">
                        <input type="button" value="Send Message" name="" class="btn_form">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> --}}
<!--screenshot section end-->

<style>
    #preview > div > div.container > div{

margin-top: 12px;

    }



    body .contact_form, .contact_form label, .contact_form p, .contact_form span{
        font-family: 'Poppins', sans-serif;
    }


    .contact_content_link {
        border: 1px solid #FFD300;
        width: 13.0625rem;
        display: inline-block;
        text-align: center;
        height: 3rem;
        font-size: 1rem;
        font-weight: 500;
        color: #fff;
        margin-top: 1rem;
        line-height: 3rem;
    }

    .contact_content_link:hover {
        background: #FFD300;
    }

    .contact_hero_banner {
        width: 100%;
        display: flex;
        align-items: center;
    }

    .contact_hero_right {
        background: #000000;
        border: 1px solid #FFD300;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 3rem;
        width: 50%;
    }

    .contact_hero_left {
        width: 50%;
    }

    .contact_hero_left img {
        width: 100%;
        display: block;
    }

    .contact_hero_right h1 {
        color: #FFD300;
        font-size: 2.5rem;
        line-height: 3.625rem;
        font-weight: bold;
    }

    .contact_hero_right p {
        font-weight: 500;
        font-size: 1rem;
        line-height: 1.875rem;
        color: #fff;
        padding: 1.4rem 0;
    }

    .contact_info_row {
        width: 100%;
        padding-bottom: 2rem;
    }

    .contact_info_row p {
        font-weight: bold;
        font-size: 1.65rem;
        line-height: 1.875rem;
        color: #FFD300;
    }

    .contact_info_row ul {
        display: flex;
        align-items: center;
    }

    .contact_info_row ul li {
        display: flex;
        align-items: center;
        font-weight: 500;
        font-size: 1rem;
        line-height: 1.75rem;
        color: #fff;
        padding-right: 3rem;
    }

    .contact_info_row ul li a {
        display: flex;
        align-items: center;
    }

    .contact_info_row ul li img {
        display: block;
    }

    .contact_info_row ul li i {
        padding-right: 0.6rem;
    }

    .contact_info_row ul li a {
        color: #fff;
    }

    .contact_info_row:last-child {
        padding: 0;
    }

    .contact_from_section {
        width: 100%;
    }

    .contact_from {
        width: 49.5rem;
        background: #FFD300;
        backdrop-filter: blur(24px);
        border-radius: 2px;
        padding: 3rem;
        margin: auto;
        max-width:100%;
    }

    .contact_from .tab-menu {
        width: 100%;
        text-align: center;
        margin-bottom: 2rem;
    }

    .contact_from .tab-menu ul {
        display: flex;
        align-items: center;
        justify-content: center;
        list-style: none;
    }

    .contact_from .tab-menu ul li a {
        width: 9rem;
        height: 3rem;
        background: #FFD300;
        border: 2px solid #000000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        font-size: 1rem;
        cursor: pointer;
        color: #000;
    }

    .contact_from .tab-menu ul li a.tab-a.active-a {
        background: #000000;
        color: #fff;
    }

    .input_row input {
        width: 100%;
        background: #FFFFFF;
        border: 0.5px solid #CCCCCC;
        box-sizing: border-box;
        height: 2.8rem;
        padding: 0 0.9rem;
        color: #272727;
        font-size: 1rem;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    .input_row select {
        width: 100%;
        background: #FFFFFF;
        border: 0.5px solid #CCCCCC;
        box-sizing: border-box;
        height: 2.8rem;
        padding: 0 0.9rem;
        color: #272727;
        font-size: 1rem;
        outline: none;
        font-family: 'Poppins', sans-serif;
        background-image: url(../images/arrow.svg);
        appearance: none;
        background-repeat: no-repeat;
        background-position: 98%;
        font-family: 'Poppins', sans-serif;
    }

    .input_row textarea {
        background: #FFFFFF;
        border: 0.5px solid #CCCCCC;
        box-sizing: border-box;
        width: 100%;
        padding: 1rem;
        height: 10rem;
        font-family: 'Poppins', sans-serif;
    }


    .input_btn input[type="button"] {
        width: 18.75rem;
        height: 3rem;
        background: #000000;
        border: 0;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        cursor: pointer;
        outline: none;
        border: 1px #000 solid;
    }

    .input_btn {
        width: 100%;
        text-align: center;
    }

    .tab {
        display: none;
    }

    .tab.tab-active {
        display: block;
    }
    .contact_from .tab-menu ul {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .input_row {
        width: 100%;
        margin-bottom: 1rem;
    }

    .input_row label {
        display: block;
        font-style: normal;
        font-weight: 500;
        font-size: 1rem;
        line-height: 1.925rem;
        color: #272727;
        margin-bottom: 0;
    }


</style>

<style>

    *, *::before, *::after, .questions .card .card-header h5::before{
        color:#d0002f !important;
    }

    .pricing__single h3{
        color:white !important;
    }
    .pricing__single-2{
        background: linear-gradient(45deg, #ffdb70 0%, #049899 100%);
    }
    .pricing__single-1{
        background: linear-gradient(45deg, #e2e300 0%, #e2e300 100%);
    }
    .pricing__single-3{
        background: linear-gradient(45deg, #049899 0%, #049899 100%);
    }
    .step__wrapper{
        background-color: #f0f7fc;
    }
    .feature__box .icon-2{
    background: linear-gradient(45deg, #dddd3f 0%, #dddd3f 100%) !important ;
    }
    .feature__box--2 .feature__box__wrapper {
        background-color: #dddd3fab;
    }
    .questions__wrapper{
        background-color: #f0f7fc;
        margin-top: 30px !important;
    }
    .hero .hero-img::before{
        background: linear-gradient(45deg, #920119 0%, #000000 50%, #aa002b 100%) !important;
    }

    .hero .main-heading {
        margin-top: 20rem;
    }
    /**, *::before, *::after, .questions .card .card-header h5::before{*/
    /*    padding-top: 5px;*/
    /*}*/
    .questions-img::before{
        background: linear-gradient(45deg, #a1011f 0%, #1b1c1d 50%, #ca002d 100%) !important;

    }
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto{
        padding-left: -32px !important;
    }

    /**/
    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 4rem;
        line-height: -2.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 3px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    #contactForm > div:nth-child(1) > label{
        font-size: 2em;
    }
    #contactForm > div:nth-child(2) > label{
        font-size: 2em;
    }

    #contactForm > div:nth-child(3) > label{
        font-size: 2em;

    }
    #contactForm > div.d-grid{
        font-size: 2em;
    }
    #contactForm > div:nth-child(1) > div{
        font-size: 2em;
    }
    #contactForm > div:nth-child(2) > div:nth-child(3){
        font-size: 2em;
    }
    #contactForm > div:nth-child(2) > div:nth-child(4){
        font-size: 2em;
    }
    #contactForm > div:nth-child(3) > div{
        font-size: 2em;
    }
    body > div:nth-child(3) > div.hero__wrapper > div > div > div > h1{
        font-size: 5em;
        text-align: center;
    }
    .btn-primary{
        color: #fff;
        /* background-color: #007bff; */
        border-color: #049899;
    }
    .btn.disabled{
        pointer-events: none;
        opacity: 24.65;
    }
    #submitButton{
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 10px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    width:120px;
    color: white !important;
}
    .btn-primary.disabled, .btn-primary:disabled{
        background-color: #049899;
    }
    #contact > div > div > div > form > div > div.col-md-6.full-name-col > div > label{
        font-size: 3em;
    }
    #contact > div > div > div > form > div > div:nth-child(3) > div > label{
        font-size: 3em;
    }
    #contact > div > div > div > form > div > div:nth-child(4) > div > label{
        font-size: 3em;
    }
    #contact > div > div > div > form > div > div:nth-child(5) > div > label{
        font-size: 2.5em;
    }
    #contact > div > div > div > form > div > div:nth-child(6) > div > label{
        font-size: 3em;
    }
    #contact > div > div > div > form > div > div:nth-child(6) > div > label{
        font-size: 3em;
    }

    .questions .card .card-header h5::before{
        /*margin-left: -60px;*/
    }
    .questions .card .card-header h5 button{
        /*margin-left: -40px;*/
    }
    .section-heading {
font-size: 3rem;
    }
    #contact > div > div > div > form > ul > li:nth-child(2) > a,
    #contact > div > div > div > form > ul > li.active > a,
    #contact > div > div > div > form > ul > li:nth-child(1) > a
    {
        font-size: 3rem;
    }
    #contact > div > div > div > form > div > div.col-md-6.company-col > div > label,
    #contact > div > div > div > form > div > div:nth-child(7) > div > label{
        font-size: 3em;
    }

    .screenshot__wrapper{
        background-color: #f0f7fc;
        margin: 0 auto;
        overflow: visible;
        padding: 0 !important;
        width: calc(100% - 10rem);
        margin: 0 auto;
        border-radius: 3rem;
    }
    #contact > div > div > div > form > div > div:nth-child(7) > div > textarea{
        font-size: 2em;
    }



</style>


{{--/////new--}}
<style>
    @media (max-width: 991.98px){
        .step__box .image img{
            width:inherit !important;
        }}
    .hero .hero-img::before{
   filter:  drop-shadow(0px 0px 0px rgba(147,65,212,0.4)) !important;
    }


    @media (max-width: 575.98px){
        .hero .hero-img::before{
max-width: 100%;
        }}
    .feature__box .icon-2{
        filter:drop-shadow(0px 0px 0px rgba(255,186,114,0.4)) !important;
    }
    @media (max-width: 575.98px){
        .hero .hero-img img{
            margin-top:60px !important;
        }}

    .questions-img::before{
        filter:drop-shadow(0px 0px 0px #f54590) !important;
    }
    #preview > div > div.swiper-container.screenshot-slider.swiper-container-initialized.swiper-container-horizontal > div > div.swiper-slide.screenshot-slide.swiper-slide-active > img{
        max-width: 100% !important;
    }
    img{
        max-width: 100%;
    }
    body > header > div > div > div.header__bars{
        margin-right: -24px;
    }
    .hero .hero-img::before{
        max-width: 130% !important;
    }
    .questions-img::before{
        max-width: 130%;
    }
    .contact_from{
        background: #dddd3f;
    }
    #contactForm {
        /*width: 50%;*/
        margin-top: 28px;
        /*padding: 50px;*/
    }
    .contact_from .tab-menu ul li a{
        background: #f0f7fc;
    }
    .contact_from .tab-menu ul li a.tab-a.active-a{
        background: #dddd3f;
    }
</style>
<script>
function tabM(elem){
$(".tab").removeClass('tab-active');
$(".tab[data-id='"+$(elem).attr('data-id')+"']").addClass("tab-active");
$(".tab-a").removeClass('active-a');
$(elem).parent().find(".tab-a").addClass('active-a');
}</script>


</body>
@endsection
