<!DOCTYPE html>
<html lang="en"> 

<head>
    <title>Login | AlugueUmCarro</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.html">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="../css/headers/header-default.css">
    <link rel="stylesheet" href="../css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../plugins/animate.css">
    <link rel="stylesheet" href="../plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="../css/pages/page_log_reg_v1.css">    

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="../css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="../css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../css/custom.css">
</head> 

<body>
<div class="wrapper">
    <!--=== Header ===-->    
<?php include 'header.php';?>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Login</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Login</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">		
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
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

                    <h4>Forget your Password ?</h4>
                    <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
                </form>            
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!--=== End Content Part ===-->

    <?php include 'footer.php';?>
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="../plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="../plugins/back-to-top.js"></script>
<script type="text/javascript" src="../plugins/smoothScroll.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="../javascript/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="../javascript/app.js"></script>
<script type="text/javascript" src="../javascript/plugins/style-switcher.js"></script>
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
<![endif]-->

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.7/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 12:25:46 GMT -->
</html> 