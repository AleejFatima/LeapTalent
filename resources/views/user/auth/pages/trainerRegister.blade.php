@extends('user.auth.trainer-trainee-master')
@section('content')
    {{-- upload profile --}}

    {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    {{-- LORD ICON SCRIPT --}}
    <link rel="stylesheet" href="{{ asset('user/userFrontend') }}/loginAssets/css/loader.css" />
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <section class="ftco-section" style="height: 100vh!important;">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url({{ asset('user/userFrontend') }}/images/loginNewImg.jpg)">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center" style="font-family:Times New Roman">
                                        {{ __('lang.registerastrainer') }}</h4>
                                </div>
                                <br>


                            </div>
                            {{-- <form method="POST" action="{{ route('trainer.register') }}" enctype="multipart/form-data"> --}}
                            <form id="register-form">
                                @csrf

                                <div class="input-group mb-3">


                                    <div class="profile-pic w-100 d-flex justify-content-center">

                                        <img class="uploadPic" alt="User Pic"
                                            src="{{ asset('user/userFrontend/images/userProfile.png') }}"
                                            id="profile-image1" height="100"
                                            style="width: 35%;cursor: pointer;border-radius: 50px">

                                        <input name="image" id="profile-image-upload" class="hidden" type="file"
                                            onchange="previewFile()" style="display: none">
                                        <div style="color:#999;"> </div>
                                        <div class="hide">Upload profile</div>

                                        {{-- <input type="file" name="image"> --}}
                                    </div>
                                </div>

                                <label class="label" for="username"> {{ __('lang.registertrainer3') }}</label>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #cbcaca;">
                                            <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="hover">
                                            </lord-icon>
                                        </span>

                                    </div>
                                    <input type="text" name="user_name" class="form-control rounded"
                                        placeholder="Username"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required>

                                </div>
                                <div>
                                    <span class="text-danger error-text user_name"></span>
                                </div>
                                <label class="label" for="phone_number"> {{ __('lang.registertrainer4') }}</label>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #cbcaca;">
                                            <lord-icon src="https://cdn.lordicon.com/fwafvpnq.json" trigger="hover">
                                            </lord-icon>
                                        </span>

                                    </div>
                                    <input id="phone" type="text" maxlength="11" name="phone_number"
                                        class="form-control" placeholder="Phone number"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required maxlength="11">

                                </div>
                                <div>
                                    <span class="text-danger error-text phone_number"></span>
                                </div>
                                <label class="label" for="shop_number"> {{ __('lang.registertrainer5') }}</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #cbcaca;">
                                            <lord-icon src="https://cdn.lordicon.com/fwafvpnq.json" trigger="hover">
                                            </lord-icon>
                                        </span>
                                    </div>
                                    <input type="number" name="shop_number" class="form-control" placeholder="Shop number"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required>

                                </div>
                                <div>
                                    <span class="text-danger error-text shop_number"></span>
                                </div>
                                <label class="label" for="location">City</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #cbcaca;">
                                            <lord-icon src="https://cdn.lordicon.com/xxduqotz.json" trigger="hover">
                                            </lord-icon>
                                        </span>
                                    </div>
                                    <input type="text" name="location" class="form-control" placeholder="Location"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required>

                                </div>
                                <div>
                                    <span class="text-danger error-text location"></span>
                                </div>
                                <label class="label" for="id_card"> {{ __('lang.registertrainer7') }}</label>
                                <div class="input-group mb-3">

                                    <div id="otp" class=" d-flex  justify-content-center ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: #cbcaca;">
                                                <lord-icon src="https://cdn.lordicon.com/rqqkvjqf.json" trigger="hover">
                                                </lord-icon>
                                            </span>

                                        </div>


                                        <input id="input1" type="text" maxlength="5"
                                            class=" text-center form-control p-0 " name="five_digits"
                                            style="border-left-color:transparent !important;border-right-color:transparent !important;border-end-end-radius:0px !important;border-start-end-radius:0px !important;"
                                            placeholder="5 digits" required>
                                        <input id="input2" type="text" maxlength="7" disabled
                                            class=" text-center form-control p-0" name="seven_digits"
                                            style="border-left-color:transparent !important;border-right-color:transparent !important;border-radius: 0px !important"
                                            placeholder="7 digits" required>
                                        <input id="input3" type="text" maxlength="1" disabled
                                            class=" text-center form-control p-0" name="one_digits"
                                            style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;border-left-color:transparent !important; border-start-start-radius:0px !important;border-end-start-radius:0px !important;"
                                            placeholder="1 digit" required>



                                    </div>

                                </div>
                                <div>
                                    <span class="text-danger error-text id_card"></span>
                                    <span class="text-danger error-text five_digits"></span>
                                    <span class="text-danger error-text seven_digits"></span>
                                    <span class="text-danger error-text one_digit"></span>
                                </div>
                                <label class="label" for="city"> Full address</label>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color: #cbcaca;">
                                            <lord-icon src="https://cdn.lordicon.com/xxduqotz.json" trigger="hover">
                                            </lord-icon>
                                        </span>

                                    </div>
                                    <input type="text" name="city" class="form-control" placeholder="Address"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required>

                                </div>
                                <div>
                                    <span class="text-danger error-text city"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="trainer_role"> {{ __('lang.trainerrole') }}</label>
                                    <select name="trainer_role" class="selectCategory" placeholder="Trainer role"
                                        style="    border-radius: 10px!important;padding: 5px" required>
                                        <option value="">
                                            Select category
                                        </option>
                                        <option value="Plumber ">
                                            {{ __('lang.registertrainer9') }} </option>
                                        <option value="Electrician">
                                            {{ __('lang.registertrainer10') }}</option>
                                        <option value="Mechanic">
                                            {{ __('lang.registertrainer11') }}</option>
                                        <option value="Chef"> {{ __('lang.registertrainer13') }}
                                        </option>
                                        <option value="Tailor"> {{ __('lang.registertrainer12') }}
                                        </option>

                                        <option value="Barber"> {{ __('lang.registertrainer15') }}
                                        </option>
                                        <option value="Artist"> {{ __('lang.registertrainer16') }}
                                        </option>
                                        <option value="Gardener">
                                            {{ __('lang.registertrainer17') }}</option>

                                    </select>

                                </div>
                                <div>
                                    <span class="text-primary"> {{ __('lang.registertrainer18') }}</span>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="trainer_role"> {{ __('lang.registertrainer19') }}</label>


                                    <input type="hidden" name="latitude" class="form-control" placeholder="latitude"
                                        style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;"
                                        required id="inputField">

                                    <a onclick="getLocation()" style="cursor: pointer">Click here</a>
                                    {{-- <p id="demo"></p> --}}

                                    <span class="text-success" id="mySpan" style="display: none;">Your Location have
                                        been saved</span>
                                    {{--
                                    <script>
                                        function getLocation() {
                                            var span = document.getElementById("mySpan");
                                            span.style.display = "block";
                                        }
                                    </script> --}}
                                </div>

                                <div>
                                    <span class="text-danger error-text trainer_role"></span>
                                </div>
                                <!-- Example split danger button -->


                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3 w-50"
                                        style="    border-radius: 20px!important;">
                                        {{-- {{ GoogleTranslate::trans('Submit', app()->getLocale()) }} --}}
                                        Submit
                                    </button>
                                </div>
                            </form>







                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <script>
        // var x = document.getElementById("demo");
        var inputField = document.getElementById("inputField");
        var span = document.getElementById("mySpan");


        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
                span.style.display = "block";
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            // x.innerHTML = "Latitude: " + position.coords.latitude +
            //     "<br>Longitude: " + position.coords.longitude;

            inputField.value = position.coords.latitude + "," + position.coords.longitude;
        }
    </script>

    <script>
        $(function() {
            $("#register-form").on('submit', function(e) {
                e.preventDefault();
                // var loader = document.getElementById("loader-container");
                // loader.style.display = "flex";
                // $(".se-pre-con").fadeOut();

                // alert("on submit ajax")
                $.ajax({
                    url: "/trainer/register",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            // jQuery('#loader').fadeOut();
                            $('.first_name').html(data.error.first_name);
                            $('.last_name').html(data.error.last_name);
                            $('.phone_number').html(data.error.phone_number);
                            $('.trainer_role').html(data.error.trainer_role);
                            $('.user_name').html(data.error.user_name);
                            $('.five_digits').html(data.error.five_digits);
                            $('.seven_digits').html(data.error.seven_digits);
                            $('.one_digit').html(data.error.one_digit);
                            loader.style.display = "none";
                            // alert("error")
                        } else {
                            // alert("success")
                            window.location.href = "/user/welcome/home-page";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>
    {{-- CNIC SCRIPT --}}
    <script>
        const input1 = document.getElementById("input1");
        const input2 = document.getElementById("input2");
        const input3 = document.getElementById("input3");
        // const input4 = document.getElementById("input4");
        // const input5 = document.getElementById("input5");
        // const input6 = document.getElementById("input6");

        input1.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 5) {
                input2.removeAttribute("disabled");
                input2.focus();
            }
        });

        input2.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 7) {
                input3.removeAttribute("disabled");
                input3.focus();
            }
        });

        input3.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input4.removeAttribute("disabled");
                input4.focus();
            }
        });

        // input4.addEventListener("input", function() {
        //     this.value = this.value.replace(/[^0-9]/g, '');
        //     if (this.value.length == 1) {
        //         input5.removeAttribute("disabled");
        //         input5.focus();
        //     }
        // });

        // input5.addEventListener("input", function() {
        //     this.value = this.value.replace(/[^0-9]/g, '');
        //     if (this.value.length == 1) {
        //         input6.removeAttribute("disabled");
        //         input6.focus();
        //     }
        // });

        input1.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input1.blur();
            }
        });

        input2.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input1.focus();
            }
        });

        input3.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input2.focus();
            }
        });

        input4.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input3.focus();
            }
        });

        input5.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input4.focus();
            }
        });

        input6.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input5.focus();
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#first').on('keydown', allowNumbersOnly);
            $("#first, #second, #third, #fourth, #fifth").on("input", function() {
                if (this.value.length === this.maxLength) {
                    $(this).next(":input").focus();
                }
            });

            $("#sixth").on("input", function() {
                if (this.value.length === this.maxLength) {
                    // Do something after entering the final digit in the last input field
                } else {
                    return false
                }
            });
        });
    </script>

    <script>
        const phone = document.getElementById("phone");

        phone.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 11) {
                phone.removeAttribute("disabled");
                phone.focus();
            }
        })

        phone.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                phone.focus();
            }
        });
    </script>

    {{-- upload profile --}}
    <script>
        function previewFile() {
            var preview = document.querySelector('img');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.addEventListener("load", function() {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        $(function() {
            $('#profile-image1').on('click', function() {
                $('#profile-image-upload').click();
            });
        });
    </script>

    {{-- <script>
        $("#profile-image-upload").change(function() {
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
                url: "/upload/profileImage",
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
    </script> --}}
@endsection
