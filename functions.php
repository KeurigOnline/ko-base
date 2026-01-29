<?php
/**
 * KO Base Theme - Minimal Functions
 *
 * @package KOBase
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function ko_base_setup(): void {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
}
add_action( 'after_setup_theme', 'ko_base_setup' );

/**
 * Auto-load Google Fonts from theme.json.
 *
 * Reads fontFamilies from theme.json and loads any that have a "google" property
 * set to true, or that don't have local fontFace definitions.
 *
 * Example theme.json fontFamily with Google Font:
 * {
 *     "slug": "fraunces",
 *     "name": "Fraunces",
 *     "fontFamily": "\"Fraunces\", serif",
 *     "google": true
 * }
 */
function ko_base_enqueue_google_fonts(): void {
    $theme_json_path = get_template_directory() . '/theme.json';

    if ( ! file_exists( $theme_json_path ) ) {
        return;
    }

    $theme_json = file_get_contents( $theme_json_path );
    $theme_data = json_decode( $theme_json, true );

    if ( empty( $theme_data['settings']['typography']['fontFamilies'] ) ) {
        return;
    }

    $google_fonts = [];

    foreach ( $theme_data['settings']['typography']['fontFamilies'] as $font ) {
        // Skip if it has local fontFace definitions (already handled by WP)
        if ( ! empty( $font['fontFace'] ) ) {
            continue;
        }

        // Skip system fonts
        if ( in_array( $font['slug'] ?? '', [ 'system', 'mono', 'sans-serif', 'serif' ], true ) ) {
            continue;
        }

        // Check for explicit google flag or assume Google Font if no fontFace
        $is_google = $font['google'] ?? true;

        if ( $is_google && ! empty( $font['fontFamily'] ) ) {
            // Extract font name from fontFamily string (first quoted value or first word)
            $font_family = $font['fontFamily'];

            if ( preg_match( '/["\']([^"\']+)["\']/', $font_family, $matches ) ) {
                $font_name = $matches[1];
            } else {
                $font_name = explode( ',', $font_family )[0];
                $font_name = trim( $font_name );
            }

            // Skip generic families
            if ( in_array( strtolower( $font_name ), [ 'serif', 'sans-serif', 'monospace', 'cursive', 'fantasy', 'system-ui', 'ui-sans-serif', 'ui-serif', 'ui-monospace' ], true ) ) {
                continue;
            }

            // Get font weights (default to 400-700 range)
            $weights = $font['weights'] ?? '400;500;600;700';
            if ( is_array( $weights ) ) {
                $weights = implode( ';', $weights );
            }

            // Format for Google Fonts API
            $google_fonts[] = urlencode( $font_name ) . ':wght@' . str_replace( ';', ';', $weights );
        }
    }

    if ( empty( $google_fonts ) ) {
        return;
    }

    // Build Google Fonts URL
    $fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', array_map( function( $f ) {
        return 'family=' . $f;
    }, $google_fonts ) ) . '&display=swap';

    wp_enqueue_style( 'ko-base-google-fonts', $fonts_url, [], null );
}
add_action( 'wp_enqueue_scripts', 'ko_base_enqueue_google_fonts' );
add_action( 'enqueue_block_editor_assets', 'ko_base_enqueue_google_fonts' );

/**
 * Front page fallback content.
 *
 * If the front page has no content, load the default content from the theme's
 * defaults folder. This allows the theme to show a nice boilerplate while still
 * allowing users to override it with their own page content.
 *
 * @param string $content The post content.
 * @return string Modified content or default content.
 */
function ko_base_front_page_fallback( string $content ): string {
    // Only apply on front page and main query.
    if ( ! is_front_page() || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }

    // Check if content is empty (strip whitespace and block comments).
    $stripped = preg_replace( '/<!--.*?-->/s', '', $content );
    $stripped = trim( $stripped );

    if ( ! empty( $stripped ) ) {
        return $content;
    }

    // Load default content.
    $default_file = get_template_directory() . '/defaults/front-page-content.html';

    if ( file_exists( $default_file ) ) {
        $default_content = file_get_contents( $default_file );
        if ( $default_content !== false ) {
            // Parse blocks to ensure proper rendering.
            return do_blocks( $default_content );
        }
    }

    return $content;
}
add_filter( 'the_content', 'ko_base_front_page_fallback', 5 );

/**
 * Auto-enqueue interactivity scripts from assets/js/interactivity/
 */
