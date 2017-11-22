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
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <nav id="blog-masthead" class="navbar navbar-default navbar-fixed-top supershortnav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="www.popularplaybook.com">Popularplaybook</a>
          </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
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
            </ul>
          </div>
        </div>
       </nav>

    <div id="tf-home" class="text-center">
			<div class="overlay">
				<div class="maincontent lead" >
					<h1><strong><span class="color">Popular Playbook</span></strong> </h1>
					<p class="lead"><em>The <strong>Untold</strong> Stories In Sports</em></p>
					<div class="clearfix"></div>   
					<a href="#tfeatured-farticle" class="fa fa-angle-down page-scroll"></a>
				</div>
				<div class="clearfix"></div>   
			</div>
		</div>

    <div id="tfeatured-article" class="text-center">
    	  <div class="section-title center">
        <br>
    	    <h1><strong>Featured</strong> Story</h1>
        <br>
        <div class="featured-article">
          <a href="#"></a>
        <div class="featured-article-thumbnail">
          <img src="http://localhost:8888/wp-content/uploads/2017/07/lc-golf-cover.jpg" class="wp-post-image">
        <div class="featured-article-overlay">
          <div class="featured-article-content">
            <div class="featured-article-title">Life As a Student Athlete</div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

<section class="boxes">
  <div class="container">
     <h1> Divisions </h1>
      <div class="row">
        <div class="col-md-4">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<nav id="footer">
      <div class="container">
        <div class="pull-left fnav"></div>
        <div class="text-center">
          <ul class="footer-social">
            <li><a href="https://www.facebook.com/popularplaybook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/popularplaybook" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/popularplaybook" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCL33YcirGwCWU1Imh6WgDRQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
          </ul>
        <div class="pull-right fnav"></div>
        </div>
      </div>
    </nav>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>


