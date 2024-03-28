<?php

/**
 * Title: Content right count
 * Slug: content-right-count
 * Categories: featured
 * Keywords: Content right count
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/product.jpg",
];
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"white-smoke","layout":{"type":"constrained","wideSize":"980px"}} -->
    <div class="wp-block-group alignwide has-white-smoke-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"textColor":"night-black"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center has-night-black-color has-text-color"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":378,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-378" style="border-radius:20px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"letterSpacing":"0.01em"}}} -->
                    <h2 class="wp-block-heading" style="letter-spacing:0.01em;line-height:1.3"><?php esc_html_e('Increase your sales and return on investment', 'upshift'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.6"}},"fontSize":"xmeadium"} -->
                    <p class="has-xmeadium-font-size" style="font-style:normal;font-weight:600;line-height:1.6"><?php esc_html_e('Orci molestie nam vulputate nunc habitant gravida. Interdum vitae vivamus ipsum aliquet', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"17.29%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.29%"><!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading"><?php esc_html_e('180+', 'upshift'); ?></h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"73.12%","style":{"border":{"left":{"color":"var:preset|color|cloud","width":"1px"}},"spacing":{"padding":{"left":"20px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--cloud);border-left-width:1px;padding-left:20px;flex-basis:73.12%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
                                <p class="has-small-font-size" style="line-height:1.7"><?php esc_html_e('Orci molestie nam vulputate nunc habitant gravida. Interdum vitae vivamus ipsum aliquet', 'upshift'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- wp:columns {"verticalAlignment":"center"} -->
                        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"17.29%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17.29%"><!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading"><?php esc_html_e('350+', 'upshift'); ?></h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"73.12%","style":{"border":{"left":{"color":"var:preset|color|cloud","width":"1px"}},"spacing":{"padding":{"left":"20px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="border-left-color:var(--wp--preset--color--cloud);border-left-width:1px;padding-left:20px;flex-basis:73.12%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
                                <p class="has-small-font-size" style="line-height:1.7"><?php esc_html_e('Orci molestie nam vulputate nunc habitant gravida. Interdum vitae vivamus ipsum aliquet', 'upshift'); ?></p>
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