jQuery(document).ready(function() {

jQuery(window).scroll(function(){
    var wintop = $(window).scrollTop(), docheight = 
        
        jQuery(document).height(), winheight = jQuery(window).height();
                var scrolled = (wintop/(docheight-winheight))*100;
      
            jQuery('.scroll-line').css('width', (scrolled + '%'));
    });
});