    <footer class="footer">
      <div class="footer__container">© <a href="/"><?php bloginfo('name'); ?></a>
        2016-<?php echo date('Y');?><!--<?php the_time('Y'); ?>-->
      </div>
      <div class="arrow-up arrow-up_hidden"></div>
    </footer>

    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135689189-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-135689189-1');
    </script>

  </body>
</html>