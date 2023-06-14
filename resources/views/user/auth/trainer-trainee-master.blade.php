<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">


@include('user.auth.layout.head')

<body>

    @yield('content')
    @include('user.auth.layout.loader')
    @include('user.auth.assets.script')
</body>

</html>
