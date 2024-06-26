<?php

/**
 * Title: Blog
 * Slug: nexara/blog
 * Categories: posts
 * Keywords: blog
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80)">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|55"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--55)">
    <!-- wp:heading -->
        <h2 class="wp-block-heading"><?php esc_html_e('Explore our', 'nexara'); ?><br><?php esc_html_e('Knowledge Base.', 'nexara'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Read More', 'nexara'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"border":{"radius":"20px","width":"1px"}},"borderColor":"Border","backgroundColor":"background","className":"has-Border-border-color","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group has-Border-border-color has-border-color has-border-border-color has-background-background-color has-background" style="border-width:1px;border-radius:20px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"bottom":"4px","top":"4px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"secondary","className":"Nexara-post-category","fontSize":"xxx-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}}},"fontSize":"medium"} /-->

                <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"xx-small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results {"fontSize":"x-small"} -->
        <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"className":"aligncenter aligncenter","fontSize":"large"} -->
        <p class="has-text-align-center aligncenter has-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e('There are no posts available.', 'nexara'); ?></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->