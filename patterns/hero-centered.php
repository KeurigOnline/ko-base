<?php
/**
 * Title: Hero Centered
 * Slug: ko-base/hero-centered
 * Categories: ko-heroes
 * Keywords: hero, banner, heading, intro
 * Description: A centered hero section with heading, text, and CTA buttons.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3.5rem","lineHeight":"1.1"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:3.5rem;line-height:1.1">Build something amazing together</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"}},"textColor":"secondary"} -->
        <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:1.25rem">Start your next project with a modern foundation. Simple, flexible, and designed to scale with your needs.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
            <!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button">Get Started</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
