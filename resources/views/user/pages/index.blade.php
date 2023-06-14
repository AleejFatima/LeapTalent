@extends('user.user-master')
@section('content')
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('user/userFrontend') }}/css/slider.css">
    <style>
        a {
            cursor: pointer !important;
        }
    </style>

    <style>
        .carousel {
            margin: 25px 0 50px;
            background: #fff;
            position: relative;
            padding: 8px;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .carousel:before,
        .carousel:after {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 15px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
            transform: rotate(-3deg);
        }

        .carousel:after {
            transform: rotate(3deg);
            right: 10px;
            left: auto;
        }

        .carousel .carousel-item {
            text-align: center;
            min-height: 200px;
        }

        .carousel .carousel-item img {
            max-width: 100%;
            margin: 0 auto;
            /* Align slide image horizontally center in Bootstrap v3 */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 27px;
            height: 54px;
            overflow: hidden;
            opacity: 1;
            margin: auto 0;
            background: none;
            text-shadow: none;
        }

        .carousel-control-prev span,
        .carousel-control-next span {
            width: 54px;
            height: 54px;
            display: inline-block;
            background: #4a4a4a;
            border-radius: 50%;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .carousel-control-prev span {
            margin-right: -27px;
        }

        .carousel-control-next span {
            margin-left: -27px;
        }

        .carousel-control-prev:hover span,
        .carousel-control-next:hover span {
            background: #3b3b3b;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 24px;
            margin-top: 13px;
        }

        .carousel-control-prev {
            margin-left: -28px;
        }

        .carousel-control-next {
            margin-right: -28px;
        }

        .carousel-control-prev i {
            margin-left: -24px;
        }

        .carousel-control-next i {
            margin-right: -24px;
        }

        .carousel-indicators {
            bottom: -42px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            margin: 1px 4px;
        }

        .carousel-indicators li {
            border: 1px solid #475c6f;
        }

        .carousel-indicators li.active {
            background: #20b0b9;
            border-color: #20b0b9;
        }
    </style>

    <div class="hero-wrap js-fullheight"
        style="background-image: url('{{ asset('user/userFrontend') }}/images/mainBanner.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center " data-scrollax-parent="true">
                <div class="col-lg-5 col-md-5  ftco-animate p-2 shadow-lg p-3 mb-5 bg-white rounded "
                    style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    {{-- <span class="subheading text-dark">{{ __('lang.welcome') }}</span> --}}
                    <h1 class="mb-4 text-dark" style="font-family: Times New Roman;">
                        {{ __('lang.para1') }}<br>
                        {{ __('lang.welcomepara') }}
                    </h1>
                    <p class="caps text-dark">
                        {{ __('lang.para2') }}

                    </p>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section" id="category">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">> {{ __('lang.para3') }}</span>
                    <h2 class="mb-4" style="font-family: Times New Roman">
                        {{ __('lang.para4') }} </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-lg-3">
                    <a href="{{ route('all.trainers', 'Plumber') }}"
                        class="course-category img d-flex align-items-center justify-content-center"
                        style="background-image: url({{ asset('user/userFrontend') }}/images/plumber.jpeg);">
                        <div class="text w-100 text-center">
                            <h3> {{ __('lang.para5') }}</h3>

                        </div>
                    </a>
                </div>


                <div class="col-md-3 col-lg-3">
                    <a href="{{ route('all.trainers', 'Electrician') }}"
                        class="course-category img d-flex align-items-center justify-content-center"
                        style="background-image: url({{ asset('user/userFrontend') }}/images/electrician.jpeg);">
                        <div class="text w-100 text-center">
                            <h3> {{ __('lang.para6') }}
                            </h3>

                        </div>
                    </a>
                </div>


                <div class="col-md-3 col-lg-3">
                    <a href="{{ route('all.trainers', 'Barber') }}"
                        class="course-category img d-flex align-items-center justify-content-center"
                        style="background-image: url({{ asset('user/userFrontend') }}/images/barber.jpeg);">
                        <div class="text w-100 text-center">
                            <h3> {{ __('lang.para7') }}</h3>

                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3">
                    <a href="{{ route('all.category') }}"
                        class="course-category img d-flex align-items-center justify-content-center"
                        style="background-image: url({{ asset('user/userFrontend') }}/images/mechanic.jpeg);">
                        <div class="text w-100 text-center">
                            <h3> {{ __('lang.viewMore') }}</h3>

                        </div>
                    </a>
                </div>
            </div>

    </section>

    {{-- <section class="ftco-section testimony-section bg-light" id="category">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">> {{ __('lang.para3') }}</span>
                <h2 class="mb-4" style="font-family: Times New Roman">
                    {{ __('lang.para4') }} </h2>
            </div>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" style="background-color:#1271c5;" data-slide-to="0"
                    class="active"></li>
                <li data-target="#carouselExampleIndicators" style="background-color: #1271c5;" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" style="background-color: #1271c5;" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container container-2">
                        <div class="row ftco-animate">
                            <div class="col-md-12">
                                <div class="carousel-testimony owl-carousel">


                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Plumber') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/plumber.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para5') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Electrition') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/electrician.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para6') }}
                                                    </h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Barber') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/barber.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para7') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Mechanic') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/mechanic.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para8') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container container-2">
                        <div class="row ftco-animate">
                            <div class="col-md-12">
                                <div class="carousel-testimony owl-carousel">
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Chef') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/chef.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para9') }} </h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Tailor') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/tailor.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para10') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Artist') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/artist.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para11') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Gardener') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/gardner.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para12') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container container-2">
                        <div class="row ftco-animate">
                            <div class="col-md-12">
                                <div class="carousel-testimony owl-carousel">
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Chef') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/chef.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para9') }} </h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Tailor') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/tailor.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para10') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Artist') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/artist.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para11') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-2 col-lg-2">
                                            <a href="{{ route('all.trainers', 'Gardener') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/gardner.jpeg);">
                                                <span class="text w-100 text-center">
                                                    <h3> {{ __('lang.para12') }}</h3>

                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                    style="background-color: #1271c5;
                border-radius: 100%;transform: translateX(-68px);"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"
                    style="background-color: #1271c5;
                border-radius: 100%;transform: translateX(68px);"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section> --}}


    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('user/userFrontend') }}/images/bgcounter.jpeg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-graduated"></span></div>
                        <div class="text">
                            <strong class="number" data-number="4500">0</strong>
                            <span> {{ __('lang.para13') }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-instructor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="1200">0</strong>
                            <span> {{ __('lang.para14') }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-tools"></span></div>
                        <div class="text">
                            <strong class="number" data-number="300">0</strong>
                            <span> {{ __('lang.para15') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img" id="about">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="d-flex about-wrap">
                                <div class="img d-flex align-items-center justify-content-center"
                                    style="background-image:url({{ asset('user/userFrontend') }}/images/about1.jpeg);">
                                </div>
                                <div class="img-2 d-flex align-items-center justify-content-center"
                                    style="background-image:url({{ asset('user/userFrontend') }}/images/about2.jpeg);">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">

                                    <h2 class="mb-4" style="font-family: Times New Roman">
                                        {{ __('lang.para16') }}
                                    </h2>
                                    <p class="text-justify text-dark"> {{ __('lang.para17') }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row pb-4">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4" style="font-family: Times New Roman">
                    {{ __('lang.para18') }}
                </h2>

            </div>
        </div>
    </div>
    <div class="container">

        <section id="testim" class="testim">
            <div class="testim-cover">
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                    -->
                        <li class="dot"></li>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                    -->
                        <li class="dot"></li>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                    -->
                        <li class="dot"></li>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                    -->
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">

                        <div class="active">
                            <div class="img"><img src="{{ asset('user/userFrontend/images/1.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.artist') }}</h2>
                            <p>{{ __('lang.artist1') }}
                            </p>
                        </div>

                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/2.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.electrician') }}</h2>
                            <p>{{ __('lang.electrician1') }}
                            </p>
                        </div>

                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/3.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.chef') }}</h2>
                            <p>{{ __('lang.chef1') }}
                            </p>
                        </div>

                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/4.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.mechanic') }}</h2>
                            <p>{{ __('lang.mechanic1') }}
                            </p>
                        </div>

                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/5.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.Plumber') }}</h2>
                            <p> {{ __('lang.Plumber1') }}
                            </p>
                        </div>
                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/6.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.Barber') }}</h2>
                            <p> {{ __('lang.Barber1') }}
                            </p>
                        </div>
                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/7.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.Gardener') }}</h2>
                            <p> {{ __('lang.Gardener1') }}
                            </p>
                        </div>
                        <div>
                            <div class="img"><img src="{{ asset('user/userFrontend/images/8.jpg') }}" alt="">
                            </div>
                            <h2> {{ __('lang.Tailor') }}</h2>
                            <p> {{ __('lang.Tailor1') }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>



    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

                        <h2 class="mb-4" style="font-family: Times New Roman">
                            {{ __('lang.offer') }}
                        </h2>
                        <p class="text-justify text-dark"> {{ __('lang.offerpart1') }}
                        </p>
                        {{-- <p> {{ __('lang.para34') }}
                        </p> --}}

                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex justify-content-center align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tools"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">
                                        {{ __('lang.topQuality') }}
                                    </h3>
                                    {{-- <p> {{ __('lang.topQuality') }}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-instructor"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">
                                        {{ __('lang.highlySkill') }}

                                    </h3>
                                    {{-- <p> {{ __('lang.highlySkill1') }}
                                    </p> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section services-section" id="contactUs">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

                        <h2 class="mb-4" style="font-family: Times New Roman">
                            {{ __('lang.contactUs') }}
                        </h2>
                        <p class="text-justify"> {{ __('lang.contactUs1') }}
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <i class="fa fa-contact"></i>
                                <div class="media-body">
                                    <h3 class="heading mb-3">
                                        {{ __('lang.contactUs2') }}<br> {{ __('lang.contactUs4') }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <i class="fa fa-contact"></i>
                                <div class="media-body">
                                    <h3 class="heading mb-3">
                                        {{ __('lang.contactUs3') }}<br> {{ __('lang.contactUs5') }}

                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <script>
        // vars
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
@endsection
