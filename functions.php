<?php

if ( ! function_exists( 'codemenschen_support' ) ) :
	function codemenschen_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for menus.
		add_theme_support( 'menus' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'codemenschen_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function codemenschen_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'codemenschen-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/assets/css/editor-styles.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-grid-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.css' );
	wp_enqueue_style( 'bootstrap-grid-min-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'bootstrap-reboot-css', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css' );
	wp_enqueue_style( 'bootstrap-reboot-min-css', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.css' );
	wp_enqueue_style( 'fontawesome-all-css', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'owl-carousel-min-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-default-min-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick.theme.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'codemenschen_scripts' );


if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'block',
		array( 'label' => esc_html__( 'Blocks', 'codemenschen' ) )
	);
}

function register_my_menus() {
	register_nav_menus(
	array(
	 'primary-menu' => __( 'Primary Menu' ),
	 'social-menu' => __( 'Social Menu' ),
	 'extra-menu' => __( 'Extra Menu' )
	 )
	 );
	}
	add_action( 'init', 'register_my_menus' );


register_block_pattern(
	'codemenschen/block-one',
	array(
		'title'       => esc_html__( 'Main with media background', 'codemenschen' ),
		'categories'  => array( 'block' ),
		'description' => esc_html__( 'A header with a menu and a full width cover block with call to action. Upload your own cover image.', 'codemenschen' ),
		'content'     => '
		<!-- wp:cover {"url":"","hasParallax":true,"dimRatio":40,"customOverlayColor":"#ffffff","minHeight":760,"minHeightUnit":"px","contentPosition":"center center","align":"full"} -->
		<div class="wp-block-cover alignfull has-background-dim-40 has-background-dim has-parallax" style="background-color:#ffffff;min-height:760px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%"><!-- wp:spacer {"height":190} -->
		<div style="height:190px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"is-style-default"} -->
		<div class="wp-block-column is-vertically-aligned-center is-style-default" style="flex-basis:30%"><!-- wp:heading {"level":1,"style":{"color":{"text":"#000000"},"typography":{"fontWeight":"700"}}} -->
		<h1 class="has-text-color" style="color:#000000;font-weight:700">Codemenschen</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"#000000"}},"fontSize":"medium"} -->
		<p class="has-text-color has-medium-font-size" style="color:#000000">An exhibition about the different representations of the ocean throughout time, </p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"textColor":"very-light-gray","style":{"border":{"radius":"25px"},"color":{"gradient":"linear-gradient(211deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)"}},"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-very-light-gray-color has-text-color has-background" style="border-radius:25px;background:linear-gradient(211deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)">READ MORE</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default"} -->
		<figure class="wp-block-image size-full is-resized is-style-default"><img src="" alt=""/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:paragraph -->
		<p></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:cover -->
		',
	)
);


