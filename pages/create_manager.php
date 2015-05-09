<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<title>Create Manager</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.html">

<!-- Web Fonts -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

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
				<a class="logo" href="index.html"> <img
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
						<li class=""><a href="index.html" class="" data-toggle="">
								Home </a></li>
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
						<li class="dropdown active"><a href="javascript:void(0);"
							class="dropdown-toggle" data-toggle="dropdown"
							onclick="window.location = 'administration.html'">
								Administration </a>
							<ul class="dropdown-menu">
								<li class="active"><a href="create_manager.html">Create Manager</a></li>
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
		</div>		<!--=== End Header ===-->

		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Create Manager</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="administration.html">Administration</a></li>
					<li class="active">Create Manager</li>
				</ul>
			</div>
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row">


				<!-- Begin Content -->
				<div class="col-md-9">
					<!-- Tabs -->
					<div class="tab-v1">

						<div class="tab-content">
							<!-- Success Forms -->
							<div class="tab-pane fade in active" id="home-1">
								<form action="#" class="sky-form">
									<header>Insert Manager Info</header>

									<fieldset>
										<section>
											<label class="label">Manager Name</label> <label
												class="input state-success"> <input type="text">
											</label>
											<div class="note note-success">This is a required
												field.</div>
										</section>
										<section>
											<label class="label">Manager Password</label> <label
												class="input state-success"> <input type="text">
											</label>
											<div class="note note-success">This is a required
												field.</div>
										</section>
										<section>
											<label class="label">Confirm Password</label> <label
												class="input state-success"> <input type="text">
											</label>
											<div class="note note-success">This is a required
												field.</div>
										</section>


									</fieldset>



									<footer>
										<button type="submit" class="btn-u btn-u-default">Submit</button>
										<button type="button" class="btn-u"
											onclick="window.history.back();">Back</button>
									</footer>
								</form>
								<!--/ Success states for elements -->
							</div>
							<!-- End Success Forms -->


							<!-- End Disabled Forms -->
						</div>
					</div>
					<!-- End Tabs-->
				</div>
				<!-- End Content -->
			</div>
		</div>
		<!--/container-->
		<!--=== End Content Part ===-->

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index-2.html"><img id="logo-footer" class="footer-logo" src="../images/assets/logo2.png" alt=""></a>
                        <p>O minja é o pior Nasus e consegue feedar em todos os jogos. O Zé é sombrio e isso faz com que ele não saia de silver.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">FAQ</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>                         
                        <address class="md-margin-bottom-40">
                            Rua dos feeders <br />
                            Porto Portugal <br />
                            Phone: f33d f33d f33d <br />
                            Email: <a href="" class="">feeders@feeders.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>
		<!--=== End Footer Version 1 ===-->
	</div>
	<!--/End Wrapepr-->

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
	<script
		src="../plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script
		src="../plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="../plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script
		src="../plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	
	<!-- JS Customization -->
	<script type="text/javascript" src="../javascript/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../javascript/app.js"></script>
	<script type="text/javascript"
		src="../javascript/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--[if lt IE 9]>
    <script src="../plugins/respond.js"></script>
    <script src="../plugins/html5shiv.js"></script>
    <script src="../plugins/placeholder-IE-fixes.js"></script>
    <script src="../plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->

	<!--[if lt IE 10]>
    <script src="../plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.7/shortcode_form_states.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 12:35:39 GMT -->
</html>