<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TA DailyBlog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php $fav = ta_option( 'custom_favicon', false, 'url' ); ?>
<?php if ( $fav !== '' ) { ?>
<link rel="icon" type="image/png" href="<?php echo ta_option( 'custom_favicon', false, 'url' ); ?>" />
<?php } ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="sr-only" href="#content"><?php _e( 'Skip to content', 'ta-dailyblog' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php 
		$fixed = ( ta_option('disable_fixed_navbar' ) == '1' ? 'navbar-fixed-top' : 'navbar-static-top' );
		$inverse = ( ta_option('disable_inverse_navbar' ) == '1' ? 'navbar-inverse' : 'navbar-default' );
		?>

		<nav role="navigation">
			<div class="navbar <?php echo $fixed; ?> <?php echo $inverse; ?> ">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only"><?php _e( 'Toggle navigation', 'ta-dailyblog' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php } ?>

						<?php $logo = ta_option( 'custom_logo', false, 'url' ); ?>

						<?php if( $logo !== '' ) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>" rel="homepage"><img src="<?php echo $logo ?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>"></a>
						<?php } else { ?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
						<?php } ?>
					</div>

					<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php
							$args = array(
								'theme_location' => 'primary',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav navbar-right',
								'walker'         => new wp_bootstrap_navwalker()
							);

							wp_nav_menu( $args );
						?>
					</div>
					<?php } ?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">