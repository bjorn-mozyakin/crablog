<?php
/*
Template Name: zrak-wp
*/
?>
<?php get_header(); ?>
<div class="main">
  <div class="main__container">
    <div class="content">
      <!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>-->
        <article class="article">
          <div class="article__container">
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <p class="article__info"><?php the_time('j F Y'); ?> | <!--<?php the_author_posts_link(); ?> | --><?php the_category(', '); ?><!--в <?php the_time('G:i'); ?> | <?php comments_number('Нет комментариев', '1 комментарий', '% comments'); ?>--></p>
            <p><?php the_content(); ?></p>
            <p class="tags"><?php the_tags(); ?></p>
            <hr />
            <div class="article-prev-next">
              <div class="article-prev"><?php previous_post_link(); ?></div>
              <div class="article-next"><?php next_post_link(); ?></div>
            </div>
          </div>
        </article>
      <!--<?php endwhile; else: ?>
        <h2 class="title-style">Не найдено ни одного материала.</h2>
      <?php endif; ?>-->
    </div>
    <?php get_sidebar('primary'); ?>
  </div>
</div>
<?php get_footer(); ?>

