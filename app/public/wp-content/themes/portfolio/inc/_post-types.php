<?php

function register_post_types()
{
    //Register custom post types

    register_post_type('project', array (
        'label' => 'Projects',
        'labels' => array (
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'view_items' => 'View Projects',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects Found',
            'not_found_in_trash' => 'No Projects Found in Trash',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'projects'),
    ));
}
add_action('init', 'register_post_types');