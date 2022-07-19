<?php get_header(); ?>

<main id="site-content">

<section>
        <div class="container text-center py-5">
            <h1><?php bloginfo('title') ?></h1>
            <h4><?php bloginfo('description') ?></h4>
        </div>
</section>

<section>

        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <?php if( have_posts() ) : ?>

                        <?php while( have_posts() ) : the_post(); ?>
                        <div class="card my-5 shadow-sm" style="width: 100%;">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full', array(
                            'class' => 'card-img-top img-blog-article'
                        )); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri()."/assets/images/demoarticolo.jpg"; ?>" class="card-img-top img-blog-article" alt="immagine articolo demo">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi tutto</a>
                                <div class="position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                                </svg>
                                <div class="position-absolute  top-50 start-50 translate-middle text-white fw-bold"><?php comments_number('0','1','%'); ?></div>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                        <?php endwhile; ?>

                        <?php the_posts_pagination(); ?>
                        
                    <?php endif; ?>
                </div>
                <div class="col-md-4">

                    <div class="card my-5" style="width: 100%;">
                    <?php 
                    $post_id = get_option('page_for_posts');
                    // $post_id = get_option('page_on_front');
                    echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-fluid' ) ); ?>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </div>

                </div>
            </div>
        </div>

</main>

<?php get_footer(); ?>