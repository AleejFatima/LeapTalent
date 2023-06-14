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

    {{-- Fonts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
        integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('user/userFrontend') }}/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (session()->has('message'))
        <script>
            toastr.success("{{ session('message') }}");
        </script>
    @endif


    <div class="container-fluid mt-5 pt-5">
        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">


                                    {{-- <?php $image = isset($trainee->image) && !empty($trainee->image) ? $trainee->image : ''; ?>


                                    @if ($image != null)
                                        <img src="<?= $image ?>" alt="" class="rounded-circle" width="200"
                                            height="200" srcset="" />
                                    @else
                                        <img src="{{ asset('user/userFrontend/images/profileIcon.webp') }}" alt=""
                                            class="rounded-circle" width="150" />
                                    @endif --}}


                                    <div class="avatar-upload">
                                        <form id="edit_image_form">
                                            @if (auth()->user()->role == 'trainee')
                                            <div class="avatar-edit">
                                                <?php $image = isset($trainee->image) && !empty($trainee->image) ? $trainee->image : ''; ?>
                                                <input type='file' name="image" id="imageUpload" data-default-file="{{<?= $trainee->image ?>}}"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            @endif

                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url({!! $trainee->image !!});">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-3">
                                        <h4 class="font-weight-bold text-primary " style="font-family: myFirstFont ">
                                            {{-- {{ GoogleTranslate::trans(
                                               $trainee->first_name,
                                                app()->getLocale(),
                                            ) }} --}}
                                            {{ $trainee->user_name }}
                                        </h4>

                                        <p class="text-muted font-size-sm">
                                            {{-- {{ GoogleTranslate::trans(
                                            $trainee->category ,
                                             app()->getLocale(),
                                         ) }} --}}
                                            {{ $trainee->category }}
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
                                                {{-- {{ GoogleTranslate::trans(
                                                     $trainee->first_name,
                                                    app()->getLocale(),
                                                ) }}
                                                  {{ GoogleTranslate::trans(
                                                   $trainee->last_name  ,
                                                    app()->getLocale(),
                                                ) }} --}}
                                                {{ $trainee->first_name }} {{ $trainee->last_name }}
                                            </p>
                                        </div>
                                    </div>
                                    @if (auth()->user()->role == 'trainer')
                                    @else
                                    <div class="col-sm-4 float-right">

                                        <a href="" data-toggle="modal" data-target="#compaignModel"
                                            class=" float-right rounded-circle">
                                            <i class="fa fa-bell text-primary "></i> <span
                                                class="badge border bg-white rounded-circle"
                                                style="position: relative;
                                            top: -13px;
                                            left: -9px;
                                        }">{{ $count }}</span>
                                            </span>
                                            <span class="sr-only"> {{ __('lang.para55') }}</span>
                                        </a>

                                    </div>
                                    @endif


                                </div>
                                 <hr>

                                 <div class="row">
                                     <div class="col-sm-4">
                                         <h5 class="mb-0"
                                             style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                             {{ __('lang.para62') }}
                                         </h5>
                                         <p
                                             style="color: #2994e5;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                             {{-- {{ GoogleTranslate::trans(
                                               $trainee->city,
                                                  app()->getLocale(),
                                              ) }} --}}
                                             {{ $trainee->city }}
                                         </p>

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
                                    <div class="col-sm-8">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ __('lang.para57') }}
                                        </h5>


                                    </div>
                                    <div class="col-sm-4">
                                        @if ($registrationStatus == null)
                                            <span class="badge badge-info"> {{ __('lang.para58') }}</span>
                                        @elseif ($registrationStatus->status == '0')
                                        <span class="badge badge-danger">Rejected(apply on another trainer)</span>

                                        @else
                                            <span class="badge badge-success"> {{ __('lang.para59') }}</span>
                                        @endif
                                    </div>

                                </div>

                                {{-- <div class="row">
                                    <div class="col-sm-5">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ __('lang.para60') }}
                                        </h5>


                                    </div>
                                    <div class="col-sm-2">
                                        <div class=" d-flex   px-2">
                                            <input type="checkbox" data-id="{{ $trainee->id }}" id="course-type"
                                                class="course-type-toggle-class" type="checkbox" data-onstyle="success"
                                                data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                data-off="InActive" {{ $trainee->online_course ? 'checked' : '' }}>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;text-align:end">
                                            {{ __('lang.para61') }}
                                        </h5>


                                    </div>
                                </div> --}}
                              <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                          Progress Bar
                                        </h5>

                                    </div>
                                    <div class="col-md-7 p-2">
                                    @if ($registrationStatus != null && $registrationStatus>'0')
                                        @if ($registrationStatus->end_date <= $now)
                                            <div class="progress text-dark">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: {!! '100' ?? '100' !!}%;"
                                                    aria-valuenow="{!! '100' ?? '100' !!}" aria-valuemin="0"
                                                    aria-valuemax="100">{!! '100' ?? '100' !!}%</div>
                                            </div>
                                        @else

                                            @if ($registrationStatus == null)
                                            <div class="progress text-dark">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: {!! '0' ?? '0' !!}%;"
                                                    aria-valuenow="{!! '0' ?? '0' !!}" aria-valuemin="0"
                                                    aria-valuemax="100">{!! '0' ?? '0' !!}%</div>
                                            </div>
                                            @else
                                                <div class="progress text-dark">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {!! $progress ?? '25' !!}%;"
                                                        aria-valuenow="{!! $progress ?? '25' !!}" aria-valuemin="0"
                                                        aria-valuemax="100">{!! $progress ?? '25' !!}%</div>
                                                </div>
                                            @endif
                                        @endif
                                    @else
                                        <div class="progress text-dark">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {!! '0' ?? '0' !!}%;"
                                                aria-valuenow="{!! '0' ?? '0' !!}" aria-valuemin="0"
                                                aria-valuemax="100">{!! '0' ?? '0' !!}%</div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-12">
                                        <h5 class="mb-0"
                                            style=" font-family: Times New Roman; font-weight: 400;color: #0f0f0f;">
                                            {{ __('lang.para66') }}
                                        </h5>


                                    </div>
                                    <div class="col-sm-12">
                                        <section id="app">
                                            <div class="commentcontainer">
                                                {{-- <div class="row" id="reviews">
                                                    <div class="col-12">
                                                        <div class="comment">
                                                            @foreach ($allReviews as $review)
                                                                <p v-for="items in item">
                                                                    {{ $review->reviews }}
                                                                </p>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{route('trainee.all.reviews',$trainee->id)}}">
                                                        <button class='btnLoginTrainee float-right' type="submit"
                                                            value="1" id="viewReviews">
                                                            {{ __('lang.para67') }}</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!--More info Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">
                 <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                         style="font-family: Times New Roman;font-style: normal!important">
                         About Trainee</i>
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
                                     {{$trainee->phone_number}}
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
                                     {{$trainee->city}}
                                 </div>
                             </div>
                             <hr>
                             <div class="row">
                                 <div class="col-sm-3">
                                     <h6 class="mb-0">
                                         CNIC
                                     </h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                     {{-- {{ GoogleTranslate::trans($trainee->location, app()->getLocale()) }} --}}
                                     {{$trainee->id_card}}
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

    <!-- Compaign Model Apply -->
    <div class="modal fade" id="compaignModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                style="font-family: Times New Roman;font-style:normal!important">
                                {{ __('lang.para70') }}</i></h5>
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
                                    <h5 class="d-flex align-items-center mb-3"><i class="fa fa-user mr-2"></i><i
                                            class="material-icons text-info mr-2"
                                            style="font-family: Times New Roman"></i>
                                    </h5>
                                    <hr>
                                    @foreach ($compaign as $notification)
                                        @foreach ($notification as $user)
                                            <div class="row mb-2">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0"> {{ __('lang.para71') }}</h6>
                                                </div>
                                                <div class="col-sm-6 text-secondary">
                                                    {{-- {{ GoogleTranslate::trans(
                                                        $user->first_name ,
                                                         app()->getLocale(),
                                                     ) }}
                                                      {{ GoogleTranslate::trans(
                                                       $user->last_name,
                                                         app()->getLocale(),
                                                     ) }} --}}
                                                    {{ $user->first_name }} {{ $user->last_name }}
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0"> {{ __('lang.para72') }}</h6>
                                                </div>
                                                <div class="col-sm-6 text-secondary">
                                                    {{-- {{ GoogleTranslate::trans(
                                                         $user->trainer_role ,
                                                         app()->getLocale(),
                                                     ) }} --}}
                                                    {{ $user->trainer_role }}
                                                </div>
                                                <div class="col-sm-12 text-secondary">
                                                    <a href="{{ route('trainee.apply.compaign', $user->id) }}">
                                                        <button style="height: 30px;width: 50%" class="btnLoginTrainee">
                                                            {{ __('lang.para73') }}</button>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnLoginTrainee" data-dismiss="modal">
                        {{ __('lang.para74') }}</button>

                </div>
            </div>
        </div>
    </div>


    <script>
        $("#reviews").css("display", "none");
        $("#viewReviews").on("click", function() {
            if ($('#viewReviews').val() == "1") {
                // $("#tax").val('');

                $("#reviews").show(1000);

            } else {

                $("#reviews").hide(1000);

            }
        })
    </script>

    <script>
        $(function() {

            $('#course-type').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/course/type',
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
