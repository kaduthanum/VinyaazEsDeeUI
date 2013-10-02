$(document).ready(function() {

    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;
            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                if ($(event.target).hasClass('fancybox.iframe') == false) {
                    event.stopPropagation();
                }
            });	
        }
    }
    var dd = new DropDown( $('#dd') );
    $(document).click(function() {
        // all dropdowns
        $('.wrapper-dropdown-5').removeClass('active');
    });

    $("#open_login, .change_password, .edit_profile").fancybox({
          closeClick  : false,
          height:275,
          width:400,
          openEffect  : 'none',
          closeEffect : 'none',
          helpers   : { 
           overlay : {closeClick: false}
          }
    });
    
    $(".change_password").fancybox({
          height:350,
          width:400,
    });

    $(".edit_profile").fancybox({
              height:375,
              width:400,
    });
    
    $(".contact").fancybox({
          closeClick  : false,
          height:350,
          width:630,
          openEffect  : 'none',
          closeEffect : 'none',
          helpers   : { 
           overlay : {closeClick: false}
          }
    });
    
});
