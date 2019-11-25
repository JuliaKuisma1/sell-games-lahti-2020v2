<?php
/* Template Name: Default page */

get_header(); ?>
<div class="main-content">
    <div>
        <?php echo do_shortcode('[wpb_childpages]'); ?>
    </div>
    <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 
                    <?php the_post_thumbnail();?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                
            <?php
            }
        }?>
</div>     
<?php get_footer(); ?>