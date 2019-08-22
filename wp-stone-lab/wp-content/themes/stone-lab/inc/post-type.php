<?php
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