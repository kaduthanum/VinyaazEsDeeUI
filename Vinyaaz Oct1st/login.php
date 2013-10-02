<?php include('inc/fancybox_header.php') ?>

<!-- For client side form validation -->
<script  type="text/javascript" src="js/validateData.js"></script>
<script  type="text/javascript">

$(document).ready(function(){
    //This is called so that required class is removed during edit mode
    $(".req_field, .req_field_email").each(function(){validate_data($(this))});
    
    $(".req_field, .req_field_email, .req_field_filled").each(function(){if($(this)[0].tagName=="SELECT"){b='change'}else{b='keyup change'};$(this).bind(b, function(){validate_data($(this))})
    });
});

function submit_form(form_id)
{
    var success = true; 
    $('#'+form_id+' :input').each(function() {
        if($(this).is(":visible") && $(this).hasClass('req_field')){success = false;return false;}
    });
    if(success){
        parent.location.href="account.php"
        parent.$.fn.fancybox.close();
    }else {
        return false;
    }
}

</script>

<a class="hiddenanchor" id="toforgotpassword"></a>
<a class="hiddenanchor" id="tologin"></a>

<div id="wrapper">
    <div id="login" class="animate form">
        <form autocomplete="on" action="#" method="post" id="login_form"> 
            <h3>Log in</h3> 
            <p> 
                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                <input id="username" class="req_field" name="username" required="required" type="text" placeholder="username or email@example.com"/>
            </p>
            <p> 
                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                <input id="password" class="req_field" name="password" required="required" type="password" placeholder="eg. AzX8#110F6" /> 
            </p>
            
            <p class="login button"> 
                <!--<a href="#toregister" class="to_register" style="margin-top:16px;">Forgot Passowrd ?</a>-->
                <a href="#toforgotpassword" class="forgot_password forgotpassword">Forgot Passowrd ?</a>
                <input type="submit" class="login_button" value="Login" onclick="submit_form('login_form');"/> 
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
</div>

<div class="clr"></div>
                                
<?php include('inc/fancybox_footer.php') ?>