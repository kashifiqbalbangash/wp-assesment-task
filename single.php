<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="hero-section" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html(get_the_title()); ?></h1>
            <p class="hero-description"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <?php echo wp_kses_post(get_the_content()); ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
