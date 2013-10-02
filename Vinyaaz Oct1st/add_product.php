<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />
<style>
</style>

<script type="text/javascript">
var num_upload_added = 1;
var num_attr_added = 1;
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
function clone_add_attr(){
    if(num_attr_added<10){
        num_attr_added = num_attr_added+1;
        var x = $('.product_attr_block').clone().appendTo('.product_attr_block_new').attr('class','').css('display','block');
    }
}

</script>

<div class="clr spacer"></div>

<h3 class="title">Step 1 - Organise
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small action_button_selected">Organise</a>
    <a href="create.php" class="action_button action_button_small">Create</a>
    <a href="publish.php" class="action_button action_button_small">Publish</a>
</div>
</h3>

<div class="clr spacer"></div>

<div class="vnform" style="float:left;width:705px;min-height:280px;margin:10px 0px;">
    <form autocomplete="on"> 
        <h3>Create Product</h3>
        <hr>
        <p> 
            <label for="title"> Product Name </label>
            <input name="product_name" required="required" type="text" placeholder="Eg. Name"/>
        </p>
        <p> 
            <label for="title"> Product Identifier </label>
            <input name="product_identifier" required="required" type="text" placeholder="Eg. SKU Number"/>
        </p>
        <p> 
            <label for="title"> Product Vertical </label>
            <select name="product_vertical" required="required"/>
                <option value="real_estate">Real Estate</option>
                <option value="restaurant">Restaurant</option>
                <option value="retail">Retail</option>
                <option value="spa">Spa</option>
                <option value="others">Others</option>
            </select>
        </p>
        <p> 
            <label for="title"> Brief Product Description </label>
            <textarea name="product_description" placeholder="About the Product"/></textarea>
        </p>
    
        <p> 
            <label for="title"> Product Price </label>
            <input name="product_price" type="text" placeholder="Eg. 300 US$"/>
        </p>
        <p> 
            <label for="title" style="display:block;"> Product Make and Model </label>
            <input name="product_make" style="width:47%;margin-right:1%;" type="text" placeholder="Make"/>
            <input name="product_model" style="width:47%;" type="text" placeholder="Model"/>
        </p>
        
        <p style="float:left;width:680px;"> 
            <label for="title" style="display:block;"> Product Images </label>
            <span class="product_images_block">
                <select name="product_drive" required="required" style="width:50%;margin-right:2%;"/>
                    <option value="">Select From</option>
                    <option value="local_drive">Local Drive</option>
                    <option value="dropbox">Dropbox</option>
                    <option value="google_drive">Google Drive</option>
                    <option value="sky_drive">Sky Drive</option>
                    <option value="camera_roll">Camera Roll</option>
                </select>
                <input name="p_img_file" required="required" style="width:42%;padding:2px 5px;" type="file" placeholder="Add File"/>
            </span>
        </p>
        <p style="float:left;width:25px;margin-top:25px;">
            <a href="javascript:;" onclick="clone_upload();">
                <img src="img/icons/Add24.png" title="Add More" style="width:18px;" alt="Add More Product Images" />
            </a>
        </p>
        
        <div class="product_images_block_new" style="margin-right:25px;">
        </div>
        
        <p style="float:left;width:680px;"> 
            <label for="title" style="display:block;"> Additional Attribute </label>
            <span class="product_attr_block">
                <input type="text" name="add_attr_name" style="width:50%;margin-right:2%;" placeholder="Add Attribute Name"/>
                <input type="text" name="add_attr_val" style="width:42%;" placeholder="Add Attribute Value"/>
            </span>
        </p>
        <p style="float:left;width:25px;margin-top:25px;">
            <a href="javascript:;" onclick="clone_add_attr();">
                <img src="img/icons/Add24.png" title="Add More" style="width:18px;" alt="Add More Attributes" />
            </a>
        </p>
        
        <div class="product_attr_block_new" style="margin-right:25px;">
        </div>

        <p class="login button" style="width:350px;float:right;margin-top:30px;"> 
            <a href="organise.php" class="forgot_password forgotpassword">Cancel</a> 
            <input type="submit" class="login_button" value="Save" /> 
        </p>
    </form>
</div>

<div class="clr spacer"></div>

<?php include('inc/footer.php') ?>