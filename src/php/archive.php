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

          <?php if ( have_posts() ) : ?>
            <h1 class="title-style"><?php
              if ( is_category() ) {
                echo 'Материалы из категории ';
                single_cat_title();
              } elseif ( is_tag() ) {
                echo 'Материалы с меткой ';
                single_tag_title();
              } elseif (is_author() ) {
                the_post(); /*sometimes nect string doesnt work without next string*/
                echo 'Материалы автора ' . get_the_author();
                rewind_posts();
              } elseif (is_day() ) {
                echo 'Дневной архив: ' . get_the_date();
              } elseif (is_month() ) {
                echo 'Месячный архив за ' . get_the_date('F Y') . ' г.';
              } elseif (is_year() ) {
                echo 'Годовой архив за ' . get_the_date('Y') . ' г.';
              } else {
              echo 'Архив материалов:';
              }
            ?></h1>
          <?php while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p class="article__info"><?php the_time('j F Y'); ?> | <!--<?php the_author_posts_link(); ?> | --><?php the_category(', '); ?><!--в <?php the_time('G:i'); ?> | <?php comments_number('Нет комментариев', '1 комментарий', '% comments'); ?>--></p>
            <!--<?php the_date_xml(); ?>-->
            <!--<?php the_excerpt(); ?>-->
            <p><?php the_post_thumbnail(); ?></p>
            <p><?php the_content(); ?></p>
            <p class="tags"><?php the_tags(); ?></p>
            <p><a href="<?php the_permalink() ?>">Подробнее</a></p>
            <hr />
          <?php endwhile; else: ?>
            <h2 class="title-style">Не найдено ни одного материала.</h2>
          <?php endif; ?>
          <div class="pagination">
            <?php posts_nav_link(); ?>
          </div>
        </div>
      </article>
    </div>
    <?php get_sidebar('primary'); ?>
        <!--<?php get_sidebar('secondary'); ?>-->
  </div>
</div>
<?php get_footer(); ?>