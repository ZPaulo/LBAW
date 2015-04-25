<?php
  include_once('../config/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AlugueUmCarro</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.html">

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css'
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

<!-- CSS Global Compulsory -->
<link rel="stylesheet"
	href="../plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="../css/headers/header-default.css">
<link rel="stylesheet" href="../css/footers/footer-v1.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="../plugins/animate.css">
<link rel="stylesheet" href="../plugins/line-icons/line-icons.css">
<link rel="stylesheet"
	href="../plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet"
	href="../plugins/parallax-slider/css/parallax-slider.css">
<link rel="stylesheet"
	href="../plugins/owl-carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet"
	href="../plugins/sky-forms-pro/skyforms/css/sky-forms.css">
<link rel="stylesheet"
	href="../plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
<!--[if lt IE 9]><link rel="stylesheet" href="../plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

<!-- CSS Theme -->
<link rel="stylesheet" href="../css/theme-colors/default.css"
	id="style_color">
<link rel="stylesheet" href="../css/theme-skins/dark.css">

<!-- CSS Customization -->
<link rel="stylesheet" href="../css/custom.css">
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="index-2.html"> <img
					src="../images/assets/logo2.png" alt="Logo">
				</a>
				<!-- End Logo -->
				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
						<li class="hoverSelector"><i class="fa fa-globe"></i> <a>Languages</a>
							<ul class="languages hoverSelectorBlock">
								<li class="active"><a href="#">English <i
										class="fa fa-check"></i></a></li>
								<li><a href="#">Spanish</a></li>
								<li><a href="#">Russian</a></li>
								<li><a href="#">German</a></li>
							</ul></li>
						<li class="topbar-devider"></li>
						<li><a href="page_login.html">Login</a></li>
						<li><a href="page_registration.html">Register</a></li>
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div>
			<!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div
				class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li class="active"><a href="index.html" class=""
							data-toggle=""> Home </a></li>
						<li class=""><a href="car_search.html" class=""
							data-toggle=""> Fleet </a></li>
						<!-- End Home -->

						<!-- Pages -->
						<li class="dropdown"><a href="javascript:void(0);"
							class="dropdown-toggle" data-toggle="dropdown"> Profile </a>
							<ul class="dropdown-menu">
								<li><a href="page_profile_me.html">Overview</a></li>
								<li><a href="page_profile_history.html">History</a></li>
								<li><a href="page_profile_settings.html">Settings</a></li>
							</ul></li>
						<li class="dropdown"><a href="javascript:void(0);"
							class="dropdown-toggle" data-toggle="dropdown"
							onclick="window.location = 'management.html'"> Management </a>
							<ul class="dropdown-menu">
								<li><a href="create_local.html">Create Location</a></li>
								<li><a href="create_vehicle.html">Create Vehicle</a></li>
								<li><a href="car_search.html">Search Vehicles</a></li>
								<li><a href="user_search.html">Search Users</a></li>
							</ul></li>
						<li class="dropdown"><a href="javascript:void(0);"
							class="dropdown-toggle" data-toggle="dropdown"
							onclick="window.location = 'administration.html'">
								Administration </a>
							<ul class="dropdown-menu">
								<li><a href="create_manager.html">Create Manager</a></li>
								<li><a href="search_manager.html">Search Managers</a></li>
							</ul></li>
						<li><i class="search fa fa-search search-btn"></i>
							<div class="search-open">
								<div class="input-group animated fadeInDown">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
								</div>
							</div></li>
						<!-- End Search Block -->
					</ul>
				</div>
				<!--/end container-->
			</div>
			<!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->
		<!--=== Slider ===-->
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-arrows">
					<span class="da-arrows-prev"></span> <span class="da-arrows-next"></span>
				</div>
			</div>
		</div>
		<!--/slider-->
		<!--=== End Slider ===-->
		<div class="col-md-6">
			<!-- Reg-Form -->
			<form action="#" id="sky-form4" class="sky-form">
				<header>Rent now</header>

				<fieldset>
					<section>
						<label class="input"> <i
							class="icon-append glyphicon glyphicon-globe"></i> <input
							type="Location" name="Location" placeholder="Location"> <b
							class="tooltip tooltip-bottom-right">Enter postal code or
								city location</b>
						</label>
					</section>
					<section>
						<label class="checkbox"><input type="checkbox"
							name="return" id="return"><i></i>Return at a different
							location</label>
						<div class="row">
							<section class="col col-6">
								<label class="input"> <i
									class="icon-append fa fa-calendar"></i> <input type="text"
									name="start" id="start" placeholder="Start date">
								</label>
							</section>
							<section class="col col-6">
								<label class="input"> <i
									class="icon-append fa fa-calendar"></i> <input type="text"
									name="finish" id="finish" placeholder="Expected finish date">
								</label>
							</section>
						</div>
						<section>
							<label class="select"> <select name="type">
									<option value="0" selected disabled>Car type:</option>
									<option value="1">Economic</option>
									<option value="2">Sport</option>
									<option value="3">Other</option>
							</select> <i></i>
							</label>
						</section>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="btn-u">Rent Now!</button>
				</footer>
			</form>
			<!-- End Reg-Form -->
		</div>
		<div class="emptyspace"></div>

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index-2.html"><img id="logo-footer"
								class="footer-logo" src="../images/assets/logo2.png" alt=""></a>
							<p>O minja é o pior Nasus e consegue feedar em todos os
								jogos. O Zé é sombrio e isso faz com que ele não saia de silver.</p>
						</div>
						<!--/col-md-3-->
						<!-- End About -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline">
								<h2>Useful Links</h2>
							</div>
							<ul class="list-unstyled link-list">
								<li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">FAQ</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div>
						<!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline">
								<h2>Contact Us</h2>
							</div>
							<address class="md-margin-bottom-40">
								Rua dos feeders <br /> Porto Portugal <br /> Phone: f33d f33d
								f33d <br /> Email: <a href="" class="">feeders@feeders.com</a>
							</address>
						</div>
						<!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div>
			<!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2015 &copy; All Rights Reserved. <a href="#">Privacy Policy</a>
								| <a href="#">Terms of Service</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
								</a></li>
								<li><a href="#" class="tooltips" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
								</a></li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div>
			<!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div>

	<!-- JS Global Compulsory -->
	<script type="text/javascript"
		src="../plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript"
		src="../plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript"
		src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../plugins/smoothScroll.js"></script>
	<script type="text/javascript"
		src="../plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript"
		src="../plugins/parallax-slider/js/jquery.cslider.js"></script>
	<script type="text/javascript"
		src="../plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script
		src="../plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="../plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script
		src="../plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../javascript/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../javascript/app.js"></script>
	<script type="text/javascript" src="../javascript/plugins/owl-carousel.js"></script>
	<script type="text/javascript"
		src="../javascript/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="../javascript/plugins/datepicker.js"></script>
	<script type="text/javascript"
		src="../javascript/plugins/parallax-slider.js"></script>
	<script type="text/javascript" src="../javascript/plugins/datepicker.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			Datepicker.initDatepicker();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			ParallaxSlider.initParallaxSlider();
		});
	</script>
	<!--[if lt IE 9]>
>>>>>>> origin/master
    <script src="../plugins/respond.js"></script>
    <script src="../plugins/html5shiv.js"></script>
    <script src="../plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 12:17:19 GMT -->
</html>