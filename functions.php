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

	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'attc_wp_setup');

function ourWidgetsInit() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>'
		));

	register_sidebar( array(
			'name' => 'tabs',
			'id' => 'tabs',
			));
}

add_action('widgets_init', 'ourWidgetsInit');


// how many months to display in the archive sidebar
function my_limit_archives( $args ) {
    $args['limit'] = 12;
    return $args;
}
add_filter( 'widget_archives_args', 'my_limit_archives' );
add_filter( 'widget_archives_dropdown_args', 'my_limit_archives' );