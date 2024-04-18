<?php

/**
 * Title: Content left list
 * Slug: upshift/content-left-list
 * Categories: featured
 * Keywords: Content left list
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/check.svg",
    $get_url . "/assets/images/product.jpg",

];
?>
<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"textColor":"secondary"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center has-secondary-color has-text-color"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"letterSpacing":"0.01em"}}} -->
                <h2 class="wp-block-heading" style="letter-spacing:0.01em;line-height:1.3"><?php esc_html_e('Solutions for the unique business', 'upshift'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.6"}},"fontSize":"xmedium"} -->
                <p class="has-xmedium-font-size" style="font-style:normal;font-weight:600;line-height:1.6"><?php esc_html_e('We are dedicated to helping businesses improve the experience they provide for their customers.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25px","style":{"spacing":[]}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                            <figure class="wp-block-image size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Meet your customer needs with Sense', 'upshift'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25px","style":{"spacing":[]}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                            <figure class="wp-block-image size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Automate managing and communicating ui', 'upshift'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25px","style":{"spacing":[]}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                            <figure class="wp-block-image size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Get your reporting and analytics at one place', 'upshift'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25px","style":{"spacing":[]}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                            <figure class="wp-block-image size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Human support and live chat functionality', 'upshift'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($images[1]); ?>" alt="" style="border-radius:20px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->