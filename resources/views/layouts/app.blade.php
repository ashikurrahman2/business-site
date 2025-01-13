<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matal Heart | @yield('title')</title>
	<!-- ** Plugins Needed for the Project ** -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/flex-slider/flexslider.css">
	<!-- Slick-slider -->
	<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/slick/slick.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{ asset('/') }}frontend/assets/css/presets/preset2.css" media="screen" rel="stylesheet" type="text/css">

	<link href="{{ asset('/') }}frontend/assets/css/style.css" rel="stylesheet">

	<!--Favicon-->
	<link rel="icon" href="{{ asset('/') }}frontend/assets/img/favicon/favicon-32x32.html" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/') }}frontend/assets/img/favicon/favicon-144x144.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/') }}frontend/assets/img/favicon/favicon-72x72.html">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('/') }}frontend/assets/img/favicon/favicon-54x54.html">
</head>
<body>
    @include('frontend.layouts.header')

    @yield('front_content')

    @include('frontend.layouts.footer')

    <!-- jQuery -->
<script src="{{ asset('/') }}frontend/assets/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/') }}frontend/assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/flex-slider/jquery.flexslider.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/slick/slick.min.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/isotope.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&amp;libraries=places"></script>
<script src="{{ asset('/') }}frontend/assets/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="{{ asset('/') }}frontend/assets/js/script.js"></script>
</body>
</html>