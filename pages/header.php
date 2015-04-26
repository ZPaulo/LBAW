<?php
  include_once('../config/init.php');
  session_start();
?>
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
						<li><?php if(isset($_SESSION['username'])){
									echo '<a href="page_login.php">'.$_SESSION['username'].'</a></li> '; 
									echo '<li class="topbar-devider"></li>';
									echo '<li> <a href="../actions/users/logout.php">Logout</a></li> ';
									}
									else{
										echo '<a href="page_login.php">Login</a></li> ';
										echo '<li class="topbar-devider"></li>';
										echo '<li><a href="page_registration.php">Register</a></li>';
									}
										?>
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
								<li><a href="page_profile_me.php">Overview</a></li>
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