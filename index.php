<?php 
get_header(); 
?>

    <!-- Hero Section -->
    <?php
    get_template_part('template-parts/blog-page-parts/blog-hero-section', 'page');
    ?>
    <!-- Recent Blog Posts Section -->
    <?php
    get_template_part('template-parts/blog-page-parts/recent-blog-section', 'page');
    ?>

    <!-- Highlighted Article Section -->
    <?php
    get_template_part('template-parts/blog-page-parts/highlighted-article-section', 'page');
    ?>

<?php get_footer(); ?>