<?php get_header(); ?>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html__('Projects List', 'text-domain'); ?></h1>
            <p class="hero-description"><?php echo esc_html__('An in-depth look into the specifics and journey of our projects.', 'text-domain'); ?></p>
        </div>
    </div>

    <!-- Date Range Filter -->
    <div class="container date-filter">
        <form method="get" action="<?php echo esc_url(get_post_type_archive_link('project')); ?>">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <input type="date" class="form-control mb-3" placeholder="Start Date" aria-label="Start Date" name="start_date" id="start_date" value="<?php echo esc_attr((isset($_GET['start_date']) ? sanitize_text_field($_GET['start_date']) : '')); ?>">
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control mb-3" placeholder="End Date" aria-label="End Date" name="end_date" id="end_date" value="<?php echo esc_attr((isset($_GET['end_date']) ? sanitize_text_field($_GET['end_date']) : '')); ?>">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100" type="submit"><?php echo esc_html__('Filter', 'text-domain'); ?></button>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>" class="btn btn-secondary w-100"><?php echo esc_html__('Reset Filter', 'text-domain'); ?></a>
                </div>
            </div>
        </form>
    </div>

<?php
// Custom Query with Date Filter
$meta_query = array();

if (!empty($_GET['start_date'])) {
    $meta_query[] = array(
        'key' => 'project_start_date',
        'value' => sanitize_text_field($_GET['start_date']),
        'compare' => '>=',
        'type' => 'DATE',
    );
}
if (!empty($_GET['end_date'])) {
    $meta_query[] = array(
        'key' => 'project_end_date',
        'value' => sanitize_text_field($_GET['end_date']),
        'compare' => '<=',
        'type' => 'DATE',
    );
}

$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,
    'meta_query' => $meta_query,
);

$query = new WP_Query($args);
?>
<div class="container my-3">
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="card shadow mt-3">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo esc_html(get_field('project_name')); ?></h2>
                        <p class="card-text project-details"><?php echo esc_html(get_field('project_description')); ?></p>
                        <p class="project-dates"><strong><?php echo esc_html__('Start Date:', 'text-domain'); ?></strong> <?php echo esc_html(get_field('project_start_date')); ?></p>
                        <p class="project-dates"><strong><?php echo esc_html__('End Date:', 'text-domain'); ?></strong> <?php echo esc_html(get_field('project_end_date')); ?></p>
                        <p class="project-url"><strong><?php echo esc_html__('URL:', 'text-domain'); ?></strong> <a href="<?php echo esc_url(get_field('project_url')); ?>" target="_blank"><?php echo esc_html__('Visit Project Site', 'text-domain'); ?></a></p>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php echo esc_html__('No projects found for the selected dates.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
