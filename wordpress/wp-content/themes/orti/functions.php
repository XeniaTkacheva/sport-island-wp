<?php
/**
 * Orti functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Orti
 */

if ( ! defined( 'ORTI_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ORTI_VERSION', '1.0.0' );
}

if ( ! function_exists( 'orti_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function orti_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Orti, use a find and replace
		 * to change 'orti' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'orti', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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
			[
				'menu-header' => esc_html__( 'Menu in header', 'orti' ),
				'menu-footer' => esc_html__( 'Menu in footer', 'orti' ),
			]
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'orti_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			[
				'height'      => 200,
				'width'       => 20,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
	}
endif;
add_action( 'after_setup_theme', 'orti_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function orti_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'orti_content_width', 640 );
}

add_action( 'after_setup_theme', 'orti_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function orti_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Footer bar: Column 1', 'orti' ),
			'id'            => 'orti-footer-col-1',
			'description'   => esc_html__( 'Add widgets here.', 'orti' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Footer bar: Column 2', 'orti' ),
			'id'            => 'orti-footer-col-2',
			'description'   => esc_html__( 'Add widgets here.', 'orti' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Footer bar: Column 3', 'orti' ),
			'id'            => 'orti-footer-col-3',
			'description'   => esc_html__( 'Add widgets here.', 'orti' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Contacts in header', 'orti' ),
			'id'            => 'orti-contacts-header',
			'description'   => esc_html__( 'Add contacts here.', 'orti' ),
			'before_widget' => '<address class="main-header__widget widget-contacts %2$s">',
			'after_widget'  => '</address>',
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Contacts in footer', 'orti' ),
			'id'            => 'orti-contacts-footer',
			'description'   => esc_html__( 'Add contacts here.', 'orti' ),
			'before_widget' => null,
			'after_widget'  => null,
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Map frame', 'orti' ),
			'id'            => 'orti-map-frame',
			'description'   => esc_html__( 'Add contacts here.', 'orti' ),
			'before_widget' => null,
			'after_widget'  => null,
		]
	);
	register_sidebar(
		[
			'name'          => esc_html__( 'Map bar', 'orti' ),
			'id'            => 'orti-map-bar',
			'description'   => esc_html__( 'Add contacts here.', 'orti' ),
			'before_widget' => null,
			'after_widget'  => null,
		]
	);
	register_widget( 'orti_widget_text' );
}

add_action( 'widgets_init', 'orti_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
define( 'ORTI_THEME_ROOT', get_template_directory_uri() );
define( 'ORTI_CSS_DIR', ORTI_THEME_ROOT . '/assets/css/' );
define( 'ORTI_JS_DIR', ORTI_THEME_ROOT . '/assets/js/' );
define( 'ORTI_IMG_DIR', ORTI_THEME_ROOT . '/assets/img/' );
define( 'ORTI_FONTS_DIR', ORTI_THEME_ROOT . '/assets/fonts/' );

function orti_scripts() {
//	wp_enqueue_style( 'orti-style', get_stylesheet_uri(), [], ORTI_VERSION );
//	wp_style_add_data( 'orti-style', 'rtl', 'replace' );
	wp_enqueue_style( 'orti-styles', ORTI_CSS_DIR . 'styles.css', [], ORTI_VERSION );

	wp_enqueue_script( 'orti-js', ORTI_JS_DIR . 'js.js', [], ORTI_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'orti_scripts' );

/**
 * Sends form data using the post method
 */
function orti_modal_form_handler() {
	header( 'Location: ' . home_url() ); //TODO
}

add_action( 'admin_post_nopriv_si-modal-form', 'orti_modal_form_handler' );
add_action( 'admin_post_si-modal-form', 'orti_modal_form_handler' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which Custom widgets for this theme.
 */
require get_template_directory() . '/inc/widget-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

