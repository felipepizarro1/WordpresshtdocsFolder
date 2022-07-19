<?php get_header(); ?>

<main>
<?php if( have_posts() ) : ?>

    <div class="container text-center my-5">
        <h1> <?php echo bloginfo('title'); ?></h1>
        <h2><?php echo bloginfo('description'); ?></h2>    
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php while (have_posts() ) : the_post(); ?>
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
            </div>

            <div class="col-md-4">

            </div>
        </div>  

    </div>

<?php else : ?>
    <div class="container text-center my-5">
        <h2>Non ci sono articoli</h2>
    </div>

<?php endif; ?>

</main>

<?php get_footer(); ?>