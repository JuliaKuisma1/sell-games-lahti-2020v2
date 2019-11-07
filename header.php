<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site title -->
    <title>
      <?php 
        if (is_front_page() && is_home()) {
          bloginfo( 'name' );
          _e( ' - ' );
          bloginfo( 'description' );
        } else if ( is_404() ) {
          _e( '404 - Not found' );
        } else {
          wp_title();
          bloginfo( 'name' );
        } 
      ?>
    </title>
    <!-- Favorite icon -->
    <link rel="shortcut icon" type="image/ico" href="./images/favicon.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- WordPress Header -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="main-header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_slogan.svg" height="48px" alt="Sell Games Lahti 2020">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <?php
              /**
               * Displays the main menu
               * https://developer.wordpress.org/reference/functions/wp_nav_menu/
               */
              $args = array(
                'menu' => 'main-menu',
                'menu_id' => 'main-menu',
                'container' => 'nav',
                'depth' => 1,
                'echo' => false,
                'wrap-class' => 'navbar-nav',
                'items_wrap' => '%3$s'
              );
              echo strip_tags( wp_nav_menu( $args ), '<a>' );
            ?>
          </div>
        </div>
      </nav>
    </header>
