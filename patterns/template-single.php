<?php

/**
 * Title: Template single
 * Slug: upshift/template-single
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"secondary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)">
        <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"bottom":"4px","top":"4px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"dark","className":"category","fontSize":"xxx-small"} /-->

        <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
        <p style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">|</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph -->
            <p>Written By :  </p>
            <!-- /wp:paragraph -->

            <!-- wp:post-author-name /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
        <p style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">|</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph -->
            <p>7 mins read - </p>
            <!-- /wp:paragraph -->

            <!-- wp:post-date /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|55"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
    <div class="wp-block-group">
        <!-- wp:post-featured-image {"width":"100%","height":"512px","style":{"border":{"radius":"20px"}}} /-->

        <!-- wp:post-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em","lineHeight":1.9}},"className":"blog-content","fontSize":"x-small"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"related-blog"} /-->
<!-- wp:pattern {"slug":"upshift/add"} /-->
