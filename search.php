<?php
get_header(); ?>

<main class="main-content">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="search-content">
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
        <?php endwhile; ?>

    <?php else : ?>
        <h1 class="page-title"><?php printf( __( 'No results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>'); ?></h1>
    <?php endif; ?>

</main>


<?php get_footer(); ?>