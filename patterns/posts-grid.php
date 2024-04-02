<?php

/**
 * Title: Posts Grid
 * Slug: upshift/posts-grid
 * Categories: posts
 * Keywords: posts grid
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--80)">

    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group has-border-color has-dawnpink-border-color" style="border-width:1px;border-radius:20px">
            <!-- wp:post-featured-image {"isLink":true,"height":"250px","style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"bottom":"4px","top":"4px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"dark","className":"category","fontSize":"xxx-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}}},"fontSize":"meadium"} /-->

                <!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"xx-small"} /-->
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
        <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->