<?php get_header(); ?>

<main>

    <?php if ( have_posts() ) : ?>

    <?php while( have_posts() ) : the_post() ?>
    <section class="position-relative text-white">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('full', array(
                'class' => 'card-img-top img-blog-article'
            )); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri()."/assets/images/demoarticolo.jpg"; ?>" class="card-img-top img-blog-article" alt="immagine articolo demo">
        <?php endif; ?>
        <h1 class="position-absolute top-50 start-50 translate-middle"><?php the_title() ?></h1>
        <h6 class="position-absolute bottom-0 start-0 p-5"><?php the_author(); ?></h6>
        <h6 class="position-absolute bottom-0 end-0 p-5"><?php the_time('j F, Y'); ?></h6>
    </section>
    <article>
        <div class="container my-5">
            <?php the_content(); ?>
        </div>
    </article>

    <?php endwhile; ?>

    <div class="container">
    <?php 
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif; 
    ?>
    </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>