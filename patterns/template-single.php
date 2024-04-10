<?php

/**
 * Title: Template single
 * Slug: upshift/template-single
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px"},"blockGap":"12px"}},"backgroundColor":"bg-color","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-bg-color-background-color has-text-color has-background" style="padding-top:32px;padding-bottom:32px">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"24px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-bg-color-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"bottom":"4px","top":"4px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"secondary","className":"upshift-post-category","fontSize":"xxx-small"} /-->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} -->
                <p class="has-bg-color-color has-text-color has-link-color">|</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"metadata":{"name":""},"className":"upshift-single-post-author","layout":{"type":"constrained"}} -->
                <div class="wp-block-group upshift-single-post-author">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} -->
                    <p class="has-bg-color-color has-text-color has-link-color">Written by : </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author-name /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color"} -->
                <p class="has-bg-color-color has-text-color has-link-color">|</p>
                <!-- /wp:paragraph -->

                <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} /-->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|55"},"blockGap":"0"}},"backgroundColor":"bg-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--80)">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
        <div class="wp-block-group">
            <!-- wp:post-featured-image {"width":"100%","height":"512px","style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:post-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em","lineHeight":1.9}},"className":"blog-content","fontSize":"x-small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:pattern {"slug":"upshift/related-blog"} /-->

    <!-- wp:pattern {"slug":"upshift/add"} /-->
</div>
<!-- /wp:group -->