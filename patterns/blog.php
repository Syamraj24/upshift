<?php
/**
 * Title: Blog
 * Slug: blog
 * Categories: blog
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|55"}}},"className":"blog-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide blog-head" style="padding-bottom:var(--wp--preset--spacing--55)"><!-- wp:heading -->
<h2 class="wp-block-heading">Browse our<br>articles &amp; resources</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-dawnpink-border-color" style="border-width:1px;border-radius:20px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"25px","bottom":"43px","left":"25px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:25px;padding-bottom:43px;padding-left:25px"><!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"padding":{"right":"8px","bottom":"4px","left":"8px","top":"4px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"dark","className":"category","fontSize":"xxx-small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4}},"fontSize":"meadium"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"fontSize":"x-small"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","className":"aligncenter aligncenter"} -->
<p class="has-text-align-center aligncenter"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->