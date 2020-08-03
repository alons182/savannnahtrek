<?php
/**
 * savannahtrek functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package savannahtrek
 */

if ( ! function_exists( 'savannahtrek_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function savannahtrek_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on savannahtrek, use a find and replace
	 * to change 'savannahtrek' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'savannahtrek', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'savannahtrek' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'savannahtrek_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'savannahtrek_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function savannahtrek_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'savannahtrek_content_width', 640 );
}
add_action( 'after_setup_theme', 'savannahtrek_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function savannahtrek_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'savannahtrek' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'savannahtrek' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(
	    array(
	      'id' => 'sidebar-languages',
	      'name' => 'Sidebar languages',
	      'description' => 'Sidebar languages'
	      )
	  

	   );
}
add_action( 'widgets_init', 'savannahtrek_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function savannahtrek_scripts() {
	wp_enqueue_style( 'savannahtrek-style', get_stylesheet_uri() );

	/*wp_enqueue_script( 'savannahtrek-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );*/

	wp_enqueue_script( 'savannahtrek-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'savannahtrek-bundle', get_template_directory_uri() . '/js/bundle.js', array(), '20160926', true );
}
add_action( 'wp_enqueue_scripts', 'savannahtrek_scripts' );

function jeherve_custom_tiled_gallery_width() {
    return '900';
}
add_filter( 'tiled_gallery_content_width', 'jeherve_custom_tiled_gallery_width' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

require get_template_directory() . '/inc/cpt.php';

function polylang_json_api_init() {
	global $polylang;
  
	$default = pll_default_language();
	$langs = pll_languages_list();
  
	$cur_lang = $_GET['lang'];
  
	if (!in_array($cur_lang, $langs)) {
	  $cur_lang = $default;
	}
  
	$polylang->curlang = $polylang->model->get_language($cur_lang);
	$GLOBALS['text_direction'] = $polylang->curlang->is_rtl ? 'rtl' : 'ltr';
  }
  
  add_action('rest_api_init', 'polylang_json_api_init');