<?php include('inc/fancybox_header.php') ?>

<div id="wrapper" style="float:left;width:320px;">
    <div id="login" class="animate form">
        <form autocomplete="on"> 
            <h3>Contact Us</h3>
            <div style="float:left;width:300px;"> 
                <p> 
                    <label for="username" class="uname" data-icon="u" style="display:block;"> Your name </label>
                    <input id="username" name="username" required="required" type="text" placeholder="Name" />
                </p>
                <p> 
                    <label for="email" class="email" data-icon="p" style="display:block;"> Your email </label>
                    <input id="email" name="email" required="required" type="text" placeholder="user@example.com" /> 
                </p>
                <p> 
                    <label for="message" class="message" data-icon="p" style="display:block;"> Your message </label>
                    <textarea id="message" name="message" required="required" placeholder="Message" 
                    style="width:300px;height:60px;margin-top:4px;"/></textarea>
                </p>
                <p class="login button"> 
                    <input type="submit" class="login_button" value="Send" /> 
                </p>
            </div>
        </form>
    </div>
</div>

<div style="float:left;width:230px;padding-left:30px;">
    
    <h3 class="title no-border">Prasidhi Vinyaaz</h3>
    #123, 6th Cross, 3rd Main, Indiranagar<br>
    Bangalore 560 007. INDIA<br><br>
    <span style="width:45px;font-weight:bold;display:block;float:left;">Phone</span> : +91 (80) 2345678<br>
    <span style="width:45px;font-weight:bold;display:block;float:left;">Email</span> : info@vinyaaz.com
    
    <h4 style="margin-top:10px;">Stay Connected</h4>
    <ul class="stay_connected">
        <li><a href="#"><img src="images/social/fb.png"></a>
        <li><a href="#"><img src="images/social/twitter.png"></a>
        <li><a href="#"><img src="images/social/gplus.png"></a>
        <li><a href="#"><img src="images/social/pinterest.png"></a>
    </ul>
</div>

<div class="clr"></div>
                                
<?php include('inc/fancybox_footer.php') ?>