register_block_pattern(
	'codemenschen/block-two',
	array(
		'title'       => esc_html__( 'Main with columns', 'codemenschen' ),
		'categories'  => array( 'block' ),
		'description' => esc_html__( '', 'codemenschen' ),
		'content'     => '
		<!-- wp:group {"align":"full","className":"eplus-NhwMlP"} -->
		<div class="wp-block-group alignfull eplus-NhwMlP"><!-- wp:group -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"align":"full","className":"eplus-NhwMlP"} -->
		<div class="wp-block-group alignfull eplus-NhwMlP"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1140px"}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1140px"}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1140px"}} -->
		<div class="wp-block-group"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"align":"full","className":"codemenschen-NhwMlP"} -->
		<div class="wp-block-group alignfull codemenschen-NhwMlP"><!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","className":"codemenschen-katQu7"} -->
		<div class="wp-block-columns are-vertically-aligned-center codemenschen-katQu7"><!-- wp:column {"verticalAlignment":"center","width":"350px","style":{"border":{"radius":"20px"},"color":{"background":"#f6f8fa"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"className":"codemenschen-t8LLq3"} -->
		<div class="wp-block-column is-vertically-aligned-center codemenschen-t8LLq3 has-background" style="background-color:#f6f8fa;border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:350px"><!-- wp:group {"className":"codemenschen-saXLLi"} -->
		<div class="wp-block-group codemenschen-saXLLi"><!-- wp:group {"className":"codemenschen-FTZOFm"} -->
		<div class="wp-block-group codemenschen-FTZOFm"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"2"}},"className":"codemenschen-wT6C02","fontSize":"large"} -->
		<h3 class="has-text-align-center codemenschen-wT6C02 has-large-font-size" style="line-height:2"><strong>Tittle</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#929292"},"typography":{"lineHeight":"2.5"}},"className":"codemenschen-U0F6Lo","fontSize":"normal"} -->
		<p class="has-text-align-center codemenschen-U0F6Lo has-text-color has-normal-font-size" style="color:#929292;line-height:2.5">Description</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"radius":"20px"}},"backgroundColor":"white","className":"codemenschen-box-block-2","layout":{"inherit":false}} -->
		<div class="wp-block-group codemenschen-box-block-2 has-white-background-color has-background" style="border-radius:20px"><!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
		<div class="wp-block-image"><figure class="aligncenter size-full"><img alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"3"}}} -->
		<h1 class="has-text-align-center" style="font-size:48px;font-weight:700;line-height:3">Price</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:separator {"color":"dark","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background has-dark-background-color has-dark-color is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0%","bottom":"0%"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0%;margin-bottom:0%"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":100,"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"color":{"text":"#bcbcbc","background":"#f6f8fa"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-text-color has-background" style="border-radius:10px;background-color:#f6f8fa;color:#bcbcbc;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"textColor":"white","gradient":"blue-to-purple-to-pink","width":100,"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"border":{"radius":"10px"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-white-color has-blue-to-purple-to-pink-gradient-background has-text-color has-background" style="border-radius:10px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>READ MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"350px","style":{"border":{"radius":"20px"},"color":{"background":"#f6f8fa"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"className":"codemenschen-t8LLq3"} -->
		<div class="wp-block-column is-vertically-aligned-center codemenschen-t8LLq3 has-background" style="background-color:#f6f8fa;border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:350px"><!-- wp:group {"className":"codemenschen-saXLLi"} -->
		<div class="wp-block-group codemenschen-saXLLi"><!-- wp:group {"className":"codemenschen-FTZOFm"} -->
		<div class="wp-block-group codemenschen-FTZOFm"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"2"}},"className":"codemenschen-wT6C02","fontSize":"large"} -->
		<h3 class="has-text-align-center codemenschen-wT6C02 has-large-font-size" style="line-height:2"><strong>Tittle</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#929292"},"typography":{"lineHeight":"2.5"}},"className":"codemenschen-U0F6Lo","fontSize":"normal"} -->
		<p class="has-text-align-center codemenschen-U0F6Lo has-text-color has-normal-font-size" style="color:#929292;line-height:2.5">Description</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"radius":"20px"}},"backgroundColor":"white","className":"codemenschen-box-block-2","layout":{"inherit":false}} -->
		<div class="wp-block-group codemenschen-box-block-2 has-white-background-color has-background" style="border-radius:20px"><!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
		<div class="wp-block-image"><figure class="aligncenter size-full"><img alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"3"}}} -->
		<h1 class="has-text-align-center" style="font-size:48px;font-weight:700;line-height:3">Price</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:separator {"color":"dark","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background has-dark-background-color has-dark-color is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0%","bottom":"0%"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0%;margin-bottom:0%"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":100,"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"color":{"text":"#bcbcbc","background":"#f6f8fa"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-text-color has-background" style="border-radius:10px;background-color:#f6f8fa;color:#bcbcbc;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"textColor":"white","gradient":"blue-to-purple-to-pink","width":100,"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"border":{"radius":"10px"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-white-color has-blue-to-purple-to-pink-gradient-background has-text-color has-background" style="border-radius:10px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>READ MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"350px","style":{"border":{"radius":"20px"},"color":{"background":"#f6f8fa"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"className":"codemenschen-t8LLq3"} -->
		<div class="wp-block-column is-vertically-aligned-center codemenschen-t8LLq3 has-background" style="background-color:#f6f8fa;border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:350px"><!-- wp:group {"className":"codemenschen-saXLLi"} -->
		<div class="wp-block-group codemenschen-saXLLi"><!-- wp:group {"className":"codemenschen-FTZOFm"} -->
		<div class="wp-block-group codemenschen-FTZOFm"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"2"}},"className":"codemenschen-wT6C02","fontSize":"large"} -->
		<h3 class="has-text-align-center codemenschen-wT6C02 has-large-font-size" style="line-height:2"><strong>Tittle</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#929292"},"typography":{"lineHeight":"2.5"}},"className":"codemenschen-U0F6Lo","fontSize":"normal"} -->
		<p class="has-text-align-center codemenschen-U0F6Lo has-text-color has-normal-font-size" style="color:#929292;line-height:2.5">Description</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"border":{"radius":"20px"}},"backgroundColor":"white","className":"codemenschen-box-block-2","layout":{"inherit":false}} -->
		<div class="wp-block-group codemenschen-box-block-2 has-white-background-color has-background" style="border-radius:20px"><!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
		<div class="wp-block-image"><figure class="aligncenter size-full"><img alt=""/></figure></div>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":25} -->
		<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontWeight":"700","lineHeight":"3"}}} -->
		<h1 class="has-text-align-center" style="font-size:48px;font-weight:700;line-height:3">Price</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:separator {"color":"dark","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background has-dark-background-color has-dark-color is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0%","bottom":"0%"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0%;margin-bottom:0%"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":100,"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"color":{"text":"#bcbcbc","background":"#f6f8fa"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-text-color has-background" style="border-radius:10px;background-color:#f6f8fa;color:#bcbcbc;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"textColor":"white","gradient":"blue-to-purple-to-pink","width":100,"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"border":{"radius":"10px"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-white-color has-blue-to-purple-to-pink-gradient-background has-text-color has-background" style="border-radius:10px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><strong>READ MORE</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		',
	)
);


