
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package InnovatisAI
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function innovatis_ai_body_classes($classes) {
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'innovatis_ai_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function innovatis_ai_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'innovatis_ai_pingback_header');

/**
 * Customize the excerpt length.
 */
function innovatis_ai_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'innovatis_ai_custom_excerpt_length', 999);

/**
 * Customize the excerpt "read more" string.
 */
function innovatis_ai_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'innovatis_ai_excerpt_more');

/**
 * Add custom image sizes
 */
function innovatis_ai_image_sizes() {
    add_image_size('innovatis-featured', 1200, 600, true);
    add_image_size('innovatis-card', 600, 400, true);
}
add_action('after_setup_theme', 'innovatis_ai_image_sizes');
