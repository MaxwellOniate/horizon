<?php

/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php // You can start editing here -- including this comment! 
	?>

	<?php comment_form([
		'title_reply' => 'Leave a Comment',
		'logged_in_as' => false,
		'comment_notes_before' => false,
	]); // Render comments form. 
	?>

	<?php if (have_comments()) : ?>


		<h3 class="comments-title">

			<?php
			$comments_number = get_comments_number();
			if (1 === (int) $comments_number) {
				printf(
					/* translators: %s: post title */
					esc_html_x('1 Comment', 'comments title', 'understrap')

				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: number of comments, 2: post title */
					esc_html(_nx(
						'%1$s Comment',
						'%1$s Comments',
						$comments_number,
						'comments title',
						'understrap'
					)),
					number_format_i18n($comments_number)
				);
			}
			?>

		</h3><!-- .comments-title -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through. 
		?>

			<nav class="comment-navigation" id="comment-nav-above">

				<h1 class="sr-only"><?php esc_html_e('Comment navigation', 'understrap'); ?></h1>

				<?php if (get_previous_comments_link()) { ?>
					<div class="nav-previous">
						<?php previous_comments_link(__('&larr; Older Comments', 'understrap')); ?>
					</div>
				<?php } ?>

				<?php if (get_next_comments_link()) { ?>
					<div class="nav-next">
						<?php next_comments_link(__('Newer Comments &rarr;', 'understrap')); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // check for comment navigation. 
		?>

		<ul class="comment-list">

			<?php
			wp_list_comments(
				array(
					'reverse_top_level' => true,
					'per_page' => 5,
				)
			);
			?>

		</ul><!-- .comment-list -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through. 
		?>

			<nav class="comment-navigation" id="comment-nav-below">

				<h1 class="sr-only"><?php esc_html_e('Comment navigation', 'understrap'); ?></h1>

				<?php if (get_previous_comments_link()) { ?>
					<div class="nav-previous">
						<?php previous_comments_link(__('&larr; Older Comments', 'understrap')); ?>
					</div>
				<?php } ?>

				<?php if (get_next_comments_link()) { ?>
					<div class="nav-next">
						<?php next_comments_link(__('Newer Comments &rarr;', 'understrap')); ?>
					</div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->

		<?php endif; // check for comment navigation. 
		?>

	<?php endif; // endif have_comments(). 
	?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
	?>

		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'understrap'); ?></p>

	<?php endif; ?>

</div><!-- #comments -->