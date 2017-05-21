<?php

function stemPaper_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'stemPaper_resources');

//Navigation Menus

register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer'  => __('Footer Menu'),
	));

function StemPaper_support() {
	// Add Featured Image Support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 240, 180, true);
	add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'StemPaper_support');