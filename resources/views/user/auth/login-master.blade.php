<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">


@include('user.auth.layout.head')

<body
    style="background-image: url({{ asset('user/userFrontend') }}/images/loginBgBlur.jpg);background-size: cover;
background-repeat: no-repeat;
background-position: center center;background-attachment: fixed;
">

    @yield('content')
    @include('user.auth.layout.loader')
    @include('user.auth.assets.script')
</body>

</html>
