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
