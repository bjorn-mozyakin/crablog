<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
    <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" class="search_inpt"/>
    <input type="submit" id="searchsubmit" value=""  class="search_btn"/>
  </div>
</form>
