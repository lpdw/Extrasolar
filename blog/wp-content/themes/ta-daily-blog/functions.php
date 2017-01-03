<?php
/**
 * TA DailyBlog functions and definitions
 *
 * @package TA DailyBlog
 */

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on TA DailyBlog, use a find and replace
 * to change 'ta-dailyblog' to the name of your theme in all the template files
 */
load_theme_textdomain( 'ta-dailyblog', get_template_directory() . '/languages' );

// Include the Redux theme options Framework
if ( !class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/redux/framework.php' );
}

// Register all the theme options
require_once( get_template_directory() . '/inc/redux-config.php' );

// Theme options functions
require_once( get_template_directory() . '/inc/ta-option.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 668; /* pixels */
}

/**
 * Set the content width for full width pages with no sidebar.
 */
function full_page_width() {
	if ( is_page_template( 'template-no-sidebar.php' ) ) {
		global $content_width;
		$content_width = 1058; /* pixels */
  }
}
add_action( 'template_redirect', 'full_page_width' );

if ( ! function_exists( 'ta_daily_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ta_daily_blog_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'tab-images', 60, 60, true );
	add_image_size( 'featured-images', 750, 500, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ta-dailyblog' ),
		'footer' => __( 'Footer Menu', 'ta-dailyblog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ta_daily_blog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}
endif; // ta_daily_blog_setup
add_action( 'after_setup_theme', 'ta_daily_blog_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ta_daily_blog_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ta-dailyblog' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Main sidebar that appears on the right.', 'ta-dailyblog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s well">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'ta-dailyblog' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Sidebar for Left Sidebar Page template.', 'ta-dailyblog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s well">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_widget( 'ta_dailyblog_social_widget' );
	register_widget( 'ta_dailyblog_about_me_widget' );
	register_widget( 'ta_dailyblog_post_tabs_widget' );
}
add_action( 'widgets_init', 'ta_daily_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ta_daily_blog_scripts() {
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/'. ta_option('css_style', 'lumen.css'), array(), '3.3.4', 'all' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0', 'all' );

	wp_enqueue_style( 'ta-dailyblog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ta_daily_blog_scripts' );

/**
 * Add Respond.js for IE
 */
if( !function_exists( 'ie_scripts' )) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';

/**
 * Register Custom Navigation Walker.
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Comments Callback.
 */
require_once get_template_directory() . '/inc/comments-callback.php';

/**
 * Add Author Meta.
 */
require_once get_template_directory() . '/inc/author-meta.php';

/**
 * Search Results - Highlight.
 */
require_once get_template_directory() . '/inc/search-highlight.php';

/**
 * Theme Options - Custom CSS.
 */
require_once get_template_directory() . '/inc/custom-css.php';

/**
 * Add Theme Widgets.
 */
require_once ( get_template_directory() . '/widgets/widget-social.php' );
require_once ( get_template_directory() . '/widgets/widget-about-me.php' );
require_once ( get_template_directory() . '/widgets/widget-post-tabs.php' );