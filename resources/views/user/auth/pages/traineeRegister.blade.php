@extends('user.auth.trainer-trainee-master')
@section('content')
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    {{-- LORD ICON SCRIPT --}}
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    {{-- toaster links --}}
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

                            {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px"
                                    height="48px">
                                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
                                        stroke-width="4" stroke="#eeeeee" />
                                    <circle class="path" cx="24" cy="24" r="22" fill="none"
                                        stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
                                </svg></div> --}}
                            <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center" style="font-family:'Times New Roman">
                                        Register as a trainee</h4>
                                </div>
                                <br>


                            </div>
                            {{-- <form method="POST" action="{{ route('trainee.register') }}"> --}}
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


                                        {{-- <input type="file" name="image"> --}}
                                    </div>
                                </div>

                                <label class="label" for="username">
                                    {{-- {{ GoogleTranslate::trans('Username', app()->getLocale()) }} --}}
                                    Username
                                </label>
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
                                <label class="label" for="phone_number">
                                    {{-- {{ GoogleTranslate::trans('Phone number', app()->getLocale()) }} --}}
                                    Phone number
                                </label>
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
                                        required>

                                </div>

                                <div>
                                    <span class="text-danger error-text phone_number"></span>
                                </div>
                                <label class="label" for="id_card">
                                    {{-- {{ GoogleTranslate::trans('CNIC', app()->getLocale()) }} --}}
                                    CNIC
                                </label>
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
                                    <span class="text-danger error-text five_digits"></span>
                                    <span class="text-danger error-text seven_digits"></span>
                                    <span class="text-danger error-text one_digits"></span>
                                </div>

                                <label class="label" for="city">
                                    {{-- {{ GoogleTranslate::trans('City', app()->getLocale()) }} --}}
                                    Full address
                                </label>
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
                                <label class="label" for="category">
                                    {{-- {{ GoogleTranslate::trans('Category', app()->getLocale()) }} --}}
                                    Category
                                </label>
                                <div class="form-group mb-3">


                                    <select name="category" class="selectCategory" placeholder="category"
                                        style="    border-radius: 10px!important;padding: 5px" id="other" required>
                                        <option value="">
                                            Select category
                                        </option>
                                        <option value="Plumber ">
                                            {{-- {{ GoogleTranslate::trans('Plumber', app()->getLocale()) }} --}}
                                            Plumber
                                        </option>
                                        <option value="Electrician">
                                            {{-- {{ GoogleTranslate::trans('Electrician', app()->getLocale()) }} --}}
                                            Electrician
                                        </option>
                                        <option value="Mechanic">
                                            {{-- {{ GoogleTranslate::trans('Mechanic', app()->getLocale()) }} --}}
                                            Mechanic
                                        </option>
                                        <option value="Chef">
                                            {{-- {{ GoogleTranslate::trans('Chef', app()->getLocale()) }} --}}
                                            Chef
                                        </option>
                                        <option value="Tailor">
                                            {{-- {{ GoogleTranslate::trans('Tailor', app()->getLocale()) }} --}}
                                            Tailor
                                        </option>

                                        <option value="Barber">
                                            {{-- {{ GoogleTranslate::trans('Barber', app()->getLocale()) }} --}}
                                            Barber
                                        </option>
                                        <option value="Artist">
                                            {{-- {{ GoogleTranslate::trans('Artist', app()->getLocale()) }} --}}
                                            Artist
                                        </option>
                                        <option value="Gardener">
                                            {{-- {{ GoogleTranslate::trans('Gardener', app()->getLocale()) }} --}}
                                            Gardener
                                        </option>
                                        {{-- <option>

                                            Other
                                        </option> --}}
                                    </select>

                                </div>
                                <div class="input-group mb-3" id="otherCategory">


                                    <label class="label" for="city">
                                        {{-- {{ GoogleTranslate::trans('Other', app()->getLocale()) }} --}}
                                        Other
                                    </label>
                                    <div class="input-group mb-3">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: #cbcaca;">
                                                <lord-icon src="https://cdn.lordicon.com/xxduqotz.json" trigger="hover">
                                                </lord-icon>
                                            </span>

                                        </div>
                                        <input type="text" name="category_other" class="form-control"
                                            placeholder="other_category"
                                            style="border-bottom-right-radius: 20px!important;border-top-right-radius: 20px!important;">

                                    </div>
                                </div>
                                <script>
                                    $("#otherCategory").css("display", "none");
                                    $("#other").on("change", function() {
                                        if ($('#other').val() == "Other") {
                                            // $("#tax").val('');

                                            $("#otherCategory").show(1000);

                                        } else {

                                            $("#otherCategory").hide(1000);

                                        }
                                    })
                                </script>
                                <div>
                                    <span class="text-danger error-text category"></span>
                                </div>
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


    {{-- REGISTER AJax --}}
    <script>
        $(function() {
            $("#register-form").on('submit', function(e) {
                e.preventDefault();
                // var loader = document.getElementById("loader-container");
                // loader.style.display = "flex";
                // $(".se-pre-con").fadeOut();

                // alert("on submit ajax")
                $.ajax({
                    url: "/trainee/register",
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
                            $('.category').html(data.error.category);
                            $('.user_name').html(data.error.user_name);
                            $('.five_digits').html(data.error.five_digits);
                            $('.seven_digits').html(data.error.seven_digits);
                            $('.one_digits').html(data.error.one_digits);
                            loader.style.display = "none";
                            // alert("error")
                        } else if (data.status == 2) {

                            toastr.success(data.message, data.title);


                        } else {
                            // alert("success")
                            window.location.href = "/user/welcome/home-page";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });



        // $(document).ready(function() {
        //     $('#register-form').on('submit', function(e) {
        //         e.preventDefault();
        //         $.ajax({
        //             type: 'POST',
        //             url: '/trainee/register',
        //             data: $('#register-form').serialize(),
        //             success: function(data) {
        //                 window.location.href = "/trainee/register-page";
        //                 toastr.success(data.message, data.title);
        //                 // alert('Registration successful!');
        //             },
        //             error: function(data) {
        //                 $('.error-message').show();
        //                 $('.first_name').html(data.responseJSON.error.first_name);
        //                 $('.last_name').html(data.responseJSON.error.last_name);
        //                 $('.phone_number').html(data.responseJSON.error.phone_number);
        //                 $('.trainer_role').html(data.responseJSON.error.trainer_role);
        //                 // alert('Registration failed!');
        //             }
        //         });
        //     });
        // });
    </script>


    {{-- CNIC SCRIPT --}}
    <script>
        const input1 = document.getElementById("input1");
        const input2 = document.getElementById("input2");
        const input3 = document.getElementById("input3");


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
@endsection
