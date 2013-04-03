jQuery("document").ready(function($){
    
    /*var nav = $('.navbar');
    
    $(window).scroll(function () {
        if ($(window).scrollTop() > 80) {
            nav.addClass("menuwhenscrolled");
            //nav.animate({height: '75px'}, "slow")
            nav.fadeTo("fast", 0.95)
        } else {
        	//nav.animate({height: '83px'}, "slow")
        	nav.fadeTo("fast", 1)        	
            nav.removeClass("menuwhenscrolled");
        }
    });*/

  $('#menuitem').on('mouseenter', function() {
    //$(this).addClass('highlighted');
    $(#menuitem).fadeTo({'color': '#FFF'}, 'slow');
  });
  
  $('#menuitem').on('mouseleave', function() {
    $(this).removeClass('highlighted');
    $(this).find('.per-night').animate({'top': '0px','opacity': '0'}, 'fast');
  });

});
 