@extends('layouts.app')

@section('page_styles')
    <style>
        .home-banner-inner {
            height: 60vh;
            padding: 100px 0 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ddd;
        }
        .home-banner-large {
            font-size: 60px;
            font-weight: bold;
        }
        .cohort-section {
            background-color: #f0f0f0;
        }
        .benefits-section {
            background-color: var(--primary-color) !important;
            color: white !important;
        }
        .magazine-section, .courses-section {
            background-color: #f0f0f0 !important;
        }

    </style>
@endsection

@section('page_content')
<div class="home-banner" id="home">
    <div class="home-banner-inner">
        <div class="container">
            <h1 class="home-banner-large">
                Welcome to {{ config('app.name') }}
            </h1>
        </div>
    </div>
</div>

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

<section class="cohort-section call-to-action call-to-action-primary py-0 mt-5 appear-animation" data-appear-animation="fadeIn" id="cohort-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/cohort.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2>
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Join our monthly SME Accountability and Accelerator Cohort program Discover how to Unleash your Business Potentials, Dominate your Market Niche and Generate Million in Revenue in 30 Days.
                    </p>
                </div>
                <div class="call-to-action-btn appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <a href="#" target="_blank" class="btn btn-dark font-weight-semibold px-5 py-3 bg-custom-primary">
                        SIGN UP NOW ₦6,950 FOR 30 DAYS
                    </a>
                </div>
                <div class="call-to-action-content mt-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Unleash and Dominate in Business Cohort is designed to help Small Business owners Unleash their Business Unique Potentials and Dominate their Market Niche within 30days. This cohort will help transition your business from zero to a million within 30days of signing up.
                    </p>
                </div>
            </div>
        </div>

        <h2 class="font-weight-normal text-color-light mb-2 text-center">
            <strong>
                WATCH FEEDBACK FROM OUR COHORT MEMBERS
            </strong>
        </h2>
        <div class="row py-2 mt-3 mb-5">
            <div class="col-md-6 text-center text-md-start">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BzPg0FqTmGw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 text-center text-md-start">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BzPg0FqTmGw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-review.png') }}" alt="">
            </div>
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-review.png') }}" alt="">
            </div>
            <div class="col-md">
                <img src="{{ asset('images/whatsapp-review.png') }}" alt="">
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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
                            FREE Access to Monthly Masterclass.
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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
                            FREE Access to Online Courses
                        </h4>
                        <p class="text-white opacity-8 mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.
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

<section class="masterclass-section call-to-action call-to-action-primary py-5 appear-animation" data-appear-animation="fadeIn" id="masterclass-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/masterclass.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
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
</section>

<section class="magazine-section bg-white call-to-action call-to-action-primary py-5 appear-animation" data-appear-animation="fadeIn" id="magazine-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/magazine.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Unleash and Dominate in Business Magazine is an eBookMagazine by
                        Entrepreneurs for Entrepreneurs. Click to download your free copy.
                    </p>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/poster.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/poster.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/poster.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="books-section bg-white call-to-action call-to-action-primary py-5 appear-animation" data-appear-animation="fadeIn" id="books-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/books.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Click to download any of our N2,000 Ebooks.
                    </p>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/ebook.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/ebook.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="{{ asset('images/ebook.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses-section bg-white call-to-action call-to-action-primary py-5 appear-animation" data-appear-animation="fadeIn" id="courses-section">
    <div class="container">
        <div class="row py-2 mt-5">
            <div class="col text-center">
                <img src="{{ asset('images/courses.png') }}" alt="" height="30" class="mb-5 img-fluid">
                <div class="call-to-action-content mb-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    {{-- <h2 class="font-weight-normal text-color-light mb-2">
                        <strong>Join Udominate in Business Cohort</strong>
                    </h2> --}}
                    <p class="font-weight-light text-black opacity-7 mb-0">
                        Click to download any of our FREE / PAID Courses.
                    </p>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mb-5">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-3">
                            <img src="{{ asset('images/course-3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
