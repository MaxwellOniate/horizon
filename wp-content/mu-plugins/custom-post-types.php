<?php

function custom_post_types()
{
  register_post_type('project', [
    'rewrite' => ['slug' => 'projects'],
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-building',
    'labels' => [
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ],
    'supports' => ['title', 'editor', 'thumbnail']
  ]);
}

add_action('init', 'custom_post_types');
