<?php

/**
 * Title: Content right count
 * Slug: nexara/content-right-count
 * Categories: featured
 * Keywords: Content right count
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/product.jpg",
];
?>

<!-- wp:group {"align":"fill","style":{"spacing":{"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","wideSize":"980px"}} -->
    <div class="wp-block-group alignwide has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"textColor":"secondary"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center has-secondary-color has-text-color"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:20px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"letterSpacing":"0.01em"}}} -->
                    <h2 class="wp-block-heading" style="letter-spacing:0.01em;line-height:1.3"><?php esc_html_e('We keep our word and deliver on our commitments.', 'nexara'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.6"}},"fontSize":"xmedium"} -->
                    <p class="has-xmedium-font-size" style="font-style:normal;font-weight:600;line-height:1.6"><?php esc_html_e('Our commitment to meeting deadlines and exceeding expectations builds trust and ensures long-lasting relationships with our clients.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"17.29%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.29%"><!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading"><?php esc_html_e('14+', 'nexara'); ?></h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"73.12%","style":{"border":{"left":{"color":"var:preset|color|Border","width":"1px"}},"spacing":{"padding":{"left":"20px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--border);border-left-width:1px;padding-left:20px;flex-basis:73.12%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
                                <p class="has-small-font-size" style="line-height:1.7"><?php esc_html_e('We have over 14 years of experience in web development', 'nexara'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- wp:columns {"verticalAlignment":"center"} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"17.29%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.29%"><!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading"><?php esc_html_e('1500 +', 'nexara'); ?></h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"73.12%","style":{"border":{"left":{"color":"var:preset|color|Border","width":"1px"}},"spacing":{"padding":{"left":"20px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--border);border-left-width:1px;padding-left:20px;flex-basis:73.12%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
                                <p class="has-small-font-size" style="line-height:1.7"><?php esc_html_e('We have served over 1500 satisfied customers.', 'nexara'); ?></p>
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
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->