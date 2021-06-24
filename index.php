<?php get_header(); ?>

    <div class="main">
        <div class="container">
            <?php
                /****************
                 * This is the beginning of the WordPress loop
                 * ***************** */
            ?>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <div class="meta">
                        Created By: <?php the_author(); ?> on <?php the_date(); ?>
                    </div>

                    <p><?php the_excerpt(); ?></p>

                    <a class="button" href="<?php the_permalink(); ?>">
                        Read More
                    </a>

                    <hr>

                <?php endwhile; ?>
            <?php else : ?>
                <h1>Sorry, no posts today</h1>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            
            <?php if(is_active_sidebar('sidebar')) : ?>

                <?php dynamic_sidebar('sidebar') ?>

            <?php endif; ?>

        </div>
    </div>

<?php get_footer(); ?>