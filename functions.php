<?php 

function attc_styles() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'attc_styles');




// Customize excerpt word count
function custom_excerpt_length() {
	return 100;
}

add_filter('excerpt_length', 'custom_excerpt_length');


// theme setup - what does functionality does this theme add?

function attc_wp_setup() {
	// Navigation menus
	register_nav_menus(array(

	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));

	// Featured image support
	add_theme_support('post-thumbnails');
	add_image_size('fp-img', 1000, 'auto', true); // true is crop to fit the w/h
	add_image_size('single-blog-image', 920, 'auto', true);
}

add_action('after_setup_theme', 'attc_wp_setup');