<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
	$img_footer_logo   = get_theme_mod( 'illdy_img_footer_logo', esc_url( get_template_directory_uri() . '/layout/images/footer-logo.png' ) );
} else {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright' );
	$img_footer_logo   = get_theme_mod( 'illdy_img_footer_logo' );
}
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			);
			?>
			
			<div class="col-sm-12">
			  <p>
			    <span>Extrasolar.fr de <a href="http://www.extrasolar.fr/">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
			  </p>
			</div><!--/.col-sm-12-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>
