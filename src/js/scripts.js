document.addEventListener('DOMContentLoaded', function() {
  var arrowUp = document.querySelector('.arrow-up');

  toggleArrowUp();
  window.addEventListener('scroll', toggleArrowUp);
  arrowUp.addEventListener('click', scrollToTop);




  /* ---- Show/Hide ScrollToTop Button ---- */
  function toggleArrowUp() {
    if (this.pageYOffset > 0) {
      arrowUp.classList.remove('arrow-up_hidden');
    } else {
      arrowUp.classList.add('arrow-up_hidden');
    }
  }

  /* ---- Scroll To Top ---- */
  function scrollToTop() {
    animate({
      duration: 500,
      draw: function(progress) {
        window.scrollBy (0, - window.pageYOffset * progress);
      }
    });
  }

  // animate
  function animate(options) {
    var start = performance.now();

    requestAnimationFrame(function animate(time) {
      var timeFraction = (time - start) / options.duration;
      if (timeFraction > 1) timeFraction = 1;

      options.draw(timeFraction);

      if (timeFraction < 1) {
        requestAnimationFrame(animate);
      }
    });
  }

});