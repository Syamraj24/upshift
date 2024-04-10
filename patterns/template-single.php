<?php

/**
 * Title: Template single
 * Slug: upshift/template-single
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"50"},"blockGap":"12px"}},"backgroundColor":"bg-color","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-color has-bg-color-background-color has-text-color has-background" style="padding-top:32px;padding-bottom:32px;padding-left:50">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"secondary","textColor":"white","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-white-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"bottom":"4px","top":"4px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"secondary","className":"upshift-post-category","fontSize":"xxx-small"} /-->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"textColor":"bg-color"} -->
                <p class="has-bg-color-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"> <?php esc_html_e('|', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"className":"upshift-single-post-header","layout":{"type":"constrained"}} -->
                <div class="wp-block-group upshift-single-post-header">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"textColor":"bg-color"} -->
                    <p class="has-bg-color-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Written by : ', 'upshift'); ?> </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author-name /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} -->
                <p class="has-bg-color-color has-text-color has-link-color"><?php esc_html_e('|', 'upshift'); ?></p>
                <!-- /wp:paragraph -->


                <!-- wp:group {"className":"upshift-single-post-header","layout":{"type":"constrained"}} -->
                <div class="wp-block-group upshift-single-post-header">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} -->
                    <p class="has-bg-color-color has-text-color has-link-color"><?php echo do_shortcode('[custom_metabox_shortcode]');
                                                                                esc_html_e('.read - ', 'upshift'); ?> </p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-date /-->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|55","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"bg-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
        <div class="wp-block-group">
            <!-- wp:post-featured-image {"width":"100%","height":"512px","style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:post-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em","lineHeight":1.9}},"className":"blog-content","fontSize":"x-small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"upshift/related-blog"} /-->

<!-- wp:pattern {"slug":"upshift/add"} /-->