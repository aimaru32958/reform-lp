
jQuery(function ($) {


  // jQuery(function ($) {
  //     alert('jQuery is ready.');
  // });

    /*=====================================
    drawer
    =====================================*/
  
    jQuery('.header__drawer').click(function(e) {
      e.preventDefault()
  
      jQuery(this).toggleClass('is-active');
      jQuery('.header__content').toggleClass('is-active');
  
      return false;
    });
  







});