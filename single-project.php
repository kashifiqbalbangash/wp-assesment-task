<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="hero-section" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html(get_the_title()); ?></h1>
            <p class="hero-description"><?php echo wp_kses_post(get_the_content()); ?></p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Project Details</h2>
                        <p class="project-details"><?php echo esc_html(get_field('project_description')); ?></p>
                        <p class="project-dates"><strong>Start Date:</strong> <?php echo esc_html(get_field('project_start_date')); ?></p>
                        <p class="project-dates"><strong>End Date:</strong> <?php echo esc_html(get_field('project_end_date')); ?></p>
                        <p class="project-url"><strong>URL:</strong> <a href="<?php echo esc_url(get_field('project_url')); ?>">Visit Project Site</a></p>
                    </div>
                </div>
                <h4 class="mb-3">Project Gallery</h4>
                <div class="gallery">
                    <div class="row">
                        <?php $project_gallery = get_field('project_gallery'); 

                        if (!empty($project_gallery)) {
                           foreach ($project_gallery as $key => $value) {
                               echo '<div class="col-md-6 mb-4 gallery-img">
                                        <img src="'.esc_url($value).'" alt="Gallery Image '.esc_attr($key).'">
                                    </div>';
                           }
                        } else {
                        ?>

                        <div class="col-md-6 mb-4 gallery-img">
                            <img src="https://via.placeholder.com/400" alt="Gallery Image 1">
                        </div>
                        <div class="col-md-6 mb-4 gallery-img">
                            <img src="https://via.placeholder.com/400" alt="Gallery Image 2">
                        </div>
                        <div class="col-md-6 mb-4 gallery-img">
                            <img src="https://via.placeholder.com/400" alt="Gallery Image 3">
                        </div>
                        <div class="col-md-6 mb-4 gallery-img">
                            <img src="https://via.placeholder.com/400" alt="Gallery Image 4">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <h4 class="sidebar-title">Related Projects</h4>
                <div class="related-projects">
                    <!-- Related Project 1 -->
                    <div class="card mb-3">
                        <img src="https://skimai.com/wp-content/uploads/2023/07/How-to-use-midjourney-for-blog-post-images-2.jpg" class="card-img-top" alt="Related Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Related Project 1</h5>
                            <p class="card-text">Brief description of a related project that might interest the user.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <img src="https://thumbs.dreamstime.com/b/advanced-office-setting-where-ai-systems-humans-work-side-showcasing-future-technology-innovation-image-333927633.jpg" class="card-img-top" alt="Related Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Related Project 2</h5>
                            <p class="card-text">Another related project with a short description.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
