<?php

/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );

function theme_enqueue_styles() {
 wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css' );
}

function custom_logo_setup() {
	$args = [
		'height'               => 19,
		'width'                => 192,
		'flex-height'          => true,
		'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	];
	add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );