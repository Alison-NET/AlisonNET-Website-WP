<?php
/**
 * alisonNET-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alisonNET-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'alisonnet_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alisonnet_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alisonNET-theme, use a find and replace
		 * to change 'alisonnet-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alisonnet-theme', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'top_menu' => esc_html__( 'Primary', 'alisonnet-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'alisonnet_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alisonnet_theme_setup' );



add_action( 'after_setup_theme', 'after_setup_theme_my_action' );
function after_setup_theme_my_action() {
	// add_theme_support( 'post-thumbnails', array( 'post', 'service' ) );
}


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alisonnet_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alisonnet_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'alisonnet_theme_content_width', 0 );




function add_my_post_types(){

	register_post_type('service', array(
		'labels'             => array(
			'name'               => 'Services', // Основное название типа записи
			'singular_name'      => 'Service', // отдельное название записи типа Service
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new service',
			'edit_item'          => 'Edit service',
			'new_item'           => 'New service',
			'view_item'          => 'View service',
			'search_items'       => 'Search service',
			'not_found'          => 'Service not found',
			'not_found_in_trash' => 'Service not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Services'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','excerpt','thumbnail')
	) );

	register_post_type('product', array(
		'labels'             => array(
			'name'               => 'Products', // Основное название типа записи
			'singular_name'      => 'Product', // отдельное название записи типа Product
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new product',
			'edit_item'          => 'Edit product',
			'new_item'           => 'New product',
			'view_item'          => 'View product',
			'search_items'       => 'Search product',
			'not_found'          => 'Product not found',
			'not_found_in_trash' => 'Product not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Products'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','thumbnail')
	) );
}
add_action('init', 'add_my_post_types');


function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
   }
add_filter('upload_mimes', 'cc_mime_types');
   

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alisonnet_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alisonnet-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'alisonnet-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alisonnet_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alisonnet_theme_scripts() {
	// wp_enqueue_style( 'alisonnet-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'alisonnet-theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'alisonnet-theme-style', get_template_directory_uri() . '/assets/css/app.min.css', array(), _S_VERSION);
	wp_enqueue_script( 'alisonnet-theme-navigation', get_template_directory_uri() . '/assets/js/app.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alisonnet_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );