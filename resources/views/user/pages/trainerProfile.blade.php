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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="{{ asset('user/userFrontend') }}/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .dropdown:hover>.dropdown-menu {
      display: block;
    }

    .dropdown>.dropdown-toggle:active {
      /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }
    </style>

{{-- <?php
$toasterValue = session()->get('toasterValue');

?> --}}
{{-- @if ($toasterValue == 1)
    <script>
        toastr.success('Already registered...');
    </script>
    {{ session()->put('toasterValue', 0) }}
@elseif ($toasterValue == 2)
    <script>
        toastr.success('Registered Successfully');
    </script>
    {{ session()->put('toasterValue', 0) }}
@endif --}}


    <div class="container-fluid mt-5 pt-5">
        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="avatar-upload">
                                        <form id="edit_image_form">
                                            <div class="avatar-edit">
                                                <?php $image = isset($trainer->image) && !empty($trainer->image) ? $trainer->image : ''; ?>
                                                <input type='file' name="image" id="imageUpload" data-default-file="{{<?= $trainer->image ?>}}"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url({!! $trainer->image !!});">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-3">
                                        <h4 class="font-weight-bold text-primary " style="font-family: myFirstFont ">
                                            {{-- {{ GoogleTranslate::trans($trainer->first_name, app()->getLocale()) }} --}}
                                            {{$trainer->user_name}}
                                        </h4>
                                        <p class="text-secondary mb-1">
                                            {{-- {{ GoogleTranslate::trans($trainer->trainer_role, app()->getLocale()) }} --}}
                                            {{$trainer->trainer_role}}
                                        </p>

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
                                                {{$trainer->first_name}} {{$trainer->last_name}}

                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 float-right">

                                        <div class="dropdown">
                                            <a class="nav-link  float-right rounded-circle" href="#" id="profileDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                                            <i class="fa fa-bell text-primary "></i>
                                            <span class="badge border bg-white rounded-circle" style="position: relative; top: -13px;left: -9px; }">
                                                {{ $totalNotification }}
                                            </span>
                                            <span class="sr-only">
                                                {{ __('lang.para55') }}</span>
                                            </a>
                                        {{-- <a class=" float-right rounded-circle " href="{{ route('registered.users') }}"

                                        id="dropdownMenuButton"
                                        data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                            <i class="fa fa-bell text-primary "></i> <span
                                                class="badge border bg-white rounded-circle"
                                                style="position: relative;
                                            top: -13px;
                                            left: -9px;
                                        }">{{ $countRequest }}</span>
                                            <span class="sr-only">
                                                {{ __('lang.para55') }}</span>
                                        </a> --}}

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top: 38px;">

                                            <h6 class="px-3 text-success">My trainees</h6>


                                            <li><a class="dropdown-item" href="{{route('registered.users',$seen='1')}}">New <br>Trainees<span class="border-left float-right px-3 ml-3">  {{ $countRequest }}</span></a></li>
                                            <li><a class="dropdown-item mr-5" href="{{route('compaign.trainees',$seen='1')}}">Compaign <br> Request<span class="border-left float-right px-3 ml-3">  {{ $compaignRequests }}</span></a></li>





                                          </ul>
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
                                                    {{$trainer->location}}
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col-sm-9">
                                        <h5 class="mb-5 "
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            <a class="float-left text-dark" href="#" data-toggle="modal"
                                            data-target="#exampleModal">
                                             {{ __('lang.para87') }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
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
                                        @if (auth()->user()->role != null && auth()->user()->role == 'trainer')
                                            <div class=" d-flex   px-2">
                                                <input type="checkbox" data-id="{{ $trainer->id }}" id="trainer-toggle"
                                                    class="trainer-toggle-class" type="checkbox" data-onstyle="success"
                                                    data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                    data-off="InActive" {{ $trainer->availability ? 'checked' : '' }}>
                                            </div>
                                        @else
                                            @if ($trainer->availability == 1)
                                                <span
                                                    class="badge badge-success"> {{ __('lang.para77') }}</span>
                                            @else
                                                <span
                                                    class="badge badge-danger"> {{ __('lang.para78') }}</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>


                                <hr>

                                <div class="row ">
                                    <div class="col-sm-9">
                                        <h5 class="mb-5 "
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            <a class="float-left text-dark" href="{{route('trainer.all.reviews',$trainer->id)}}" >
                                            All reviews
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class=" d-flex">
                                            <h5 class="mb-0 pr-2"
                                                style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                                 {{ __('lang.para76') }} (Start Hiring)
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">

                                    <div class="col-sm-12 d-flex justify-content-start">
                                        {{-- @if (isset($compaignRegistration) && !empty($compaignRegistration)) --}}
                                        @if ($trainer->role == 'trainer')
                                        <div class=" d-flex  px-2">
                                            <input type="checkbox" data-id="{{ $trainer->id }}" id="compaign-toggle"
                                                class="trainer-toggle-class" type="checkbox" data-onstyle="success"
                                                data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                data-off="InActive" {{ $trainer->compaign ? 'checked' : '' }}>

                                        </div>
                                        @endif
                                    {{-- @else
                                        @if ($trainer->compaign == 1)
                                            <span class="badge badge-success">
                                                {{ __('lang.para77') }}</span>
                                        @else
                                            <span class="badge badge-danger">
                                                 {{ __('lang.para78') }}</span>
                                        @endif
                                    @endif
                                        @else
                                        <span class="badge badge-danger">
                                          Please Register to Start Compaign</span>
                                        @endif --}}




                                    </div>
                                </div>
                                {{-- RATING --}}

                                {{-- <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                             {{ __('lang.para83') }}
                                        </h5>
                                    </div>
                                </div> --}}

                                {{-- <div class="row">



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
                                            @if (auth()->user()->role == 'trainee')
                                            <button type="submit" class="btn btn-primary mt-2"
                                            style="height: 35px;float: right;">
                                            {{ __('lang.para84') }}</button>

                                            @endif

                                        </form>
                                    </div>






                                </div> --}}

                                 {{-- RATING END --}}

                            </div>

                            {{-- ADMINISTRATIVE START HERE --}}

                                {{-- <div class="row px-3" id="my-div">
                                    <div class="col-sm-9">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                             {{ __('lang.para85') }}
                                        </h5>
                                    </div>
                                    <div class="col-sm-3 text-secondary ">
                                        <a class="float-right px-2" href="#" data-toggle="modal"
                                            data-target="#Administrative">
                                            <p>  {{ __('lang.para86') }}
                                            </p>

                                        </a>
                                    </div>
                                </div> --}}

                            {{-- ADMINISTRATIVE END --}}



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
                                style="font-family: Times New Roman;font-style: normal!important">
                                 {{ __('lang.para89') }}</i>
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



                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                 {{ __('lang.para90') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->phone_number, app()->getLocale()) }} --}}
                                            {{$trainer->phone_number}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                 {{ __('lang.para91') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             {{ __('lang.para92') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                 {{ __('lang.para93') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- {{ GoogleTranslate::trans($trainer->location, app()->getLocale()) }} --}}
                                            {{$trainer->location}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-2">
                                              Shop Id
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{$trainer->shop_number}}
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
                                            {{$trainer->id_card}}
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
                                style="font-family: Times New Roman;font-style:normal!important"> {{ __('lang.para95') }}</i>
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
                                                 {{ __('lang.para96') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            03465079570
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                 {{ __('lang.para97') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            03465079570
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">
                                                 {{ __('lang.para98') }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            0454-76576454355
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>

                                    <form action="{{ route('registration.compaign') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text"> {{ __('lang.para99') }}</span>
                                                    </div>

                                                    <div class="custom-file">

                                                        <input type="file" class="custom-file-input"
                                                            id="inputGroupFile01" name="image">
                                                        <label class="custom-file-label"
                                                            for="inputGroupFile01"> {{ __('lang.para100') }}</label>

                                                    </div>

                                                      <script>
                                                      // Add the following code if you want the name of the file appear on select
                                                      $(".custom-file-input").on("change", function() {
                                                        var fileName = $(this).val().split("\\").pop();
                                                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                                      });
                                                      </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit"
                                                    class="btnLoginTrainee"> {{ __('lang.para101') }}</button>
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
                        data-dismiss="modal"> {{ __('lang.para102') }}</button>

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
                            toastr.success('Available now');
                        } else {
                            $('#comapnyActiveStatusContent').empty();
                            $('#comapnyActiveStatusContent').prepend(
                                ' <p class="mt-3 text-danger"><b> You are offline now!</b></p>'
                            );
                            toastr.error('Not available');
                        }
                    }
                });
            })
        })
    </script>

    {{-- Toggle compaign --}}
    <script>
        $(function() {

            $('#compaign-toggle').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/trainer/compaign',
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
                            toastr.success('Compaign started');
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

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
            var formData = new FormData($("#edit_image_form")[0]);
            formData.append('image', $(this).val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/update/profileImage",
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 404) {
                        console.log(response.message);
                    } else {
                        console.log(response.message);
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    </script>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>


@endsection
