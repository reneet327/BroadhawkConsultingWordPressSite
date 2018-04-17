<?php
/**
 * bizpoint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizpoint
 */

if ( ! function_exists( 'bizpoint_setup' ) ) :
	function bizpoint_setup() {

		// load text domain
		load_theme_textdomain( 'bizpoint', get_template_directory() . '/languages' );

		// Add various theme support functions
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bizpoint' ),
		) );

		// Switch default core markup to HTML5
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bizpoint_custom_background_args', array(
			'default-color' => '424242',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add excerpt support for pages.
		add_post_type_support( 'page', 'excerpt' );

		// Add support for core custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bizpoint_setup' );


// Set content width
function bizpoint_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizpoint_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizpoint_content_width', 0 );



// Enqueue scripts and styles
function bizpoint_scripts() {
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'bizpoint-fonts', '//fonts.googleapis.com/css?family=Montserrat:500|Open+Sans' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 'v4.0.0-beta', 'all' );
	wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl/owl.carousel.css', array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'owl-carousel-theme', get_stylesheet_directory_uri() . '/css/owl/owl.theme.default.css', array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'slicknavcss', get_template_directory_uri() . '/css/slicknav.css', array(), 'v1.0.10', 'all' );
	wp_enqueue_style( 'bizpoint-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bizpoint-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bizpoint-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl/owl.carousel.js', array('jquery'), 'v2.2.1', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), 'v1.0.10', true );

	if( is_rtl() ) {
		wp_enqueue_script( 'bizpoint-main-rtl', get_template_directory_uri() . '/js/main-rtl.js', array('jquery'), '', true );
	}
	else {
		wp_enqueue_script( 'bizpoint-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bizpoint_scripts' );



// Add Starter Content
function bizpoint_starter_content() {
	add_theme_support(
		'starter-content', array(
			'posts'       => array(
				'home',
				'blog',
			),

			'nav_menus'   => array(
				'menu-1' => array(
					'name'  => esc_html__( 'Primary Menu', 'bizpoint' ),
					'items' => array(
						'page_home',
						'page_blog',
					),
				),
			),

			'options'     => array(
				'show_on_front'            => 'page',
				'page_on_front'            => '{{home}}',
				'page_for_posts'           => '{{blog}}',
			),
		)
	);
}
add_action( 'after_setup_theme', 'bizpoint_starter_content' );


// Implement the Custom Header feature
// require get_template_directory() . '/inc/custom-header.php';

// Add theme hooks
require get_template_directory() . '/inc/theme-hooks.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Include kirki toolkit helper
require get_template_directory() . '/inc/kirki/include-kirki.php';
require get_template_directory() . '/inc/tgmpa/tgm-plugins.php';
require get_template_directory() . '/inc/kirki/bizpoint-kirki.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Customizer settings
require_once get_template_directory() . '/inc/customizer/settings.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// Register widget areas
require get_template_directory() . '/inc/register-widgets.php';
