<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package stone-lab
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function stone_lab_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'stone_lab_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function stone_lab_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'stone_lab_pingback_header' );



/*  SVG for media */
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; 
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);



/*Style for next_posts_link(); Blog page*/

add_filter('next_posts_link_attributes', 'posts_link_attributes');
//add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {return 'class="blue-main-link"';}



/*Contact form 7 remove span*/

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    
    return $content;
});

add_filter('wpcf7_form_elements', function($content) {
    $content_two = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content_two = str_replace('<br />', '', $content); 

        return $content_two;
});

/*Remove item (admin panel)*/

add_action('admin_menu', 'remove_admin_menu');

function remove_admin_menu() {
	remove_menu_page( 'index.php' ); //Dashboard
	remove_menu_page('edit-comments.php'); // Comments
}

