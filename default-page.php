<?php
/* Template Name: Parent page */

get_header(); ?>
<nav id="sub-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnav" aria-controls="subnav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="subnav">
    <div class="navbar-nav">
      <?php echo do_shortcode('[wpb_childpages]'); ?>
    </div>
  </div>
</nav>
<div class="main-content">
    <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 
                    <div class="post-image">
                        <?php the_post_thumbnail();?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                
            <?php
            }
        }?>
</div>     
<?php get_footer(); ?>