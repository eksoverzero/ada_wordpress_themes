<?php
/**
 * https://developer.wordpress.org/themes/advanced-topics/child-themes/
 */
function twentytwentyonepointone_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
    array( 'parenthandle' ), 
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyonepointone_enqueue_styles' );

function twentytwentyonepointone_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyonepointone_add_stylesheet' );
