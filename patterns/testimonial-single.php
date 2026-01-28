<?php
/**
 * Title: Testimonial Single
 * Slug: ko-base/testimonial-single
 * Categories: ko-sections
 * Keywords: testimonial, quote, review, customer
 * Description: A large single testimonial with avatar.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}},"textColor":"gray-300"} -->
        <p class="has-text-align-center has-gray-300-color has-text-color" style="font-size:3rem;line-height:1">"</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.6"}},"textColor":"contrast"} -->
        <p class="has-text-align-center has-contrast-color has-text-color" style="font-size:1.5rem;line-height:1.6">This product has completely transformed how we work. The simplicity and power combined make it an essential tool for our team.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
            <!-- wp:image {"width":"64px","height":"64px","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
            <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:9999px"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=128&h=128&fit=crop&crop=face" alt="Customer photo" style="border-radius:9999px;width:64px;height:64px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast"} -->
                <p class="has-text-align-center has-contrast-color has-text-color" style="font-weight:600">Sarah Johnson</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"0.875rem"}}} -->
                <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:0.875rem">CEO at TechCorp</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
