<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <nav id="blog-masthead" class="navbar navbar-default navbar-fixed-top supershortnav">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_home_url();?>">PP</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right social-icons">
              <li><a class="social-facebook" href="https://www.facebook.com/popularplaybook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class ="social-instagram" href="https://www.instagram.com/popularplaybook" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a class ="social-twitter" href="https://twitter.com/popularplaybook" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class ="social-youtube" href="https://www.youtube.com/channel/UCL33YcirGwCWU1Imh6WgDRQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
       <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
          </div>
        </div>
        <div class="scroll-line"></div>
       </nav>
  <div id="new-section">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>
    <?php get_footer(); ?>