<?php
// Enqueue theme styles and scripts
function medenglish_enqueue_scripts() {
    wp_enqueue_style( 'medenglish-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Taviraj:wght@400;600&display=swap', array(), null );
    wp_enqueue_style( 'medenglish-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'medenglish_enqueue_scripts' );

// Add support for theme features and menus
function medenglish_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( [ 'primary' => __( 'Primary Menu', 'medenglish' ) ] );
}
add_action( 'after_setup_theme', 'medenglish_theme_setup' );
