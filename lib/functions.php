<?php
/**
 * markup functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package markup
 */

if ( ! defined( 'VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VERSION', '1.0.0' );
}

if ( ! function_exists( 'markup_setup' ) ) :
	function markup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on markup, use a find and replace
		 * to change 'markup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'markup', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'landing_nav' => esc_html__( 'landing_nav', 'markup' )
				,'prefences_menu' => esc_html__('Prefences Menu', 'markup')
				,'social_links' => esc_html__( 'Social Networks', 'markup')
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
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

add_action( 'after_setup_theme', 'markup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function markup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'markup_content_width', 1024 );
}
add_action( 'after_setup_theme', 'markup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function markup_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'markup' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'markup' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'markup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function markup_scripts() {
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array(), VERSION );
	wp_enqueue_style( 'feather',  get_template_directory_uri() .'/assets/feather.css', array(), VERSION );
	wp_enqueue_style( 'fancybox',  get_template_directory_uri() .'/assets/jquery.fancybox.min.css', array(), VERSION );
	wp_enqueue_style( 'choices',  get_template_directory_uri() .'/assets/choices.min.css', array(), VERSION );
	wp_enqueue_style( 'flickity-fade',  get_template_directory_uri() .'/assets/flickity-fade.css', array(), VERSION );
	wp_enqueue_style( 'flickity',  get_template_directory_uri() .'/assets/flickity.min.css', array(), VERSION );
	wp_enqueue_style( 'vs2015',  get_template_directory_uri() .'/assets/vs2015.css', array(), VERSION );
	wp_enqueue_style( 'jarallax', get_template_directory_uri() .'/assets/jarallax.css', array(), VERSION );
	wp_enqueue_style( 'quill', get_template_directory_uri() .'/assets/quill.core.css', array(), VERSION );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() .'/assets/theme.min.css', array('main-stylesheet'), VERSION );
	// wp_style_add_data( 'markup-style', 'rtl', 'replace' );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/jquery.min.js', array(), VERSION, true );
	// wp_enqueue_script( 'markup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), VERSION, true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/jquery.fancybox.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.bundle.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/aos.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'choices', get_template_directory_uri() . '/assets/choices.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'countUp', get_template_directory_uri() . '/assets/countUp.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'dropzone', get_template_directory_uri() . '/assets/dropzone.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/assets/flickity.pkgd.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'flickity-fade', get_template_directory_uri() . '/assets/flickity-fade.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'highlight', get_template_directory_uri() . '/assets/highlight.pack.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/imagesloaded.pkgd.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/isotope.pkgd.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/jarallax.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'jarallax-video', get_template_directory_uri() . '/assets/jarallax-video.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'jarallax-element', get_template_directory_uri() . '/assets/jarallax-element.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'quill', get_template_directory_uri() . '/assets/quill.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/smooth-scroll.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/typed.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'mapbox-gl', get_template_directory_uri() . '/assets/mapbox-gl.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/theme.min.js', array('jquery', 'bootstrap', 'fancybox'), VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'markup_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Turn off FEEDs
*/
require get_template_directory() . '/inc/remove-feeds.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }
