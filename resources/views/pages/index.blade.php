@extends('layouts.app')

@section('page_styles')
    <style>
        .home-banner-inner {
            /* height: 60vh;
            padding: 100px 0 60px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ddd;
        }
        .home-banner-large {
            font-size: 60px;
            font-weight: bold;
        }
        .cohort-section, .merch-section {
            background-color: #f0f0f0;
        }
        .benefits-section {
            background-color: var(--primary-color) !important;
            color: white !important;
        }
        .magazine-section, .books-section, .masterclass-section {
            background-color: #f0f0f0 !important;
        }
        .courses-section {
            /* background-color: #f0f0f0 !important; */
        }

        .spend-your-life {
            font-size: 60px;
            line-height: 60px;
        }

        @media (max-width: 992px) {
            .spend-your-life {
                font-size: 30px;
                line-height: 35px;
            }
        }

    </style>
@endsection

@section('page_content')
<div class="home-banner" id="home">
    <div class="home-banner-inner">
        <img src="{{ asset('images/home-banner.png') }}" alt="">
        {{-- <div class="container">
            <h1 class="home-banner-large">
                Welcome to {{ config('app.name') }}
            </h1>
        </div> --}}
    </div>
</div>

<section class="cohort-section call-to-action call-to-action-primary py-0 appear-animation" data-appear-animation="fadeIn" id="cohort-section">
    <div class="container">
        <div class="row py-2 mt-sm-5 mt-3">
            <div class="col text-center">
                <div class="call-to-action-content mb-sm-5 pb-3 mb-0 appear-animation" data-appear-animation="fadeInUpShorter">
                    <h1 class="font-weight-normal text-color-light mb-2 spend-your-life">
                        <strong>
                            How do you want to Spend your life?
                        </strong>
                    </h1>
                </div>
                <div class="call-to-action-content mt-sm-5 mt-0 mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <h4>
                        Do you want to spend your entire life micro-managing your Small Business dreams? Or do you want to wake up each day to an exciting endeavor building a thriving Small Business?
                    </h4>
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Every successful Business around you was built by Entrepreneurs who had Small Businesses with Big Dreams. At Udominate.ng, you would access real Actionable Small Business information from real Entrepreneurs with results.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container appear-animation home-under-banner bg-gray-900" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" id="home-under-banner">
    <div class="row py-2 my-5">
        <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
            <div class="">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BzPg0FqTmGw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0" style="min-height: 300px">
            <div class="d-flex flex-column justify-content-center h-100">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1 text-center">
                    Join Me & Hundreds of Other Success Minded Small Business owners as we <strong class="font-weight-extra-bold">Unleash our Business Potentials, Dominate our Market Niche and Generate Millions in Revenue</strong> Every Month.
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="home-intro home-intro-quaternary mb-0 pt-5" id="home-intro">
    <div class="container mt-3">

        <div class="row text-center">
            <div class="col">
                <p class="mb-0">
                    Udominate.ng… A MSME Learning and Execution Platform by Womenpreneurs for Womenpreneurs.
                    <ul class="header-social-icons social-icons d-none d-sm-block mt-3">
                        <li class="social-icons-youtube">
                            <a href="http://www.youtube.com/" target="_blank" title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-icons-linkedin">
                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>

    </div>
</div>

