<?php
/**
 * Plugin Name: Orti Custom Post-types
 * Plugin URI: https://orti.xeniaweb.site/wordpress/plugin
 * Description: Creates custom post-types for WP site Sport Club: Trainers, Schedule, Services, Prices.
 * Version:  1.0.0
 * Requires at least: 5.3
 * Requires PHP:      7.4
 * Author:      Oksana Bürki
 * Author URI:  https://xeniaweb.ch
 * License:     GPLv2 or later
 * Text Domain:  orti
 * Domain Path: /languages
 */

if( !defined('ABSPATH')) exit; // Exit if accessed directly.



// Register new Custom Post Type -- Services
function orti_service_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'orti' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'orti' ),
		'menu_name'             => __( 'Services', 'orti' ),
		'name_admin_bar'        => __( 'Services', 'orti' ),
		'archives'              => __( 'Services', 'orti' ),
		'attributes'            => __( 'Attributes', 'orti' ),
		'parent_item_colon'     => __( 'Parent Service', 'orti' ),
		'all_items'             => __( 'All Services', 'orti' ),
		'add_new_item'          => __( 'Add Service', 'orti' ),
		'add_new'               => __( 'Add Service', 'orti' ),
		'new_item'              => __( 'New Service', 'orti' ),
		'edit_item'             => __( 'Edit Service', 'orti' ),
		'update_item'           => __( 'Update Service', 'orti' ),
		'view_item'             => __( 'View Service', 'orti' ),
		'view_items'            => __( 'View Service', 'orti' ),
		'search_items'          => __( 'Search Service', 'orti' ),
		'not_found'             => __( 'Not found', 'orti' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'orti' ),
		'featured_image'        => __( 'Featured Image', 'orti' ),
		'set_featured_image'    => __( 'Save Featured Image', 'orti' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'orti' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'orti' ),
		'insert_into_item'      => __( 'Insert in Service', 'orti' ),
		'uploaded_to_this_item' => __( 'Add in Service', 'orti' ),
		'items_list'            => __( 'Services List', 'orti' ),
		'items_list_navigation' => __( 'Navigate to Services', 'orti' ),
		'filter_items_list'     => __( 'Filter Services', 'orti' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'orti' ),
		'description'           => __( 'Services for Sport Island Website', 'orti' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'orti_service_post_type', 0 );


