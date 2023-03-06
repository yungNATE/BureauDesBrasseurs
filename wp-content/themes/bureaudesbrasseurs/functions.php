<?php
/**
 * BureauDesBrasseurs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BureauDesBrasseurs
 */


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/* ADD ACTION */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bureaudesbrasseurs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on BureauDesBrasseurs, use a find and replace
		* to change 'bureaudesbrasseurs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bureaudesbrasseurs', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bureaudesbrasseurs' ),
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
			'bureaudesbrasseurs_custom_background_args',
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
add_action( 'after_setup_theme', 'bureaudesbrasseurs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bureaudesbrasseurs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bureaudesbrasseurs_content_width', 640 );
}
add_action( 'after_setup_theme', 'bureaudesbrasseurs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bureaudesbrasseurs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bureaudesbrasseurs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bureaudesbrasseurs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bureaudesbrasseurs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bureaudesbrasseurs_scripts() {
	// wp_enqueue_style( 'bureaudesbrasseurs-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'bureaudesbrasseurs-style', 'rtl', 'replace' );
	
	$cssFolder = get_template_directory_uri()."/css/compiledCSS";
	
	wp_enqueue_style( 'bureaudesbrasseurs-styleNormalize', $cssFolder.'/normalize.css' );
	wp_enqueue_style( 'bureaudesbrasseurs-styleGlobal', $cssFolder.'/global.css' );
	is_front_page() ?
		wp_enqueue_style( 'bureaudesbrasseurs-styleHome', $cssFolder.'/frontpage.css' ) : 			/*	accueil	*/
		wp_enqueue_style( 'bureaudesbrasseurs-styleOtherPages', $cssFolder.'/otherpages.css' );		/*	autre pages	*/
	

	$jsFolder = get_template_directory_uri()."/js";
	$jsPluginFolder = $jsFolder."/plugins";

	wp_enqueue_script( 'bureaudesbrasseurs-jsMain', $jsFolder.'/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bureaudesbrasseurs-jsNavigation', $jsFolder.'/navigation.js', array(), _S_VERSION, true );

	// swiper.js
	if(is_page(16 /* trombinoscope */) ){
		wp_enqueue_script( 'bureaudesbrasseurs-jsSwiperjs', $jsPluginFolder.'/swiperjs/swiper-bundle.min.js', array(), _S_VERSION, true );
		wp_enqueue_style( 'bureaudesbrasseurs-styleSwiperjs', $jsPluginFolder.'/swiperjs/swiper-bundle.min.css' );
	}

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'bureaudesbrasseurs_scripts' );


/* REMOVE ACTION */
/** 
* Delete WP SVG located inside header
*/
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );


/* REQUIRE */

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
 * Main custom PHP file containing miscellaneous functions.
 */
require get_template_directory() . '/inc/main.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* UTILITARY FUNCTIONS */
function ddd($variable='Debug'){
	echo '<pre>';
	( 	
		$variable === false || 
		$variable === NULL  || 
		$variable === "" 	|| 
		empty($variable) 	
	) ? 
		var_dump($variable) : print_r($variable);
	echo '</pre>';
}

/* CUSTOM FUNCTIONS */

function bureaudesbrasseurs_get_incoming_events_number() {
	// généré par copilot, à relire/tester
	$today = date('Ymd');
	$args = array(
		'post_type' => 'event',
		'posts_per_page' => -1,
		'meta_key' => 'event_date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => 'event_date',
				'compare' => '>=',
				'value' => $today,
				'type' => 'numeric'
			)
		)
	);
	$events = new WP_Query($args);
	return 1;
	return $events->found_posts;
	
}


