<?php 
/* Template Name: Archive */

get_header(); ?>

  <main>
    <div class="category-selection">
      <a href="../category/news/"><button class="category">News</button></a>
      <a href="../category/interview/"><button class="category">Interviews</button></a>
    </div>
    <div class="blog-posts card-deck">
    <?php 
      // the query
      $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

        if ( $wpb_all_query->have_posts() ) :
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
          ?>
            <div class="blog-posts-card card">
              <a href="<?php the_permalink(); ?>">
                <?php 
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium', array('class' => 'card-img-top')); 
                  } else {
                    ?>
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-placeholder-medium.png">
                    <?php
                  }
                ?>
              </a>
              <div class="card-body">
                <h5 class="card-title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h5>
                <p class="card-text">
                  <?php the_excerpt(); ?>
                </p>
                <p class="card-text">
                  <small class="text-muted">
                    <?php the_date(); ?>
                  </small>
                </p>
              </div>
                
                      
            </div>
          <?php
          endwhile; ?>
          </div><!-- End of card deck -->
            <?php pagination_nav(); ?>
          <?php
        else :
          echo "Nothing found";
        endif; ?>
    </div>
  </main>

<?php get_footer(); ?>