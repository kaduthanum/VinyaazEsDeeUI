<?php include('inc/fancybox_header.php') ?>

<link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui-1.7.2.custom.css">
<script type="text/javascript" src="js/ui.datepicker.js"></script>

<style>
.add_info{display:none;}
</style>

<script type="text/javascript"> 

$(function(){
    $('#publish_date').datepicker({
        minDate: new Date(2013,7,12),
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy'
    });
});

function selection_changed(obj)
{
    val = obj.value;
    if(val=='call' || val=='email'){
        $(".add_info").slideDown("slow");
    }else{
        $(".add_info").slideUp("slow");
    }
}
</script>

<div  class="vnform">
    <form autocomplete="on"> 
        <p> 
            <label> Edition Number</label>
            <input id="username" name="username" required="required" type="text" placeholder="Eg. Version 2"/>
        </p>
        
        <p> 
            <label> Select Publish Date</label>
            <input type="text" placeholder="dd-mm-yyyy" id="publish_date" name="publish_date">
        </p>

        <p> 
            <label> Call to Action</label>
            <select name="call_to_action" onchange="selection_changed(this);">
                <option value="">Select</option>
                <option value="link_to_pg">Link to Payment Gateway</option>
                <option value="call">Call</option>
                <option value="email">Email</option>
            </select>
        </p>
        
        <p class="add_info"> 
            <label> Call to Action Details</label>
            <input type="text" placeholder="Enter Details" name="call_to_action_details">
        </p>


        <p class="login button"> 
            <input type="submit" class="login_button" value="Publish Selected" /> 
        </p>
    </form>
</div>
                                
<?php include('inc/fancybox_footer.php') ?>