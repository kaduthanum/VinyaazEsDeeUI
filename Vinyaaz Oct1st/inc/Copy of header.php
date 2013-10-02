<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vinyaaz</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/vinyaaz.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/topSlider.js"></script>
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <!-- Top Slider -->
        <div class="top_slider">
            <section id="login_slider" class="slider_section">
                <a class="hiddenanchor" id="toforgotpassword"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form autocomplete="on" action="account.php" method="post"> 
                            <h3>Log in</h3> 
                            <p> 
                                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                <input id="username" name="username" required="required" type="text" placeholder="username or email@example.com"/>
                            </p>
                            <p> 
                                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                <input id="password" name="password" required="required" type="password" placeholder="eg. AzX8#110F6" /> 
                            </p>
                            
                            <p class="login button"> 
                                <!--<a href="#toregister" class="to_register" style="margin-top:16px;">Forgot Passowrd ?</a>-->
                                <a href="#toforgotpassword" class="forgot_password forgotpassword">Forgot Passowrd ?</a>
                                <input type="submit" class="login_button" value="Login" /> 
                            </p>
                        </form>
                    </div>

                    <div id="forgotpassword" class="animate form">
                        <form autocomplete="on"> 
                            <h3> Forgot Password </h3> 
                            <p style="line-height:20px;">Please enter your email address and click 'Send Password'. We will email you a link where you can create a new password.</p>
                            <p> 
                                <label for="emailsignup" class="youmail" data-icon="e" >Your email</label>
                                <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="email@example.com"/> 
                            </p>
                            <p class="login button">
                                <a href="#tologin" class="forgot_password forgotpassword">Log in </a>
                                <input type="submit" class="login_button" value="Send Password" /> 
                            </p>
                        </form>
                    </div>
                
                    <div class="registrationForm" style="margin-left:550px;width:450px;">
                        <h3>Register for a new account</h3>
                        <p style="line-height:24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent adipiscing viverra volutpat dolor sit amet.</p>  
                            <form autocomplete="on" action="register.php" method="post"> 
                            <p> 
                                <label for="username" class="uname" data-icon="u" > Your email</label>
                                <input id="username" name="username" required="required" type="text" placeholder="email@example.com"/>
                            </p>
                            <p class="login button">
                                <input type="submit" class="login_button" value="Register" /> 
                            </p>
                            </form>
                    </div>
                
                </div>
                <div class="clr"></div>
            </section>
            
            <section id="contact_slider" class="slider_section">
                <div id="wrapper" style="float:left;width:700px;">
                    <div id="login" class="animate form">
                        <form autocomplete="on"> 
                            <h3>Contact Us</h3>
                            <div style="float:left;width:220px;"> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" style="display:block;"> Your name </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Name" style="width:200px;"/>
                                </p>
                                <p> 
                                    <label for="email" class="email" data-icon="p" style="display:block;"> Your email </label>
                                    <input id="email" name="email" required="required" type="text" placeholder="user@example.com" style="width:200px;"/> 
                                </p>
                            </div>
                            <div style="float:right;width:370px;"> 
                                <p> 
                                    <label for="message" class="message" data-icon="p" style="display:block;"> Your message </label>
                                    <textarea id="message" name="message" required="required" placeholder="Message" 
                                    style="width:365px;height:81px;margin-top:4px;"/></textarea>
                                </p>
                            </div>
                            
                            <p class="login button"> 
                                <input type="submit" class="login_button" value="Send" /> 
                            </p>
                        </form>
                    </div>
                </div>
                
                <div style="float:left;width:300px;padding-bottom:15px;">
                    
                    <h4>Prasidhi Vinyaaz</h4>
                    #123, 6th Cross, 3rd Main, Indiranagar<br>
                    Bangalore 560 007. INDIA<br><br>
                    <span style="width:45px;font-weight:bold;display:block;float:left;">Phone</span> : +91 (80) 2345678<br>
                    <span style="width:45px;font-weight:bold;display:block;float:left;">Email</span> : info@vinyaaz.com
                    
                    <h4 style="margin-top:15px;">Stay Connected</h4>
                    <ul class="stay_connected">
                        <li><a href="#"><img src="images/social/fb.png"></a>
                        <li><a href="#"><img src="images/social/twitter.png"></a>
                        <li><a href="#"><img src="images/social/gplus.png"></a>
                        <li><a href="#"><img src="images/social/pinterest.png"></a>
                    </ul>
                </div>
               
                <div class="clr"></div>
            </section>
            
            <div class="close_slider"><img src="images/close.png" onclick=""></div>
        </div>
        <!-- End Top Slider -->

        <div class="container">
            
            <!-- Begin Header -->
            <div class="header">
                <div class="logo" onclick="window.location='index.php';"> </div> 
                <div class="links">
                    <ul>
                        <li>
                            <?php if($chosen_tab=='account'){ ?>
                            <a href="account.php">Account</a>
                            <?php 
                            } else {
                            ?>
                            <a href="index.php">About</a>
                            <?php } ?>
                        <li><a href="services.php">Services</a>
                    </ul>
                </div> 
                <div class="links">
                    <ul class="pointup">
                        <li><a href="#" id="open_login">Login / Register</a>
                        <li><a href="#" id="open_contact">Contact</a>
                    </ul>
                </div> 
            </div>
            <!-- End of Header -->
            
            <!-- Separator -->
            <div class="clr separation"></div>
            <!-- End of Separator -->
            
            <!-- Begin Content -->
            <div class="content">

                
