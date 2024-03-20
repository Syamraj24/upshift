<?php

/**
 * Title: Hero banner
 * Slug: upshift/hero-banner
 * Categories: banner
 * Keywords: Hero Banner
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [$get_url . "assets/images/hero-banner.jpg"];
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":[]}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"textColor":"heading","className":"wp-block-heading"} -->
            <h1 class="wp-block-heading has-heading-color has-text-color">Focus on your business growth with Round</h1>
            <!-- /wp:heading -->

            <!-- wp:group {"layout":{"type":"constrained","wideSize":"490px","justifyContent":"left","contentSize":"490px"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;line-height:1.8">Create, build and ship your products real faster. With your own customized portal. showcase your Business like never before</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start a Demo</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"49.16%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:49.16%"><!-- wp:image {"align":"center","lightbox":{"enabled":false},"id":91,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"30px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="http://localhost/fse-projects/wp-content/themes/upshift/assets/images/hero-banner.jpg" alt="" class="wp-image-91" style="border-radius:30px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->