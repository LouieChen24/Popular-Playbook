<?php get_header(); ?>
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

            <div id="outer-container">
              <div id="inner-container" class="full-width">

            <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
</div>
