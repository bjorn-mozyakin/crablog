document.addEventListener('DOMContentLoaded', function() {
  function Article(options) {
    this.article = options.article;
    this.articleContainer = this.article.querySelector('.article__container');
    // this.articleInfo = this.articleContainer.querySelector('.article__info');
    this.articleContents = this.articleContainer.querySelector('.contents');
    this.articleTitles = this.articleContainer.querySelectorAll('h2, h3, h4, h5 ,h6');

    if (this.articleContents) this._createContents();
  }

  Article.prototype._createContents = function() {
    var contentsContainer = document.createElement('div');
    contentsContainer.className = 'contents__container';
    contentsContainer.innerHTML = '<div class="contents__title">Содержание статьи</div>';

    for (var i = 0; i < this.articleTitles.length; i++) {
      var level = this.articleTitles[i].nodeName[1];
      var anchorName = (level - 1) + '_' + (i + 1);
      this.articleTitles[i].setAttribute('id', anchorName);

      var chapter = document.createElement('div');
      chapter.className = 'contents__level_' + (level - 1);
      chapter.innerHTML = '<a href="#' + anchorName + '">' + this.articleTitles[i].innerHTML + '</a>';
      contentsContainer.appendChild(chapter);
    }

    this.articleContents.appendChild(contentsContainer);
  };

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


  var arrowUp = document.querySelector('.arrow-up');

  toggleArrowUp();
  window.addEventListener('scroll', toggleArrowUp);
  arrowUp.addEventListener('click', scrollToTop);

  new Article({
    article: document.querySelector('.article')
  });
});
