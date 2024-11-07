
<?php 
add_action( 'acf/init', 'assesment_custom_acf_init' );


function assesment_custom_acf_init() {

	/*check function exists*/
	if ( function_exists( 'acf_register_block' ) ) {

		/* New redesign blocks*/
		acf_register_block( array(
			'name'            => 'hero-block',
			'title'           => __( 'Hero block' ),
			'description'     => __( 'Assesment Hero Section' ),
			'render_template' => '/acf-blocks/hero-section-block/hero-section.php',
			'enqueue_assets'  => function () {
				// assetEnqueue( 'home-hero-block-style', '/redesign/blocks/home-hero-block/home-hero-block.css', true, false );
				// assetEnqueue( 'home-hero-block-script', '/redesign/blocks/home-hero-block/home-hero-block.js', true, false );
			},

			'category'        => 'blocks',
			'icon'            => 'welcome-add-page',
			'keywords'        => array( 'heroblock', 'hero', '' ),
			'multiple'        => true,
			'mode'            => 'edit',
		) );

		/* Featured projects block*/
		acf_register_block( array(
			'name'            => 'featured-projects-block',
			'title'           => __( 'Featured Projects block' ),
			'description'     => __( 'Featured Projects block' ),
			'render_template' => '/acf-blocks/feature-section-block/featured-projects-section.php',
			'enqueue_assets'  => function () {
				// assetEnqueue( 'home-hero-block-style', '/redesign/blocks/home-hero-block/home-hero-block.css', true, false );
				// assetEnqueue( 'home-hero-block-script', '/redesign/blocks/home-hero-block/home-hero-block.js', true, false );
			},

			'category'        => 'blocks',
			'icon'            => 'welcome-add-page',
			'keywords'        => array( 'featuredprojectsblock', 'featured', '' ),
			'multiple'        => true,
			'mode'            => 'edit',
		) );

		/* ABout us block*/
		acf_register_block( array(
			'name'            => 'about-us-block',
			'title'           => __( 'About Us block' ),
			'description'     => __( 'About Us block' ),
			'render_template' => '/acf-blocks/aboutus-section-block/aboutus-section.php',
			'enqueue_assets'  => function () {
				// assetEnqueue( 'home-hero-block-style', '/redesign/blocks/home-hero-block/home-hero-block.css', true, false );
				// assetEnqueue( 'home-hero-block-script', '/redesign/blocks/home-hero-block/home-hero-block.js', true, false );
			},

			'category'        => 'blocks',
			'icon'            => 'welcome-add-page',
			'keywords'        => array( 'boutusblock', 'aboutus', '' ),
			'multiple'        => true,
			'mode'            => 'edit',
		) );

		/* CTA block*/
		acf_register_block( array(
			'name'            => 'cta-block',
			'title'           => __( 'CTA block' ),
			'description'     => __( 'CTA Us block' ),
			'render_template' => '/acf-blocks/cta-section-block/cta-section.php',
			'enqueue_assets'  => function () {
				// assetEnqueue( 'home-hero-block-style', '/redesign/blocks/home-hero-block/home-hero-block.css', true, false );
				// assetEnqueue( 'home-hero-block-script', '/redesign/blocks/home-hero-block/home-hero-block.js', true, false );
			},

			'category'        => 'blocks',
			'icon'            => 'welcome-add-page',
			'keywords'        => array( 'cta', 'cta', '' ),
			'multiple'        => true,
			'mode'            => 'edit',
		) );
    }
}
?>
