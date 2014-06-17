<?php
/**
* Enqueue scripts and styles.
*/
function apoc_child_scripts() {

	wp_enqueue_style( 'apoc-style-child', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'apoc_child_scripts' );

// Remove read more text
function apoc_more_text( $more_link, $more_link_text ) {
	return str_replace( $more_link_text, '', $more_link );
}

add_filter( 'the_content_more_link', 'apoc_more_text', 10, 2 );

// Add Search Box in Main Menu
function apoc_add_search_box_to_menu( $items, $args ) {
    
	if ( $args->theme_location == 'primary' ) {
        $items .= get_search_form();
    }
    
    return $items;
}

add_filter( 'wp_nav_menu_items', 'apoc_add_search_box_to_menu', 10, 2 );