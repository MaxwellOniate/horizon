<?php

/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	require_once get_template_directory() . '/inc' . $file;
}

function horizon_enqueue_scripts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
}
add_action('wp_enqueue_scripts', 'horizon_enqueue_scripts');


// NAV MENUS

function horizon_nav_menus()
{
	register_nav_menu('footerBottomBar', 'Footer Bottom Bar');
}
add_action('after_setup_theme', 'horizon_nav_menus');


// PROJECT ARCHIVE DISPLAY COUNT

function project_archive_display_count($query)
{
	if (is_post_type_archive('project')) {
		$query->set('posts_per_page', 8);
		$query->set('orderby', 'date');
		$query->set('order', 'DESC');
		return;
	}
}
add_action('pre_get_posts', 'project_archive_display_count');


// LOGIN LOGO

function loginLogo()
{
	return get_bloginfo('name');
}
add_action('login_headertitle', 'loginLogo');


// LOGIN CSS

function loginCSS()
{
	// Get the theme data.
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get('Version');

	$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
	wp_enqueue_style('understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
}
add_action('login_enqueue_scripts', 'loginCSS');


// LOGIN HEADER URL

function headerURL()
{
	return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'headerURL');


// ADD SLUG TO THE BODY CLASS

function horizon_body_classes($classes)
{
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter('body_class', 'horizon_body_classes');


// CUSTOM EXCERPT LENGTH

function horizon_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'horizon_excerpt_length');


// CUSTOM EXCERPT MORE

function horizon_excerpt_more($text)
{
	return str_replace(' [...]', '...', $text);
}
add_filter('get_the_excerpt', 'horizon_excerpt_more');


// TEMPLATE FUNCTIONS

function pageBanner($args = NULL)
{
	include('page-templates/page-banner.php');
}

function displayPostMeta()
{
	if ('post' == get_post_type()) {
		get_template_part('page-templates/post-meta');
	}
}
