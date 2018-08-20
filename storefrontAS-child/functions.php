<?php

function storefrontAS_child_enqueue_styles()
{
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');

}

add_action( 'wp_enqueue_scripts', 'storefrontAS_child_enqueue_styles' );

function storefrontAS_child_enqueue_scripts () {
	wp_enqueue_script('extra js', get_stylesheet_directory_uri().'/js/extra.js');
}

add_action('wp_enqueue_scripts', 'storefrontAS_child_enqueue_scripts');
