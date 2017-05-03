// Add Bootstrap specific functions and styling.
jQuery(document).ready(function(){
	jQuery('.comment-reply-link').addClass('btn btn-default btn-sm');
	jQuery('button[type=submit]').addClass('btn btn-default');
	jQuery('#submit, html input[type=button], input[type=reset], input[type=submit]').addClass('btn btn-default btn-sm');
	jQuery('.widget_rss ul').addClass('media-list');
	jQuery('select').addClass('form-control');
	jQuery('table#wp-calendar').addClass('table table-striped');
	jQuery('#infinite-handle').addClass('btn btn-default');
	jQuery('.tagcloud a').addClass('btn btn-default btn-xs');
	jQuery('#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .select, table#wp-calendar, #infinite-handle').show("fast");
});

// Handle new items appended by infinite scroll.
jQuery(document).on('post-load', function() {
	setInterval( function() {
		jQuery('#infinite-handle').addClass('btn btn-default');
		jQuery('#submit, html input[type=button], input[type=reset], input[type=submit]').addClass('btn btn-default btn-sm');
	}, 300 );
});

// jQuery powered scroll to top
jQuery(document).ready( function() {

	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() > 100) {
			jQuery(".scroll-to-top").fadeIn()
		}
		else {
			jQuery(".scroll-to-top").fadeOut()
		}
	} );

	jQuery(".scroll-to-top").click(function() {
		jQuery("html, body").animate( {
			scrollTop: 0
		}, 800 );
		return false
	} );

} );