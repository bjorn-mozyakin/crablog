<ul class="sidebars">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(primary)) : ?>
		<p>Ничего не выведено в сайдбар</p>
	<?php endif; ?>
	<?php get_links_list(); ?>
	<?php wp_list_bookmarks(); ?>
</ul>
