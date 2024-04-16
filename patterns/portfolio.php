<?php

/**
 * Title: Portfolio
 * Slug: upshift/portfolio
 * Categories: gallery
 * Keywords: Portfolio
 */

$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "assets/images/portfolio-1.jpg",
    $get_url . "assets/images/portfolio-2.jpg",
    $get_url . "assets/images/portfolio-3.jpg",
    $get_url . "assets/images/portfolio-4.jpg",
    $get_url . "assets/images/portfolio-5.jpg",
    $get_url . "assets/images/portfolio-6.jpg"
];

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"heading","className":"wp-block-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-weight:800"><?php esc_html_e('Creative Works', 'upshift'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|55"}}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--55);font-style:normal;font-weight:500"><?php esc_html_e('Step into my world of creative prowess, where ideas take shape and innovation flourishes. Explore an eclectic mix of projects spanning design, writing, and multimedia endeavors.', 'upshift'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
            <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Innovation', 'upshift'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
            <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Versatility', 'upshift'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
            <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Impact', 'upshift'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
                <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Precision', 'upshift'); ?></a></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
                <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Distinction', 'upshift'); ?></a></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":677,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-677" style="border-radius:12px" /></a></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmeadium"} -->
                <h3 class="wp-block-heading has-xmeadium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Engagement', 'upshift'); ?></a></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->