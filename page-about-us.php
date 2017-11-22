<?php get_header(); ?>
  <div class="new-section">
    <div id="tf-about-us" class="text-center">
      <div class="overlay">
        <div class="container-fluid"> 
          <h1>About Us</h1>
        </div>
      </div>
    </div>


          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
                <?php the_title(); ?>
            </h2>

            <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
</div>


    <?php get_footer(); ?>