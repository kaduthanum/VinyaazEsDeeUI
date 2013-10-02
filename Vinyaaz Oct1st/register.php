<?php include('inc/header.php') ?>

<div class="clr spacer"></div>
<div style="text-align:center;">
    <h3 class="title no-border">Create your account</h3>
    <hr>
</div>

<div class="clr spacer"></div>

<div class="reg_block">
    <div style="float:left;width:400px;margin-right:150px;">
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
                <p> 
                    <label for="password"> Your password </label>
                    <input id="password" name="password" required="required" type="password" placeholder="eg. AzX8#110F6" /> 
                </p>
                <p> 
                    <label for="password2"> Confirm password </label>
                    <input id="password2" name="password2" required="required" type="password" placeholder="eg. AzX8#110F6" /> 
                </p>
                <p class="keeplogin"> 
                    <input type="checkbox" name="terms" id="loginkeeping" required="required" value="1" /> 
                    <label for="loginkeeping">I agree to the <a href="#">Terms & Conditions</a></label>
                </p>
                <p class="login button"> 
                    <input type="submit" class="login_button" value="Register" /> 
                </p>
            </form>
        </div>
    </div>
    
    <div class="gradient_block" style="float:left;width:430px;padding:10px;text-align:left;">
        <h4 style="font-size:24px;line-height:32px;color:#444;">
        Your account entitles you to
        </h4>
        <ul class="services_list">
            <li>Nulla rhoncus, eros fringilla volutpat pretium, magna augue sollicitudin neque.
            <li>Aliquam erat volutpat. Nam aliquam, justo vitae mattis consectetur, leo orci vulputate sapien, a feugiat tortor arcu in enim. Pellentesque dictum nunc mi, ac lacinia erat.
            <li>Aliquam erat volutpat. Nam aliquam, justo vitae mattis consectetur.
            <li>Nulla rhoncus, eros fringilla volutpat pretium, magna augue sollicitudin neque, non rutrum purus turpis sit amet lorem.
        </ul>
    </div>
    <!-- End of Account Highlights -->
    
    <div class="clr spacer"></div>
</div>
<!-- End of Reg Block -->

<div class="clr"></div>
                
                
<?php include('inc/footer.php') ?>