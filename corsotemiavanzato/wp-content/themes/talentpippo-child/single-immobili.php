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
        <div class="position-absolute bottom-0 start-0 p-5 d-flex align-items-center">
        <i class="bi bi-person-circle"></i>
        <h6 class="ms-2 my-0"><?php the_author(); ?></h6>
        </div>
        <div class="position-absolute bottom-0 end-0 p-5 d-flex align-items-center">
        <i class="bi bi-calendar3"></i>
        <h6 class="ms-2 my-0"><?php the_time('j F, Y'); ?></h6>
        </div>
    </section>
    <article>
        <div class="container my-5">


        <ul class="list-group list-group-flush">
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
living 
</span>STANZE: <?php the_field('stanze'); ?><h6></li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
bathtub
</span> BAGNI: <?php the_field('bagni'); ?></h6></li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
garage_home
</span> GARAGE: <?php the_field('garage'); ?></h6></li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
pool
</span> PISCINA: <?php the_field('piscina'); ?></h6></li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
open_in_full
</span> MQ: <?php the_field('mq'); ?></h6>
</li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
home_pin
</span> VIA: <?php the_field('via'); ?></h6></li>
        <li class="list-group-item"><h6><span class="material-symbols-outlined">
payments
</span> PREZZO: <?php the_field('prezzo'); ?>€</h6></li>
        </ul>

        <div class="row">
        <?php for($i = 1; $i <= 5; $i++) : ?>

        <?php 
            $image = get_field("immagine_$i");
            if( !empty( $image ) ): ?>
                <div class="col-md-4 g-2">
                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>
        <?php endfor; ?>
        </div>

            <?php the_content(); ?>

            <div class="mt-5"><?php echo apply_shortcodes( '[contact-form-7 id="54" title="MODULO PER IMMOBILI"]' ); ?></div>


            
        </div>
    </article>

    <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>