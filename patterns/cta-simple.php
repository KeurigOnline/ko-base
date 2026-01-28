<?php
/**
 * Title: CTA Simple
 * Slug: ko-base/cta-simple
 * Categories: ko-cta
 * Keywords: cta, call to action, button, banner
 * Description: A simple call-to-action section with heading and button.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","textColor":"base"} -->
        <h2 class="wp-block-heading has-text-align-center has-base-color has-text-color">Ready to get started?</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#a3a3a3"}}} -->
        <p class="has-text-align-center has-text-color" style="color:#a3a3a3">Join thousands of happy customers and start building your next project today.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
            <!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button">Get Started Free</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
