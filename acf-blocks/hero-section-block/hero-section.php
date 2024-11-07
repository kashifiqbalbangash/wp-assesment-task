<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title"><?php echo esc_html(get_field('hero_title')); ?></h1>
        <p class="hero-description"><?php echo esc_html(get_field('hero_description')); ?></p>
        
        <?php 
        $hero_button = get_field('hero_button'); 
        if ($hero_button) : 
        ?>
            <a href="<?php echo esc_url($hero_button['url']); ?>" class="btn-hero">
                <?php echo esc_html($hero_button['title'] ? $hero_button['title'] : 'View Projects'); ?>
            </a>
        <?php endif; ?>
    </div>
</div>
