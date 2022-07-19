<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : ?>

    <div class="container">

    <?php while ( have_posts() ) : the_post() ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

    </div>
    
<?php endif; ?>
</main>

<?php get_footer(); ?>