<?php

/**
 * Title: Team Members Six Column
 * Slug: upshift/teams-six-col
 * Categories: gallery
 * Keywords: Team Members Six Column
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/team-1.jpg",
    $get_url . "/assets/images/team-2.jpg",
    $get_url . "/assets/images/team-3.jpg",
    $get_url . "/assets/images/team-4.jpg",
    $get_url . "/assets/images/team-5.jpg",
    $get_url . "/assets/images/team-6.jpg"
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|100","left":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--100)">
        <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"xxxlarge"} -->
        <h2 class="wp-block-heading has-text-align-center has-xxxlarge-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Meet our team', 'upshift'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"x-small"} -->
        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e("A strong leadership team has a clear vision for the organization's future and works towards achieving it.", 'upshift'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Patrick Meyer', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Chairman &amp; CEO', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Cameron Williamson', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Senior manager', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Jane Cooper', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Project manager', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Wade Warren', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Senior developer', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Liam Kim', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Resolution Expert', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)">
                        <!-- wp:image {"id":533,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                        <figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-533" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:800"><?php esc_html_e('Ava Rodriguez', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontSize":"xxx-small"} -->
                        <p class="has-text-align-center has-grey-color has-text-color has-link-color has-xxx-small-font-size"><?php esc_html_e('Solving Guru', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
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