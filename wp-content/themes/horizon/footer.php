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

<footer id="main-footer">
	<div id="footer-top">
		<div class="<?php echo esc_attr($container); ?>">

			<div class="row">
				<div class="col-sm-8 py-3">

					<div class="media mb-4">
						<span class="footer-logo">Horizon</span>
						<div class="media-body">
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit velit laudantium saepe reiciendis eos repellat libero culpa ipsum, exercitationem repellendus.
						</div>
					</div>

					<nav id="footer-links">
						<div class="row">

							<div class="col-6 col-lg-3">
								<ul>
									<li><a href="#">&raquo; Home</a></li>
									<li><a href="#">&raquo; About</a></li>
									<li><a href="#">&raquo; FAQs</a></li>
									<li><a href="#">&raquo; Support</a></li>
									<li><a href="#">&raquo; Contact</a></li>
								</ul>
							</div>

							<div class="col-6 col-lg-3">
								<ul>
									<li><a href="#">&raquo; Shop</a></li>
									<li><a href="#">&raquo; Portfolio</a></li>
									<li><a href="#">&raquo; Blog</a></li>
									<li><a href="#">&raquo; Events</a></li>
									<li><a href="#">&raquo; Forums</a></li>
								</ul>
							</div>

							<div class="col-6 col-lg-3">
								<ul>
									<li><a href="#">&raquo; Corporate</a></li>
									<li><a href="#">&raquo; Agency</a></li>
									<li><a href="#">&raquo; eCommerce</a></li>
									<li><a href="#">&raquo; Personal</a></li>
									<li><a href="#">&raquo; One Page</a></li>
								</ul>
							</div>

							<div class="col-6 col-lg-3">
								<ul>
									<li><a href="#">&raquo; Restaurant</a></li>
									<li><a href="#">&raquo; Wedding</a></li>
									<li><a href="#">&raquo; App Showcase</a></li>
									<li><a href="#">&raquo; Magazine</a></li>
									<li><a href="#">&raquo; Landing Page</a></li>
								</ul>
							</div>

						</div>
					</nav>

				</div>
				<div class="col-sm-4 py-3">

					<div class="footer-contact-info">
						<span>Call Us:</span>
						<p>555-555-5555</p>
					</div>

					<div class="footer-contact-info">
						<span>Send an Email:</span>
						<p>info@horizon.com</p>
					</div>

					<div class="row">
						<div class="col-lg-6 py-3">

							<div class="media">
								<div class="footer-share-link footer-facebook-block">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="media-body d-flex align-self-center">
									<a href="#" class="share-link-text">
										<span>Like us</span> on FaceBook.
									</a>
								</div>
							</div>

						</div>

						<div class="col-lg-6 py-3">

							<div class="media">
								<div class="footer-share-link footer-rss-block">
									<i class="fa fa-rss"></i>
								</div>
								<div class="media-body d-flex align-self-center">
									<a href="#" class="share-link-text">
										<span>Subscribe</span> to RSS feeds.
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div id="footer-bottom">
		<div class="<?php echo esc_attr($container); ?>">

			<div class="row">
				<div class="col-lg-6">

					<div class="site-info">

						<span>Copyright &copy; 2017, All Rights Reserved by <?php echo bloginfo('name'); ?></span>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-min">
								<li class="breadcrumb-item">
									<a href="#">Terms of Use</a>
								</li>
								<li class="breadcrumb-item">
									<a href="<?php echo esc_url(site_url('/privacy-policy')); ?>">Privacy Policy</a>
								</li>
							</ol>
						</nav>

					</div><!-- .site-info -->

				</div>

				<div class="d-none col-lg-6 d-lg-flex justify-content-end">

					<?php wp_nav_menu([
						'theme_location' => 'footerBottomBar',
						'menu' => 'Footer Bottom Bar Navigation',
						'container' => 'nav',
						'items_wrap' => '<ol class="%2$s">%3$s</ol>',
						'menu_class' => 'breadcrumb breadcrumb-min',
					]); ?>

				</div>

			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>