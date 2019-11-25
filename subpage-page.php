<?php
/* Template Name: Subpage */

get_header(); ?>
<div class="subpage-container">
    <div class="subpage-content">
        <?php if ( $post->post_parent ) { ?>
        <div class="parent-link">
            <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
                <p> <-- </p><?php echo get_the_title( $post->post_parent ); ?>
            </a>
        </div>
        <?php } ?>
    </div>
</div>

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

<?php get_footer(); ?>