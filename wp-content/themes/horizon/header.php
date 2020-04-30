<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<nav id="main-nav-top" class="navbar navbar-expand navbar-light">

				<?php if ('container' === $container) : ?>
					<div class="container">
					<?php endif; ?>

					<ul class="navbar-nav top-social">

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-twitter"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-youtube"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-instagram"></i>
							</a>
						</li>

					</ul>

					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="#" class="nav-link">Locations</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">FAQs</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contact</a>
						</li>
					</ul>

					<?php if ('container' === $container) : ?>
					</div><!-- .container -->
				<?php endif; ?>

			</nav>

			<div id="main-nav-middle">

				<?php if ('container' === $container) : ?>
					<div class="container">
					<?php endif; ?>

					<div class="row">
						<div class="brand-container col-lg-4 align-self-center">
							<!-- Your site title as branding in the menu -->
							<?php if (!has_custom_logo()) { ?>

								<?php if (is_front_page() && is_home()) : ?>

									<h1 class="main-nav-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

								<?php else : ?>

									<a class="main-nav-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

								<?php endif; ?>

							<?php } else {
								the_custom_logo();
							} ?>
							<!-- end custom logo -->
						</div>

						<div class="d-none d-lg-flex justify-content-around col-lg-8">

							<div class="main-nav-contact-block">
								<div class="media">
									<i class="fa fa-phone"></i>
									<div class="media-body">
										<span><span class="d-block">Call Us</span> 555-555-5555</span>
									</div>
								</div>
							</div>

							<div class="main-nav-contact-block">
								<div class="media">
									<i class="fa fa-envelope-square"></i>
									<div class="media-body">
										<span><span class="d-block">Email Us</span> info@canvas.com</span>

									</div>
								</div>
							</div>

							<div class="main-nav-contact-block">
								<div class="media">
									<i class="fa fa-clock-o"></i>
									<div class="media-body">
										<span><span class="d-block">We're Open</span> Mon - Sat, 10AM to 6PM</span>
									</div>
								</div>
							</div>

						</div>
					</div>

					<?php if ('container' === $container) : ?>
					</div><!-- .container -->
				<?php endif; ?>

			</div>

			<nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-white" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="sr-only">
					<?php esc_html_e('Main Navigation', 'understrap'); ?>
				</h2>

				<?php if ('container' === $container) : ?>
					<div class="container">
					<?php endif; ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
					<?php if ('container' === $container) : ?>
					</div><!-- .container -->
				<?php endif; ?>

			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->