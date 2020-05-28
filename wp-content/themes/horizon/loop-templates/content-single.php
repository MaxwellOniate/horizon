<?php

/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="post-banner">
		<?php echo get_the_post_thumbnail($post->ID); ?>
	</div>

	<header class="entry-header">

		<?php

		the_title('<h1 class="entry-title">', '</h1>');

		displayPostMeta();

		?>



	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->