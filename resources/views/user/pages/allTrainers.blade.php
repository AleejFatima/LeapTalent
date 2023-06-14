@extends('user.user-master')
@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    @if ($role == 'Plumber')
        <section class="hero-wrap hero-wrap-2"
            style="background-image: url('{{ asset('user/userFrontend') }}/images/plumber.jpeg');">
        @elseif ($role == 'Electrician')
            <section class="hero-wrap hero-wrap-2"
                style="background-image: url('{{ asset('user/userFrontend') }}/images/electrician.jpeg');">
            @elseif ($role == 'Barber')
                <section class="hero-wrap hero-wrap-2"
                    style="background-image: url('{{ asset('user/userFrontend') }}/images/barber.jpeg');">
                @elseif ($role == 'Mechanic')
                    <section class="hero-wrap hero-wrap-2"
                        style="background-image: url('{{ asset('user/userFrontend') }}/images/mechanic.jpeg');">
                    @elseif ($role == 'Chef')
                        <section class="hero-wrap hero-wrap-2"
                            style="background-image: url('{{ asset('user/userFrontend') }}/images/chef.jpeg');">
                        @elseif ($role == 'Gardener')
                            <section class="hero-wrap hero-wrap-2"
                                style="background-image: url('{{ asset('user/userFrontend') }}/images/gardner.jpeg');">
                            @elseif ($role == 'Artist')
                                <section class="hero-wrap hero-wrap-2"
                                    style="background-image: url('{{ asset('user/userFrontend') }}/images/artist.jpeg');">
                                @else
                                    <section class="hero-wrap hero-wrap-2"
                                        style="background-image: url('{{ asset('user/userFrontend') }}/images/tailor.jpeg');">
    @endif

    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('welcome.homepage') }}">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>

                        All Trainers
                        <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">

                    {{ $role }}
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

                        <form class="form-inline" method="POST" action="{{ route('category.trainer.search') }}">
                            @csrf
                            <input type="hidden" name="role" value="{{ $role }}">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                                name="search_trainer">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                               
                                Search
                            </button>
                        </form>
                        <h3 class="text-white" style="width: 65%;;font-family: Georgia, 'Times New Roman', Times, serif">
                            Select your trainer
                            and start the course</h3>
                    </nav>
                </div>
            </div>
            <div class="container mt-5">

                <div class="row">
                    @foreach ($trainersCategory as $trainer)
                        @if (auth()->user())
                            @if (
                                (auth()->user()->role == 'trainee' && auth()->user()->category == $trainer->trainer_role) ||
                                    auth()->user()->role == 'trainer')
                                <a href="{{ route('trainer.category.profile', $trainer->id) }}">
                                @elseif (auth()->user()->role == 'trainee' && auth()->user()->category != $trainer->trainer_role)
                                    <a href="#">
                                    @else
                                        @if (auth()->user())
                                            <a href="{{ route('trainer.category.profile', $trainer->id) }}">
                                            @else
                                                <a href="{{ route('login.page') }}">
                                        @endif
                                        {{-- <a href="{{ route('trainer.category.profile', $trainer->id) }}"> --}}
                            @endif
                        @else
                            <a href="{{ route('login.page') }}">
                        @endif

                        <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch"
                                        style="background-image: url(images/teacher-1.jpg);">
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

                                            {{-- <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i> --}}

                                            <a href="{{ route('trainer.all.reviews', $trainer->id) }}">

                                                ({{ $trainer->reviews->count() }})
                                                {{-- Number of rating --}}

                                                {{-- <p>Number of ratings: {{ $trainer->ratings->count() }}</p>
                                                @if ($trainer->ratings->count() > 0)
                                                    <p>Average rating:
                                                        {{ number_format($trainer->ratings->avg('rating'), 1) }} stars</p>
                                                @else
                                                    <p>No ratings yet.</p>
                                                @endif --}}

                                            </a>


                                        </div>
                                    </div>

                                    <div class="faded">
                                        {{-- <p>
                                            @if ($role == 'Plumber')
                                                {{ __('lang.Plumber1') }}
                                            @elseif ($role == 'Electrition')
                                                {{ __('lang.electrician1') }}
                                            @elseif ($role == 'Barber')
                                                {{ __('lang.Barber1') }}
                                            @elseif ($role == 'Mechanic')
                                                {{ __('lang.mechanic1') }}
                                            @elseif ($role == 'Chef')
                                                {{ __('lang.chef1') }}
                                            @elseif ($role == 'artist')
                                                {{ __('lang.artist1') }}
                                            @elseif ($role == 'gardener')
                                                {{ __('lang.Gardener1') }}
                                            @else
                                                {{ __('lang.Tailor1') }}
                                            @endif
                                        </p> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    @endforeach


                </div>
                {{-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            </div>
    </section>

 

    <script>
        $(document).on('click', '.view_details', function() {
            var crud = $(this).attr('crud');
            var id = $(this).attr('rel');

            $.ajax({
                type: 'POST',
                url: '/trainer-review/detail',
                data: {
                    'id': id,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(res) {
                    $('#detail-modal').modal('show');
                    $("#detail-modal .modal-body").html(res);
                }
            })
        });
    </script>

    <script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@endsection
