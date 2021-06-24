<?php
/*
This page is what is used for showing the complete content of a single post
*/
?>
<?php get_header(); ?>

    <div class="main">
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <h3>
                            <?php the_title(); ?>
                    </h3>

                    <div class="featured-image">
                        <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="meta">
                        Created By: <?php the_author(); ?> on <?php the_date(); ?>
                    </div>

                    <p><?php the_content(); ?></p>

                    <hr>

                <?php endwhile; ?>
            <?php else : ?>
                <h1>Sorry, no posts today</h1>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>