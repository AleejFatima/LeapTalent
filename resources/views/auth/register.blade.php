@extends('user.auth.login-master')
@section('content')
    <section class="ftco-section" style="height: 100vh!important;">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex justify-content-center align-items-center">

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">

                                    <h4 class="mb-4 text-center" style="font-family:'Times New Roman', Times, serif;">
                                        Sign up</h4>
                                </div>
                                <br>


                            </div>
                            <form method="POST" action="{{ route('user.register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="first_name">First name</label>
                                    <input type="text" name="first_name" class="form-control rounded"
                                        placeholder="First name" style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="last_name">Last name</label>
                                    <input type="text" name="last_name" class="form-control rounded"
                                        placeholder="last_name" style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" name="email" class="form-control rounded" placeholder="email"
                                        style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        style="    border-radius: 20px!important;" required>
                                </div>
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3 w-50"
                                        style="    border-radius: 20px!important;">Sign up</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-100 text-center">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">already have an account? <a href="{{ url('/login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
