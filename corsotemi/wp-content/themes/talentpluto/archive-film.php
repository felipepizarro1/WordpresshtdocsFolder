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

                <?php 

                // LOOP PERSONALIZZATO

                $args = array(
                    'post_type' => array('film'),
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'posts_per_page' => 5
                );

                $query = new WP_Query( $args );

                if ( $query -> have_posts() ) :

                    while ( $query -> have_posts() ) : $query -> the_post();

                    the_title('<h2>','</h2><br>');

                    endwhile;

                    wp_reset_postdata();

                endif;

                ?>


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