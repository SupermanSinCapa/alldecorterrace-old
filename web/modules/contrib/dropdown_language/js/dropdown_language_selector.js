/**
 * @file
 * Dropdown language selector js.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.dropdownLanguagesSelector = {
    attach: function (context, settings) {
      $(once('dropdown-language-selector', '.dropdown-language-item .active-language', context))
        .on('click', function (e) {
          var $wrapper = $(this).closest('.dropbutton-wrapper');
          if ($wrapper.length > 0) {
            e.preventDefault();
            e.stopPropagation();
            $wrapper.toggleClass('open');
          }
        });
    }
  };

})(jQuery, Drupal);
