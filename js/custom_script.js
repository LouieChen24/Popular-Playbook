jQuery(document).ready(function() {
	jQuery(window).scroll(function() {
  	if(jQuery(document).scrollTop() > 10) {
    	jQuery('.navbar-default').addClass('on');
    }
    else {
    jQuery('.navbar-default').removeClass('on');
    }
  });
});