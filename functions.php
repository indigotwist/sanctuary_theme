<?php
/**
 * sanctuary_theme functions and definitions
 *
 * @package sanctuary_theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sanctuary_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sanctuary_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sanctuary_theme, use a find and replace
	 * to change 'sanctuary_theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sanctuary_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sanctuary_theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sanctuary_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // sanctuary_theme_setup
add_action( 'after_setup_theme', 'sanctuary_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function sanctuary_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sanctuary_theme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sanctuary_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sanctuary_theme_scripts() {
	wp_enqueue_style( 'sanctuary_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sanctuary_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'sanctuary_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sanctuary_theme_scripts' );

/**
 * Load Google web fonts.
 */
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:400,700|Open+Sans+Condensed:300');
            wp_enqueue_style( 'googleFonts');
        }

    add_action('wp_print_styles', 'load_fonts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom Post Types for this theme.
 */
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
 register_post_type( 'cabin',
 array(
      'labels' => array(
      	'name' => __( 'Cabins' ),
      	'singular_name' => __( 'Cabin' ),
      	'add_new' => __( 'Add New' ),
      	'add_new_item' => __( 'Add New Cabin' ),
      	'edit' => __( 'Edit' ),
      	'edit_item' => __( 'Edit Cabin' ),
      	'new_item' => __( 'New Cabin' ),
      	'view' => __( 'View Cabin' ),
      	'view_item' => __( 'View Cabin' ),
      	'search_items' => __( 'Search Cabins' ),
      	'not_found' => __( 'No Cabins found' ),
      	'not_found_in_trash' => __( 'No Cabins found in Trash' ),
      	'parent' => __( 'Parent Cabin' ),
      ),
 'public' => true,
      'menu_position' => 4,
      'rewrite' => array('slug' => 'cabins'),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'taxonomies' => array('category', 'post_tag'),
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
     )
  );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
