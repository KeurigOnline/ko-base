<?php
/**
 * Title: Testimonial Grid
 * Slug: ko-base/testimonial-grid
 * Categories: ko-sections
 * Keywords: testimonial, quote, review, customer, grid, cards
 * Description: A grid of testimonial cards.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">Loved by teams worldwide</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
        <p class="has-text-align-center has-secondary-color has-text-color">See what our customers have to say about their experience.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"base","className":"is-style-border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-border has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                <!-- wp:paragraph {"textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color">"The best tool we've ever used. Simple, powerful, and reliable."</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
                    <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:9999px"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="" style="border-radius:9999px;width:40px;height:40px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}}} -->
                        <p style="font-size:0.875rem;font-weight:600">Michael Chen</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"textColor":"tertiary","style":{"typography":{"fontSize":"0.75rem"}}} -->
                        <p class="has-tertiary-color has-text-color" style="font-size:0.75rem">Designer at Studio</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"base","className":"is-style-border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-border has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                <!-- wp:paragraph {"textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color">"Saved us countless hours. The automation features are game-changing."</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
                    <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:9999px"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face" alt="" style="border-radius:9999px;width:40px;height:40px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}}} -->
                        <p style="font-size:0.875rem;font-weight:600">Emily Davis</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"textColor":"tertiary","style":{"typography":{"fontSize":"0.75rem"}}} -->
                        <p class="has-tertiary-color has-text-color" style="font-size:0.75rem">Product Manager</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"base","className":"is-style-border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-border has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                <!-- wp:paragraph {"textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color">"Outstanding support team. They went above and beyond to help us."</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"9999px"}}} -->
                    <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:9999px"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="" style="border-radius:9999px;width:40px;height:40px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}}} -->
                        <p style="font-size:0.875rem;font-weight:600">James Wilson</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"textColor":"tertiary","style":{"typography":{"fontSize":"0.75rem"}}} -->
                        <p class="has-tertiary-color has-text-color" style="font-size:0.75rem">Founder at StartupXYZ</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
