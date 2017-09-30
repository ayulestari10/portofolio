  jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
      if ( jQuery(window).width() > 768) {
        if (jQuery(window).scrollTop() >= 100) {
            jQuery('#mainnav').css('padding', '5').css('background-color','black');
             } else {
            jQuery('#mainnav').css('padding', '20px 0').css('background-color','transparent');
             }
      }
    });
 });

//menandai (highliht halaman active)

$(function(){
    $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = $(this.hash);            
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top -0;
                $('html,body').animate({scrollTop: targetOffset}, 300);
                return false;
            }            
        }        
    });    
});
