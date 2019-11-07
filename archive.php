<?php get_header(); ?>
  <main>
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 

            ?>
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <?php
          
          the_content(); 
        endwhile; 
      else :
        echo "Nothing found";
      endif;
     ?>
  </main>
<?php get_footer(); ?>