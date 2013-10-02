<?php

$all = $_GET['all'];


if ($all){?>
    <ul id="selectable-list" class="organise">        
        <li><img id="d1" class="selImg" draggable="true" src="images/dummy/organise/1.jpg"></li>
        <li><img id="d2" class="selImg" draggable="true" src="images/dummy/organise/3.jpg"></li>
        <li><img id="d3" class="selImg" draggable="true" src="images/dummy/organise/2.jpg"></li>
        <li><img id="d5" class="selImg" draggable="true" src="images/dummy/organise/4.jpeg"></li>
        <li><img id="d6" class="selImg" draggable="true" src="images/dummy/organise/5.jpg"></li>
        <li><img id="d8" class="selImg" draggable="true" src="images/dummy/organise/6.jpg"></li>

    </ul>
<?php } 
else{ ?>
    <ul id="selectable-list" class="organise">
        <li><img id="d4" class="selImg" draggable="true" src="images/dummy/organise/2.png"></li>
        <li><img id="d9" class="selImg" draggable="true" src="images/dummy/organise/4.png"></li>
        <li><img id="d7" class="selImg" draggable="true" src="images/dummy/organise/3.png"></li>
    </ul>
<?php 
    } 
?>