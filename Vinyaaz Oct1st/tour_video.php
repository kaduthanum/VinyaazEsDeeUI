<?php include('inc/fancybox_header.php') ?>

<?php
    $cat = $_GET['cat']; 
?>
<div style="text-align:center;">
    <h3 class="title no-border"><?php echo "$cat" ?> Catalogues</h3>
    <hr>
</div>

<div class="clr spacer"></div>
                                
<?php 
    if($cat=='Restaurant'){ 
        print "<iframe width='500' height='320' src='//www.youtube.com/embed/uppb2LuLkqU?rel=0' frameborder='0' allowfullscreen></iframe>";
    }else{
        print '<iframe width="500" height="320" src="//www.youtube.com/embed/MuOtXAPukaE?rel=0" frameborder="0" allowfullscreen></iframe>';
    }
?>

<?php include('inc/fancybox_footer.php') ?>