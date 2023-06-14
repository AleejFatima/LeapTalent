<!DOCTYPE html>
<html lang="en">
@include('trainer.layout.head')

<body>
    @include('trainer.layout.navbar')
    @include('trainer.layout.sidebar')
    @yield('content')
    @include('trainer.layout.footer')
    @include('trainer.assets.script')
</body>

</html>
