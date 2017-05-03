<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TA DailyBlog
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer well" role="contentinfo">

		<div class="container">
			<div class="row">
				<?php if ( !empty( ta_option( 'social_icons' ) ) ) { ?>
				<div class="col-md-12 col-lg-12">
					<div class="social-icons">
						<?php $social_options = ta_option( 'social_icons' ); ?>
							<?php foreach ( $social_options as $key => $value ) {
								if ( $value && $key == 'Twitter' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Facebook' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Google Plus' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( strtr( $key, " ", "-" ) ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( strtr( $key, " ", "-" ) ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Instagram' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'LinkedIn' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Tumblr' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Pinterest' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Dribbble' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Flickr' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'DeviantArt' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Skype' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'YouTube' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-play"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'Vimeo' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'SoundCloud' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ); ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'GitHub' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } elseif ( $value && $key == 'RSS' ) { ?>
									<a href="<?php echo $value; ?>" title="<?php echo $key; ?>" class="<?php echo strtolower( $key ); ?>" target="_blank">
										<i class="fa fa-<?php echo strtolower( $key ) . "-square"; ?>"></i>
									</a>
								<?php } ?>
							<?php } ?>
					</div><!-- .social-icons -->
				</div>
				<?php } ?>

				<?php if ( has_nav_menu( 'footer', 'ta-dailyblog') ) { ?>
				<div class="col-md-6 col-lg-6">
					<nav role="navigation">
						<?php
							wp_nav_menu( array(
								'container'       => '',
								'depth'           => 1,
								'menu_class'      => 'footer-menu',
								'theme_location'  => 'footer')
							);
						?>
					</nav>
				</div>
				<?php } ?>

				<?php if ( ta_option( 'custom_copyright' ) != '') { ?>
				<div class="col-md-6 col-lg-6">				
					<div class="copyright">
						<?php echo ta_option( 'custom_copyright' ); ?>
					</div><!-- .copyright -->
				</div>
				<?php } ?>
			</div><!-- .row -->
		</div><!-- .container -->

		<div class="scroll-to-top" style="display: none;">
			<i class="fa fa-2x fa-arrow-circle-up btn btn-default btn-sm"></i>
		</div><!-- .scroll-to-top -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>