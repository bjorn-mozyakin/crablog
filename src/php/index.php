<?php
/*
Template Name: crablog-wp
*/
?>
<?php get_header(); ?>
<div class="main">
  <div class="main__container">
    <div class="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article article_brief">
        <div class="article__container">
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <p class="article__info"><?php the_time('j F Y'); ?> | <?php the_category(', '); ?><!--| <?php comments_number('Нет комментариев', '1 комментарий', '% comments'); ?>--></p>
<!--            <div class="article__thumbnail">--><?php //the_post_thumbnail(); ?><!--</div>-->
          <?php the_content(); ?>
          <p class="tags"><?php the_tags(); ?></p>
          <p><a href="<?php the_permalink() ?>">Подробнее</a></p>
          <hr />
        </div>
      </article>
      <?php endwhile; else: ?>
        <h2 class="title-style">Не найдено ни одного материала.</h2>
      <?php endif; ?>
      <div class="pagination">
        <?php posts_nav_link(); ?>
      </div>
    </div>
    <?php get_sidebar('primary'); ?>
  </div>
</div>
<?php get_footer(); ?>
