<?php

/**
 * Title: Testimonials
 * Slug: nexara/testimonials
 * Categories: featured
 * Keywords: Testimonials
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/avatar-1.png",
    $get_url . "/assets/images/avatar-2.png",
    $get_url . "/assets/images/avatar-3.png",
    $get_url . "/assets/images/avatar-4.png",
];
?>
<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|55"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--55)"><?php esc_html_e('Find out what clients are saying about us.', 'nexara'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|55","bottom":"var:preset|spacing|80","right":"var:preset|spacing|10","left":"var:preset|spacing|10"},"blockGap":"20px"},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"780px","contentSize":""}} -->
    <div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--55);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"10px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained"}} -->
                <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"21px"}},"textColor":"review"} -->
                    <p class="has-review-color has-text-color" style="font-size:21px">★★★★★</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"0","bottom":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"x-small"} -->
                    <p class="has-secondary-color has-text-color has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--10);padding-left:0;line-height:1.9"><?php esc_html_e('This team of designers and developers is my go-to for all my web development projects. We’ve been working together for the past couple of years and have successfully collaborated and completed multiple projects.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"17px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"65px","height":"65px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:100%;width:65px;height:65px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Sarah James', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"textColor":"grey","fontSize":"xx-small"} -->
                            <p class="has-grey-color has-text-color has-xx-small-font-size"><?php esc_html_e('@sarah', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"10px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained"}} -->
                <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"21px"}},"textColor":"review"} -->
                    <p class="has-review-color has-text-color" style="font-size:21px">★★★★★</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9},"spacing":{"padding":{"left":"0","bottom":"10px"}}},"textColor":"secondary","fontSize":"x-small"} -->
                    <p class="has-secondary-color has-text-color has-x-small-font-size" style="padding-bottom:10px;padding-left:0;line-height:1.9"><?php esc_html_e('Developing our cross-platform application and the multiple integrations was made possible thanks to this amazing team and their dedication. Right from the user experience to the functionality, the approach taken is truly commendable', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"17px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"65px","height":"65px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($images[1]); ?>" alt="" style="border-radius:100%;width:65px;height:65px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Jaheim Philip', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"textColor":"grey","fontSize":"xx-small"} -->
                            <p class="has-grey-color has-text-color has-xx-small-font-size"><?php esc_html_e('@philip', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"height-full"} -->
            <div class="wp-block-column height-full"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"10px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained"}} -->
                <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"21px"}},"textColor":"review"} -->
                    <p class="has-review-color has-text-color" style="font-size:21px">★★★★★</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9},"spacing":{"padding":{"left":"0","bottom":"10px"}}},"textColor":"secondary","fontSize":"x-small"} -->
                    <p class="has-secondary-color has-text-color has-x-small-font-size" style="padding-bottom:10px;padding-left:0;line-height:1.9"><?php esc_html_e('The website migration and database optimizations that followed truly enhanced the experience for our users. They successfully migrated all the data to different servers and configured them properly to handle the peak hours.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"17px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"65px","height":"65px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($images[2]); ?>" alt="" style="border-radius:100%;width:65px;height:65px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Cody Fisher', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"textColor":"grey","fontSize":"xx-small"} -->
                            <p class="has-grey-color has-text-color has-xx-small-font-size"><?php esc_html_e('@fisher', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"10px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained"}} -->
                <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"21px"}},"textColor":"review"} -->
                    <p class="has-review-color has-text-color" style="font-size:21px">★★★★★</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9},"spacing":{"padding":{"left":"0","bottom":"10px"}}},"textColor":"secondary","fontSize":"x-small"} -->
                    <p class="has-secondary-color has-text-color has-x-small-font-size" style="padding-bottom:10px;padding-left:0;line-height:1.9"><?php esc_html_e('Their excellent content strategy ticked all the right boxes and allowed us to connect strongly with a wider audience effectively. The content strategy is a blend of storytelling with the best SEO practices that yield the best results.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"17px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"65px","height":"65px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($images[3]); ?>" alt="" style="border-radius:100%;width:65px;height:65px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Ronald Richards', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"textColor":"grey","fontSize":"xx-small"} -->
                            <p class="has-grey-color has-text-color has-xx-small-font-size"><?php esc_html_e('@ronald', 'nexara'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->