<!DOCTYPE html>
<html lang="en">

<head>
    @include('trainer.layout.metatags')
    @include('trainer.assets.datatables-css')
    @include('trainer.assets.css')
</head>

<body>
    @include('trainer.layout.navbar')
    @include('trainer.layout.sidebar')
    @yield('content')
    @include('trainer.layout.footer')
    @include('trainer.assets.script')
    @include('trainer.assets.datatables-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-L/s9V5m8N5K5j5gbc1MvOQDV0nvKcLOOQVxwhNfIHa7VlWtqrBA6xMiCMWBtUXv+8tmrW+sqbOAT7PnQZQhV7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-P0pkQ2zIV+rMq3qZzj0dYaU6JYU6LBYbb28I0UjR+Un/PS05fJGsczszVBxObxO4LcO4lkNl4cQ4/kO9XfMYzA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
