<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="" href="{{ route('user.index') }}">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('user/userFrontend/images/favIcon-removebg-preview.png') }}" alt=""
                        style="   height: 59px;">
                </div>
                <div class="col-lg-9 p-0 m-0 ">
                    <div style="overflow: hidden;height: 54px;">
                        <h4
                            style="font-family: fantasy;color:white;margin-bottom: 0px;font-size: 37px;transform: translate(10px, -6px);">
                            {{ __('lang.logoTitle1') }}</h4>
                        <span style="background-color: #cbcaca;">
                            <br>
                            <p class="text-bold"
                                style="margin-bottom: 0px; margin-top: 0px;    font-size: 15px;    transform: translate(8px,-50px);font:italic;font-family:Arial, Helvetica, sans-serif;font-weight: bolder;color:#3b91db">
                                {{ __('lang.logoTitle2') }} </p>
                        </span>
                    </div>

                </div>
            </div>
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> {{ __('lang.menu') }}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if (auth()->user())
                    <li class="nav-item active"><a href="{{ route('welcome.homepage') }}" class="nav-link"
                            style="cursor: pointer;">
                        @else
                    <li class="nav-item active"><a href="{{ route('user.index') }}" class="nav-link"
                            style="cursor: pointer;">
                @endif

                {{ __('lang.home') }}

                @if (auth()->user())
                    <li class="nav-item "><a href="{{ route('welcome.homepage') }}#category" class="nav-link"
                            style="cursor: pointer;">
                            {{ __('lang.para30') }}
                    <li class="nav-item "><a href="{{ route('welcome.homepage') }}#about" class="nav-link"
                            style="cursor: pointer;">
                        @else
                    <li class="nav-item "><a href="{{ route('user.index') }}#category" class="nav-link"
                            style="cursor: pointer;">
                            {{ __('lang.para30') }}
                    <li class="nav-item "><a href="{{ route('user.index') }}#about" class="nav-link"
                            style="cursor: pointer;">
                @endif

                {{ __('lang.para31') }}
                @if (!auth()->user())
                @else
                    @if (auth()->user()->role == 'trainer')
                        <li class="nav-item "><a href="{{ route('trainer.profile') }}" class="nav-link"
                                style="cursor: pointer;">
                                {{ __('lang.trainerprofilelink') }}
                        <li class="nav-item "><a href="{{ route('dashboard') }}" class="nav-link"
                                style="cursor: pointer;">
                                {{ __('lang.dash') }}</a>
                        </li>
                    @elseif(auth()->user()->role == 'trainee')
                        <li class="nav-item "><a href="{{ route('trainee.profile') }}" class="nav-link"
                                style="cursor: pointer;">
                                {{ __('lang.traineeprofilelink') }}
                            @else
                                {{-- <li class="nav-item "><a href="{{ route('welcome.homepage') }}" class="nav-link"
                        style="cursor: pointer;">
                        {{ __('lang.para32') }}</a>
                </li> --}}
                    @endif
                @endif
                @if (!auth()->user())
                    <li class="nav-item"><a href="{{ route('login.page') }}" class="nav-link" style="cursor: pointer;">
                            {{ __('lang.para35') }}
                @endif


                @if (auth()->user())
                    {{-- <li class="nav-item"><a href="" class="nav-link" style="cursor: pointer;"
                        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        {{ __('lang.para36') }}
                    </a>
                </li> --}}
                @endif
                <li class="nav-item "><a class="nav-link" style="cursor: pointer;">
                        {{-- <select class="form-select changeLang selectCategory"
                            style="    border-radius: 10px!important;padding: 5px">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>
                            <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu
                            </option>
                        </select> --}}

                    </a>
                </li>
                @if (auth()->user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                            <img src="{{ auth()->user()->image }}" alt="Profile Picture"
                                style="height: 35px; width: 35px; border-radius: 50%;cursor: pointer;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                            <h6 class="dropdown-header">{{ auth()->user()->first_name }}
                                {{ auth()->user()->last_name }}</h6>
                            <span class="dropdown-item-text">{{ auth()->user()->email }}</span>
                            <a href=""
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                style="cursor: pointer;">
                                <span class="dropdown-item-text" style="cursor: pointer;">Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>

                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
