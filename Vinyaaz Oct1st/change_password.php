<?php include('inc/fancybox_header.php') ?>

<div style="text-align:center;">
    <h3 class="title no-border">Change Password</h3>
    <hr>
</div>

<div class="clr spacer"></div>

<div  class="vnform">
    <form autocomplete="on"> 
        <p> 
            <label for="password1" class="pass" data-icon="p" > Current Password</label>
            <input id="password1" name="password1" required="required" type="password" placeholder="123456"/>
        </p>
        
        <p> 
            <label for="password2" class="pass" data-icon="p" > New Password</label>
            <input id="password2" name="password2" required="required" type="text" placeholder="123456"/>
        </p>

        <p> 
            <label for="password3" class="pass" data-icon="p" > Re-enter New Password</label>
            <input id="password3" name="password3" required="required" type="text" placeholder="123456"/>
        </p>

        <p class="login button"> 
            <input type="submit" class="login_button" value="Update Password" /> 
        </p>
    </form>
</div>
                                
<?php include('inc/fancybox_footer.php') ?>