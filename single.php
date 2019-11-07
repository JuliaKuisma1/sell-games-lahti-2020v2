<?php get_header(); ?>
  <main id="single-content">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?> 
          <div class="single-card card">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('large', array('class' => 'card-img-top single-image')); 
              } ?>
            <div class="card-body">
              <h1 class="card-title">
                <?php the_title(); ?>
              </h1>
              <?php the_content(); ?>
            </div>
          </div>
          <?php
          endwhile; 
          else :
            echo "Nothing found";
          endif;
    
         ?>
  </main>
<?php get_footer(); ?>