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

  /*
    Widget areas
  */
  function arphabet_widgets_init() {

    register_sidebar( array(
      'name'          => 'Notification bar',
      'id'            => 'notification_bar',
      'before_widget' => '<div id="notification-bar" class="widget-area">',
      'after_widget'  => '<i id="close-notification" class="fas fa-times-circle"></i></div>',
      'before_title'  => '',
      'after_title'   => '',
    ) );
  
  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );

  // list child pages
  function wpb_list_child_pages() { 
      global $post; 
      
      if ( is_page() && $post->post_parent )
          $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
      else
          $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
      
      if ( $childpages ) {
          $string = '<ul class="subpages">' . $childpages . '</ul>';
      }
      return $string;
    }
     
    add_shortcode('wpb_childpages', 'wpb_list_child_pages');

?>