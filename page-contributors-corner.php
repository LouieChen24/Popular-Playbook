<?php get_header(); ?>

<div id="page-stories">
  <h1 class="page-stories-title">Contributor's Corner</h1>
<div class="line"></div>
</div>
<div class="container">
  <div class="page-stories">
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args=array(
     'post_type' => 'post',
     'category_name' => 'contributors-corner',
     'post_status' => 'publish',
     'posts_per_page' => 6,
     'paged' => $paged
    );

  $my_query = null;
  $my_query = new WP_Query($args);

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
        ?>
        
       
       <?php
        wp_reset_query();
        ?>


        
</div><!--/.container-->  
<div class="previous-page-bar"><?php previous_posts_link();?></div>
        <div class="next-page-bar"><?php next_posts_link('Next Page', $my_query->max_num_pages);?></div>
    <?php get_footer(); ?>