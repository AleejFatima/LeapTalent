@extends('user.auth.login-master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>



    <div class="container-fluid d-flex justify-content-center align-item-center ">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-12">
                    <div class=" d-md-flex d-flex justify-content-center align-item-center">

                        <div class="login-wrap p-4 p-md-5  mt-5"
                            style="background-color: #85888db9;
                border-radius: 10px">
                            <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center text-white"
                                        style="font-family:'Times New Roman', Times, serif;">
                                        {{-- {{ GoogleTranslate::trans(' Forgot password', app()->getLocale()) }} --}}
                                        Forgot password
                                    </h4>
                                </div>
                                <br>


                            </div>

                            <form method="POST" action="{{ route('user.forgot.password') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="name">
                                        {{-- {{ GoogleTranslate::trans('Email', app()->getLocale()) }} --}}
                                        Email
                                    </label>
                                    <input id="email" type="email" name="email" class="form-control rounded"
                                        placeholder="email" style="border-radius: 20px!important;background: #e8e4eb47;"
                                        required>
                                    <span class="text-danger">
                                        @error('email')
                                            {{-- {{ GoogleTranslate::trans($message, app()->getLocale()) }} --}}
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="password">
                                        {{-- {{ GoogleTranslate::trans('New password', app()->getLocale()) }} --}}
                                        New password
                                    </label>
                                    <input id="password-field" name="new_password" type="password" class="form-control"
                                        placeholder="Password" style="border-radius: 20px!important;background: #e8e4eb47;"
                                        required>
                                    <span class="text-danger">
                                        @error('new_password')
                                            {{-- {{ GoogleTranslate::trans($message, app()->getLocale()) }} --}}
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btnLogin px-3 w-50 mt-3 font-weight-bold"
                                        style="border-radius: 20px!important;">
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
    </div>


    <script>
        const email = document.getElementById('email');

        email.addEventListener('input', function() {
            if (this.value) {
                this.style.backgroundColor = '#e8f0fe';
            } else {
                this.style.backgroundColor = '#e8e4eb47';
            }
        });

        const password = document.getElementById('password-field');

        password.addEventListener('input', function() {
            if (this.value) {
                this.style.backgroundColor = '#e8f0fe';
            } else {
                this.style.backgroundColor = '#e8e4eb47';
            }
        });
    </script>
@endsection
