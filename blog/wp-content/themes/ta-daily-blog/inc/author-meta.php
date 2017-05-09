<?php
/**
 * Get Author Meta
 *
 * @package TA DailyBlog
 */

function ta_modify_contact_methods( $profile_fields ) {

	// Add new fields
	$profile_fields['twitter'] = __( 'Twitter Username', 'ta-dailyblog' );
	$profile_fields['facebook'] = __( 'Facebook URL', 'ta-dailyblog' );
	$profile_fields['gplus'] = __( 'Google+ URL', 'ta-dailyblog' );

	return $profile_fields;
}
add_filter('user_contactmethods', 'ta_modify_contact_methods');