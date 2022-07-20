<?php

// INSERISCO IL COLLEGAMENTO CON IL CSS

function miostile() {

  wp_register_style('first', get_template_directory_uri() . './style.css', false,'1.1','all');
  wp_enqueue_style( 'first');

}

add_action('wp_enqueue_scripts', 'miostile');

// ATTIVO ALCUNE FUNZIONI DI WORDPRESS PER IL MIO TEMA

function miotema_theme_support() {

    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('custom-background');

    add_theme_support('wp-block-styles');

    add_theme_support('align-wide');

    add_theme_support('post-thumbnails');

    $location = array(
        'primary' => 'Menu Header Principale',
        'secondary' => 'Menu Footer Principale',
        'social' => 'Menu Social'
    );

    register_nav_menus($location);

}

add_action('after_setup_theme', 'miotema_theme_support');


// INSERIRE CLASSI NEL LI DEL MENU

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
      $classes[] = 'list-group-item';
    }
    return $classes;
  }
add_filter('nav_menu_css_class','atg_menu_classes',1,3);

// REGISTRIAMO NUOVI ARTICOLI PERSONALIZZATI

