<?php

/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

pageBanner([
	'title' => 'Posts: ' . get_the_author()
]);

?>

<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">

				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part('loop-templates/content', get_post_format());
					}
				} else {
					get_template_part('loop-templates/content', 'none');
				}

				?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

</div><!-- #author-wrapper -->

<?php get_footer();
