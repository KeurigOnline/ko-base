<?php
/**
 * Title: CTA Banner
 * Slug: ko-base/cta-banner
 * Categories: ko-cta
 * Keywords: cta, call to action, banner, background, cover
 * Description: A full-width CTA with background image overlay.
 */
?>
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1600&h=600&fit=crop","dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--50)">
    <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1600&h=600&fit=crop" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","textColor":"base"} -->
            <h2 class="wp-block-heading has-text-align-center has-base-color has-text-color">Take your business to the next level</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d4d4d4"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#d4d4d4">Start your free 14-day trial. No credit card required. Cancel anytime.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                <!-- wp:button {"backgroundColor":"primary","textColor":"contrast"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button">Start Free Trial</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"color":{"text":"#ffffff"}},"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#ffffff">Contact Sales</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
