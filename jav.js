  jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
      if ( jQuery(window).width() > 768) {
        if (jQuery(window).scrollTop() >= 100) {
            jQuery('#mainnav').css('padding', '0');
             } else {
            jQuery('#mainnav').css('padding', '20px 0');
             }
      }
    });
 });