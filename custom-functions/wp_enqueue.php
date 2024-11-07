<?php
// Enqueue scripts and styles.
function wp_assessment_style_scripts_enqueue()
{
    // Enqueue Styles
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('archive-style', get_template_directory_uri() . '/assets/css/archive-page.css', array(), '1.0.0', 'all');
    wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/blog-page.css', array(), '1.0.0', 'all');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home-page.css', array(), '1.0.0', 'all');
    wp_enqueue_style('single-style', get_template_directory_uri() . '/assets/css/single-page.css', array(), '1.0.0', 'all');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');

    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wp_assessment_style_scripts_enqueue');
?>
