<?php 

function attc_styles() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'attc_styles');


// Navigation menus

register_nav_menus(array (

	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));