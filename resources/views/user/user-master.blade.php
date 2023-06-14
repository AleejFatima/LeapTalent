<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">


@include('user.layout.head')

<body>

    @include('user.layout.navbar')


    @yield('content')

    @include('user.layout.footer')

    @include('user.layout.loader')

    @include('user.assets.script')
</body>

</html>