<section class="cohort-section call-to-action call-to-action-primary py-0 mt-0 appear-animation" data-appear-animation="fadeIn" id="cohort-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/cohort.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div>
                    <img src="{{ asset('images/she-dominate.png') }}" alt="">
                </div>
                <div class="call-to-action-content mb-5 mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-normal text-custom-primary mb-2">
                        <strong>
                            Join SheDominate in Business Monthly Cohort.
                        </strong>
                    </h2>
                    <h3 class="font-weight-bold text-black opacity-7 mb-0">
                        SheDominate in Business Cohort is a monthly MSME Accountability and Accelerator Cohort designed by Udominate.ng.
                    </h3>
                </div>
                <div class="call-to-action-btn appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <a href="#" target="_blank" class="btn btn-dark font-weight-semibold px-5 py-3 bg-custom-primary">
                        SIGN UP NOW ₦6,200 FOR 30 DAYS
                    </a>
                </div>
                <div class="call-to-action-content mt-5 mb-5 appear-animation d-none" data-appear-animation="fadeInUpShorter">
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Unleash and Dominate in Business Cohort is designed to help Small Business owners Unleash their Business Unique Potentials and Dominate their Market Niche within 30days. This cohort will help transition your business from zero to a million within 30days of signing up.
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h2 class="font-weight-normal text-color-light mb-2 mt-5 text-center">
            <strong>
                What our Cohort Community Members Say About Udominate.
            </strong>
        </h2>
        <div class="row py-2 mt-3 mb-5">
            <div class="col-md-6 text-center text-md-start">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/T5doiwtC56w?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 text-center text-md-start">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pvRkfnr-wws?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-1.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-2.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-4.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section section-primary section-no-border section-height-4 my-0 py-5 appear-animation benefits-section" data-appear-animation="fadeIn" id="benefits-section">
    <div class="container">
        <div class="text-center my-5">
            {{-- <span class="lead text-white opacity-6 text-2 mb-0">LOREM IPSUM DOLOR SIT</span> --}}
            <h2 class="font-weight-bold line-height-1 text-white negative-ls-1 mb-3">
                BENEFITS OF THE 30DAYS COHORT PROGRAM
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="icon-star icons text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            30Days Daily Sales Push
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Business is all about Sales. To generate millions in revenue every month, you need a DAILY SALES PUSH. She Dominates in Business 30Days Cohort will give you the Daily Sales Push needed to achieve your monthly target.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="fa fa-globe text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            30 FREE Social Media Content Strategy for 30DAYS.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            During the cohort, you will be assigned Daily Task that will help you drive your business growth within the 30Days program and beyond.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="fa fa-graduation-cap text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            Access to Seasoned Mentors and Facilitators.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Access to the right mentoring programs helps drive your business to grow faster. By joining this Cohort program, you will gain access to mentors who will help direct your business growth process, phase by phase.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="fa fa-chalkboard-user text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            Accountability Partner.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Growth is quicker when you are accountable. In this Cohort program, you will connect will accountability partners.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="fa fa-moon text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            Weekly Udominate Night School.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Growth is quicker when you are accountable. In this Cohort program, you will connect will accountability partners.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <div class="feature-box-icon">
                        <i class="fa fa-laptop text-white"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-white mb-2">
                            FREE Access to Online Courses.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Growth is quicker when you are accountable. In this Cohort program, you will connect will accountability partners.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action-btn appear-animation d-flex justify-content-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <a href="#" target="_blank" class="btn btn-light text-uppercase font-weight-semibold px-5 py-3">
                Join Now!
            </a>
        </div>
    </div>
</section>

{{-- <section class="masterclass-section call-to-action call-to-action-primary py-5 appear-animation" data-appear-animation="fadeIn" id="masterclass-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/masterclass.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Gain relevant Business Strategies, Sales and Social Selling Skill to scale your
                        Business Revenue from Zero to Millions at our next Unleash and Dominate
                        Masterclass. (CLICK HERE ) to Reserve your seat for our next masterclass.
                    </p>
                </div>
                <div class="call-to-action-content mt-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <img src="{{ asset('_home/img/custom-header-bg.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="magazine-section bg-white call-to-action call-to-action-primary py-5 appear-animation d-none" data-appear-animation="fadeIn" id="magazine-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/magazine.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <h3 class="font-weight-light text-black opacity-7 mb-0">
                        Unleash and Dominate in Business Magazine is an eBookMagazine by Womenpreneurs for Womenpreneurs. Click to download your free copy.
                    </h3>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/udominate-business.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/udominate-baking.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/udominate-food.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses-section bg-white call-to-action call-to-action-primary pb-2 appear-animation" data-appear-animation="fadeIn" id="courses-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/courses.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <h3 class="font-weight-light text-black opacity-7 mb-0">
                        Click to download any of our FREE / PAID Courses.
                    </h3>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-1.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-2.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-3.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="masterclass-section bg-white call-to-action call-to-action-primary pb-2 appear-animation" data-appear-animation="fadeIn" id="masterclass-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/masterclass.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <h3 class="font-weight-light text-black opacity-7 mb-0" style="line-height: 30px">
                        Gain relevant Business Strategies, Sales, and Social Selling skills to scale your Business Revenue from Zero to Millions at our next SheDominate in Business Masterclass. (CLICK HERE ) to Reserve your seat for our next masterclass.
                    </h3>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-1.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-2.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-3.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-4.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-5.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/masterclass-6.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="merch-section bg-white call-to-action call-to-action-primary pb-5 appear-animation" data-appear-animation="fadeIn" id="merch-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/merch.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-1.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-2.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-3.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-4.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-5.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-6.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-7.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <img src="{{ asset('images/merch-8.png') }}?{{ time() }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
