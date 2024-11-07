<?php get_header(); ?>
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html__('Blog List', 'text-domain'); ?></h1>
        </div>
    </div>

<?php

$args = array(
    'post_type' => 'post',
);

$query = new WP_Query($args);
?>
<div class="container my-3">
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="card shadow mt-3">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo esc_html(get_the_title()); ?></h2>
                        <p class="card-text project-details"><?php echo esc_html(get_the_excerpt()); ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php echo esc_html__('No blog found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
