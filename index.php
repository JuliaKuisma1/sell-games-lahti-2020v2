<?php get_header(); ?>
  <main id="main-content">
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
          if (!is_front_page() && !is_home()) {
            ?>
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <?php
          }
          the_content(); 
        endwhile; 
      else :
        echo "Nothing found";
      endif;

     ?>
      <div class="blog-posts card-deck">
        <?php
        $args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?>
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
        <?php endforeach; ?>
      </div>
  </main>
<?php get_footer(); ?>