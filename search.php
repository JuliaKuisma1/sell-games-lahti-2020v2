<?php

get_header(); ?>

<div class="main-content">
    <div id="main-content-container">
        <h2 class="search-title">
        <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h2>
        <div class="blog-posts card-deck">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
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
                    <?php endwhile;
            endif; ?>  
        </div>
    </div>
</div>

<?php get_footer(); ?>