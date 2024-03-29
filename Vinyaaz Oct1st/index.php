<?php include('inc/header.php') ?>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/initCarousel.js"></script>
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
    });
</script>

<div class="top_images" style="float:left;width:520px;">
    <!--<iframe width="520" height="330" src="//www.youtube.com/embed/uppb2LuLkqU?rel=0" frameborder="0" allowfullscreen></iframe>-->
    
    <object classid='clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B'
        width="500" height="300"
        codebase='http://www.apple.com/qtactivex/qtplugin.cab'>
        <param name='src' value="media/intro.mov">
        <param name='autoplay' value="false">
        <param name='controller' value="true">
        <param name='loop' value="false">
         
        <embed src="media/intro.mov" width="500" height="300"
        scale="tofit" autoplay="false"
        controller="true" loop="false" bgcolor="#000000"
        pluginspage='http://www.apple.com/quicktime/download/'>
        </embed>
    </object>    
</div>
<div class="home_right_text" style="float:left;width:420px;margin-left:60px;text-align:center;">
    <h1 class="home_create">
        CREATE
    </h1>
    <h2 class="home_brochure">
        BROCHURES AND CATALOGUES IN
    </h2>
    <h2 class="easy_steps">
       3 EASY STEPS
    </h2>
    <a class="signup create_now fancybox.iframe" href="signup.php">REGISTER</a>
    
    <h4 class="take_tour">
        <a href="tour.php">Take a Tour &raquo;</a>
    </h4>
</div>

<div class="clr spacer"></div>

<h2 class="vinyaaz">Vinyaaz is the new way of global commerce enhancing lifestyle & simplifying advertising in the modern age</h2>
<div class="clr separation_thick"></div>

<div id="carousel">
    <div>
        <img src="images/dummy/new/2.jpg" alt="brochure1" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/3.jpg" alt="brochure2" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/4.jpg" alt="brochure3" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/1.jpg" alt="brochure4" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/5.jpg" alt="brochure5" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/6.jpg" alt="brochure6" width="200" height="261" />
    </div>
    <div>
        <img src="images/dummy/new/7.jpg" alt="brochure7" width="200" height="261" />
    </div>
</div>

<div class="clr separation_thick"></div>

<!-- 6 key differentiators -->
<ul id="og-grid" class="og-grid">
    <li>
        <span class="numbers">1</span>
        <a href="differentiators.php" data-largesrc="images/dummy/new/2.jpg" data-title="Catalogue Creation Explained!" 
        data-description="Welcome to Vinyaaz! You are just a few minutes from treating your own Stunning catalogs ! 5 simple steps<br>
        <br>- Create ID<br>- Take pictures<br>- Organise content<br>- Preview catalogue<br>- Click publish"
        >
            <div class="differentiator">
                <h3>Catalogue Creation Explained!</h3>
                <h4>No Coding Needed</h4>
            </div>
        </a>
    </li>
    <li>
        <span class="numbers">2</span>
        <a href="differentiators.php" data-largesrc="images/dummy/new/2.jpg" data-title="Mobile & Tablet App" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent adipiscing viverra volutpat dolor sit amet. consectetur adipiscing elit praesent adipiscing.">
            <div class="differentiator">
                <h3>Mobile & Tablet App</h3>
                <h4>Full web presence.</h4>
            </div>
        </a>
    </li>
    <li>
        <span class="numbers">3</span>
        <a href="differentiators.php" data-largesrc="images/dummy/new/1.jpg" data-title="100s of Stunning Designs" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent adipiscing viverra volutpat dolor sit amet. consectetur adipiscing elit praesent adipiscing.">
            <div class="differentiator noright_border">
                <h3>Pricing</h3>
                <h4>Just for you</h4>
            </div>
        </a>
    </li>
    <li>
        <span class="numbers">4</span>
        <a href="differentiators.php" data-largesrc="images/dummy/new/1.jpg" data-title="Analytics" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent adipiscing viverra volutpat dolor sit amet. consectetur adipiscing elit praesent adipiscing.">
            <div class="differentiator noright_border">
                <h3>Analytics</h3>
                <h4>Just for you</h4>
            </div>
        </a>
    </li>
    <li>
        <span class="numbers">5</span>
        <a href="differentiators.php" data-largesrc="images/dummy/new/4.jpg" data-title="Frequently Asked Questions" data-description="What is Vinyaaz?<br> It is a lifestyle enhancing & a truly global commerce platform connecting consumers, enterprises institutions and merchants to each other. It takes information from the portal and pushes to devices running the Vinyaaz mobile app!.">
            <div class="differentiator">
                <h3>Frequently Asked Questions </h3>
                <h4>All you wanted to know about Vinyaaz.</h4>
            </div>
        </a>
    </li>
</ul>
<div class="clr"></div>

<!-- End of 5 key differentiators -->
<script src="js/grid.js"></script>
<script>
    $(function() {
        Grid.init();
    });
</script>
<?php include('inc/footer.php') ?>