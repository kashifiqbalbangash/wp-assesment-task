<?php
// Custom API Endpoint to Get Projects
function custom_projects_api_endpoint() {
    register_rest_route('custom/v1', '/projects', array(
        'methods' => 'GET',
        'callback' => 'custom_get_projects',
        'permission_callback' => '__return_true', // Adjust permission as necessary
    ));
}

function custom_get_projects($request) {
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
    );

    // Filter by start and end date if provided
    if (isset($request['start_date']) && isset($request['end_date'])) {
        $start_date = sanitize_text_field($request['start_date']);
        $end_date = sanitize_text_field($request['end_date']);

        // Validate dates format (optional step)
        if (!validate_date($start_date) || !validate_date($end_date)) {
            return new WP_Error('invalid_date', 'Invalid date format', array('status' => 400));
        }

        $args['meta_query'] = array(
            array(
                'key' => 'project_start_date',
                'value' => $start_date,
                'compare' => '>=',
                'type' => 'DATE',
            ),
            array(
                'key' => 'project_end_date',
                'value' => $end_date,
                'compare' => '<=',
                'type' => 'DATE',
            ),
        );
    }

    $projects = new WP_Query($args);
    $data = array();

    while ($projects->have_posts()) {
        $projects->the_post();
        $data[] = array(
            'title' => esc_html(get_the_title()),
            'url' => esc_url(get_field('project_url')),
            'start_date' => esc_html(get_field('project_start_date')),
            'end_date' => esc_html(get_field('project_end_date')),
        );
    }
    wp_reset_postdata();

    return rest_ensure_response($data);
}

// Helper function to validate date format (optional)
function validate_date($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

add_action('rest_api_init', 'custom_projects_api_endpoint');
?>
