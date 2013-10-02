<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<script type="text/javascript" src="js/filterable.pack.js"></script>
<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />

<div class="clr spacer"></div>

<h3 class="title">My Account
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small">Organise</a>
    <a href="create.php" class="action_button action_button_small">Create</a>
    <a href="publish.php" class="action_button action_button_small">Publish</a>
</div>
</h3>

<!--
<div class="detailView">
    <div class="first_half">
        <p class="label">First Name</p>
        <p>John</p>
        
        <p class="label">Last Name</p>
        <p>Doe</p>
                            
        <p class="label">Email</p>
        <p>john.doe@example.com</p>
    </div>
    <div class="first_half">
        <p class="label">Organisation</p>
        <p>Vinyaaz Pvt</p>
        
        <p class="label">City</p>
        <p>New York</p>
                            
        <p class="label">Country</p>
        <p>United States of America</p>
    </div>
</div>
-->

<div class="clr spacer"></div>

<!-- <h3 class="title" style="float:left;width:630px;">My Brochures / Catalogues</h3> -->

<!-- filter -->
<ul id="portfolio-filter">
    <li>FILTER :</li>
    <li><a href="#all" class="link-button"><span>ALL</span></a></li>
    <li><a href="#filter-brochure" class="link-button"><span>Brochures</span></a></li>
    <li><a href="#filter-catalogue" class="link-button"><span>Catalogues</span></a></li>
</ul>
<!-- filter -->

<!-- Thumbnails -->
<ul id="portfolio-list" class="gallery" >
    <li class="filter-brochure">
        <a href="create.php" title="Launch Jan 2013">
        <span class="select"></span>
        <span class="del"></span>
        <span class="pub"></span>
        <img src="images/dummy/new/2.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/></a>
        <em>Launch Jan 2013</em>
    </li>
    <li class="filter-catalogue">
        <a href="create.php" title="Catalogue Jan 2013">
        <span class="select"></span>
        <span class="del"></span>
        <img src="images/dummy/new/3.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/></a>
        <em>Collection Jan 2013</em>
    </li>
    <li class="filter-brochure">
        <a href="create.php" title="Launch Jan 2013">
        <span class="select"></span>
        <span class="del"></span>
        <span class="pub"></span>
        <img src="images/dummy/new/4.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/></a>
        <em>Launch Feb 2013</em>
    </li>
    <li class="filter-catalogue">
        <a href="create.php" title="Catalogue Jan 2013">
        <span class="select"></span>
        <span class="del"></span>
        <img src="images/dummy/new/5.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/></a>
        <em>Collection Feb 2013</em>
    </li>
    <li class="filter-catalogue">
        <a href="create.php" title="Catalogue Jan 2013">
        <span class="select"></span>
        <span class="del"></span>
        <img src="images/dummy/new/6.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/></a>
        <em>Collection March 2013</em>
    </li>
</ul>
<!-- ENDS Thumbnails -->

<?php include('inc/footer.php') ?>