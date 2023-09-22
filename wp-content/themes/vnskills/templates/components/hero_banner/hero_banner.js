/*jslint browser: true*/
/*global $, jQuery, Modernizr, enquire, audiojs*/

(function($) {
  var iScrollPos = 0;
  const bannerSlider = () => {
    $('.banner-slider').slick({
      autoplay: true,
      dots: true,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });
  }


  /* ==================================================================
   *
   * Loading Jquery
   *
   ================================================================== */

  $(window).scroll(function() {
    // Call to function
  });

  $(document).ready(function() {
    // Call to function
    bannerSlider();
  });

  $(window).load(function() {
    // Call to function
  });

  $(window).resize(function() {
    // Call to function
  });

})(jQuery);
