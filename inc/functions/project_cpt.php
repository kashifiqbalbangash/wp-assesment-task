<?php
// Register Custom Post Type for Projects
function custom_project_post_type() {
    $labels = array(
        'name'               => _x('Projects', 'post type general name', 'text-domain'),
        'singular_name'      => _x('Project', 'post type singular name', 'text-domain'),
        'menu_name'          => _x('Projects', 'admin menu', 'text-domain'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'text-domain'),
        'add_new'            => _x('Add New', 'project', 'text-domain'),
        'add_new_item'       => __('Add New Project', 'text-domain'),
        'new_item'           => __('New Project', 'text-domain'),
        'edit_item'          => __('Edit Project', 'text-domain'),
        'view_item'          => __('View Project', 'text-domain'),
        'all_items'          => __('All Projects', 'text-domain'),
        'search_items'       => __('Search Projects', 'text-domain'),
        'not_found'          => __('No projects found.', 'text-domain'),
        'not_found_in_trash' => __('No projects found in Trash.', 'text-domain'),
    );

    $args = array(
        'public' => true,
        'label'  => __('Projects', 'text-domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
    );

    register_post_type('project', $args);
}
add_action('init', 'custom_project_post_type');
