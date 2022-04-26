<?php while(have_posts() ): the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
    <h1><?php echo "This is just great"; ?></h1>
<?php endwhile; ?>

