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
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
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
       </nav>

      <div id="main-posts">
        <div class="main-wrapper">
           <section class="main-post-hero">
             <div class="main-post-feature main-post-two-thirds">
               <?php 

                $args=array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'posts_per_page' => 1
                );

                $main_posts = null;
                $main_posts = new WP_Query($args);

                while ($main_posts->have_posts()) : $main_posts->the_post();

                ?>
                <div class="main-post-feature-summary main-post-feature-text">
                  <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></figure></a>
                  <div class="main-post-feature-summary-content">
                   <h3>
                     <a href="<?php the_permalink(); ?>">
                     <?php the_title();?>
                   </a>
                  </h3>
                  <div class="main-post-feature-meta">
                    <div class="post-author">
                    <?php the_author();?>
              </div>
              </div>



                <?php  
               endwhile;
               wp_reset_query();
               ?>

              </div>
              </div>
              </div>
              <aside class="main-post-sidebar main-post-one-third">
            <div class="main-post-sidebar-section">
              <h2>Trending</h2>
              <div class="line"></div>
              <ol>
              <?php 

$argss=array(
  'post_type' => 'post',
  'category_name' => 'trending',
  'post_status' => 'publish',
  'posts_per_page' => 3
);

$trending_posts = null;
$trending_posts = new WP_Query($argss);

while ($trending_posts->have_posts()) : $trending_posts->the_post();

?>
             <li class="blog-trending">
               <div class="main-post-feature-summary main-post-no-img">
                 <div class="trending-post">
                   <?php the_post_thumbnail();?>
                 <h3><a href="<?php the_permalink();?>"><?php the_title();?>
                 </h3>




</div>
</div>
<?php  
               endwhile;
               wp_reset_query();
               ?>

              </div>
              </aside>
          </section>
          </div> <!--Main post Two thirds -->
          
              </div>
              </div>
          </div>
              </div>
          </div> <!--Main posts-->
      <div id="featured-stories">
        <h1>Starting Lineup</h1>
        <div class="line"></div>
       <div class="container">
       <?php
       $starting=array(
        'post_type' => 'post',
        'category_name' => 'Starting Lineup',
        'post_status' => 'publish',
        'posts_per_page' => 6
      );

         $my_query = null;
         $my_query = new WP_Query($starting);
       
         if( $my_query->have_posts() ) {
       
           $i = 0;
           while ($my_query->have_posts()) : $my_query->the_post();
         // modified to work with 3 columns
         // output an open <div>
         if($i % 3 == 0) { ?> 
       
         <div class="row">
       
         <?php
         }
         ?>
       
           <div class="col-md-4">
              <div class="article-snippet">
                 <div class="post-thumb">
                 <?php the_post_thumbnail();?>
                  <h4 class="blog-post-title">
                   <a href="<?php the_permalink(); ?>">
                       <?php the_title(); ?> 
                       </a> 
                  <h4 class="blog-post-excerpt">
                  <?php the_excerpt(); ?>
        </h4>
        <h6 class="blog-post-author">
                    <span style="color:#807E7E;">By </span><?php the_author();?>
        </h6>
             </div>
             </h4>
             </div>
           </div>  
       
             <?php $i++; 
             if($i != 0 && $i % 3 == 0) { ?>
               </div><!--/.row-->
               <div class="clearfix"></div>
       
             <?php
              } ?>
       
             <?php  
               endwhile;
               }
               wp_reset_query();
               ?>
       </div><!--/.container-->  
      </div>

<div id="trending-stories"> 
  <h1>Coaches' Picks</h1>
  <div class="line"></div>
  <div class="container">
       <?php

        $coaches=array(
          'post_type' => 'post',
          'category_name' => 'cPicks',
          'post_status' => 'publish',
          'posts_per_page' => 6
        );
       
         $my_query = null;
         $my_query = new WP_Query($coaches);
       
         if( $my_query->have_posts() ) {
       
           $i = 0;
           while ($my_query->have_posts()) : $my_query->the_post();
         // modified to work with 3 columns
         // output an open <div>
         if($i % 3 == 0) { ?> 
       
         <div class="row">
       
         <?php
         }
         ?>
       
           <div class="col-md-4">
              <div class="article-snippet">
               
                 <div class="post-thumb">
                 <?php the_post_thumbnail();?>
                  <h4 class="blog-post-title">
                   <a href="<?php the_permalink(); ?>">
                       <?php the_title(); ?> 
                       </a> 
                  <h4 class="blog-post-excerpt">
                  <?php the_excerpt(); ?>
        </h4>
        <h6 class="blog-post-author">
                    <span style="color:#807E7E;">By </span><?php the_author();?>
        </h6>
             </div>
             </h4>
             </div>
           </div>  
       
             <?php $i++; 
             if($i != 0 && $i % 3 == 0) { ?>
               </div><!--/.row-->
               <div class="clearfix"></div>
       
             <?php
              } ?>
       
             <?php  
               endwhile;
               }
               wp_reset_query();
               ?>
       </div><!--/.container-->  
              </div>
              
<div class="container">
<nav id="footer">
        <div class="pull-left fnav"></div>
        <div class="text-center">
          <ul class="footer-list">
            <li><a href="mailto:contact@popularplaybook.com">Contact Us</a></li>
            <li><a href="http://localhost:8888/terms-of-service/">Terms Of Use</a></li>
          </ul>
        <div class="pull-right fnav"></div>
        </div>
      </div>
    </nav>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>


