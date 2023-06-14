@extends('user.user-master')
@section('content')



    <section class="ftco-section bg-light">
        <div class=" container-fluid ">

            <div class="container mt-5">

                <div class="row">
@if(auth()->user())
<a href="{{ route('trainer.category.profile', $trainer->id) }}">



<div class="col-md-3 col-lg-3 ftco-animate d-flex align-items-stretch">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);">
                <?php $image = isset($trainer->image) && !empty($trainer->image) ? $trainer->image : ''; ?>


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
            <h3><a>
                    {{ $trainer->first_name }}
                    {{ $trainer->last_name }}
                </a></h3>
            <span class="position mb-2">
                {{ $trainer->trainer_role }}
            </span>
            <span class="position mb-2">Duration :Three Month's</span>
            <span class="position mb-2">Rs 1500</span>
            <div class="mt-1 d-flex justify-content-between align-items-center text-primary">

                <div class="small-ratings">
                    <span>{{ number_format($trainer->ratings->avg('rating'), 1) }}</span>
                    @if ($trainer->ratings->count() > 0)
                        @php $rating = round($trainer->ratings->avg('rating') * 2) / 2; @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= floor($rating))
                                <i class="fa fa-star rating-color"></i>
                            @elseif ($rating - floor($rating) >= 0.5 && $i == ceil($rating))
                                <i class='fa fa-star-half'></i>
                            @else
                                {{-- <i class="fa fa-star-o"></i> --}}
                            @endif
                        @endfor
                    @else
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @endif
                </div>
            </div>
            <div class="faded">
            </div>
        </div>
    </div>
</div>
</a>
@else
<a href="{{ route('login.page') }}">



<div class="col-md-3 col-lg-3 ftco-animate d-flex align-items-stretch">
    <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);">
                <?php $image = isset($trainer->image) && !empty($trainer->image) ? $trainer->image : ''; ?>


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
                    {{ $trainer->first_name }}
                    {{ $trainer->last_name }}
                </a></h3>
            <span class="position mb-2">
                {{ $trainer->trainer_role }}
            </span>
            <span class="position mb-2">Duration :Three Month's</span>
            <span class="position mb-2">Rs 1500</span>
            <div class="mt-1 d-flex justify-content-between align-items-center text-primary">

                <div class="small-ratings">
                    <span>{{ number_format($trainer->ratings->avg('rating'), 1) }}</span>
                    @if ($trainer->ratings->count() > 0)
                        @php $rating = round($trainer->ratings->avg('rating') * 2) / 2; @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= floor($rating))
                                <i class="fa fa-star rating-color"></i>
                            @elseif ($rating - floor($rating) >= 0.5 && $i == ceil($rating))
                                <i class='fa fa-star-half'></i>
                            @else
                                {{-- <i class="fa fa-star-o"></i> --}}
                            @endif
                        @endfor
                    @else
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @endif
                </div>
            </div>
            <div class="faded">
            </div>
        </div>
    </div>
</div>
</a>
@endif
                  



                    {{-- <div class="col-md-9 col-lg-9 ftco-animate d-flex"> --}}

                    <div class="col-md-7 pl-md-7 py-5">
                        <h1>All Reviews</h1>
                        @foreach ($reviews as $trainerReviews)
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">

                                    <h4 class="mb-2 text-primary" style="font-family: Times New Roman">
                                        <p>{{ $trainerReviews->trainees->first_name }}</p>

                                    </h4>
                                    <p>{{ $trainerReviews->reviews }}
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

    <!-- Reviews modal -->


    <div class="modal fade bd-example-modal-lg" id="reviewsModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Reviews</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Trainee name</th>
                                        <th scope="col">Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Arsalan</td>
                                        <td> I was able to gain the skills and knowledge needed to start my garage and
                                            become a successful mechanic.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Muneer</td>
                                        <td> As a freelance artist, I was always looking for new ways to improve my skills.
                                            Leap Talent's platform was a perfect fit for me..</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Arshad</td>
                                        <td> Thanks , I was able to take my skills to the next level and attract new clients
                                            to my business.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Sabir</td>
                                        <td> Thanks , I was able to land several new clients and grow my tailoring business.
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
