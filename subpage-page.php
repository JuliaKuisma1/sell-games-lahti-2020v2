<?php
/* Template Name: Subpage */

get_header(); ?>
<!--
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
-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php if ( $post->post_parent ) { ?>
            <a class="nav-item nav-link" href="<?php echo get_permalink( $post->post_parent ); ?>" >
              <?php echo get_the_title( $post->post_parent ); ?>
            </a>
      <?php } ?>
    </div>
  </div>
</nav>

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