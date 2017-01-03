<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package TA DailyBlog
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function ta_daily_blog_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'ta_daily_blog_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ta_daily_blog_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'ta_daily_blog_body_classes' );

if ( ! function_exists( '_wp_render_title_tag' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function ta_daily_blog_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'ta-dailyblog' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'ta_daily_blog_wp_title', 10, 2 );
endif;

if ( ! function_exists( '_wp_render_title_tag' ) ) :
	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function ta_daily_blog_render_title() { ?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
	}
	add_action( 'wp_head', 'ta_daily_blog_render_title' );
endif;

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function ta_daily_blog_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'ta_daily_blog_setup_author' );

/**
 * Disable Infinite Scroll on search result pages.
 */
function tweakjp_custom_is_support() {
    $supported = current_theme_supports( 'infinite-scroll' ) && ( !is_search() );
     
    return $supported;
}
add_filter( 'infinite_scroll_archive_supported', 'tweakjp_custom_is_support' );

/**
 * Custom Read More Button
 */
function modify_read_more_link() {

	$read_txt = ta_option( 'read_more_text', 'Read More' );
	$btn_block = ( ta_option( 'read_more_block' ) == '1' ? 'btn-block' : '');
	$btn_size = 'btn-' . ta_option( 'read_more_size' );
	$btn_color = 'btn-' . ta_option( 'read_more_color' );

	return '<p class="more-link"><a class="btn '. $btn_color .' '. $btn_size .' '. $btn_block .'" href="' . get_permalink() . '">'. $read_txt .'</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * Custom Edit Button.
 */
function custom_edit_post_link( $output ) {

	$output = str_replace( 'class="post-edit-link"', 'class="post-edit-link btn btn-default btn-xs"', $output );
	return $output;
}
add_filter('edit_post_link', 'custom_edit_post_link');

/**
 * Custom Tag Links.
 */
function post_tag_term_links( $term_links ) {

	$term_links = str_replace( 'rel="tag"', 'rel="tag" class="btn btn-default btn-xs"', $term_links );
	return $term_links;
}
add_filter( 'term_links-post_tag', 'post_tag_term_links' );

/**
 * Add Bootstrap thumbnail style to images with caption.
 */
function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="thumbnail wp-caption ' . esc_attr( $attr['align'] ) . '"';
	$attributes .= ' style="width: ' . esc_attr( $attr['width'] + 10 ) . 'px"';

	/* Open the caption <div>. */
	$output = '<div' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

	/* Close the caption </div>. */
	$output .= '</div>';

	/* Return the formatted, clean caption. */
	return $output;
}
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

/**
 * Add Skype URI support for the social media icon.
 */
function allow_skype_protocol( $protocols ) {
    $protocols[] = 'skype';
    return $protocols;
}
add_filter( 'kses_allowed_protocols' , 'allow_skype_protocol' );