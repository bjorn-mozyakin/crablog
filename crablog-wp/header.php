<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Статьи о фронтенде. Истории из жизни разработчика." />
<meta name="keywords" content="фронтенд фронтэнд frontend css js препроцессоры препроцессор sublime flexbox флексбокс" />

<!--Disable auto scale on mobile devices-->
<meta name="viewport" content="initial-scale=1" />

<!--Point VK and FB thumbnail for displaying-->
<meta property="og:url" content="https://<?php bloginfo('name'); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:title" content="Crablog.ru - блог о фронтенде" />
<meta property="og:type" content="website">
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/crablog.png" />
<meta property="og:locale" content="ru_RU">
<meta property="og:description" content="Статьи о фронтенде. Истории из жизни разработчика.">
<meta property="fb:app_id" content="305340583499240" />

<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style-340b01ed17.min.css" />
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />  -->

<?php wp_head(); ?>

<!--Adding scripts-->
<script src='<?php bloginfo('template_url'); ?>/js/scripts-b55b9a3398.min.js' async></script>

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
