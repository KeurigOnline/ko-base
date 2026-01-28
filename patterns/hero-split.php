<?php
/**
 * Title: Hero Split
 * Slug: ko-base/hero-split
 * Categories: ko-heroes
 * Keywords: hero, banner, heading, image, two-column
 * Description: A two-column hero with content on the left and image on the right.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","lineHeight":"1.15"}}} -->
            <h1 class="wp-block-heading" style="font-size:3rem;line-height:1.15">The modern way to build websites</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color" style="font-size:1.125rem">Create beautiful, fast, and accessible websites with the power of blocks. No coding required.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                <!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button">Start Free Trial</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Watch Demo</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"large","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop" alt="Dashboard preview"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
