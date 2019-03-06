<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!--Disable auto scale on mobile devices-->
<meta name="viewport" content="initial-scale=1" />

<!--Point VK and FB thumbnail for displaying-->
<meta property="og:image" content="http://tamdaleko.ru/wp-content/themes/zrak-wp/images/logo-socnet.png" />
<meta property="og:title" content="Crablog.ru - блог о фронтенде" />
<meta property="og:url" content="<?php bloginfo('template_url'); ?>" />
<meta property="og:image" content="http://tamdaleko.ru/wp-content/themes/zrak-wp/favicon.png" />

<link rel="icon" href="http://tamdaleko.ru/wp-content/themes/zrak-wp/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />  -->

<?php wp_head(); ?>

<!--Imitation media quieries для IE-9-->
<!--[if lte IE 9]>
<script async src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<script src="//cdn.polyfill.io/v1/polyfill.min.js"></script>
<![endif]-->

<!--Adding scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src='<?php bloginfo('template_url'); ?>/js/scripts.js'></script>

<!-- Adding scripts for VK-comments widget -->
<!--
<script async type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<script type="text/javascript">
  VK.init({apiId: 3629849, onlyWidgets: true});
</script>
-->
<!-- Ending of adding scripts for VK-comments widget -->

<!-- Adding scripts for FB-comments widget -->
<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&appId=520782201313815&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->
<!-- Ending of adding scripts for FB-comments widget -->

<!--Adding Google Analytics Code-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40717400-2', 'auto');
  ga('send', 'pageview');

</script>
<!--Ending of Google Analytics Code-->

</head>
<body>

  <div class="wrapper_all">
    <header class="header">
      <div class="header__container">
        <div class="header__logo"><a href="/">CRABLOG.RU</a></div>
        <?php get_search_form(); ?>
<!--           <input type="text" name="search_inpt" class="search_inpt">
          <button class="search_btn"></button> -->
      </div>
    </header>


<!--
  <div id="wrapper-header">
  <div id="header">

    <div class = "header-top clearfix">
      <div class="logo">
        <a href="<?php echo get_option('home'); ?>/">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.png" title="На главную страницу блога о путешествиях tamdaleko.ru"
          alt="Блог о путешествиях tamdaleko.ru"
          onmouseover="this.src='<?php bloginfo('template_url'); ?>/images/logo-hover.png';"
          onmouseout="this.src='<?php bloginfo('template_url'); ?>/images/logo.png';"/>
        </a>
      </div>


    </div> -->

<!--     <div class="header-bottom clearfix">
      <?php wp_nav_menu( array( 'theme_location' => 'top-cats-menu' ) ); ?>

        <?php get_search_form(); ?>
    </div> -->
