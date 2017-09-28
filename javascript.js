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