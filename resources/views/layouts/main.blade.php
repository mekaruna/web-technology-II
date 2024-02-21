<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Delicious Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{ url('assets/img/favicon.png')}}" rel="icon">
	<link href="{{ url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{ url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
	<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ url('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
			<i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
			<i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
		</div>
	</section>

	@include('layouts.include.header')

	@include('layouts.include.banner')

	@yield('content')

	@include('layouts.include.footer')


	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{ url('assets/js/main.js')}}"></script>

</body>

</html>