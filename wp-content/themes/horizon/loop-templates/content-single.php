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
		<?php the_post_thumbnail(); ?>
	</div>

	<header class="entry-header">

		<?php

		the_title('<h1 class="entry-title">', '</h1>');

		if ('project' == get_post_type()) {
		?>
			<p class="text-secondary"><?php the_field('location') ?></p>
		<?php
		} else {
			displayPostMeta();
		}

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