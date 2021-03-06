<?php

  // Hide the admin bar
  show_admin_bar( true );
 
  function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
  }

  add_action('after_setup_theme', 'remove_admin_bar');

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
    register_nav_menu('some-menu',__( 'some-menu' ));
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

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '<div class="sidebar-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => 'Partners',
      'id'            => 'sidebar_partners',
      'before_widget' => '<div class="partner-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ));

    register_sidebar( array(
      'name'          => 'Sport',
      'id'            => 'sidebar_sport',
      'before_widget' => '<div class="sidebar-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ));
  
  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );

  /*
   list child pages
  */
  function wpb_list_child_pages() { 
    global $post; 
    if ( is_page() && $post->post_parent )
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    if ( $childpages ) {
      $string = $childpages;
    }
    return $string;
  }
  add_shortcode('wpb_childpages', 'wpb_list_child_pages');

  function wpb_list_sports_child_pages() { 
    global $post; 
    if ( is_page() && $post->post_parent )
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&echo=0&include=47,61' );
    else
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&echo=0&include=47,61' );
    if ( $childpages ) {
      $string = $childpages;
    }
    return $string;
  }
  add_shortcode('wpb_sports_childpages', 'wpb_list_sports_child_pages');

  function wpb_list_sports() { 
    global $post; 
    if ( is_page() && $post->post_parent )
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&exclude=47,61' );
    else
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&exclude=47,61' );
    if ( $childpages ) {
      $string = $childpages;
    }
    return $string;
  }
  add_shortcode('wpb_sports', 'wpb_list_sports');

  /*
    Excerpt length
  */
  add_filter( 'excerpt_length', function($length) {
    return 12;
  });

  /* Add support for SVG */
  function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
  }
  add_filter('upload_mimes', 'add_file_types_to_uploads');

?>