<?php
/* Template Name: Organizers page */

get_header(); ?>
<div class="main-content">
  <div class="row">
    <div id="main-content-container" class="col-lg-8 col-sm-12">
      <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 
                  <h2><?php the_title(); ?></h2>
                  <?php the_content(); ?>


                  <div class="card-deck">
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
                                <div class="sport-card card">
                                  <a href="<?php the_permalink(); ?>">
                                    <?php 
                                      if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('medium', array('class' => 'card-img-top')); 
                                      } else {
                                        ?>
                                          <img class="sport-card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-placeholder-medium.png">
                                        <?php
                                      }
                                    ?>
                                  </a>
                                  <div class="card-body">
                                    <a class="sport-card-link" href="<?php the_permalink(); ?>">
                                      <?php the_title(); ?>
                                    </a>
                                  </div>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                  </div>


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