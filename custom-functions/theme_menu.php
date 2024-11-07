<?php
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
    // Theme Support
    function custom_theme_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'custom_theme'),
        ));
    }
    add_action('after_setup_theme', 'custom_theme_setup');

    // Register Navigation Menus
    function custom_menus() {
        register_nav_menu('primary', 'Primary Menu');
    }
    add_action('init', 'custom_menus');

    // footer menu
    function register_footer_menu() {
        register_nav_menu('footer_menu', __('Footer Menu'));
    }
    add_action('init', 'register_footer_menu');

?>