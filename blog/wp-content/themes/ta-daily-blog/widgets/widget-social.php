<?php
/**
 * Social Network Icon Widget Class
 *
 * @package TA DailyBlog
 */
 
class ta_dailyblog_social_widget extends WP_Widget {
	/* Constructor method */
	function __construct() {
        $widget_ops = array( 'classname' => 'social-widget', 'description' => __( "Add social icons to your sidebar." , 'ta-dailyblog' ) );
        parent::__construct( '', __( 'TA DailyBlog: Social Widget', 'ta-dailyblog' ), $widget_ops );
    }

	/* Render this widget in the sidebar */
	function widget( $args , $instance ) {
		extract( $args );
		$title = ($instance['title']) ? $instance['title'] : __('Keep Social' , 'ta-dailyblog');
		echo $before_widget;
		echo $before_title;
		echo $title;
		echo $after_title;
		?>

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

		<?php echo $after_widget;
	}

	/* Update the widget settings */
	function update ( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		return $instance;
	}

	/* Output user options */
	function form( $instance ) {
		if( !isset( $instance['title'] ) ) $instance['title'] = __('Keep Social' , 'ta-dailyblog');
		?>

		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title ','ta-dailyblog' ) ?></label>
		<input class="widefat" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" />
		</p>

		<?php
	}

} // end ta_dailyblog_social_widget

?>