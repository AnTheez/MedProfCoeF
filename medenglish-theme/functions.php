<?php
// Enqueue theme styles and scripts
function medenglish_enqueue_scripts() {
    wp_enqueue_style( 'medenglish-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'medenglish_enqueue_scripts' );

// Add support for Elementor locations
function medenglish_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'medenglish_theme_setup' );
