<?php include('inc/header.php') ?>
<link rel="stylesheet" type="text/css" href="css/tour.css" />


<script type="text/javascript">
    $(document).ready(function(){
        $(".signup").fancybox({
            closeClick  : false,
              height:300,
              width:400,
              openEffect  : 'none',
              closeEffect : 'none',
              helpers   : { 
               overlay : {closeClick: false}
              }
        });
        
        $(".cat_video").fancybox({
            closeClick  : false,
              height:450,
              width:520,
              openEffect  : 'none',
              closeEffect : 'none',
              helpers   : { 
               overlay : {closeClick: false}
              }
        });

    });
</script>

<div class="clr spacer"></div>

<div class="services_block" style="margin-top:30px;">
    <div>
        <h4 style="font-size:30px;line-height:36px;color:#444;">VINYAAZ</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc malesuada, risus ut elementum imperdiet, turpis dui feugiat nisi, sit amet tincidunt lectus lorem in tortor. Sed commodo iaculis dui at tincidunt. Duis vitae porttitor nibh. Ut at turpis est, ultricies porttitor risus. Vestibulum condimentum dictum neque sit amet feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque eu velit mauris, at fringilla lacus. Vivamus euismod orci non eros ullamcorper in aliquam risus vulputate.
        </p> 
    </div>
    
    <div class="clr spacer"></div>
    <div class="clr spacer"></div>
    <div class="clr spacer"></div>
        <div class="side">
            <nav class="dr-menu">
                <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span>
                    <a class="dr-label"><h3 class="title no-border">Restaurant</h3></a>
                </div>
                <ul>
                    <li><a class="dr-icon dr-icon-camera" href="#">See it in action</a></li>
                    <li><a class="dr-icon dr-icon-user" href="#">What you can do</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">How do you benefit</a></li>
                    <li><a class="dr-icon dr-icon-download" href="#">How you can subscribe</a></li>
                    <li><a class="dr-icon dr-icon-settings" href="#">Stats</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">Testimonial</a></li>
                </ul>
            </nav>
            
            <nav class="dr-menu">
                <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span>
                    <a class="dr-label"><h3 class="title no-border">Retail</h3></a>
                </div>
                <ul>
                    <li><a class="dr-icon dr-icon-camera" href="#">See it in action</a></li>
                    <li><a class="dr-icon dr-icon-user" href="#">What you can do</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">How do you benefit</a></li>
                    <li><a class="dr-icon dr-icon-download" href="#">How you can subscribe</a></li>
                    <li><a class="dr-icon dr-icon-settings" href="#">Stats</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">Testimonial</a></li>
                </ul>
            </nav>
        </div>
        
        <div style="display:inline-block;float:left;width:160px;margin:200px 80px 0 80px;">
            <div style="border-radius:80px;background:#EEE;width:160px;height:160px;text-align:center;">
                <img src="images/vinyaaz_logo.png" style="margin-top:20px;">
            </div>
        </div>

        <div class="side">
            <nav class="dr-menu">
                <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span>
                    <a class="dr-label"><h3 class="title no-border">Real Estate</h3></a>
                </div>
                <ul>
                    <li><a class="dr-icon dr-icon-camera" href="#">See it in action</a></li>
                    <li><a class="dr-icon dr-icon-user" href="#">What you can do</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">How do you benefit</a></li>
                    <li><a class="dr-icon dr-icon-download" href="#">How you can subscribe</a></li>
                    <li><a class="dr-icon dr-icon-settings" href="#">Stats</a></li>
                    <li><a class="dr-icon dr-icon-camera" href="#">Testimonial</a></li>
                </ul>
            </nav>
        </div>

    <div class="clr spacer"></div>
    <div class="clr spacer"></div>
    
    <p><a class="signup create_now fancybox.iframe" href="signup.php">REGISTER NOW</a></p> 
    
    <div class="clr spacer"></div>
    
</div>
<!-- End of About -->

<div class="clr"></div>

<script src="js/tourmenu.js"></script>
                
<?php include('inc/footer.php') ?>