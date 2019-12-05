<?php
/* Template Name: Sports */

get_header(); ?>
<nav id="sub-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnav" aria-controls="subnav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="subnav">
    <div class="navbar-nav">
      <?php echo do_shortcode('[wpb_sports_childpages]'); ?>
    </div>
  </div>
</nav>

<div class="main-content">
  <div class="row">
    <div id="main-content-container" class="col-lg-8 col-sm-12">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?> 
          <?php the_post_thumbnail();?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <div class="card-deck"></div>
            <?php
            $id = get_the_ID();
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $id,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) : ?>
                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                    <?php if (get_the_ID() == 47 || get_the_ID() == 61) continue; ?>
                        <div class="sport-card card">
                          <a href="<?php the_permalink(); ?>">
                            <?php 
                              if ( has_post_thumbnail() ) {
                                the_post_thumbnail('medium', array('class' => 'card-img-top')); 
                              } else {
                                ?>
                                  <img width="200px" height="200px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-placeholder-medium.png">
                                <?php
                              }
                            ?>
                          </a>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php
        }
      } ?>
    </div>
    <div id="sidebar-container" class="col-lg-4 col-sm-12">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>