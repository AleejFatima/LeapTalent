<script src="{{ asset('user/userFrontend') }}/js/jquery.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/popper.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/jquery.animateNumber.min.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="{{ asset('user/userFrontend') }}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

{{-- To Change Language --}}
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
