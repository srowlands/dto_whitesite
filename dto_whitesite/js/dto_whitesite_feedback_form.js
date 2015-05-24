/* 
 * Provides JavaScript for showing and hidding feedback form
 */

(function ($, Drupal, window, document, undefined) {

// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.dto_whitesite_feedback_form = {
  attach: function(context, settings) {
    
    var $feedbackFormWrapper = $('.site-feedback-form-wrapper', context);

    // Hide feedback form.
    $feedbackFormWrapper.hide();
    
    $('a.dto-display-feedback-form-link').once('dto-feedback-form', function(index, element) {
       $(element).toggle(function() {
         // Toggle on.
         $feedbackFormWrapper.show();
       }, function() {
         // Toggle off.
         $feedbackFormWrapper.hide();
       });
    });

  }
};

})(jQuery, Drupal, this, this.document);


