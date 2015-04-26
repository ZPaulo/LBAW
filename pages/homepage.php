<?php
  include_once('../config/init.php');
  session_start();
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
		<?php include 'header.php';?>
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
		<?php include 'footer.php';?>
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