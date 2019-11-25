<?php
/* Template Name: Default page */

get_header(); ?>

<div class="main-content">
<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_post_thumbnail();?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </div>
    <?php }
} ?>  
</div>

<?php get_footer(); ?>