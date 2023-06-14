@extends('user.user-master')
@section('content')
    {{-- <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('user/userFrontend') }}/images/banner (1).jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">

                    <h1 class="mb-0 bread"> {{ __('lang.termsofservice') }}</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex align-items-center">
                    <div class="staff-detail w-100 pl-md-5">
                        <h3> {{ __('lang.termsofservice') }}</h3>
                        <p class="text-justify"> {{ __('lang.termsofservice1') }}
                            {{ __('lang.termsofservice2') }}<br><br>

                            {{ __('lang.termsofservice3') }}<br><br>
                            {{ __('lang.termsofservice4') }}<br><br>
                            {{ __('lang.termsofservice5') }}<br><br>
                            {{ __('lang.termsofservice6') }}<br><br>
                            {{ __('lang.termsofservice7') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
