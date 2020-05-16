<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
			'</a></h2>'
		);
		?>

		<?php if ('post' == get_post_type()) : ?>

			<div class="entry-meta">
				<span><i class="fa fa-calendar"></i> <?php the_date(); ?></span>

				<span><a href="<?php get_the_author_posts_link(); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></span>

				<span><i class="fa fa-folder-open"></i> <?php the_category(", "); ?></span>

				<span>
					<a href="<?php echo get_comments_link(); ?>">
						<i class="fa fa-comment"></i>
						<?php echo get_comments_number(); ?>
					</a>
				</span>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

	<div class="entry-content">

		<?php the_excerpt(); ?>

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