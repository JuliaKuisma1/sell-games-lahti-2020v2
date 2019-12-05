<?php
/* Template Name: Sports */

get_header(); ?>

<div class="main-content">
<?php // implement path?
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?> 
                <?php the_post_thumbnail();?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php
        }
    } ?>  
</div>
sports

<?php get_footer(); ?>