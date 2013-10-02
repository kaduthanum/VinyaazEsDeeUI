<?php include('inc/fancybox_header.php') ?>

<div style="text-align:center;">
    <h3 class="title no-border">Edit Profile</h3>
    <hr>
</div>

<div class="clr spacer"></div>

<div  class="vnform">
    <form autocomplete="on"> 
        <p> 
            <label for="firstname"> First Name </label>
            <input id="firstname" name="firstname" required="required" type="text" placeholder="eg. John"/>
        </p>
        <p> 
            <label for="lastname"> Last Name </label>
            <input id="lastname" name="lastname" type="text" placeholder="eg. Doe"/>
        </p>
        <p> 
            <label for="company"> Organisation </label>
            <input id="company" name="company" type="text" placeholder="eg. Vinyaaz"/>
        </p>
        <p> 
            <label for="address"> Address </label>
            <input id="address" name="address" type="text" placeholder="eg. 123, Indiranagar, B'lore-038, India"/>
        </p>
        <p class="login button"> 
            <input type="submit" class="login_button" value="Update Profile" /> 
        </p>
    </form>
</div>
                                
<?php include('inc/fancybox_footer.php') ?>