<?php

// ATTACH STYLES AND SCRIPTS

function add_theme_scripts_and_css () {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/stylePlus.css' );
   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', true);
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_css' );


// IMPLEMENT FEATURED IMAGES

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
 }


 // ADD SIDEBARS

 function add_theme_widgets(){
  register_sidebar( array(
    'id'            => 'widgets-derecha',
    'name'          => __( 'Widget derecha' ),
    'description'   => __( 'Descripciòn del widget' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<div>',
    'after_title'   => '</div>'
  ));
 }
 add_action( 'widgets_init', 'add_theme_widgets' );