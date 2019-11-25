<?php
/* Template name: Default page */
?>

<div class="main-container">
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
</div>