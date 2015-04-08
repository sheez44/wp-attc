<?php 

function attc_styles() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'attc_styles');
