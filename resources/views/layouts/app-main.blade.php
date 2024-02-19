<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fixed top navbar example · Bootstrap v5.1</title>
	<link rel='icon' href='favicon.ico' type='image/x-icon' sizes="16x16" />
	<meta name="description" content="">

	<link href="{!! url('css/style.css') !!}" rel="stylesheet">
</head>

<body>

	<div class="slideshow-container">
		<header id="menu-bar">
			<div>
				<P class="hotelname">Hamro Restaurant</P>
			</div>
			<nav>
				<ul>
					<li><a>Home</a></li>
					<li><a href="#menu-section">Menu</a></li>
					<li><a href="#" id="reservation">Reservation</a></li>
					<li><a href="#about-section">About Us</a></li>
					<li><a href="#" onclick="scrollToGallery(event)">Gallery</a></li>
					<li><a href="#contact" onclick="return scrollToContact()">Contact</a></li>
				</ul>
			</nav>
		</header>
		<div class="slide active">
			<img class="slide-image" src="photos/hero-slider-1.jpg" alt="Slide 1">
			<div class="slide-content">
				<h1>Where every flavor tells a story</h1>
				<p>Come with family & feel the joy of mouthwatering food</p>
			</div>
		</div>
		<div class="slide">
			<img class="slide-image" src="photos/hero-slider-2.jpg" alt="Slide 2">
			<div class="slide-content">
				<h1>For the love of delicious food</h1>
				<p>Come with family & feel the joy of mouthwatering food</p>
			</div>
		</div>
		<div class="slide">
			<img class="slide-image" src="photos/hero-slider-3.jpg" alt="Slide 3">
			<div class="slide-content">
				<h1>Flavors Inspired by the Seasons</h1>
				<p>Come with family & feel the joy of mouthwatering food</p>
			</div>
		</div>
		<!-- Add more slides as needed -->
		<div class="slide-navigation">
			<div class="arrow prev" onclick="prevSlide()">&lt;</div>
			<div class="arrow next" onclick="nextSlide()">&gt;</div>
		</div>
	</div>

	@yield('content')

	<script src="{!! url('js/script.js') !!}"></script>

</body>

</html>