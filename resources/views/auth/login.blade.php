@extends('user.auth.login-master')
@section('content')
    <section class="ftco-section" style="height: 100vh!important;">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url({{ asset('user/userFrontend') }}/loginAssets/images/loginimg.jpeg);height: 100vh;">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center" style="font-family:'Times New Roman', Times, serif;">
                                        Login</h4>
                                </div>
                                <br>


                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input id="email" type="email" name="email" class="form-control rounded"
                                        placeholder="email" style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input id="password-field" name="password" type="password" class="form-control"
                                        placeholder="Password" style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3 w-50"
                                        style="border-radius: 20px!important;">Login</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-100 text-center">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a href="{{ url('/register') }}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
