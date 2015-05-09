<!DOCTYPE html>
<html lang="en">
<head>
<title>AlugueUmCarro</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
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
<div class="header">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href= {$BASE_URL} > <img
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
            {if $USERNAME}
              <li><a href="../pages/page_login.php">{$USERNAME}</a></li>
              <li class="topbar-devider"></li>
              <li> <a href="../actions/users/logout.php">Logout</a></li>
            {else}
              <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
              <li class="topbar-devider"></li>
              <li><a href="#" data-toggle="modal" data-target="#registrationModal">Register</a></li>
            {/if}
          </ul>
        </div>
        <!-- End Topbar -->

        {foreach $ERROR_MESSAGES as $error}
        {if $error == 'Invalid login' or $error == 'Login failed'}
        {$logError = true}
        {elseif $error == 'Username already exists' or $error == 'Error creating user'}
        {$regError = true}
        {/if}
        [/if]
        {/foreach}
        {if $logError}
        <script>
        $( document ).ready(function() {
           $("#loginModal").modal('toggle');
          });
        </script>
        {/if}

        {if $regError}
        <script>
        $( document ).ready(function() {
           $("#registrationModal").modal('toggle');
          });
        </script>
        {/if}
       
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
               <div class="container content">    
                <div class="row">
                      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login">
                          <form class="reg-page" action="../actions/users/login.php" method="POST">
                              <div class="reg-header">            
                                  <h2>Login to your account</h2>
                              </div>

                              <div class="input-group margin-bottom-20">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" placeholder="Username" name="username" class="form-control">
                              </div>                    
                              <div class="input-group margin-bottom-20">
                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                  <input type="password" placeholder="Password" name="password" class="form-control">
                              </div>                    

                              <div class="row">
                                  <div class="col-md-6 checkbox">
                                      <label><input type="checkbox"> Stay signed in</label>                        
                                  </div>
                                  <div class="col-md-6">
                                      <button class="btn-u pull-right" type="submit">Login</button>                        
                                  </div>
                              </div>

                              <hr>
                               <div id="error_messages">
                                {if $logError}
                                    <div style="font-color: red"> Login failed! </div>
                                {/if}
                              </div>
                              <h4>Forget your Password ?</h4>
                              <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
                          </form>            
                      </div>
                  </div><!--/row-->
              </div><!--/container-->   
            </div>
          </div>
        </div>

        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="container content">
                     <div class="row">
                         <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 regist">
                             <form class="reg-page" action="../actions/users/register.php" method="POST">
                                 <div class="reg-header">
                                     <h2>Register a new account</h2>
                                     <p>Already Signed Up? Click <a href="page_login.html" class="color-green">Sign In</a> to login your account.</p>                    
                                 </div>

                                 <label>Name</label>
                                 <input type="text" name="name" class="form-control margin-bottom-20" required>
                                
                                 <label>Username</label>
                                 <input type="text" name="username" class="form-control margin-bottom-20" required>
                                
                                 <label>Email Address <span class="color-red">*</span></label>
                                 <input type="text" name="email" class="form-control margin-bottom-20" required>

                                 <label>Cellphone number <span class="color-red">*</span></label>
                                 <input type="text" name="cellphone" class="form-control margin-bottom-20" required>

                                 <label>Adress <span class="color-red">*</span></label>
                                 <input type="text" name="adress" class="form-control margin-bottom-20" required>

                                 <div class="row">
                                     <div class="col-sm-6">
                                         <label>Password <span class="color-red">*</span></label>
                                         <input type="password" class="form-control margin-bottom-20" required>
                                     </div>
                                     <div class="col-sm-6">
                                         <label>Confirm Password <span class="color-red">*</span></label>
                                         <input type="password" name = "password" class="form-control margin-bottom-20" required>
                                     </div>
                                 </div>

                                 <hr>

                                 <div class="row">
                                     <div class="col-lg-6 checkbox">
                                         <label>
                                             <input type="checkbox" required> 
                                             I read <a href="page_terms.html" class="color-green">Terms and Conditions</a>
                                         </label>                        
                                     </div>
                                     <div id="error_messages">
                                {if $regError}
                                    <div style="font-color: red"> {$error} </div>
                                {/if}
                              </div>
                                     <div class="col-lg-6 text-right">
                                         <button class="btn-u" type="submit">Register</button>                        
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div><!--/container-->      
            </div>
          </div>
        </div>

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
            {if $TYPE == 'client'}
            <li class="dropdown"><a href="javascript:void(0);"
              class="dropdown-toggle" data-toggle="dropdown"> Profile </a>
              <ul class="dropdown-menu">
                <li><a href="page_profile_me.php">Overview</a></li>
                <li><a href="page_profile_history.html">History</a></li>
                <li><a href="page_profile_settings.html">Settings</a></li>
              </ul></li>{elseif $TYPE == 'admin'}
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
              onclick="window.location = 'administration.php'">
                Administration </a>
              <ul class="dropdown-menu">
                <li><a href="create_manager.php">Create Manager</a></li>
                <li><a href="search_manager.php">Search Managers</a></li>
              </ul></li>
              {/if}
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
    <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
      <div class="success">{$success}<a class="close" href="#">X</a></div>
    {/foreach}
    </div>
