@extends('user.user-master')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.example.com/toaster.min.css">

    <!-- Add JavaScript for toaster -->
    <script src="https://cdn.example.com/toaster.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="{{ asset('user/userFrontend') }}/css/profile.css">







    <div class="container-fluid mt-5 pt-5">
        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <?php $image = isset($trainer->image) && !empty($trainer->image) ? $trainer->image : ''; ?>

                                    @if ($image != null)
                                        <img src="<?= $image ?>" alt="" class="rounded-circle" width="150" />
                                    @else
                                        <img src="{{ asset('user/userFrontend/images/profileIcon.webp') }}" alt=""
                                            class="rounded-circle" width="150" />
                                    @endif

                                    <div class="mt-3">
                                        <h4 class="font-weight-bold text-primary " style="font-family: myFirstFont ">
                                            {{ GoogleTranslate::trans($trainer->first_name, app()->getLocale()) }}</h4>
                                        <p class="text-secondary mb-1">
                                            {{ GoogleTranslate::trans($trainer->trainer_role, app()->getLocale()) }}</p>
                                        <p class="text-muted font-size-sm">
                                            {{ GoogleTranslate::trans($trainer->city, app()->getLocale()) }}</p>
                                        {{-- @if (auth()->user()->role == 'trainee') --}}
                                        <a href="" style="width: 75%!important;">
                                            @if (isset($checkregistration))
                                                <a href="">
                                                    <button class="btnLoginTrainee  font-weight-bold w-75" type="submit">
                                                        {{ GoogleTranslate::trans('Applied', app()->getLocale()) }}</button>
                                                </a>
                                            @else
                                                @if (auth()->user())
                                                    <form action="{{ route('register.course') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                                                        <button class="btnLoginTrainee  font-weight-bold w-75"
                                                            type="submit">
                                                            {{ GoogleTranslate::trans(
                                                                'start
                                                                                                                                                                                                                                                                                                                                                                                                                                    course',
                                                                app()->getLocale(),
                                                            ) }}
                                                        </button>
                                                    </form>
                                                @else
                                                    <a href="{{ route('login.page') }}">
                                                        <button class="btnLoginTrainee  font-weight-bold w-75"
                                                            type="submit">{{ GoogleTranslate::trans(
                                                                'start
                                                                                                                                                                                                                                                                                                                                                                                                                                    course',
                                                                app()->getLocale(),
                                                            ) }}</button>
                                                    </a>
                                                @endif
                                            @endif

                                        </a>
                                        {{-- @endif --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                {{ GoogleTranslate::trans(' Full name', app()->getLocale()) }}
                                            </h5>
                                        </div>

                                        <div>
                                            <p
                                                style="color: #2994e5;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                {{ GoogleTranslate::trans($trainer->first_name, app()->getLocale()) }}
                                                {{ GoogleTranslate::trans($trainer->last_name, app()->getLocale()) }}
                                            </p>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                {{ GoogleTranslate::trans('Location', app()->getLocale()) }}
                                            </h5>
                                        </div>
                                        <div>
                                            {{-- <a href="{{ route('trainer.location', $trainer->id) }}"> --}}
                                            <a
                                                href="{{ 'https://www.google.com/maps/search/?api=1&query=' . $latitude . ',' . $longitude }}">
                                                <p
                                                    style="color: #2994e5;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                    <i class="fa fa-location-dot text-primary"></i></span>
                                                    {{ GoogleTranslate::trans($trainer->city, app()->getLocale()) }}
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                {{ GoogleTranslate::trans('Availability', app()->getLocale()) }}
                                            </h5>

                                        </div>


                                    </div>
                                    <div class="col-sm-6">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                {{ GoogleTranslate::trans('Compaign', app()->getLocale()) }}
                                            </h5>

                                        </div>


                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">

                                        @if ($trainer->availability == 1)
                                            <span
                                                class="badge badge-success">{{ GoogleTranslate::trans('Available', app()->getLocale()) }}</span>
                                        @else
                                            <span
                                                class="badge badge-danger">{{ GoogleTranslate::trans('Not available', app()->getLocale()) }}</span>
                                        @endif




                                    </div>
                                    <div class="col-sm-6">



                                        @if ($trainer->compaign == 1)
                                            <span
                                                class="badge badge-success">{{ GoogleTranslate::trans('Available', app()->getLocale()) }}</span>
                                        @else
                                            <span
                                                class="badge badge-danger">{{ GoogleTranslate::trans('Not available', app()->getLocale()) }}</span>
                                        @endif



                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ GoogleTranslate::trans('Rating', app()->getLocale()) }}
                                        </h5>


                                    </div>


                                </div>

                                <div class="row">



                                    <div class="col-sm-12 ">
                                        <form id="rating-form">
                                            @csrf
                                            <div class="rating" style="float: left;">
                                                <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                                                <input type="radio" name="rating" value="5" id="5"
                                                    {{ $rating && $rating->rating == 5 ? 'checked' : '' }}><label
                                                    for="5">☆</label>
                                                <input type="radio" name="rating" value="4" id="4"
                                                    {{ $rating && $rating->rating == 4 ? 'checked' : '' }}><label
                                                    for="4">☆</label>
                                                <input type="radio" name="rating" value="3" id="3"
                                                    {{ $rating && $rating->rating == 3 ? 'checked' : '' }}><label
                                                    for="3">☆</label>
                                                <input type="radio" name="rating" value="2" id="2"
                                                    {{ $rating && $rating->rating == 2 ? 'checked' : '' }}><label
                                                    for="2">☆</label>
                                                <input type="radio" name="rating" value="1" id="1"
                                                    {{ $rating && $rating->rating == 1 ? 'checked' : '' }}><label
                                                    for="1">☆</label>


                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2"
                                                style="height: 35px;float: right;">{{ GoogleTranslate::trans(
                                                    'Submit
                                                                                                                                                                                                                                                                                                                                                Rating',
                                                    app()->getLocale(),
                                                ) }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <a class="btn btn-primary" href="#" data-id="{{ $val->trainees->id }}"
                                        data-toggle="modal" data-target="#Administrative">
                                        Give review
                                    </a>


                                </div>


                            </div>


                            @if (auth()->user())
                                <div class="row px-3">
                                    <div class="col-sm-9">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ GoogleTranslate::trans(' Administrative account', app()->getLocale()) }}
                                        </h5>
                                    </div>
                                    <div class="col-sm-3 text-secondary ">
                                        <a class="float-right px-2" href="#" data-toggle="modal"
                                            data-target="#Administrative">
                                            <p>{{ GoogleTranslate::trans('click', app()->getLocale()) }}</p>

                                        </a>
                                    </div>
                                </div>
                            @endif
                            <div class="row px-3">
                                <div class="col-sm-9">
                                    <h5 class="mb-0"
                                        style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                        {{ GoogleTranslate::trans(' More info', app()->getLocale()) }}
                                    </h5>
                                </div>
                                <div class="col-sm-3 text-secondary ">
                                    <a class="float-right px-2" href="#" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <p>{{ GoogleTranslate::trans('click here', app()->getLocale()) }}</p>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                style="font-family: Times New Roman;font-style: none!important">{{ GoogleTranslate::trans('About Trainer', app()->getLocale()) }}</i>
                        </h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">




                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">{{ GoogleTranslate::trans('Phone', app()->getLocale()) }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ GoogleTranslate::trans($trainer->phone_number, app()->getLocale()) }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ GoogleTranslate::trans('Duration', app()->getLocale()) }}</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ GoogleTranslate::trans(' course duration 3 months', app()->getLocale()) }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">{{ GoogleTranslate::trans('Address', app()->getLocale()) }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ GoogleTranslate::trans($trainer->location, app()->getLocale()) }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnLoginTrainee"
                        data-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>

                </div>
            </div>
        </div>
    </div>



    <!--Administrative Modal -->
    <div class="modal fade" id="Administrative" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                style="font-family: Times New Roman">{{ GoogleTranslate::trans('Administrative', app()->getLocale()) }}</i>
                        </h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ GoogleTranslate::trans('Jazz Cash', app()->getLocale()) }}</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            03465079570
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ GoogleTranslate::trans('EasyPaisa', app()->getLocale()) }}</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            03465079570
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ GoogleTranslate::trans('Bank Account', app()->getLocale()) }}</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            0454-76576454355
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="{{ route('registration.image') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text">{{ GoogleTranslate::trans('Upload', app()->getLocale()) }}</span>
                                            </div>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    name="image">
                                                <label class="custom-file-label"
                                                    for="inputGroupFile01">{{ GoogleTranslate::trans(
                                                        'Upload
                                                                                                                                                                                                                                                                                                                                                                            receipt',
                                                        app()->getLocale(),
                                                    ) }}</label>



                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit"
                                                    class="btnLoginTrainee">{{ GoogleTranslate::trans('Submit', app()->getLocale()) }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnLoginTrainee"
                        data-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>

                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="Administrative" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                style="font-family: Times New Roman">Give reviews</i></h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">

                                    <div class="col-sm-12">
                                        <section id="app">
                                            <div class="commentcontainer">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{ route('store.reviews') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="trainee_id"
                                                                value="{!! $val->trainees->id ?? '' !!}" id="">

                                                            <textarea type="text" name="review" class="input" placeholder="Write a comment"></textarea>
                                                            <button class='primaryContained float-right'
                                                                type="submit">Add
                                                                Comment</button>
                                                        </form>
                                                    </div><!-- End col -->
                                                </div>
                                                <!--End Row -->
                                            </div>
                                            <!--End Container -->
                                        </section><!-- end App -->


                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class='primaryContained float-right' data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    {{-- Toggle availability --}}
    <script>
        $(function() {

            $('#trainer-toggle').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/trainer/change-status',
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(data) {

                        console.log(data.success)
                        if (status == 1) {
                            $('#comapnyActiveStatusContent').empty();
                            $('#comapnyActiveStatusContent').prepend(
                                ' <p class="mt-3 text-success"><b> You are online now!</b></p>'
                            );

                        } else {
                            $('#comapnyActiveStatusContent').empty();
                            $('#comapnyActiveStatusContent').prepend(
                                ' <p class="mt-3 text-danger"><b> You are offline now!</b></p>'
                            );
                        }
                    }
                });
            })
        })
    </script>



    {{-- Rating script --}}
    <script>
        $(document).ready(function() {

            $('#rating-form').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: '/submit-rating',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function() {
                        alert('Rating submitted successfully!');
                    },
                    error: function() {
                        alert('Error submitting rating.');
                    }
                });
            });
        });
    </script>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
@endsection
