<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />
<script src="js/slides.min.jquery.js"></script>
<style>
.publishgallery li, .box-container {
    height:130px;
    width:190px;
}
.publishgallery li section h4, .box-container section h4 {
    font-size:12px;
}
.publishgallery li img.add {
    border: none;
    left: 75px;
    max-height: 75px;
    max-width: 75px;
    position: absolute;
    top: 45px;
    box-shadow:none;
}

#reel{
	position: relative;
	width: 940px;
	height: 170px;
	padding:0 10px;
	margin:0 0 15px 20px;
	border:1px solid #ddd;
	box-shadow:0 1px 8px #CCCCCC inset;
	border-radius:10px;
}

#reel .prev{
	position: absolute;
	top: 65px;
	left: 10px;
	display: block;
	width: 45px;
	height: 40px;
	background: url(img/reel-left.png) no-repeat;
}

#reel .next{
	position: absolute;
	top: 65px;
	right: 10px;
	display: block;
	width: 45px;
	height: 40px;
	background: url(img/reel-right.png) no-repeat;
}


#reel .prev:hover,
#reel .next:hover{
	background-position: 0px -40px;
}

#reel .slides_container{
	position: absolute;
	overflow: hidden;
	top: 20px;
	left: 50px;
	width: 850px;
}

#reel .slides_container  .slide-box{
	width: 898px;
	height: 140px;
	padding-left: 50px;
	padding-right: 10px;
}

#reel .slides_container .box-container{
	/*overflow: hidden;*/
	float: left;
	width: 200px;
	/*margin: 0px 10px;*/
	margin:0 60px 0 10px;
}

#reel .slides_container .box-container h6{
	color: #484848;
	margin-top: 5px;
	margin-bottom: 7px;
}

#reel .box-icon{
	float: left;
	margin-right: 10px;
}

#reel .slides_container .box-divider{
	clear: both;
	border-bottom: 1px solid #ccc;
	padding-bottom: 5px;
	margin-bottom: 5px;
}

</style>

<script type="text/javascript">
var num_upload_added = 1;

$(function(){
    $('#reel').slides({
		preload: true,
		generateNextPrev: false,
		generatePagination: false,
		next: 'next',
		slideSpeed: 700
	});
});
function change_prop(div_class, obj){
    $("ul.diff li").removeClass("selected");
    $.when($(".div_info").fadeOut(300)).done(function(){$("."+div_class).fadeIn(200);$(obj).closest('li').addClass('selected');});
}
function clone_upload(){
    if(num_upload_added<5){
        num_upload_added = num_upload_added+1;
        var x = $('.product_images_block').clone().appendTo('.product_images_block_new').attr('class','').css('display','block');
    }
}
</script>

<div class="clr spacer"></div>

<h3 class="title">My Products
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small action_button_selected">Organise</a>
    <a href="create.php" class="action_button action_button_small">Create</a>
    <a href="publish.php" class="action_button action_button_small">Publish</a>
</div>
</h3>

<div class="clr spacer"></div>

<!-- Reel slider -->
<div id="reel">
    <div class="slides_container">
        
        <div class="slide-box">
            <div class="box-container">
                <img src="images/dummy/new/3.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/>
                <section>
                    <h4>Launch Feb 2013</h4>
                    <p>
                        SKU Number
                        <br>Price
                        <br>Make and Model
                    </p>
                </section>
                <em><a href="add_product.php?product_id=123">Edit</a></em>
            </div>
            <div class="box-container">
                <img src="images/dummy/new/4.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/>
                <section>
                    <h4>Launch Feb 2013</h4>
                    <p>
                        SKU Number
                        <br>Price
                        <br>Make and Model
                    </p>
                </section>
                <em><a href="add_product.php?product_id=123">Edit</a></em>
            </div>
            <div class="box-container">
                <img src="images/dummy/new/5.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection Feb 2013</h4>
                    <p>
                        SKU Number
                        <br>Price
                        <br>Make and Model
                    </p>
                </section>
                <em><a href="add_product.php?product_id=123">Edit</a></em>
            </div>
        </div>
        
        <div class="slide-box">
            <div class="box-container">
                <img src="images/dummy/new/7.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection March 2013</h4>
                    <p>
                        SKU Number
                        <br>Price
                        <br>Make and Model
                    </p>
                </section>
                <em><a href="add_product.php?product_id=123">Edit</a></em>
            </div>
            <div class="box-container">
                <img src="images/dummy/new/6.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection April 2013</h4>
                    <p>
                        SKU Number
                        <br>Price
                        <br>Make and Model
                    </p>
                </section>
                <em><a href="add_product.php?product_id=123">Edit</a></em>
            </div>
        </div>
        
    </div>
    <a href="#" class="prev"></a>
    <a href="#" class="next"></a>
</div>
<!-- ENDS Reel slider -->

<div class="clr spacer"></div>

<div>
    <!-- Thumbnails -->
    <ul id="portfolio-list" class="gallery publishgallery" >
        <li class="filter-brochure">
            <img src="images/dummy/new/2.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/>
            <section>
                <h4>ADD NEW PRODUCT</h4>
                <p><a href="add_product.php"><img class="add" src="img/icons/Add48.png"></a></p>
            </section>
        </li>
    </ul>
    <!-- ENDS Thumbnails -->
</div>

<div class="clr spacer"></div>

<?php include('inc/footer.php') ?>