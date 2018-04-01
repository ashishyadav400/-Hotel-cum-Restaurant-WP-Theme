<?php 

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function theme_styles() {
	// adding stylesheet

	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
	wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

	// Enqueue style
	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//add menu
function theme_menu(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu' ),
		'social-menu' => __('Social Menu' ),
	));

}
add_action( 'init', 'theme_menu' );