register_block_pattern(
	'codemenschen/Block-three',
	array(
		'title'       => esc_html__( 'Block three', 'codemenschen' ),
		'categories'  => array( 'block' ),
		'description' => esc_html__( 'A header with a menu and a full width cover block with call to action. Upload your own cover image.', 'codemenschen' ),
		'content'     => '
		<!-- wp:group {"align":"full","className":"eplus-jqKpsy"} -->
		<div class="wp-block-group alignfull eplus-jqKpsy"><!-- wp:group {"backgroundColor":"white","layout":{"inherit":true}} -->
		<div class="wp-block-group has-white-background-color has-background"><!-- wp:columns {"verticalAlignment":null,"backgroundColor":"light","className":"eplus-AvphMU"} -->
		<div class="wp-block-columns eplus-AvphMU has-light-background-color has-background"><!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image -->
		<figure class="wp-block-image"><img alt=""/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"center","width":"","className":"eplus-NRMEg9"} -->
		<div class="wp-block-column is-vertically-aligned-center eplus-NRMEg9"><!-- wp:heading {"level":3} -->
		<h3><strong>The Outcomes</strong></h3>
		<!-- /wp:heading -->
		
		<!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"className":"eplus-KSlM3N"} -->
		<h2 class="eplus-KSlM3N" style="font-size:36px"><strong>Ready to Become a Full Stack Developer?</strong></h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">You will be able to build full-stack web or mobile apps</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">Solid understanding of programming logic</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">Ability to learn any new language or framework</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">Option to land a developer’s job within one of our hiring partners</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">Become prepared to launch a freelancer’s career</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph {"style":{"color":{"text":"#847f7f"}},"className":"eplus-RjBiUF"} -->
		<p class="eplus-RjBiUF has-text-color" style="color:#847f7f">Understand complete process of planning, building and testing apps</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons {"className":"eplus-FpxQu9"} -->
		<div class="wp-block-buttons eplus-FpxQu9"><!-- wp:button {"gradient":"blue-to-purple-to-pink","width":50,"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"5px","right":"5px","bottom":"5px","left":"5px"}}},"className":"eplus-SiE4Ev"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-50 eplus-SiE4Ev"><a class="wp-block-button__link has-blue-to-purple-to-pink-gradient-background has-background" style="border-radius:10px;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><strong>APPLY NOW</strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		
		<!-- wp:paragraph -->
		<p></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		',
	)
);
