<?php

function miostile_child() {

    wp_enqueue_style('style-parent', get_template_directory_uri().'/style.css' );

    wp_enqueue_style('style-child', get_stylesheet_uri() );

}

add_action('wp_enqueue_scripts','miostile_child');

function immobili() {

    $labels = array(
      'name' => 'Immobili',
      'singular_name' => 'Immobile',
      'menu_name' => 'Immobili',
      'not_found' => 'Nessun immobile trovato',
      'all_items' => 'Tutti gli immobili',
      'view_item' => 'Visualizza l\'immobile',
      'add_new_item' => 'Aggiungi nuovo immobile',
      'add_new' => 'Aggiungi immobile',
      'edit_item' => 'Modifica immobile',
      'update_item' => 'Aggiorna immobile',
      'search_items' => 'Cerca immobile',
      'not_found_in_trash' => 'Nessun immobile nel cestino'
    );
  
    $args = array(
  
      'labels' => $labels,
      'description' => 'Archivio immobili',
      'public' => true,
      'menu_position' => 25,
      'supports' => array('title','editor','author'),
      'has_archive' => true,
      'menu_icon'  => 'dashicons-bank',
      // 'taxonomies' => array('category','post_tag'),
      'exclude_from_search' => false,
      'publicity_queryable' => true,
      // attiva Guttenberg
      'show_in_rest' => false,
    );
  
    register_post_type('immobili', $args );
  
  }
  
  add_action('init','immobili');

  function opzioni_personalizza_tema($wp_customize) {

    // PANEL
    $wp_customize -> add_panel('id_panel_footer', array(
        'title' => 'Impostazioni Footer',
        'priority' => 30
    ));
    // SECTION TESTO FOOTER
    $wp_customize -> add_section('id_sezione_text_footer', array(
        'panel' => 'id_panel_footer',
        'title' => 'TESTO NEL FOOTER',
        'priority' => 10
    ));
    // SETTING TESTO FOOTER
    $wp_customize -> add_setting('id_setting_text_footer', array(
        'default' => 'SITO CREATO DA ALEX GROTTOLA',
        'transport' => 'refresh'
    ));
    // CONTROLLO TESTO FOOTER
    $wp_customize -> add_control('id_setting_text_footer', array(
        'label' => 'INSERIRE IL TESTO DEL FOOTER',
        'description' => 'DESCRIZIONE TESTO PER IL FOOTER',
        'section' => 'id_sezione_text_footer',
        'type' => 'text'
    ));

    // SECTION COLORE FOOTER
    $wp_customize -> add_section('id_sezione_color_text_footer', array(
        'panel' => 'id_panel_footer',
        'title' => 'COLORE TESTO FOOTER',
        'priority' => 20
    ));
    // SETTING COLORE TESTO FOOTER
    $wp_customize -> add_setting('id_setting_color_text_footer', array(
        'default' => '#000000',
        'transport' => 'refresh'
    ));
    // CONTROLLO PER IL COLORE DEL FOOTER
    $wp_customize -> add_control('id_setting_color_text_footer', array(
        'label' => 'Colore Footer',
        'description' => 'descrizione',
        'section' => 'id_sezione_color_text_footer',
        'priority' => 10,
        'type' => 'color'
    ));
    // SECTION DIMENSIONE TESTO FOOTER
    $wp_customize -> add_section('id_sezione_fontsize_text_footer', array(
        'panel' => 'id_panel_footer',
        'title' => 'DIMENSIONE TESTO FOOTER',
        'priority' => 20
    ));
    // SETTING DIMENSIONE TESTO FOOTER
    $wp_customize -> add_setting('id_setting_fontsize_text_footer', array(
        'default' => '16px',
        'transport' => 'refresh'
    ));
    // CONTROL DIMENSIONE TESTO FOOTER
    $wp_customize -> add_control('id_setting_fontsize_text_footer', array(
        'label' => 'DIMENSIONE FONT',
        'description' => 'Descrizione',
        'section' => 'id_sezione_fontsize_text_footer',
        'priority' => 10,
        'type' => 'select',
        'choices' => array(
            '12px' => 'Piccolo' ,
            '16px' => 'Medio' ,
            '24px' => 'Grande',
            '48px' => 'Molto Grande' 
        )
    ));
    // PANEL FOR SLIDES
    $wp_customize -> add_panel('id_panel_slides', array(
        'title' => 'Impostazioni Slides',
        'priority' => 30
    ));
    // SEZIONE PER SLIDES
    for ($i = 1; $i <= 3; $i++ ) :
    $wp_customize -> add_section("id_section_slides_$i", array(
        'panel' => 'id_panel_slides',
        'title' => "SELEZIONA SLIDE $i",
        'priority' => 10
    ));
    // SETTING SLIDE
    $wp_customize -> add_setting("id_setting_slide_$i", array(
        'default' => '',
        'transport' => 'refresh'
    ));
    // CONTROLLO SLIDE
    $wp_customize  -> add_control( new WP_Customize_Image_Control( $wp_customize, "id_setting_slide_$i", array(
        'label' => "SELEZIONA IMMAGINE $i",
        'description' => 'Descrizione',
        'section' => "id_section_slides_$i"
    )));
    // SETTING TESTO SLIDE
    $wp_customize -> add_setting("id_setting_text_slide_$i", array(
        'default' => '',
        'transport' => 'refresh'
    ));
    // CONTROLLO TESTO SLIDE
    $wp_customize -> add_control("id_setting_text_slide_$i", array(
        'label' => 'INSERIRE IL TESTO PER LA SLIDE',
        'description' => 'Descrizione',
        'section' => "id_section_slides_$i",
        'type' => 'text'
    ));
    // SETTING URL SLIDE
    $wp_customize -> add_setting("id_setting_url_slide_$i", array(
        'default' => '',
        'transport' => 'refresh'
    ));
    // CONTROLLO URL SLIDE
    $wp_customize -> add_control("id_setting_url_slide_$i", array(
        'label' => 'INSERIRE URL PER LA SLIDE',
        'description' => 'Descrizione',
        'section' => "id_section_slides_$i",
        'type' => 'text'
    ));
    // SETTING TESTO BOTTONE SLIDE
    $wp_customize -> add_setting("id_setting_text_button_slide_$i", array(
        'default' => '',
        'transport' => 'refresh'
    ));
    // CONTROLLO TESTO BOTTONE SLIDE
    $wp_customize -> add_control("id_setting_text_button_slide_$i", array(
        'label' => 'INSERIRE TESTO PER IL BOTTONE',
        'description' => 'Descrizione',
        'section' => "id_section_slides_$i",
        'type' => 'text'
    ));

    endfor; 
  }

  add_action('customize_register','opzioni_personalizza_tema');