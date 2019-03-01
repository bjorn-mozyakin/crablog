<?php
/*
Template Name: crablog-wp
*/
?>
<?php get_header(); ?>
<div class="wrapper_main">
  <div class="main clearfix">
    <div class="articles">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="article_container">
        <div class="article">
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <p class="article-info"><img src="<?php bloginfo('template_url'); ?>/img/date.png" alt="Иконка календаря"/> <?php the_time('j F Y'); ?> | <?php the_category(', '); ?><!--| <?php comments_number('Нет комментариев', '1 комментарий', '% comments'); ?>--></p>
          <div class="article-brief clearfix">
            <div class="article-thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php the_content(); ?>
          </div>
          <p class="tags"><?php the_tags(); ?></p>
          <p><a href="<?php the_permalink() ?>">Подробнее</a></p>
          <hr />
        </div>
      </div>
      <?php endwhile; else: ?>
        <h2 class="title-style">Не найдено ни одного материала.</h2>
      <?php endif; ?>
      <div class="pagination">
        <?php posts_nav_link(); ?>
      </div>
    </div>
    <?php get_sidebar('primary'); ?>
    <!--<?php get_sidebar('secondary'); ?>-->
  </div>
</div>
<?php get_footer(); ?>