<?php

  // Hide the admin bar
  show_admin_bar( false );


  // Enqueue assets
  function enqueueAssets() {
    wp_enqueue_style('theme', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js');
  }
  // Invoke the enqueue function
  add_action( 'wp_enqueue_scripts', 'enqueueAssets' );

  // Register menus
  function register_menus() {
    register_nav_menu('main-menu',__( 'main-menu' ));
  }
  add_action( 'init', 'register_menus' );

  // Add theme supports
  function theme_support() {
    // Post formats
    add_theme_support( 'post-formats' );
    // Post thumbnails
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    /* HTML5 */
    add_theme_support( 'html5' );
  }
  add_action( 'after_setup_theme', 'theme_support' );

  /*
    Pagination
  */
  function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <?php next_posts_link( '&larr; Older posts' ); ?>
            <?php previous_posts_link( 'Newer posts &rarr;' ); ?>
        </nav>
    <?php }
  }
  add_filter('next_posts_link_attributes', 'posts_link_attributes');
  add_filter('previous_posts_link_attributes', 'posts_link_attributes');
  function posts_link_attributes() {
    return 'class="btn btn-light"';
  }
?>