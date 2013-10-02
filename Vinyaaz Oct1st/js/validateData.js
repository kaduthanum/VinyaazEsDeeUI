function validate_data(obj)
{
    var email_field = false;
    var not_req_field = false;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var field_value = $.trim($(obj).val());
    
    if($(obj).hasClass('req_field_email') || $(obj).hasClass('valid_field_email')){var email_field = true;}
    
    if($(obj).hasClass('valid_field_email')){var not_req_field = true;}
    
    
    if($(obj)[0].type=="checkbox"){
        var fields = $('input[name="'+$(obj).attr('name')+'"]:checked');
        if(fields.length>0){$('input[name="'+$(obj).attr('name')+'"]').removeClass('req_field');}else{$('input[name="'+$(obj).attr('name')+'"]').addClass('req_field');}
    }
    else if($(obj)[0].type=="radio"){
        var fields = $('input[name="'+$(obj).attr('name')+'"]:checked');
        if(fields.length>0){$('input[name="'+$(obj).attr('name')+'"]').removeClass('req_field');}else{$('input[name="'+$(obj).attr('name')+'"]').addClass('req_field');}
    }
    else if(email_field){
        if (!emailPattern.test(field_value)) {
            $(obj).removeClass('req_field_filled');
            $(obj).addClass('req_field');  
            if(!field_value.length>0 && not_req_field){
                $(obj).removeClass('req_field');
            }          
        }else{
            $(obj).removeClass('req_field');
            $(obj).addClass('req_field_filled'); 
        }
    }
    else{
        if(field_value.length>0)
        {
            $(obj).removeClass('req_field');
            $(obj).addClass('req_field_filled');
        }
        else{
            $(obj).removeClass('req_field_filled');
            $(obj).addClass('req_field');
        }
        
    }
    
}
