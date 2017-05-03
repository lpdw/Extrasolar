<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package TA DailyBlog
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

			<div id="secondary" class="widget-area col-xs-12 col-md-4" role="complementary">
				<?php dynamic_sidebar( 'sidebar-right' ); ?>
			</div><!-- #secondary -->

		</div> <!-- .row -->
	</div> <!-- .container -->
