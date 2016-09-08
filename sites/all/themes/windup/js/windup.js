(function ($) {
  "use strict";

  /**
   * Example function.
   * @see https://www.drupal.org/node/304258#drupal-behaviors
   */

  Drupal.behaviors.gotonav = {
    attach: function(context) {
      jQuery(document).ready(function() {

                    var $menu = $('.block-system-main-menu'),
                        $menulink = $('.go-to-nav')

                    $menulink.click(function() {
                        $menulink.toggleClass('active');
                        $menu.toggleClass('active');
                        return false;
                    });

  });
    }
  };

})(jQuery);
