<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vinyaaz</title>
        <meta charset="UTF-8" />
        <!--
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        -->
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/vinyaaz.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- FancyBox main JS and CSS files -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css" media="screen" />
        <!-- End of FancyBox JS and CSS files -->

        <script type="text/javascript" src="js/custom.js"></script>
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            
            <!-- Begin Header -->
            <div class="header">
                <div class="logo" onclick="window.location='index.php';"> </div> 
                
                <div class="welcome">
                   <?php if($chosen_tab=='account'){ ?>
                    <div style="float:right;padding-right:40px;" id="dd" class="wrapper-dropdown-5" tabindex="1">Welcome John Doe
                        <ul class="dropdown">
                            <li><a href="edit_profile.php" class="edit_profile fancybox.iframe">Edit Profile</a></li>
                            <li><a href="change_password.php" class="change_password fancybox.iframe">Change Password</a></li>
                            <li><a href="#">Log out</a></li>
                        </ul>
                    </div>

                    <?php 
                    } else {
                    ?>
                    <span style="float:right;">&nbsp;</span>
                    <?php } ?>
                </div>
                
                <div class="links">
                    <!--<li><a href="#" id="open_login">Login / Register</a>-->
                    <a href="services.php">Services</a>
                    <?php if($chosen_tab!='account'){ ?>
                        <a href="login.php" id="open_login" class="fancybox.iframe">Login</a>
                    <?php }else{ ?>
                        <a href="account.php">Account</a>
                    <?php } ?>
                </div> 
            </div>
            <!-- End of Header -->
            
            <!-- Separator -->
            <div class="clr separation_thick"></div>
            <!-- End of Separator -->
            
            <!-- Begin Content -->
            <div class="content">

                
