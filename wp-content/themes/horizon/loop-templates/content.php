<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class('content-posts'); ?> id="post-<?php the_ID(); ?>">

	<?php if (has_post_thumbnail()) {
	?>

		<div class="media">

			<div class="entry-img">
				<?php echo get_the_post_thumbnail($post->ID); ?>
			</div>

			<div class="media-body">

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

					<?php endif; ?>

				</header><!-- .entry-header -->



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

			</div>
		</div>

	<?php
	} else {
	?>
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

			<?php endif; ?>

		</header><!-- .entry-header -->


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
	<?php
	}
	?>





</article><!-- #post-## -->