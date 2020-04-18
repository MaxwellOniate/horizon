<?php


function load_scripts_styles()
{
  wp_enqueue_style('style.css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_scripts_styles');
