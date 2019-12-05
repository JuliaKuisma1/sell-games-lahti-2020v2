<?php
/* Template Name: Parent page */

get_header(); ?>
<nav id="sub-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnav" aria-controls="subnav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="subnav">
    <div class="navbar-nav">
      <?php echo do_shortcode('[wpb_childpages]'); ?>
    </div>
  </div>
</nav>
<div class="main-content">
  <div class="row">
    <div id="main-content-container" class="col-lg-8 col-sm-12">
      <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 
                  <h2><?php the_title(); ?></h2>
                  <?php the_content(); ?>
                
            <?php
            }
        }?>
    </div>
    <div id="sidebar-container" class="col-lg-4 col-sm-12">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  </div>
</div>     
<?php get_footer(); ?>