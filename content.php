<div class="container">
<!---Begin Article Content --> 
<!--Article Content Right Bar --> 
<div class="content-container">
  <div class="l-main">
  <div id="override">
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:40%;">
    <a class="a2a_button_facebook" title="Share on Facebook"></a>
    <a class="a2a_button_twitter"  title="Share on Twitter"></a>
    <a class="a2a_button_google_plus"  title="Share on Google"></a>
    <a class="a2a_button_linkedin"  title="Share on Linkedin"></a>
</div>
</div>
<!--End Content Right Bar -->
  <div class="blog-post">
    <h2 class="blog-post-entry">
      <?php if(is_single()) : ?>
        <?php the_title(); ?>
      <?php else : ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      <?php endif; ?>
    </h2>
    <h6 class="blog-post-author">
    <span style="color:#807E7E;">By </span><?php the_author();?>
  </h6>
  <ul class="social-media-share">
  <li><a class="twitter-share-button"
    href="https://twitter.com/intent/tweet" data-size="large">
  Tweet</a></li>
    <li><div class="fb-share-button" 
      data-href="<?php echo get_permalink(); ?>"
      data-layout="button" data-size="large">
  </div><li>
    <li><span id="pinterest-button"><a data-pin-do="buttonBookmark" data-pin-tall="true" data-pin-save="true" href="https://www.pinterest.com/pin/create/button/"></a><span></li>
  </ul>
  <div class="l-two-col">
  <!--Begin Content -->
  <div class="main-post-container">
    <div class="l-main">
      <div class="article-entry text">
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
      <div class="blog-content">
    <?php if(is_single()) : ?>
      <?php the_content(); ?>
    <?php else : ?>
      <?php the_excerpt(); ?>
    <?php endif; ?>
  </div>
</div>
  </div><!-- article-entry text> -->
  </div><!-- /.main-content -->
  <!--Begin Sidebar -->
  <div class="l-sidebar">
</div> <!-- End Sidebar-->
</div>
</div>
</div>
</div>
</div>
</div> <!--Start Comments -->
<div class="comment-section">
 <div class="comment-section-container">
<?php if(is_single()) : ?>
 <?php comments_template(); ?>
<?php endif; ?>
</div>
</div> <!--Start Footer -->
