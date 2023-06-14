@extends('user.user-master')
@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('user/userFrontend') }}/images/viewmoreCategory.jpeg');">



        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('welcome.homepage') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>
                            Category
                            <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">

                    </h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class=" container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-light bg-dark justify-content-between align-items-center">

                        <form class="form-inline" method="POST" action="{{ route('category.search') }}">
                            @csrf
                            {{-- <input type="hidden" name="role" value="{{ $role }}"> --}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                                name="search_trainer">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>
                </div>
            </div>
            <div class="container mt-5">
                @if (isset($categorySearch) && !empty($categorySearch))
                    <div class="row">
                        <section class="ftco-section">
                            <div class="container">
                                <div class="row justify-content-left">
                                    @if ($categorySearch == 'plumber' || $categorySearch == 'Plumber')
                                        <div class="col-md-3 col-lg-3">
                                            <a href="{{ route('all.trainers', 'Plumber') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/plumber.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para5') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="row justify-content-left">
                                    @if ($categorySearch == 'electrician' || $categorySearch == 'Electrician')
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
                                    @endif
                                </div>

                                <div class="row justify-content-left">
                                    @if ($categorySearch == 'barber' || $categorySearch == 'Barber')
                                        <div class="col-md-3 col-lg-3">
                                            <a href="{{ route('all.trainers', 'Barber') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/barber.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para7') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                <div class="row justify-content-left">

                                    @if ($categorySearch == 'mechanic' || $categorySearch == 'Mechanic')
                                        <div class="col-md-3 col-lg-3">
                                            <a href="{{ route('all.trainers', 'Mechanic') }}"
                                                class="course-category img d-flex align-items-center justify-content-center"
                                                style="background-image: url({{ asset('user/userFrontend') }}/images/mechanic.jpeg);">
                                                <div class="text w-100 text-center">
                                                    <h3> {{ __('lang.para8') }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                            </div>


                            <div class="row justify-content-left">
                                @if ($categorySearch == 'chef' || $categorySearch == 'Chef')
                                    <div class="col-md-3 col-lg-3">



                                        <a href="{{ route('all.trainers', 'Chef') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/chef.jpeg);">
                                            <div class="text w-100 text-center">
                                                <h3> {{ __('lang.para9') }} </h3>

                                            </div>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div class="row justify-content-left">

                                @if ($categorySearch == 'tailor' || $categorySearch == 'Tailor')
                                    <div class="col-md-3 col-lg-3">
                                        <a href="{{ route('all.trainers', 'Tailor') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/tailor.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para10') }}</h3>

                                            </span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="row justify-content-left">

                                @if ($categorySearch == 'artist' || $categorySearch == 'Artist')
                                    <div class="col-md-3 col-lg-3">
                                        <a href="{{ route('all.trainers', 'Artist') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/artist.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para11') }}</h3>

                                            </span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="row justify-content-left">

                                @if ($categorySearch == 'gardener' || $categorySearch == 'Gardener')
                                    <div class="col-md-3 col-lg-3">
                                        <a href="{{ route('all.trainers', 'Gardener') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/gardner.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para12') }}</h3>

                                            </span>
                                        </a>
                                    </div>
                                @endif

                            </div>

                        </section>
                    </div>
                @else
                    <div class="row">
                        <section class="ftco-section">
                            <div class="container">

                                <div class="row justify-content-center p-3">
                                    <div class="col-md-3 col-lg-3 mb-5">
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
                                        <a href="{{ route('all.trainers', 'Mechanic') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/mechanic.jpeg);">
                                            <div class="text w-100 text-center">
                                                <h3> {{ __('lang.para8') }}</h3>

                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-3 col-lg-3">



                                        <a href="{{ route('all.trainers', 'Chef') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/chef.jpeg);">
                                            <div class="text w-100 text-center">
                                                <h3> {{ __('lang.para9') }} </h3>

                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-3 col-lg-3">
                                        <a href="{{ route('all.trainers', 'Tailor') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/tailor.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para10') }}</h3>

                                            </span>
                                        </a>
                                    </div>

                                    <div class="col-md-3 col-lg-3">
                                        <a href="{{ route('all.trainers', 'Artist') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/artist.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para11') }}</h3>

                                            </span>
                                        </a>
                                    </div>

                                    <div class="col-md-3 col-lg-3 mb-3">
                                        <a href="{{ route('all.trainers', 'Gardener') }}"
                                            class="course-category img d-flex align-items-center justify-content-center"
                                            style="background-image: url({{ asset('user/userFrontend') }}/images/gardner.jpeg);">
                                            <span class="text w-100 text-center">
                                                <h3> {{ __('lang.para12') }}</h3>

                                            </span>
                                        </a>
                                    </div>


                                </div>

                        </section>
                        {{-- <section class="ftco-section">
                            <div class="container">

                                <div class="row justify-content-center">




                                </div>

                        </section> --}}
                    </div>
                @endif
            </div>
    </section>
@endsection
