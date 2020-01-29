<?php
/* Template Name: Single sport */

get_header(); ?>

<div class="main-content">
  <div class="row">
    <div id="main-content-container" class="col-lg-8 col-md-7 col-sm-12">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?> 
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        <?php
        }
      } ?>
    </div>
    <div id="sidebar-container" class="col-lg-4 col-md-5 col-sm-12">
      <?php dynamic_sidebar( 'sidebar_tabletennis' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>