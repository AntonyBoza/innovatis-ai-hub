
<?php
/**
 * SVG icons related functions
 *
 * @package InnovatisAI
 */

/**
 * Get SVG icon
 *
 * @param string $icon Icon name.
 * @return string SVG markup.
 */
function innovatis_ai_get_icon($icon) {
    switch ($icon) {
        case 'brain':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44A2.5 2.5 0 0 1 4.5 17v-2.5a2.5 2.5 0 0 1 0-5V7a2.5 2.5 0 0 1 5-5Z"></path><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44A2.5 2.5 0 0 0 19.5 17v-2.5a2.5 2.5 0 0 0 0-5V7a2.5 2.5 0 0 0-5-5Z"></path></svg>';
        case 'chart':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"></path><path d="M18 9l-2.5 2.5L18 14l3-3-3-2z"></path><path d="M9.5 14L7 16.5 9.5 19 12 15.5 9.5 14z"></path><path d="M6 12l-2.5 2.5L6 17l4.5-4.5L6 12z"></path></svg>';
        case 'message':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>';
        case 'database':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>';
        case 'shield':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>';
        case 'globe':
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>';
        default:
            return '';
    }
}

/**
 * Add SVG definitions to footer.
 */
function innovatis_ai_include_svg_icons() {
    // Define SVG sprite file.
    $svg_icons = get_template_directory() . '/assets/images/svg-icons.svg';

    // If it exists, include it.
    if (file_exists($svg_icons)) {
        require_once $svg_icons;
    }
}
add_action('wp_footer', 'innovatis_ai_include_svg_icons', 9999);
