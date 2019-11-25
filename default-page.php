<?php
/* Template Name: Parent page */

get_header(); ?>
<div class="subpage-container">
    <div class="subpage-content">
        <?php echo do_shortcode('[wpb_childpages]'); ?>
    </div>
</div>
    
<div class="main-content">
    <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?> 
                    <div class="post-image">
                        <?php the_post_thumbnail();?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                
            <?php
            }
        }?>
</div>     
<?php get_footer(); ?>