<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

pageBanner([
	'title' => 'Error: 404',
	'subtitle' => 'PAGE NOT FOUND'
]);

get_footer();
