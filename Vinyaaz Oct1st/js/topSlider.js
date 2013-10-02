$(document).ready(function() {
    //The 2 sliding sections
    slider_section = $(".top_slider .slider_section");
    login_section = $(".top_slider section#login_slider");
    contact_section = $(".top_slider section#contact_slider");
    
    // Slide Login
    $("#open_login").click(function(){
        $(contact_section).fadeOut("medium", function(){
            if($(login_section).is(":visible"))
                $(login_section).slideUp("slow");
            else
                $(login_section).slideDown("slow");
        }); // hide contact section if its open
    });
    // Collapse Login
    $(".close_slider").click(function(){
        $(slider_section).slideUp("slow");
    });
    
    // Slide Contact
    $("#open_contact").click(function(){
        $(login_section).fadeOut("medium", function(){
            if($(contact_section).is(":visible"))
                $(contact_section).slideUp("slow");
            else
                $(contact_section).slideDown("slow");
        }); // hide login section if its open
    });
    // Collapse Contact
    $("#close_contact").click(function(){
        $(contact_section).slideUp("slow");
    });

});
