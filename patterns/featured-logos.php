<?php

/**
 * Title: Featured logos
 * Slug: upshift/featured-logos
 * Categories: gallery
 * Keywords: featured logos
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/images/logo-1.png",
    $get_url . "assets/images/logo-2.png",
    $get_url . "assets/images/logo-3.png",
    $get_url . "assets/images/logo-4.png",
    $get_url . "assets/images/logo-5.png",
    $get_url . "assets/images/logo-6.png"
];

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"secondary","className":"wp-block-heading","fontSize":"large"} -->
    <h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-weight:800"><?php esc_html_e('Trusted by teams around the world', 'upshift'); ?></h2>
    <!-- /wp:heading -->


    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile">
                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[0]); ?>" alt="" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[1]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns is-not-stacked-on-mobile">
                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[2]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[3]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile">
                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[4]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Secondary"} -->
                    <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Secondary"><img src="<?php echo esc_url($images[5]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->