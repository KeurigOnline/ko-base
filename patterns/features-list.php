<?php
/**
 * Title: Features List
 * Slug: ko-base/features-list
 * Categories: ko-sections
 * Keywords: features, list, alternating, image, text
 * Description: Alternating image and text rows showcasing features.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"margin":{"bottom":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--80)">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Designed for developers</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color">Clean code, great documentation, and a developer-first approach. Build faster with tools that understand your workflow.</p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"is-style-no-disc","textColor":"secondary"} -->
            <ul class="is-style-no-disc has-secondary-color has-text-color">
                <li>✓ Well-documented APIs</li>
                <li>✓ TypeScript support</li>
                <li>✓ Easy customization</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"large","className":"is-style-shadow"} -->
            <figure class="wp-block-image size-large is-style-shadow"><img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=400&fit=crop" alt="Code editor"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}},"className":"is-style-reverse"} -->
    <div class="wp-block-columns alignwide is-style-reverse">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"large","className":"is-style-shadow"} -->
            <figure class="wp-block-image size-large is-style-shadow"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Analytics dashboard"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Built-in analytics</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color">Track performance, understand your users, and make data-driven decisions. All without leaving your dashboard.</p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"is-style-no-disc","textColor":"secondary"} -->
            <ul class="is-style-no-disc has-secondary-color has-text-color">
                <li>✓ Real-time metrics</li>
                <li>✓ Custom reports</li>
                <li>✓ Privacy-focused</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
