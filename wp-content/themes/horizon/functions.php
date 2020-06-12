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

// ACTIONS & FILTERS

function horizon_enqueue_scripts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
}

add_action('wp_enqueue_scripts', 'horizon_enqueue_scripts');

function horizon_nav_menus()
{
	register_nav_menu('footerBottomBar', 'Footer Bottom Bar');
}

add_action('after_setup_theme', 'horizon_nav_menus');

function add_slug_body_class($classes)
{
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}

add_filter('body_class', 'add_slug_body_class');


function custom_excerpt_length($length)
{
	return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

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

// TEMPLATE FUNCTIONS

function pageBanner($args = NULL)
{
	if (!$args['title']) {
		$args['title'] = esc_html(get_the_title());
	}
	if (!$args['subtitle']) {
		$args['subtitle'] = get_field('page_banner_subtitle');
	}

?>
	<header class="page-banner">
		<div class="container">
			<h1 class="page-title">
				<?php echo $args['title'] ?>
			</h1>
			<span class="page-subtitle">
				<?php echo $args['subtitle']; ?>
			</span>
		</div>
	</header>
	<?php
}

function displayPostMeta()
{
	if ('post' == get_post_type()) : ?>

		<div class="entry-meta">
			<span><i class="fa fa-calendar"></i> <?php the_date(); ?></span>

			<span>
				<i class="fa fa-user"></i>
				<?php the_author_posts_link(); ?>
			</span>

			<span><i class="fa fa-folder-open"></i> <?php the_category(", "); ?></span>

			<span>
				<a href="<?php echo get_comments_link(); ?>">
					<i class="fa fa-comment"></i>
					<?php echo get_comments_number(); ?>
				</a>
			</span>

		</div><!-- .entry-meta -->

<?php endif;
}
