<?php
/**
 * @description gelios theme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package gelios
 * @scince version 0.0.1
 */
defined( 'ABSPATH' ) || exit();

//$GLOBALS['VERSION'] = 
defined( 'VERSION' ) || define( 'VERSION', '0.0.1' );

// UnderStrap's includes directory.
$gelios_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$gelios_inc_array = array(
		'/setup.php'                           // Theme setup.
		,'/theme-settings.php'                 // Theme settings.
		,'/enqueue.php'                         // Enqueue scripts and styles.
	//	,'/template-tags.php'                   // Custom template tags for this theme.
	//	,'/pagination.php'                      // Custom pagination for this theme.
	//	,'/hooks.php'                           // Custom hooks.
	//	,'/extras.php'                          // Custom functions that act independently of the theme templates.
	//	,'/customizer.php'                      // Customizer additions.
	//	,'/custom-comments.php'                 // Custom Comments file.
	//	,'/class-wp-bootstrap-navwalker.php'    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	//	,'/editor.php'                          // Load Editor functions.
	//	,'/deprecated.php'                      // Load deprecated functions.
	//	,'/widgets.php'                         // Register widget area.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {$gelios_inc_array[] = '/woocommerce.php';}
// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {	$gelios_inc_array[] = '/jetpack.php';}


foreach ( $gelios_inc_array as $gelios_inc ) {
	require_once $gelios_inc_dir . $gelios_inc;
} 



 