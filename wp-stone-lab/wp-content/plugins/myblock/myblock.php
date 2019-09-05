<?php 

/**
* Plugin Name: My custom Block
* Author: Stan Viltouski
* version: 1.0.0
*/

function myFirstBlock() {
	wp_enqueue_script(
		'myfirstblock',
		 plugin_dir_url(__FILE__) . 'myblock.js',
		 array('wp-blocks', 'wp-i18n', 'wp-editor'),
		 true
	);


}

add_action('enqueue_block_editor_assets', 'myFirstBlock');

