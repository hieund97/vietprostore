<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset ('client/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset ('client/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset ('client/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset ('client/css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset ('client/css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset ('client/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('client/css/owl.theme.default.min.css') }}">

	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset ('client/css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset ('client/fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset ('client/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset ('client/css/custome.css') }}">
	<!-- Modernizr JS -->
	<script src="{{ asset ('client/js/modernizr-2.6.2.min.js') }}"></script>


</head>

<body>

    <!-- header --> 
    @include('client.layout.header')
    <!-- end header --> 


    <!-- main -->
	@yield('content')	
    <!-- end main -->


    <!-- subscribe -->
    @include('client.layout.subcribe')
    <!-- end subscribe --> 


    <!-- footer -->
    @include('client.layout.footer')
    <!--end footer -->

		
		
	</div>


	<!-- jQuery -->
	<script src="{{ asset ('client/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset ('client/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset ('client/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset ('client/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset ('client/js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset ('client/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset ('client/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset ('client/js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset ('client/js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset ('client/js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset ('client/js/main.js') }}"></script>

</body>

</html>