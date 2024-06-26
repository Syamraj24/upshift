<?php

/**
 * Title: Portfolio
 * Slug: nexara/portfolio
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"heading","className":"wp-block-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-weight:800"><?php esc_html_e('Our Incredible Projects', 'nexara'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|55"}}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--55);font-style:normal;font-weight:500"><?php esc_html_e('We take great pride in completing projects on time, within budget, and, above all, with the expected value. Our list of returning customers keeps expanding, reflecting our commitment to client satisfaction.', 'nexara'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Innovation', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[1]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Versatility', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[2]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Impact', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--20);">
        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[3]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Precision', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[4]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Distinction', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image aligncenter size-full has-custom-border"><a href="#"><img src="<?php echo esc_url($images[5]); ?>" alt="" style="border-radius:12px" /></a></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"className":"wp-block-heading","fontSize":"xmedium"} -->
            <h3 class="wp-block-heading has-xmedium-font-size" style="margin-top:var(--wp--preset--spacing--10)"><a href="#"><?php esc_html_e('Engagement', 'nexara'); ?></a></h3>
            <!-- /wp:heading -->

        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->