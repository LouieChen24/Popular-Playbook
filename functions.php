<?php 
	// Register Nav Walker class_alias 
	require_once('wp_bootstrap_navwalker.php');

	// Theme Support 

	function wpb_theme_setup() {
		add_theme_support('post-thumbnails');
		
		// Nav Menu
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));

    function my_theme_scripts() {
      wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom_script.js', array( 'jquery' ), '1.0.0', true );
    }
  add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
  

		// Post Formats 
	add_theme_support('post-formats', array('aside', gallery));

}
	add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length Control 

function set_excerpt_length() {
	return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

function new_excerpt_more( $more ) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function add_login_logout_register_menu( $items, $args ) {
  if ( $args->theme_location != 'primary' ) {
  return $items;
  }
  
  if ( is_user_logged_in() ) {
  $items .= '<li><a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a></li>';
  } else {
  $items .= '<li><a href="' . wp_login_url() . '">' . __( 'Sign In' ) . '</a></li>';
  $items .= '<li><a href="' . wp_registration_url() . '">' . __( 'Register' ) . '</a></li>';
  }
  
  return $items;
 }
  
 add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );

 function wpdocs_scripts_method() {
  wp_enqueue_script( 'progress-bar', get_stylesheet_directory_uri() . '/js/progress_bar.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );

//Insert ads after second paragraph of single post content.

add_filter( 'the_content', 'prefix_insert_post_ads' );

function prefix_insert_post_ads( $content ) {
   
  $ad_code = '<div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-1799202409476164"
       data-ad-slot="7072194213"></ins>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script></div>';

  if ( is_single() && ! is_admin() ) {
      return prefix_insert_after_paragraph( $ad_code, 3, $content );
  }
   
  return $content;
}

// Parent Function that makes the magic happen

function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
  $closing_p = '</p>';
  $paragraphs = explode( $closing_p, $content );
  foreach ($paragraphs as $index => $paragraph) {

      if ( trim( $paragraph ) ) {
          $paragraphs[$index] .= $closing_p;
      }

      if ( $paragraph_id == $index + 1 ) {
          $paragraphs[$index] .= $insertion;
      }
  }
   
  return implode( '', $paragraphs );
}