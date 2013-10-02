<?php include('inc/fancybox_header.php') ?>

<div style="text-align:center;">
    <h3 class="title no-border">Welcome to Vinyaaz</h3>
    <hr>
</div>

<div class="clr spacer"></div>

<div  class="vnform">
    <form autocomplete="on"> 
        <p> 
            <label for="username" class="uname" data-icon="u" > Your email</label>
            <input id="username" name="username" required="required" type="text" placeholder="email@example.com"/>
        </p>
        
        <p> 
            <label for="username" class="uname" data-icon="u" > Re-enter email</label>
            <input id="username1" name="username1" required="required" type="text" placeholder="email@example.com"/>
        </p>

        <p class="login button"> 
            <input type="submit" class="login_button" value="Sign Up for Vinyaaz" /> 
        </p>
    </form>
</div>
                                
<?php include('inc/fancybox_footer.php') ?>