<?php
/**
 * Displays the header section of the theme.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php		
		/** 
		 * travelify_title hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_add_meta 5
		 * travelify_show_title 10
		 *
		 */
		do_action( 'travelify_title' );

		/** 
		 * travelify_meta hook
		 */
		do_action( 'travelify_meta' );

		/** 
		 * travelify_links hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_add_links 10
		 * travelify_favicon 15
		 * travelify_webpageicon 20
		 *
		 */
		do_action( 'travelify_links' );

		/** 
		 * This hook is important for wordpress plugins and other many things
		 */
		wp_head();
	?>
<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
	
<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/estrangelo-edessa" rel="stylesheet" type="text/css"/>
</head>

<body <?php body_class(); ?>>
	<?php
		/** 
		 * travelify_before hook
		 */
		do_action( 'travelify_before' );
	?>

	<div class="wrapper">
		<?php
			/** 
			 * travelify_before_header hook
			 */
			do_action( 'travelify_before_header' );
		?>
		<header id="branding" >
			<?php
				/** 
				 * travelify_header hook
				 *
				 * HOOKED_FUNCTION_NAME PRIORITY
				 *
				 * travelify_headerdetails 10
				 */
				do_action( 'travelify_header' );
echo do_shortcode("[huge_it_slider id='1']"); 
			?>
		</header>
		<?php
			/** 
			 * travelify_after_header hook
			 */
			do_action( 'travelify_after_header' );
		?>

		<?php
			/** 
			 * travelify_before_main hook
			 */
			do_action( 'travelify_before_main' );
		?>
		<div id="main" class="container clearfix">