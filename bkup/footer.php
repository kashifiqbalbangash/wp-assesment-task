<!-- Footer Section -->
<footer class="wp-blog-footer-section py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="wp-blog-footer-title"><?php the_field('column_1_title', 'option'); ?></h5>
                <p class="wp-blog-footer-text"><?php the_field('column_1_description', 'option'); ?></p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5 class="wp-blog-footer-title"><?php the_field('column_2_title', 'option'); ?></h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'menu_class' => 'wp-blog-footer-links list-unstyled'
                ));
                ?>
            </div>

            <!-- Blog Links -->
            <div class="col-md-3 mb-4">
                <h5 class="wp-blog-footer-title"><?php the_field('column_3_title', 'option'); ?></h5>
                <ul class="wp-blog-footer-links list-unstyled">
                     <?php $general_links = get_field('general_links', 'option') ; 
                        if (!empty($general_links)) {
                            foreach ($general_links as $key => $value) {
                                echo '<li><a href="'.$value['site_links']['url'].'">'.$value['site_links']['title'].'</a></li>';
                            }
                        } else {
                     ?>
                    <li><a href="#">No Link Added.</a></li>
                <?php } ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3 mb-4">
                <h5 class="wp-blog-footer-title"><?php the_field('column_title', 'option'); ?></h5>
                <p class="wp-blog-footer-text"><?php the_field('mailing_address', 'option'); ?></p>
                <p class="wp-blog-footer-text">Phone: <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
                <p class="wp-blog-footer-text">Email: <a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
            </div>
        </div>
    </div>
    <div class="wp-blog-footer-bottom py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Project portal. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>
 