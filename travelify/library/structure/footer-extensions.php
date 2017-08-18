<?php
/**
 * Adds footer structures.
 *
 */

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_widget_area', 10 );
/** 
 * Displays the footer widgets
 */
function travelify_footer_widget_area() {
	get_sidebar( 'footer' );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_open_sitegenerator_div', 20 );
/**
 * Opens the site generator div.
 */
function travelify_open_sitegenerator_div() {
	echo '<div id="site-generator">
				<div class="container">';
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_info', 30 );
/**
 * function to show the footer info, copyright information
 */
function travelify_footer_info() {         
   $output = '<div class="copyright">'.__( 'Copyright &copy;', 'travelify' ).' '.'[the-year] [site-link]'.' </div><!-- .copyright -->';
   echo do_shortcode( $output );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_close_sitegenerator_div', 35 );
$flag=0;
travelify_socialnetworks( $flag );
/**
 * Closes the site generator div.
 */
function travelify_close_sitegenerator_div() {
	if ( is_active_sidebar( 'in-footer-social-area' ) ) { ?>
  <aside class="in-footer widget-area half right" role="complementary">
    <?php dynamic_sidebar( 'in-footer-social-area' ); ?>  </aside>
<?php } ?><div style="clear:both;"></div>
			</div><!-- .container -->
			</div><!-- #site-generator -->
			<?php
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_backtotop_html', 40 );
/**
 * Shows the back to top icon to go to top.
 */
function travelify_backtotop_html() {
	echo '<div class="back-to-top"><a href="#branding"></a></div>';
}

?>