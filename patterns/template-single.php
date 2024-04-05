<?php

/**
 * Title: Template single
 * Slug: upshift/template-single
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px"},"blockGap":"12px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-bg-color-color has-secondary-background-color has-text-color has-background" style="padding-top:32px;padding-bottom:32px">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
        <!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"780px","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"bottom":"8px"}}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained","wideSize":"594px"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"4px","right":"var:preset|spacing|10","left":"var:preset|spacing|10","bottom":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"green","textColor":"secondary","className":"category","fontSize":"xxx-small"} /-->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"","className":"author","layout":{"type":"default"}} -->
                <div class="wp-block-column is-vertically-aligned-center author">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"className":"author-name","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
                    <div class="wp-block-group author-name has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8">
                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Written by :', 'upshift'); ?>  </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-author-name /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
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

        <!-- wp:post-content {"className":"blog-content","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em","lineHeight":1.9}},"fontSize":"x-small"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"related-blog"} /-->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:pattern {"slug":"adds"} /-->