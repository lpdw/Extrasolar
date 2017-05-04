<?php
/**
 * Adds custom CSS to the wp_head() hook.
 *
 * @package WordPress
 * @subpackage TA DailyBlog
 */

if ( !function_exists( 'ta_custom_css' ) ) {

	add_action('wp_head', 'ta_custom_css');
	function ta_custom_css() {

			$custom_css ='';

			if(ta_option('custom_css') != '') {
				$custom_css .= ta_option('custom_css');
			}

			if( ta_option( 'disable_fixed_navbar' ) == '1' ) {
				$custom_css .= 'body { padding-top: 70px; }
				body.admin-bar .navbar {position:fixed; top: 28px; z-index: 1000; height: 40px;}';
			}

			//Trim white space for faster page loading
			$custom_css_trimmed =  preg_replace( '/\s+/', ' ', $custom_css );

			//Echo CSS
			$css_output = "<!-- Custom CSS -->\n<style type=\"text/css\">\n" . $custom_css_trimmed . "\n</style>";

			if( !empty( $custom_css ) ) {
				echo $css_output;
			}
	}

}