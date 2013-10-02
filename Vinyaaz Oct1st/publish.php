<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<script src="js/impromptu.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/impromptu.css" type="text/css" media="screen" />

<script type="text/javascript">

$(function(){
    $("#publish_selected").fancybox({
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

function publish_items(){
    var l = $("form INPUT[type='checkbox']:checked").length;
    if(l<1){
        $.prompt('<p>No Brochures / Catalogues Selected</p>',{callback:
        function(returnvalue) { 
            if(returnvalue==1)
                return false;
            else
                return false;
        },
        buttons:{ 'Ok':1 },
        show:"slideDown",
        top:"30%",
        });
    }
    else {
        $("#publish_selected").trigger('click');
    }
}

</script>

<div class="clr spacer"></div>

<h3 class="title">Step 3 - Publish
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small">Organise</a>
    <a href="create.php" class="action_button action_button_small">Create</a>
    <a href="publish.php" class="action_button action_button_small action_button_selected">Publish</a>
</div>
</h3>

<div class="clr spacer"></div>


<form autocomplete="on" class="vnform"> 
<div style="float:left;width:750px;">
        <!-- Thumbnails -->
        <ul id="portfolio-list" class="gallery publishgallery" >
            <li class="filter-brochure">
                <img src="images/dummy/new/2.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/>
                <section>
                    <h4>Launch Jan 2013</h4>
                    <p>Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora, per inceptos himenaeos.</p>
                </section>
                <em><input type="checkbox" name="brochure_id" class="bchkbox">Select to Publish</em>
            </li>
            <li class="filter-catalogue">
                <img src="images/dummy/new/3.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection Jan 2013</h4>
                    <p>Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora, per inceptos himenaeos.</p>
                </section>
                <em><input type="checkbox" name="brochure_id" class="bchkbox">Select to Publish</em>
            </li>
            <li class="filter-brochure">
                <img src="images/dummy/new/4.jpg" alt="Vinyaaz Brochure" title="Vinyaaz Brochure"/>
                <section>
                    <h4>Launch Feb 2013</h4>
                    <p>Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora, per inceptos himenaeos.</p>
                </section>
                <em><input type="checkbox" name="brochure_id" class="bchkbox">Select to Publish</em>
            </li>
            <li class="filter-catalogue">
                <img src="images/dummy/new/5.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection Feb 2013</h4>
                    <p>Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora, per inceptos himenaeos.</p>
                </section>
                <em><input type="checkbox" name="brochure_id" class="bchkbox">Select to Publish</em>
            </li>
            <li class="filter-catalogue">
                <img src="images/dummy/new/7.jpg" alt="Vinyaaz Catalogue" title="Vinyaaz Catalogue"/>
                <section>
                    <h4>Collection March 2013</h4>
                    <p>Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora, per inceptos himenaeos.</p>
                </section>
                <em><input type="checkbox" name="brochure_id" class="bchkbox">Select to Publish</em>
            </li>
        </ul>
        <!-- ENDS Thumbnails -->
        <a href="publish_selected.php" id="publish_selected" style="display:none;" class="fancybox.iframe">publish</a>
</div>

<div class="publish_block">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet molestie quam. Duis eu dapibus metus, ac lobortis turpis. Nullam aliquet pharetra aliquet. In sit amet lectus eu quam euismod adipiscing in vitae felis. Suspendisse convallis nec nibh sit amet aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur a diam libero. Nullam vel lectus non risus dignissim cursus. 
    </p>
    <p>
    In a urna nunc. Ut euismod vitae dui at hendrerit. Sed eget commodo mauris. Morbi sagittis sapien vitae rhoncus aliquam. Donec varius volutpat libero, non aliquet diam vehicula pharetra. Integer pellentesque aliquam lorem, eu malesuada metus dictum eget. Aenean egestas, neque sed mattis porta, magna eros dictum eros, eget dignissim erat neque vitae metus.
    </p>
    <br>
    <a href="javascript:void(0);" onclick="publish_items();" class="action_button action_button_small action_button_selected">Publish Selected</a>
    
</div>

</form>

<div class="clr"></div>

<?php include('inc/footer.php') ?>