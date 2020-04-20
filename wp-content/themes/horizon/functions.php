<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');


function horizon_enqueue_styles()
{
  wp_enqueue_style('style.css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'horizon_enqueue_styles');
