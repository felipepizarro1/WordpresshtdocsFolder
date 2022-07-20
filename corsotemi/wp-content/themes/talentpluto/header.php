<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- CSS only -->
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- INSERISCE IN AUTOMATICO INFORMAZIONI DA WORDPRESS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="site-header">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

        <?php if ( has_custom_logo() ) : ?>
        
        <?php the_custom_logo(); ?>

        <?php else : ?>

        <a class="navbar-brand" href="">LOGO</a>

        <?php endif; ?>

        
        <button class="ms-auto btn btn-link text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="bi bi-list fs-1"></i>
        </button>
 
        </div>

    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <?php 
    wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'list-group list-group-flush',
            'menu_id' => 'menu-header'
        )
    ); 
    ?>
  </div>
</div>

</header>