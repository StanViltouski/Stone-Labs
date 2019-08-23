<?php

//Cards

function stone_lab_custompost_type_cards() {
	$labels = array(
		'name'                  => 'Main slider',
		'singular_name'         => 'Card',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cards' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt'),
		'menu_icon'				=>  'dashicons-money',
	);
	register_post_type( 'cards', $args );
}
add_action( 'init', 'stone_lab_custompost_type_cards' );



//Features

function stone_lab_custompost_type_fetures() {
	$labels = array(
		'name'                  => 'Fetures',
		'singular_name'         => 'Feture',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fetures' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor'),
		'menu_icon'				=>  'dashicons-thumbs-up',
	);
	register_post_type( 'fetures', $args );
}
add_action( 'init', 'stone_lab_custompost_type_fetures' );




//Clients

function stone_lab_custompost_type_clients() {
	$labels = array(
		'name'                  => 'Clients',
		'singular_name'         => 'Client',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clients' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail'),
		'menu_icon'				=>  'dashicons-buddicons-buddypress-logo',
	);
	register_post_type( 'clients', $args );
}
add_action( 'init', 'stone_lab_custompost_type_clients' );



function custom_taxonomy_for_clients() {
	$args = array(
		'label'        => __( 'Type clients', 'textdomain' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	
	register_taxonomy( 'type clients', 'clients', $args );

}

add_action( 'init', 'custom_taxonomy_for_clients', 0 );



//Testimonials

function stone_lab_custompost_type_testimonials() {
	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor'),
		'menu_icon'				=>  'dashicons-format-status',
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'stone_lab_custompost_type_testimonials' );


function custom_taxonomy_for_testimonials() {
	$args = array(
		'label'        => __( 'Pages', 'testimonials' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	
	register_taxonomy( 'pages', 'testimonials', $args );

}

add_action( 'init', 'custom_taxonomy_for_testimonials', 0 );




//Showcases

function stone_lab_custompost_type_showcases() {
	$labels = array(
		'name'                  => 'Showcases',
		'singular_name'         => 'Showcase',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'showcases' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','excerpt', 'thumbnail'),
		'menu_icon'			 =>  'dashicons-hammer',
	);
	register_post_type( 'showcases', $args );
}
add_action( 'init', 'stone_lab_custompost_type_showcases' );


function custom_taxonomy_for_showcases() {
	$args = array(
		'label'        => __( 'Pages', 'showcases' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	
	register_taxonomy( 'pages-showcases', 'showcases', $args );

}

add_action( 'init', 'custom_taxonomy_for_showcases', 0 );


//Category Solutions

function stone_lab_custompost_type_solutions_cat() {
	$labels = array(
		'name'                  => 'Solutions category',
		'singular_name'         => 'Solution-cat',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'solutions_cat' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail'),
		'menu_icon'			 =>  'dashicons-excerpt-view',
	);
	register_post_type( 'solutions_cat', $args );
}
add_action( 'init', 'stone_lab_custompost_type_solutions_cat' );


//Solutions

function stone_lab_custompost_type_solutions() {
	$labels = array(
		'name'                  => 'Solutions',
		'singular_name'         => 'Solution',

	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'solutions' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail'),
		'menu_icon'			 =>  'dashicons-grid-view',
	);
	register_post_type( 'solutions', $args );
}
add_action( 'init', 'stone_lab_custompost_type_solutions' );

function custom_taxonomy_for_solutions() {
	$args = array(
		'label'        => __( 'Pages', 'solutions' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	
	register_taxonomy( 'pages-solutions', 'solutions', $args );

}

add_action( 'init', 'custom_taxonomy_for_solutions', 0 );




/*
function custom_taxonomy_for_splendid() {
	$args = array(
		'label'        => __( 'Location', 'textdomain' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	$args_price = array(
		'label'        => __( 'Price', 'textdomain' ),
		'public'       => true,
		'rewrite'      => false,
		'hierarchical' => true
	);
	register_taxonomy( 'location', 'deals', $args );
	register_taxonomy( 'price', 'deals', $args_price );
}
add_action( 'init', 'custom_taxonomy_for_splendid', 0 );
function splendid_custompost_type_works() {
	$labels = array(
		'name'                  => 'Works',
		'singular_name'         => 'work',
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'works' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail',   ),
	);
	register_post_type( 'works', $args );
}
add_action( 'init', 'splendid_custompost_type_works' );
*/