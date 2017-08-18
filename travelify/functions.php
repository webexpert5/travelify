<?php

/**

 * Travelify defining constants, adding files and WordPress core functionality.

 *

 */

/*add_filter('widget_text', 'do_shortcode');*/

/**

 * Set the content width based on the theme's design and stylesheet.

 */

if ( ! isset( $content_width ) )

	$content_width = 700;





if ( ! function_exists( 'travelify_setup' ) ):



/**

 * Sets up theme defaults and registers support for various WordPress features.

 */

add_action( 'after_setup_theme', 'travelify_setup' );



 /** 

 * Note that this function is hooked into the after_setup_theme hook, which runs

 * before the init hook. The init hook is too late for some features, such as indicating

 * support post thumbnails.

 *

 */



function travelify_setup() {

	/** 

	 * travelify_add_files hook

	 *

	 * Adding other addtional files if needed.

	 */

	do_action( 'travelify_add_files' );



	/* Travelify is now available for translation. */

	require( get_template_directory() . '/library/functions/i18n.php' );



	/** Load functions */

	require( get_template_directory() . '/library/functions/functions.php' );

	

	/** Load WP backend related functions */

	require( get_template_directory() . '/library/panel/themeoptions-defaults.php' );

	require( get_template_directory() . '/library/panel/theme-options.php' );

	require( get_template_directory() . '/library/panel/metaboxes.php' );

	require( get_template_directory() . '/library/panel/show-post-id.php' );



	/** Load Shortcodes */

	require( get_template_directory() . '/library/functions/shortcodes.php' );



	/** Load Structure */

	require( get_template_directory() . '/library/structure/header-extensions.php' );

	require( get_template_directory() . '/library/structure/sidebar-extensions.php' );

	require( get_template_directory() . '/library/structure/footer-extensions.php' );

	require( get_template_directory() . '/library/structure/content-extensions.php' );



	/** 

	 * travelify_add_functionality hook

	 *

	 * Adding other addtional functionality if needed.

	 */

	do_action( 'travelify_add_functionality' );



	// Add default posts and comments RSS feed links to head

	add_theme_support( 'automatic-feed-links' );



	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.

	add_theme_support( 'post-thumbnails' ); 

 

	// This theme uses wp_nav_menu() in header menu location.

	register_nav_menu( 'primary', __( 'Primary Menu', 'travelify' ) );



	// Add Travelify custom image sizes

	add_image_size( 'featured', 670, 300, true );

	add_image_size( 'featured-medium', 230, 230, true );

	// add_image_size( 'slider', 1018, 460, true ); 		// used on Featured Slider on Homepage Header

	add_image_size( 'gallery', 474, 342, true ); 				// used to show gallery all images



	// This feature enables woocommerce support for a theme.

	add_theme_support( 'woocommerce' );

	

	/**

	 * This theme supports custom background color and image

	 */

	$args = array(

		'default-color' => '#d3d3d3',

		'default-image' => get_template_directory_uri() . '/images/background.png',

	);

	add_theme_support( 'custom-background', $args );

	

	/**

	 * This theme supports add_editor_style 

	 */

	add_editor_style();

}	

endif; // travelify_setup

function wptutsplus_widgets_init() {

 

    // In header widget area, located to the right hand side of the header, next to the site title and description. Empty by default.

    register_sidebar( array(

        'name' => 'In Header Widget Area',

        'id' => 'in-header-widget-area',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	

	register_sidebar( array(

        'name' => 'contact',

        'class' => 'contact',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	register_sidebar( array(

        'name' => 'testimonial',

        'class' => 'testimonial',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	register_sidebar( array(

        'name' => 'services',

        'class' => 'services',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	register_sidebar( array(

        'name' => 'text',

        'class' => 'text',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	register_sidebar( array(

        'name' => 'copyright',

        'class' => 'copyright',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	register_sidebar( array(

        'name' => 'contact1',

        'class' => 'contact1',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	

	register_sidebar( array(

        'name' => 'testimonial1',

        'class' => 'testimonial1',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	

	register_sidebar( array(

        'name' => 'cleft',

        'class' => 'cleft',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );


	

	

	register_sidebar( array(

        'name' => 'thnku',

        'class' => 'thnku',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	

	

	register_sidebar( array(

        'name' => 'contact-info',

        'class' => 'contact-info',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );


	register_sidebar( array(

        'name' => 'yelp',

        'class' => 'yelp',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

	

	register_sidebar( array(

        'name' => 'cright',

        'class' => '',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '',

        'after_title' => '',

    ) );




		register_sidebar( array(

        'name' => 'topright',

        'class' => '',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '',

        'after_title' => '',

    ) );


		register_sidebar( array(

        'name' => 'cright2',

        'class' => '',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container2 %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '',

        'after_title' => '',

    ) );


		register_sidebar( array(

        'name' => 'cright3',

        'class' => '',

        'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',

        'before_widget' => '<div class="widget-container2 %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '',

        'after_title' => '',

    ) );
	

    register_sidebar( array(

        'name' => 'In footer social Area',

        'id' => 'in-footer-social-area',

        'description' => 'A widget area located to the right hand side of the social, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );

}

add_action( 'widgets_init', 'wptutsplus_widgets_init' );

function wptutspluss_widgets_inits() {

 

    register_sidebar( array(

        'name' => 'In footer social Area',

        'id' => 'in-footer-social-area',

        'description' => 'A widget area located to the right hand side of the social, next to the site title and description.',

        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',

        'after_widget' => '</div>',

        'before_title' => '<h3 class="widget-title">',

        'after_title' => '</h3>',

    ) );





}

add_action( 'widgets_inits', 'wptutsplus_widgets_inits' );



add_action('wpcf7_mail_sent', 'ip_wpcf7_mail_sent');

function ip_wpcf7_mail_sent($wpcf7)

{

	$on_sent_ok = $wpcf7->additional_setting('ip_on_sent_ok', false);



	if (is_array($on_sent_ok) && count($on_sent_ok) > 0)

	{

		wp_redirect(trim($on_sent_ok[0]));

		exit;

	}

}



?>



