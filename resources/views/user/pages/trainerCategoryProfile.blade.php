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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Include SweetAlert library -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- @if (session()->has('message'))
        <script>
            toastr.success("{{ session('message') }}");
        </script>
    @endif --}}
    <?php
    $toasterValue = session()->get('toasterValue');
    // dd($toasterValue);
    ?>
    @if ($toasterValue == 10)
        <script>
            toastr.success('Applied successfully! Now, pay for start the course');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @endif
    @if ($toasterValue == 2)
        <script>
            toastr.info('Already applied...');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @endif
    @if ($toasterValue == 3)
        <script>
            toastr.info('Thanks for giving feedback');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @endif




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
                                            {{-- {{ GoogleTranslate::trans($trainer->first_name, app()->getLocale()) }} --}}
                                            {{ $trainer->user_name }}
                                        </h4>
                                        <p class="text-secondary mb-1">
                                            {{-- {{ GoogleTranslate::trans($trainer->trainer_role, app()->getLocale()) }} --}}
                                            {{ $trainer->trainer_role }}
                                        </p>

                                        {{-- @if (auth()->user()->role == 'trainee') --}}
                                        <a href="" style="width: 75%!important;">
                                            @if (isset($checkregistration))
                                                @if ($checkregistration->status != 1)
                                                    <form action="{{ route('register.course') }}" method="POST">
                                                        <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                                                        @csrf
                                                        <button class="btnLoginTrainee  font-weight-bold w-100"
                                                            type="submit">
                                                            {{-- {{ GoogleTranslate::trans('Applied', app()->getLocale()) }} --}}
                                                            Pending Request
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('register.course') }}" method="POST">
                                                        <input type="hidden" name="trainer_id"
                                                            value="{{ $trainer->id }}">
                                                        @csrf
                                                        <button class="btnLoginTrainee  font-weight-bold w-100"
                                                            type="submit">
                                                            {{-- {{ GoogleTranslate::trans('Applied', app()->getLocale()) }} --}}
                                                            Course started
                                                        </button>
                                                    </form>
                                                @endif
                                            @else
                                                @if (auth()->user() && auth()->user()->role == 'trainee')
                                                    @if (auth()->user()->category == $trainer->trainer_role)
                                                        @if ($trainer->availability == '1')
                                                            <form action="{{ route('register.course') }}" method="POST">
                                                                <input type="hidden" name="trainer_id"
                                                                    value="{{ $trainer->id }}">
                                                                @csrf
                                                                <button class="btnLoginTrainee  font-weight-bold w-75"
                                                                    type="submit">
                                                                    {{-- {{ GoogleTranslate::trans('start course', app()->getLocale()) }} --}}
                                                                    start course
                                                                </button>
                                                            </form>
                                                        @endif
                                                    @else
                                                    @endif
                                                @elseif (auth()->user() && auth()->user()->role == 'trainer')
                                                @else
                                                    <a href="{{ route('welcome.homepage') }}">
                                                        <button id="startCourseBtn"
                                                            class="btnLoginTrainee font-weight-bold w-75" type="submit">
                                                            {{-- {{ GoogleTranslate::trans('start course', app()->getLocale()) }} --}}
                                                            start course
                                                        </button>
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
                                                {{ __('lang.para54') }}
                                            </h5>
                                        </div>

                                        <div>
                                            <p
                                                style="color: #2994e5;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                {{-- {{ GoogleTranslate::trans($trainer->first_name, app()->getLocale()) }}
                                                {{ GoogleTranslate::trans($trainer->last_name, app()->getLocale()) }} --}}
                                                {{ $trainer->first_name }}
                                                {{ $trainer->last_name }}
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
                                                {{ __('lang.para62') }}
                                            </h5>
                                        </div>
                                        <div>
                                            {{-- <a href="{{ route('trainer.location', $trainer->id) }}"> --}}
                                            @if ($trainerLocation != null)
                                                <a
                                                    href="{{ 'https://www.google.com/maps/search/?api=1&query=' . $latitude . ',' . $longitude }}">
                                                @else
                                                    <a href="#"></a>
                                            @endif

                                            <p
                                                style="color: #2994e5;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                <i class="fa fa-location-dot text-primary"></i></span>
                                                {{-- {{ GoogleTranslate::trans($trainer->city, app()->getLocale()) }} --}}
                                                {{ $trainer->location }}
                                            </p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                @if (auth()->user()->role == 'trainee' && isset($checkregistration) && !empty($checkregistration))
                                    <div class="row ">
                                        <div class="col-sm-9">
                                            <a class="float-left " href="#" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <h5 class="mb-0"
                                                    style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                    {{ __('lang.para87') }}
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="col-sm-3 text-secondary ">
                                            {{-- <a class="float-right px-2" href="#" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <p>{{ __('lang.para88') }}</p>

                                            </a> --}}
                                        </div>
                                    </div>
                                @else
                                    <div class="row ">
                                        <div class="col-sm-9">
                                            <a class="float-left " href="#">
                                                <h5 class="mb-0"
                                                    style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                    {{ __('lang.para87') }}
                                                </h5>
                                            </a>
                                        </div>

                                    </div>
                                @endif
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                {{ __('lang.para75') }}
                                            </h5>

                                        </div>


                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">

                                        @if ($trainer->availability == 1)
                                            <span class="badge badge-success">
                                                {{ __('lang.para77') }}
                                            @else
                                                <span class="badge badge-danger">
                                                    {{ __('lang.para78') }}</span>
                                        @endif




                                    </div>

                                </div>
                                <hr>
                                @if (auth()->user()->role == 'trainee' && isset($checkregistration) && !empty($checkregistration))
                                    @if (auth()->user() && auth()->user()->role == 'trainee')
                                        @if (auth()->user()->category == $trainer->trainer_role)
                                            <div class="row ">
                                                <div class="col-sm-9">
                                                    <a class="float-left" href="#" data-toggle="modal"
                                                        data-target="#Administrative">
                                                        <h5 class="mb-0"
                                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                            {{-- {{ __('lang.para85') }} --}}
                                                            {{-- {{ __('lang.para86') }} --}}
                                                            Pay now
                                                        </h5>
                                                    </a>
                                                </div>

                                            </div>
                                        @endif
                                    @endif
                                @else
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <a class="float-left" href="#">
                                                <h5 class="mb-0"
                                                    style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                    {{-- {{ __('lang.para85') }} --}}

                                                    Pay now
                                                </h5>
                                            </a>
                                        </div>

                                    </div>
                                @endif
                                <hr>


                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{-- {{ __('lang.para83') }} --}}
                                            Give Rating
                                        </h5>
                                    </div>
                                    <div class="col-sm-8 ">

                                        @if (auth()->user()->role == 'trainee' && isset($checkregistration) && !empty($checkregistration))
                                            <form id="rating-form">
                                                @csrf
                                                <div class="rating" style="float:right;">
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
                                            </form>

                                            <script>
                                                $(document).ready(function() {
                                                    $('.rating input[type="radio"]').click(function() {
                                                        var formData = $('#rating-form').serialize();
                                                        $.ajax({
                                                            url: '/submit-rating',
                                                            type: 'POST',
                                                            data: formData,
                                                            success: function(response) {
                                                                alert('Rating submitted successfully!');
                                                            },
                                                            error: function() {
                                                                alert('Error submitting rating.');
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                        @else
                                            <div style="float: right;">
                                                <label for="1">☆</label>
                                                <label for="1">☆</label>
                                                <label for="1">☆</label>
                                                <label for="1">☆</label>
                                                <label for="1">☆</label>
                                            </div>
                                            {{-- <button type="submit" class="btn btn-primary mt-2"
                                                style="height: 35px;float: right;">
                                                {{ __('lang.para84') }}</button> --}}
                                        @endif


                                    </div>
                                </div>
                            </div>

                            <div class="row p-3">
                                <div class="col-sm-12">

                                    <h5 class="mb-0"
                                        style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                        Share your review here
                                    </h5>
                                    <a class="btn btn-primary" href="#" data-id="{{ $trainer->id }}"
                                        data-toggle="modal" data-target="#review" style="float: right;">
                                        Add
                                    </a>

                                </div>
                            </div>

                            <hr>

                            <div class="row p-3">
                                <div class="col-sm-12">
                                    <div class=" d-flex">
                                        <h5 class="mb-0 pr-2"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ __('lang.para76') }}
                                        </h5>

                                    </div>


                                </div>
                                <div class="col-sm-6">
                                    @if ($trainer->compaign == 1)
                                        <span class="badge badge-success">
                                            {{ __('lang.compaignHiring') }}
                                            {{-- Hiring(Still not available) --}}
                                        @else
                                            <span class="badge badge-danger">
                                                {{-- {{ __('lang.compaignNotAvailable') }} --}}
                                                Hiring(Still not available)
                                            </span>
                                            <br>

                                            <span class="badge badge-danger">
                                                First Complete your Course
                                            </span>
                                    @endif
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
                                style="font-family: Times New Roman;font-style: none!important">
                                {{ __('lang.para89') }}</i></h5>
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
                                                {{-- {{ GoogleTranslate::trans('Phone', app()->getLocale()) }} --}}
                                                Phone
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->phone_number, app()->getLocale()) }} --}}
                                            {{ $trainer->phone_number }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ __('lang.para91') }} </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ __('lang.para92') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                {{ __('lang.para93') }}</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->location, app()->getLocale()) }} --}}
                                            {{ $trainer->location }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                ID Card</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->location, app()->getLocale()) }} --}}
                                            {{ $trainer->id_card }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                Shop Number</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->location, app()->getLocale()) }} --}}
                                            {{ $trainer->shop_number }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-2">
                                                CNIC
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $trainer->id_card }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnLoginTrainee" data-dismiss="modal">
                        {{ __('lang.para94') }}</button>

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
                                style="font-family: Times New Roman">
                                {{ __('lang.para95') }}</i></h5>
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
                                              Jazzcash/Easypaisa Phone Number</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          {{$trainer->phone_number}}
                                        </div>
                                    </div>
                                    <hr>
                                   
                                    <form action="{{ route('registration.image') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ __('lang.para99') }}</span>
                                            </div>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    name="image">
                                                <label class="custom-file-label" for="inputGroupFile01">
                                                    {{ __('lang.para100') }}</label>



                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btnLoginTrainee">
                                                    {{ __('lang.para101') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnLoginTrainee" data-dismiss="modal">
                        {{ __('lang.para102') }}</button>

                </div>
            </div>
        </div>

    </div>

    {{-- Review modal --}}
    <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                        <form action="{{ route('store.trainer.reviews') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="trainer_id"
                                                                value="{!! $trainer->id ?? '' !!}" id="">

                                                            <textarea type="text" name="review" class="input" placeholder="Write a comment" require></textarea>
                                                            @if (auth()->user()->role == 'trainee' &&
                                                                    isset($checkregistration) &&
                                                                    !empty($checkregistration) &&
                                                                    $now > $checkregistration->end_date)
                                                                <button class='btn btn-primary float-right'
                                                                    type="submit">Add
                                                                    Comment</button>
                                                            @else
                                                                <button class="btn btn-primary float-right" type="button"
                                                                    onclick="showToast()">Add Comment</button>
                                                            @endif

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
                    <button type="button" class='btn btn-primary float-right' data-dismiss="modal">Close</button>

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
    {{-- <script>
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
    </script> --}}

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>


    <script>
        function showToast() {
            Toastify({
                text: "To comment,complete your course first",
                duration: 3000, // Duration in milliseconds
                gravity: "bottom", // Position: top, bottom, or center
                close: true // Show a close button
            }).showToast();
        }
    </script>



    <script>
        // Add click event listener to the button
        document.getElementById("startCourseBtn").addEventListener("click", function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Show SweetAlert confirmation dialog
            swal({
                title: "Register yourself first",
                text: "Do you want to start the course?",
                icon: "warning",
                buttons: ["No", "Yes"],
                dangerMode: true,
            }).then((willStart) => {
                // If the user clicks "Start" button, redirect to the specified page
                if (willStart) {
                    window.location.href = "{{ route('welcome.homepage') }}";
                }
            });
        });
    </script>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
@endsection
