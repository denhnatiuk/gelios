<?php
/**
 * @description theme setup and plugins activation
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package gelios
 * @scince version 0.0.1
 * 
*/
add_action( 'after_setup_theme', 'gelios_setup' );
if ( ! function_exists( 'gelios_setup' ) ) :
	function gelios_setup() {
		/* Enable translations */
		load_theme_textdomain( 'gelios', get_template_directory() . '/languages' );
		/* Enable dynamic document title */
		add_theme_support( 'title-tag' );
		/* Enable support for Post Thumbnails on posts and pages */
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'landing_nav_menu' => esc_html__( 'Page Navigation', 'gelios' )
				,'prefences_menu' => esc_html__('Prefences Menu', 'gelios')
				,'social_links_menu' => esc_html__( 'Social Networks', 'gelios')
				,'pages_menu' => esc_html__( 'Pages', 'gelios')
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form'
				,'comment-form'
				,'comment-list'
				,'gallery'
				,'caption'
				,'style'
				,'script'
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
add_action( 'after_setup_theme', 'gelios_content_width', 0 ); 
function gelios_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'geliostrans_content_width', 1024 );
}
