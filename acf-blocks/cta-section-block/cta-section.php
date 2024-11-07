<!-- Call-to-Action Section -->
<div class="cta-section">
    <h2><?php echo esc_html(get_field('cta_title')); ?></h2>
    <p><?php echo esc_html(get_field('cta_description')); ?></p>
    
    <?php 
    $cta_button = get_field('cta_button'); 
    if ($cta_button) : 
    ?>
        <a href="<?php echo esc_url($cta_button['url']); ?>" class="btn-cta">
            <?php echo esc_html($cta_button['title'] ? $cta_button['title'] : 'Contact Us'); ?>
        </a>
    <?php endif; ?>
</div>
