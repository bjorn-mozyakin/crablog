$(document).ready(function(){
  $(window).on('scroll', animateElements);
  $('.arrow_up').on('click', scrollToTop);


  /* ---- Show/Hide ScrollToTop Button ---- */
  function animateElements() {
    if ($(this).scrollTop() > 0) {
      $('.arrow_up').css({'display': 'block'});
    } else {
      $('.arrow_up').css({'display': 'none'});
    }
  }

  /* ---- Scroll To Top ---- */
  function scrollToTop() {
    $('html, body').animate({
      'scrollTop': 0
    }, 500)
  }

});