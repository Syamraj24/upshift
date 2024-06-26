<?php

/**
 * Title: Hero banner
 * Slug: nexara/hero-banner
 * Categories: banner
 * Keywords: Hero Banner
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [$get_url . "assets/images/hero-banner.jpg"];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0">
        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":[]}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"level":1,"textColor":"heading","className":"wp-block-heading"} -->
            <h1 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e('Crafting Code, Creating Solutions.', 'nexara'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Find everything you need to grow and scale your business in one place. Our mission is to transform ideas into innovative technology that makes a difference.', 'nexara'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Start a Demo', 'nexara'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"49.16%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:49.16%">
            <!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"30px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:30px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->