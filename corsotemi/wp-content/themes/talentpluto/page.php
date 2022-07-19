<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : ?>

    <div class="container">

    <?php while( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php if ( is_user_logged_in() ) : ?>

    <p>CONTENUTO ESCLUSIVO</p>

    <?php endif; ?>

    <?php endwhile; ?>

    </div>

<?php endif; ?>
</main>

<?php get_footer(); ?>