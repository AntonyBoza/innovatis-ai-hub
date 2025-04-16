
<?php
/**
 * InnovatisAI functions and definitions
 *
 * @package InnovatisAI
 */

if ( ! defined( 'INNOVATIS_AI_VERSION' ) ) {
	define( 'INNOVATIS_AI_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function innovatis_ai_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'innovatis-ai', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'innovatis-ai' ),
			'footer' => esc_html__( 'Footer Menu', 'innovatis-ai' ),
		)
	);

	// Switch default core markup to output valid HTML5
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

	// Add theme support for selective refresh for widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images
	add_theme_support( 'align-wide' );

	// Add support for editor styles
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	// Add support for responsive embeds
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 180,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Add support for block templates
	add_theme_support( 'block-templates' );

	// Add theme support for core block template parts
	add_theme_support( 'block-template-parts' );
}
add_action( 'after_setup_theme', 'innovatis_ai_setup' );

/**
 * Register widget area.
 */
function innovatis_ai_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'innovatis-ai' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'innovatis-ai' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'innovatis-ai' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add footer widgets here.', 'innovatis-ai' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Homepage Widgets', 'innovatis-ai' ),
			'id'            => 'homepage-widgets',
			'description'   => esc_html__( 'Add widgets to the homepage.', 'innovatis-ai' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s homepage-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'innovatis_ai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function innovatis_ai_scripts() {
	wp_enqueue_style( 'innovatis-ai-style', get_stylesheet_uri(), array(), INNOVATIS_AI_VERSION );
	wp_enqueue_style( 'innovatis-ai-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_script( 'innovatis-ai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), INNOVATIS_AI_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'innovatis_ai_scripts' );

/**
 * Add editor styles
 */
function innovatis_ai_block_editor_styles() {
	wp_enqueue_style( 'innovatis-ai-editor-styles', get_theme_file_uri( '/assets/css/editor-style.css' ), array(), INNOVATIS_AI_VERSION );
	wp_enqueue_style( 'innovatis-ai-editor-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );
}
add_action( 'enqueue_block_editor_assets', 'innovatis_ai_block_editor_styles' );

/**
 * Register block patterns and categories
 */
function innovatis_ai_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'innovatis-ai',
			array( 'label' => __( 'InnovatisAI', 'innovatis-ai' ) )
		);
	}
}
add_action( 'init', 'innovatis_ai_register_block_patterns' );

/**
 * Add custom class to menu items based on their content
 */
function innovatis_ai_menu_classes($classes, $item) {
    if(is_page() && $item->object_id == get_the_ID()) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'innovatis_ai_menu_classes', 10, 2);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Icon functions
 */
require get_template_directory() . '/inc/icon-functions.php';
