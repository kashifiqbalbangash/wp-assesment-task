<!-- Featured Projects Section -->
<div id="projects" class="container my-5 featured-projects">
    <h2 class="text-center mb-4"><?php echo esc_html(get_field('featured_text', get_the_ID())); ?></h2>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
        );

        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4 mb-4">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <div class="card">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url() ?: 'https://via.placeholder.com/400'); ?>" class="card-img-top" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo esc_html(get_the_title()); ?></h5>
                                <p class="card-text"><?php echo esc_html(get_field('project_description', get_the_ID())); ?></p>
                                <a href="<?php echo esc_url(get_field('project_url', get_the_ID())); ?>" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A brief description of Project 1 highlighting its main objectives and achievements.</p>
                        <a href="project-1-url.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">An overview of Project 2 with key points about its impact and significance.</p>
                        <a href="project-2-url.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">Insights into Project 3 showcasing its unique aspects and success stories.</p>
                        <a href="project-3-url.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
