<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">


		<footer class="site-footer" id="colophon">

			<div class="row">
				<div class="col-lg-6">

					<div class="site-info">

						<span>Copyright &copy; 2017, All Rights Reserved by <?php echo bloginfo('name'); ?></span>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="">Terms of Use</a>
								</li>
								<li class="breadcrumb-item">
									<a href="">Privacy Policy</a>
								</li>
							</ol>
						</nav>

					</div><!-- .site-info -->

				</div>

				<div class="d-none col-lg-6 d-lg-flex justify-content-end">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="">Home</a>
							</li>
							<li class="breadcrumb-item">
								<a href="">About Us</a>
							</li>
							<li class="breadcrumb-item">
								<a href="">Team</a>
							</li>
							<li class="breadcrumb-item">
								<a href="">Clients</a>
							</li>
							<li class="breadcrumb-item">
								<a href="">FAQs</a>
							</li>
							<li class="breadcrumb-item">
								<a href="">Contact</a>
							</li>
						</ol>
					</nav>
				</div>

			</div>

		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>