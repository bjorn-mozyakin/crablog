$(document).ready(function(){
  $arrowUp = $('.arrow-up')

  toggleArrowUp();
  $(window).on('scroll', toggleArrowUp);
  $arrowUp.on('click', scrollToTop);


  /* ---- Show/Hide ScrollToTop Button ---- */
  function toggleArrowUp() {
    if ($(this).scrollTop() > 0) {
      $arrowUp.removeClass('arrow-up_hidden');
    } else {
      $arrowUp.addClass('arrow-up_hidden');
    }
  }

  /* ---- Scroll To Top ---- */
  function scrollToTop() {
    $('html, body').animate({
      'scrollTop': 0
    }, 500)
  }

});