<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Orti
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function orti_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of inner to inner pages.
	if ( ! is_front_page() ) {
		$classes[] = 'inner';
	}

	return $classes;
}

add_filter( 'body_class', 'orti_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function orti_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}

add_action( 'wp_head', 'orti_pingback_header' );

/**
 * Add a assets url to path.
 *
 * @param $path string
 *
 * @return string
 */
function orti_assets_path( $path ) {
	return get_template_directory_uri() . '/assets/' . $path;
}