add_action('wp_enqueue_scripts', function() {
    $dir = get_template_directory() . '/assets/js/interactivity/';
    $url = get_template_directory_uri() . '/assets/js/interactivity/';

    if (!is_dir($dir)) return;

    foreach (glob($dir . '*.js') as $script) {
        $handle = 'ko-' . pathinfo($script, PATHINFO_FILENAME);
        wp_enqueue_script_module(
            $handle,
            $url . basename($script),
            ['@wordpress/interactivity'],
            filemtime($script)
        );
    }
});

/**
 * Enqueue interactivity component styles.
 */
add_action('wp_enqueue_scripts', function() {
    $css = get_template_directory() . '/assets/css/interactivity.css';
    if (file_exists($css)) {
        wp_enqueue_style(
            'ko-interactivity',
            get_template_directory_uri() . '/assets/css/interactivity.css',
            [],
            filemtime($css)
        );
    }
});

/**
 * Load CSS for blocks separately for better performance.
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Register custom block styles.
 */
add_action( 'init', function() {
    // Group styles
    register_block_style( 'core/group', [
        'name'  => 'shadow',
        'label' => __( 'Shadow', 'ko-base' ),
    ] );
    register_block_style( 'core/group', [
        'name'  => 'border',
        'label' => __( 'Border', 'ko-base' ),
    ] );
    register_block_style( 'core/group', [
        'name'  => 'full-height',
        'label' => __( 'Full Height', 'ko-base' ),
    ] );

    // Columns styles
    register_block_style( 'core/columns', [
        'name'  => 'reverse',
        'label' => __( 'Reverse on Mobile', 'ko-base' ),
    ] );

    // Button styles
    register_block_style( 'core/button', [
        'name'  => 'outline',
        'label' => __( 'Outline', 'ko-base' ),
    ] );

    // Image styles
    register_block_style( 'core/image', [
        'name'  => 'shadow',
        'label' => __( 'Shadow', 'ko-base' ),
    ] );
    register_block_style( 'core/image', [
        'name'  => 'rounded',
        'label' => __( 'Rounded', 'ko-base' ),
    ] );

    // List styles
    register_block_style( 'core/list', [
        'name'  => 'no-disc',
        'label' => __( 'No Bullets', 'ko-base' ),
    ] );

    // Cover styles
    register_block_style( 'core/cover', [
        'name'  => 'rounded',
        'label' => __( 'Rounded', 'ko-base' ),
    ] );
} );

/**
 * Register pattern categories.
 */
add_action( 'init', function() {
    register_block_pattern_category( 'ko-heroes', [
        'label' => __( 'Heroes', 'ko-base' ),
    ] );
    register_block_pattern_category( 'ko-sections', [
        'label' => __( 'Sections', 'ko-base' ),
    ] );
    register_block_pattern_category( 'ko-cta', [
        'label' => __( 'Call to Action', 'ko-base' ),
    ] );
} );

/**
 * Enqueue block styles CSS.
 */
add_action( 'wp_enqueue_scripts', function() {
    $css = get_template_directory() . '/assets/css/block-styles.css';
    if ( file_exists( $css ) ) {
        wp_enqueue_style(
            'ko-block-styles',
            get_template_directory_uri() . '/assets/css/block-styles.css',
            [],
            filemtime( $css )
        );
    }
} );
add_action( 'enqueue_block_editor_assets', function() {
    $css = get_template_directory() . '/assets/css/block-styles.css';
    if ( file_exists( $css ) ) {
        wp_enqueue_style(
            'ko-block-styles-editor',
            get_template_directory_uri() . '/assets/css/block-styles.css',
            [],
            filemtime( $css )
        );
    }
} );

/**
 * Enqueue preview receiver script when ko_preview query param is present.
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( isset( $_GET['ko_preview'] ) && $_GET['ko_preview'] === 'true' ) {
        wp_enqueue_script(
            'ko-preview-receiver',
            get_template_directory_uri() . '/assets/js/receiver.js',
            [],
            filemtime( get_template_directory() . '/assets/js/receiver.js' ),
            true
        );
    }
} );

/**
 * Allow iframe embedding when ko_preview is active.
 */
add_action( 'send_headers', function() {
    if ( isset( $_GET['ko_preview'] ) && $_GET['ko_preview'] === 'true' ) {
        // Remove X-Frame-Options
        header_remove( 'X-Frame-Options' );
        // Allow framing from your ko-chat domain
        header( 'Content-Security-Policy: frame-ancestors http://94.124.95.36:3000 https://94.124.95.36:3000' );
    }
} );
