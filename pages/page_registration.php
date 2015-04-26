<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration | AlugueUmCarro</title>

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
            <h1 class="pull-left">Registration</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
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
                                <input type="checkbox"> 
                                I read <a href="page_terms.html" class="color-green">Terms and Conditions</a>
                            </label>                        
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit">Register</button>                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->		
    <!--=== End Content Part ===-->

    <?php include 'footer.php';?>
</div>

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

<!-- Mirrored from htmlstream.com/preview/unify-v1.7/page_registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 12:32:51 GMT -->
</html> 