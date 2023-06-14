@extends('user.user-master')
@section('content')
    {{-- <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('user/userFrontend') }}/images/banner (1).jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">

                    <h1 class="mb-0 bread">{{ __('lang.privacypolicy') }}</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex align-items-center">
                    <div class="staff-detail w-100 pl-md-5">
                        <h3> {{ __('lang.privacypolicy') }}</h3>
                        <p class="text-justify"> {{ __('lang.privacypolicy1') }}</p>
                        <h3> {{ __('lang.privacypolicy2') }}</h3>

                        <p class="text-justify">
                            {{ __('lang.privacypolicy3') }}<br><br>
                            {{ __('lang.privacypolicy4') }}<br><br>
                            {{ __('lang.privacypolicy5') }}<br><br>
                            {{ __('lang.privacypolicy6') }}<br><br>
                            {{ __('lang.privacypolicy7') }}<br><br>
                            {{ __('lang.privacypolicy8') }}<br><br>
                        </p>
                        <h3> {{ __('lang.privacypolicy9') }}</h3>
                        <p class="text-justify">
                            {{ __('lang.privacypolicy10') }}<br><br>
                            {{ __('lang.privacypolicy11') }}<br><br>
                            {{ __('lang.privacypolicy12') }}<br><br>
                            {{ __('lang.privacypolicy13') }}<br><br>
                            {{ __('lang.privacypolicy14') }}<br><br>
                            {{ __('lang.privacypolicy15') }}<br><br>
                        </p>
                        <h3> {{ __('lang.privacypolicy16') }}</h3>
                        <p class="text-justify">
                            {{ __('lang.privacypolicy17') }}<br><br>
                        </p>
                        <h3> {{ __('lang.privacypolicy18') }}</h3>
                        <p class="text-justify">
                            {{ __('lang.privacypolicy19') }}<br><br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
