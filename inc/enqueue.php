<?php
/**
 * @description Enqueue scripts and styles.
 * @package gelios
 * @scince version 0.0.1  
 */
defined( 'ABSPATH' ) || exit();

add_action( 'wp_enqueue_scripts', 'gelios_scripts' );

function gelios_scripts() {
    $css_version = $VERSION.'.'.filemtime( get_template_directory().'/assets/css/main.css');
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), $css_version);
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/dist/css/bootstrap.min.css', array(), $css_version);
	// wp_style_add_data( 'geliostrans-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/dist/jquery.min.js', array(),  $css_version, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/dist/js/bootstrap.min.js', array('jquery'),  $css_version, true );
	// wp_enqueue_script( 'darklight', get_template_directory_uri() . '/inc/darklight/darklight.js', array(),  $css_version, true );
	// wp_enqueue_script( 'gelios-navigation', get_template_directory_uri() . '/js/navigation.js', array(),  $css_version, true );


	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
