<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package TA DailyBlog
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-md-12 col-lg-12 well">
				<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<header class="page-header post-inner-content">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'ta-dailyblog' ); ?></h1>
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ta-dailyblog' ); ?></p>
							<?php get_search_form(); ?>
						</header><!-- .page-header -->

						<div class="page-content">
							<div class="col-lg-12">
								<div class="col-md-6 col-lg-4">
									<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
								</div>

								<div class="col-md-6 col-lg-4">
									<?php the_widget( 'WP_Widget_Recent_Comments' ); ?>
								</div>

								<div class="col-md-6 col-lg-4">
									<?php if ( ta_daily_blog_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
									<div class="widget widget_categories">
										<h2 class="widget-title"><?php _e( 'Most Used Categories', 'ta-dailyblog' ); ?></h2>
										<ul>
										<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											) );
										?>
										</ul>
									</div><!-- .widget -->
									<?php endif; ?>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="col-md-6 col-lg-4">
									<?php
										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'ta-dailyblog' ), convert_smilies( ':)' ) ) . '</p>';
										the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
									?>
								</div>

								<div class="col-md-6 col-lg-4">
									<?php
										/* translators: %1$s: smiley */
										$category_content = '<p>' . sprintf( __( 'Try looking in the category archives. %1$s', 'ta-dailyblog' ), convert_smilies( ':)' ) ) . '</p>';
										the_widget( 'WP_Widget_Categories', 'dropdown=1', "after_title=</h2>$category_content" );
									?>
								</div>

								<div class="col-md-6 col-lg-4">
									<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
								</div>
							</div>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div> <!-- .row -->
	</div> <!-- .container -->

<?php get_footer(); ?>
