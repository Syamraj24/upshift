<?php

/**
 * Title: Related Blog
 * Slug: upshift/related-blog
 * Categories: blog
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"text-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|55"}}},"textColor":"bg-color"} -->
    <h2 class="wp-block-heading has-text-align-center has-bg-color-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--55)"><?php esc_html_e('Related articles', 'upshift'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template -->
        <!-- wp:group {"style":{"border":{"radius":"20px"}},"backgroundColor":"bg-color","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group has-bg-color-background-color has-background" style="border-radius:20px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"25px","bottom":"43px","left":"25px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:25px;padding-bottom:43px;padding-left:25px"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"8px","bottom":"4px","left":"8px","top":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"dark","className":"category","fontSize":"xxx-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"14px"}}},"fontSize":"meadium"} /-->

                <!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results {"fontSize":"x-small"} -->
        <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","className":"aligncenter aligncenter"} -->
        <p class="has-text-align-center aligncenter"></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->