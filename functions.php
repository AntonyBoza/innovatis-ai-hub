
<?php
/**
 * InnovatisAI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package InnovatisAI
 */

if ( ! defined( 'INNOVATIS_AI_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'INNOVATIS_AI_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function innovatis_ai_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'innovatis-ai', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'innovatis-ai' ),
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

	// Add support for block templates
	add_theme_support( 'block-templates' );
	
	// Add support for core block visual styles.
	add_theme_support( 'wp-block-styles' );
	
	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	
	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
	
	// Add theme support for core block template parts
	add_theme_support( 'block-template-parts' );
}
add_action( 'after_setup_theme', 'innovatis_ai_setup' );

/**
 * Enqueue scripts and styles.
 */
function innovatis_ai_scripts() {
	wp_enqueue_style( 'innovatis-ai-style', get_stylesheet_uri(), array(), INNOVATIS_AI_VERSION );
	wp_enqueue_script( 'innovatis-ai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), INNOVATIS_AI_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'innovatis_ai_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Register block patterns and categories.
 */
function innovatis_ai_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'innovatis',
			array( 'label' => __( 'InnovatisAI', 'innovatis-ai' ) )
		);
	}
}
add_action( 'init', 'innovatis_ai_register_block_patterns' );

/**
 * Add block editor support
 */
function innovatis_ai_block_editor_styles() {
	wp_enqueue_style( 'innovatis-ai-editor-styles', get_theme_file_uri( '/assets/css/editor-style.css' ), array(), INNOVATIS_AI_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'innovatis_ai_block_editor_styles' );
