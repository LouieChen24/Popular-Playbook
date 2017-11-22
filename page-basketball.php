<?php get_header(); ?>

    <div id="tf-basketball" class="text-center">
      <div class="overlay">
        <div class="container-fluid"> 
          <h1 class="page-title">Stories</h1>
        </div>
      </div>
    </div>
<br>
<div class="container">
<?php

  $my_query = null;
  $my_query = new WP_Query('cat=6');

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
        <h4 class="blog-post-title">
          <div class="post-thumb">
          <?php the_post_thumbnail();?>
            <br>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?> 
                </a>
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
    <?php get_footer(); ?>