// Register new Custom Post Type -- Trainers
function orti_trainer_post_type() {

	$labels = array(
		'name'                  => _x( 'Trainers', 'Post Type General Name', 'orti' ),
		'singular_name'         => _x( 'Trainer', 'Post Type Singular Name', 'orti' ),
		'menu_name'             => __( 'Trainers', 'orti' ),
		'name_admin_bar'        => __( 'Trainers', 'orti' ),
		'archives'              => __( 'Archive', 'orti' ),
		'attributes'            => __( 'Attributes', 'orti' ),
		'parent_item_colon'     => __( 'Parent Trainer', 'orti' ),
		'all_items'             => __( 'All Trainers', 'orti' ),
		'add_new_item'          => __( 'Add Trainer', 'orti' ),
		'add_new'               => __( 'Add Trainer', 'orti' ),
		'new_item'              => __( 'New Trainer', 'orti' ),
		'edit_item'             => __( 'Edit Trainer', 'orti' ),
		'update_item'           => __( 'Update Trainer', 'orti' ),
		'view_item'             => __( 'View Trainer', 'orti' ),
		'view_items'            => __( 'View Trainer', 'orti' ),
		'search_items'          => __( 'Search Trainer', 'orti' ),
		'not_found'             => __( 'Not found', 'orti' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'orti' ),
		'featured_image'        => __( 'Featured Image', 'orti' ),
		'set_featured_image'    => __( 'Save Featured Image', 'orti' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'orti' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'orti' ),
		'insert_into_item'      => __( 'Insert in Trainer', 'orti' ),
		'uploaded_to_this_item' => __( 'Add in Trainer', 'orti' ),
		'items_list'            => __( 'Trainers List', 'orti' ),
		'items_list_navigation' => __( 'Navigate to Trainers', 'orti' ),
		'filter_items_list'     => __( 'Filter Trainers', 'orti' ),
	);
	$args = array(
		'label'                 => __( 'Trainer', 'orti' ),
		'description'           => __( 'Trainers for Sport Island Website', 'orti' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'orti_trainers', $args );

}
add_action( 'init', 'orti_trainer_post_type', 0 );


// Register new Custom Post Type -- Prices
function orti_price_post_type() {

	$labels = array(
		'name'                  => _x( 'Prices', 'Post Type General Name', 'orti' ),
		'singular_name'         => _x( 'Price', 'Post Type Singular Name', 'orti' ),
		'menu_name'             => __( 'Prices', 'orti' ),
		'name_admin_bar'        => __( 'Prices', 'orti' ),
		'archives'              => __( 'Archive', 'orti' ),
		'attributes'            => __( 'Attributes', 'orti' ),
		'parent_item_colon'     => __( 'Parent Price', 'orti' ),
		'all_items'             => __( 'All Prices', 'orti' ),
		'add_new_item'          => __( 'Add Price', 'orti' ),
		'add_new'               => __( 'Add Price', 'orti' ),
		'new_item'              => __( 'New Price', 'orti' ),
		'edit_item'             => __( 'Edit Price', 'orti' ),
		'update_item'           => __( 'Update Price', 'orti' ),
		'view_item'             => __( 'View Price', 'orti' ),
		'view_items'            => __( 'View Price', 'orti' ),
		'search_items'          => __( 'Search Price', 'orti' ),
		'not_found'             => __( 'Not found', 'orti' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'orti' ),
		'featured_image'        => __( 'Featured Image', 'orti' ),
		'set_featured_image'    => __( 'Save Featured Image', 'orti' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'orti' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'orti' ),
		'insert_into_item'      => __( 'Insert in Price', 'orti' ),
		'uploaded_to_this_item' => __( 'Add in Price', 'orti' ),
		'items_list'            => __( 'Prices List', 'orti' ),
		'items_list_navigation' => __( 'Navigate to Prices', 'orti' ),
		'filter_items_list'     => __( 'Filter Prices', 'orti' ),
	);
	$args = array(
		'label'                 => __( 'Price', 'orti' ),
		'description'           => __( 'Prices for Sport Island Website', 'orti' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'orti_prices', $args );

}
add_action( 'init', 'orti_price_post_type', 0 );


// Register new Custom Post Type -- Classes
function orti_class_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'orti' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'orti' ),
		'menu_name'             => __( 'Classes', 'orti' ),
		'name_admin_bar'        => __( 'Classes', 'orti' ),
		'archives'              => __( 'Archive', 'orti' ),
		'attributes'            => __( 'Attributes', 'orti' ),
		'parent_item_colon'     => __( 'Parent Class', 'orti' ),
		'all_items'             => __( 'All Classes', 'orti' ),
		'add_new_item'          => __( 'Add Class', 'orti' ),
		'add_new'               => __( 'Add Class', 'orti' ),
		'new_item'              => __( 'New Class', 'orti' ),
		'edit_item'             => __( 'Edit Class', 'orti' ),
		'update_item'           => __( 'Update Class', 'orti' ),
		'view_item'             => __( 'View Class', 'orti' ),
		'view_items'            => __( 'View Class', 'orti' ),
		'search_items'          => __( 'Search Class', 'orti' ),
		'not_found'             => __( 'Not found', 'orti' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'orti' ),
		'featured_image'        => __( 'Featured Image', 'orti' ),
		'set_featured_image'    => __( 'Save Featured Image', 'orti' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'orti' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'orti' ),
		'insert_into_item'      => __( 'Insert in Class', 'orti' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'orti' ),
		'items_list'            => __( 'Classes List', 'orti' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'orti' ),
		'filter_items_list'     => __( 'Filter Classes', 'orti' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'orti' ),
		'description'           => __( 'Classes for GymFitness Website', 'orti' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'orti_classes', $args );

}
add_action( 'init', 'orti_class_post_type', 0 );

