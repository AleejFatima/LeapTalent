@extends('user.auth.login-master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <div class="container-fluid d-flex justify-content-center align-items-center ">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-12">
                    <div class=" d-md-flex d-flex justify-content-center align-items-center">

                        <div class="login-wrap p-4 p-md-5"
                            style="background-color:#85888db9;
                        border-radius: 10px">
                            {{-- <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center" style="font-family:'Times New Roman', Times, serif;">
                                        Sign up</h4>
                                </div>
                                <br>


                            </div> --}}

                            <div class="d-flex">
                                <div class="w-100"
                                    style="    display: flex;
                                justify-content: center;
                                height: 100px;">

                                    <img src="{{ asset('user/userFrontend/images/favIcon-removebg-preview.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <form method="POST" action="{{ route('user.register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="first_name"> {{ __('lang.para50') }}</label>
                                    <input id="first_name" type="text" name="first_name" class="form-control rounded"
                                        placeholder="First name"
                                        style="    border-radius: 20px!important;background: #e8e4eb47;" required>
                                    <span class="text-danger">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="last_name"> {{ __('lang.para51') }}</label>
                                    <input id="last_name" type="text" name="last_name" class="form-control rounded"
                                        placeholder="last_name"
                                        style="    border-radius: 20px!important;background: #e8e4eb47;" required>
                                    <span class="text-danger">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="name"> {{ __('lang.para45') }}</label>
                                    <input id="email" type="email" name="email" class="form-control rounded"
                                        placeholder="email" style="    border-radius: 20px!important;background: #e8e4eb47;"
                                        required>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label text-white" for="password"> {{ __('lang.para46') }}</label>
                                    <input id="password-field" type="password" name="password" class="form-control"
                                        placeholder="Password"
                                        style="    border-radius: 20px!important;background: #e8e4eb47;" required>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btnLogin px-3 w-50 mt-3 font-weight-bold "
                                        style="    border-radius: 20px!important;"> {{ __('lang.para52') }}</button>
                                </div>

                            </form>
                            <p class="text-center text-white"> {{ __('lang.para53') }} <a style="color: "
                                    href="{{ route('login.page') }}"> {{ __('lang.login') }}</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const first_name = document.getElementById('first_name');

        first_name.addEventListener('input', function() {
            if (this.value) {
                this.style.backgroundColor = '#e8f0fe';
            } else {
                this.style.backgroundColor = '#e8e4eb47';
            }
        });

        const last_name = document.getElementById('last_name');

        last_name.addEventListener('input', function() {
            if (this.value) {
                this.style.backgroundColor = '#e8f0fe';
            } else {
                this.style.backgroundColor = '#e8e4eb47';
            }
        });

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
