<?php
/*
Template Name: zrak-wp
*/
?>
<?php get_header(); ?>
<div class="main">
  <div class="main__container">
    <div class="content">
      <article class="article">
        <div class="article__container">
          <h2 class='pagetitle'>Ошибка 404 - страница не найдена</h2>
          <p><strong>Возможные причины:</strong></p>
          <ul>
            <li>неправильно введен адрес;</li>
            <li>адрес страницы изменился после обновления сайта;</li>
            <li>просроченная закладка/избранное;</li>
            <li>поисковый механизм, у которого просрочен список для этого сайта;</li>
            <li>и др.</li>
          </ul>
          <p><strong>Пожалуйста, попробуйте перейти на <a href="/" target="_self" title="Главная страница">главную страницу</a> сайта.</strong></p>
        </div>
      </article>
    </div>
    <?php get_sidebar('primary'); ?>
  </div>
</div>
<?php get_footer(); ?>