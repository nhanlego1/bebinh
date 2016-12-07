(function($) {
  Drupal.behaviors.searchDefaultText = {
    attach: function (context, settings) {
        var fadeSpeed = 200, fadeTo = 1, topDistance = 30;
        var topbarME = function() { $('#section-header').fadeTo(fadeSpeed,1); }, topbarML = function() { $('#section-header').fadeTo(fadeSpeed,fadeTo); };
        var inside = false;
        //do
        $(window).scroll(function() {
            position = $(window).scrollTop();
            
            if(position > topDistance && !inside) {
                //add events
                topbarML();
                $('#section-header').bind('mouseenter',topbarME);
                $('#section-header').bind('mouseleave',topbarML);
                inside = true;
                $("#section-header").addClass('header-in-top');
            }
            else if (position < topDistance){
                topbarME();
                $('#section-header').unbind('mouseenter',topbarME);
                $('#section-header').unbind('mouseleave',topbarML);
                inside = false;
                $("#section-header").removeClass('header-in-top');
            }
        });
    }
      
  };
})(jQuery);