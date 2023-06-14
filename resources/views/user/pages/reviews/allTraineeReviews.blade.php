@extends('user.user-master')
@section('content')
    <section class="ftco-section bg-light">
        <div class=" container-fluid ">

            <div class="container mt-5">

                <div class="row">

                    <a href="">



                        <div class="col-md-3 col-lg-3 ftco-animate d-flex align-items-stretch">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);">
                                        <?php $image = isset($trainee->image) && !empty($trainee->image) ? $trainee->image : ''; ?>


                                        @if ($image != null)
                                            <img src="<?= $image ?>" alt="" class="img align-self-stretch"
                                                width="150" srcset="" />
                                        @else
                                            <img src="{{ asset('user/userFrontend/images/profileIcon.webp') }}"
                                                alt="" class="img align-self-stretch" width="150" />
                                        @endif
                                    </div>
                                </div>


                                <div class="text pt-3">
                                    <h3><a href="instructor-details.html">
    
                                            {{ $trainee->first_name }}
                                            {{ $trainee->last_name }}
                                        </a></h3>
                                    <span class="position mb-2">
                                        
                                        {{ $trainee->trainee_role }}
                                    </span>
                                    <span class="position mb-2">Duration :Three Month's</span>


                                    <div class="faded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>



                    {{-- <div class="col-md-9 col-lg-9 ftco-animate d-flex"> --}}

                    <div class="col-md-7 pl-md-7 py-5">
                        <h1>All Reviews</h1>
                        @foreach ($reviews as $traineeReviews)
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">

                                    <h4 class="mb-0 text-primary" style="font-family: Times New Roman">
                                        <p class="mb-0">{{ $traineeReviews->trainers->first_name }}</p>


                                    </h4>
                                    <span class="mb-3">{{ $traineeReviews->trainers->trainer_role }}</span>
                                    <p class="mt-3">{{ $traineeReviews->reviews }}
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                {{-- </div> --}}
                {{--
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
                                                        <p>name</p>

                                                    </h2>
                                                    <p>review</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}

            </div>

        </div>
    </section>

    
@endsection
