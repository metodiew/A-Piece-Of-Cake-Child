<?php
/**
* Enqueue scripts and styles.
*/
function apoc_child_scripts() {

	wp_enqueue_style( 'apoc-style-child', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'apoc_child_scripts' );
