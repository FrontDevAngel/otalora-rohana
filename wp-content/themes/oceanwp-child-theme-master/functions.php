<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	// $version = $theme->get( 'Version' );
	$version = false;


	// enqueue parent styles
	// wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version  );

	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/otalora-rohana.css', array('parent-theme'));
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style', 99 );

/**
 * Add the OceanWP Settings metabox in your CPT
 */
function oceanwp_metabox( $types ) {

	// Your custom post type
	$types[] = 'style';

	// Return
	return $types;

}
add_filter( 'ocean_main_metaboxes_post_types', 'oceanwp_metabox', 20 );