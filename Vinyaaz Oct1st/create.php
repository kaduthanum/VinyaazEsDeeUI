<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<script src="js/impromptu.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/impromptu.css" type="text/css" media="screen" />
<style>
.toolbar img{height:24px;}
</style>


<script type="text/javascript">
function get_data(all, obj){
    $("div#resourceArea a").removeClass("data_button_selected");
    $("#data_list").fadeOut('fast', function(){$('.overlay_message').css('display','block');});
    $("#data_list").load('send_data.php?all='+all,function(){
        $(".overlay_message").fadeOut('fast',function(){
            $("#data_list").fadeIn('fast');$(".overlay_message").css('display','none');$(obj).addClass('data_button_selected');
        }); 
    });
}
function save_page(){
    $.prompt('<p>Brochure Name</p><p><input type="text" name="brochure_name"></p>'+
            '<p>Page Name</p><p><input type="text" name="page_name"></p>'+
            '<p>Page Number</p><p><input type="text" name="page_number"></p>'+
            '<p>Page Transition</p><p><select name="page_transition"><option value="1">Transition 1</option><option value="2">Transition 2</option>'+
            '<option value="3">Transition 2</option></select></p>'+
            '<p>Page Size</p><p><select name="page_size"><option value="A4">A4</option><option value="letter">Letter</option>'+
            '<option value="legal">Legal</option></select></p>'+
            '<p>Page Orientation</p><p><select name="page_orientation"><option value="l">Landscape</option><option value="p">Portrait</option></select>'+
            '<p>Page Type</p><p><select name="page_type"><option value="front">Front Page</option><option value="body">Body</option>'+
            '<option value="last">Last Page</option></select></p>',{callback:
    function(returnvalue) { 
        if(returnvalue==1)
            window.location="publish.php";
        else
            return false;
    },
    buttons:{ 'Save':1,'Exit':2 },
    show:"slideDown",
    top:"10%",
    });
}
</script>

<div class="clr spacer"></div>

<h3 class="title">Step 2 - Create
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small">Organise</a>
    <a href="create.php" class="action_button action_button_small action_button_selected">Create</a>
    <a href="publish.php" class="action_button action_button_small">Publish</a>
</div>
</h3>

<div class="clr spacer"></div>

<div class="vnform">
    <form autocomplete="on"> 
        <div id="workArea" style="background:url(img/icons/tiny_grid.png) repeat;">
            <div class="toolbar">
                <a href="#"><img title="Add Border" src="img/icons/borders.png" alt="Add Border"></a>
                <a href="#"><img title="Insert Shapes" src="img/icons/square-32.png" alt="Insert Shapes"></a>
                <a href="#"><img title="Insert Background" src="img/icons/bgcolor32.png" alt="Insert Background"></a>
                <a href="#"><img title="Insert Text" src="img/icons/text32.png" alt="Insert Text"></a>
                <a href="#"><img title="Clear" src="img/icons/Refresh24.png" alt="Clear"></a>
                <a href="javascript:void(0);" onclick="save_page();"><img title="Save" src="img/icons/Save24.png" alt="Save"></a>
            </div>
            <div class="canvas" style="padding:10px 5px;">
            </div>
        </div>
        
        <div id="resourceArea"> 
            <div style="width:100%;text-align:center;font-size:20px;border-bottom:1px dotted #CCC;">
                <a class="data_button data_button_selected" href="javascript:void(0);" onclick="get_data(0,this);" 
                style="width:174px;border-right:1px dotted #CCC;">My Items
                </a>
                <a class="data_button" href="javascript:void(0);" onclick="get_data(1,this);">Vinyaaz Items</a>
                <div class="clr"></div>
            </div>
            <div style="width:100%;border-bottom:1px solid #CCC;">
                <p style="float:left;width:175px;margin-bottom:2px;"> 
                    <select id="verticals" name="verticals" style="width:164px;padding:4px 5px;border:none;border-right:1px dotted #CCC;"/>
                        <option value="">Select by Verticals</option>
                        <option value="rl">Real Estate</option>
                        <option value="tr">Travel </option>
                        <option value="mg">Management</option>
                    </select>
                </p>
                <p style="float:left;width:175px;margin-bottom:2px;"> 
                    <input id="search" name="search" type="text" placeholder="Search through verticals"  
                    style="border:none;width:165px;" />
                </p>
                <div class="clr"></div>
            </div>
            <div style="padding:10px 5px 10px 5px;">

                <div class="clr"></div>
                <!--<hr>-->
                <div class="overlay_message">
                    <img style="vertical-align:bottom;" src="images/loader.gif">
                </div>

                <div id="data_list"> <?php include('send_data.php') ?> </div>

            </div>
        </div>
        
    </form>
</div>

<div class="clr spacer"></div>

<div class="clr"></div>

<script>

var cols = document.querySelectorAll('#selectable-list .selImg');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', drag, false);
});

var workArea = document.querySelector('#workArea');
workArea.addEventListener('dragenter', handleDragEnter, false);
workArea.addEventListener('dragover', allowDrop, false);
//workArea.addEventListener('dragleave', handleDragLeave, false);
workArea.addEventListener('drop', drop, false);
//workArea.addEventListener('dragend', handleDragEnd, false);


function allowDrop(ev)
{
    ev.preventDefault();
}

function handleDragEnter(e) {
  // this / e.target is the current hover target.
  this.classList.add('over');
}

function drag(ev)
{
    ev.dataTransfer.effectAllowed='move';
    ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
    ev.preventDefault();
    var data=ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data).cloneNode(true));
}

</script>


<?php include('inc/footer.php') ?>