<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<!-- Remixicon CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
		<!-- Slick Min CSS-->
		<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset('logo.jpeg')}}">
		<!-- Title -->
		<title>DYJESCK - Bâtiment, travaux public, construction</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="pl-flip-1 pl-flip-2"></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		@include('layout.header')

		@yield('contenu')

		@include('layout.footer')

        <!-- Jquery Min JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
		<!-- Owl Carousel Min JS -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- Wow Min JS -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
		<!-- Magnific Popup Min JS -->
        <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
		<!-- Appear Min JS --> 
        <script src="{{asset('assets/js/appear.min.js')}}"></script>
		<!-- Odometer Min JS --> 
		<script src="{{asset('assets/js/odometer.min.js')}}"></script>
		<!-- Slick Min JS --> 
		<script src="{{asset('assets/js/slick.min.js')}}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
    </body>
</html>