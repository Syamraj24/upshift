<?php

/**
 * Title: Features two columns left
 * Slug: features-two-columns-left
 * Categories: features
 */
$get_url = get_template_directory_uri();

$images = [
    $get_url . "/assets/images/features-1.svg",
    $get_url . "/assets/images/features-2.svg",
    $get_url . "/assets/images/features-3.svg",
    $get_url . "/assets/images/features-4.svg",
];
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge"}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"width":"49.15%","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
            <div class="wp-block-column" style="flex-basis:49.15%"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
                    <div class="wp-block-columns alignwide"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"34px","bottom":"36px","left":"34px"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px","color":"#e8e8e8"}},"backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"right"}} -->
                            <div class="wp-block-group height-full has-border-color has-white-background-color has-background" style="border-color:#e8e8e8;border-radius:20px;padding-top:36px;padding-right:34px;padding-bottom:36px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-145" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"level":5} -->
                                <h5 class="wp-block-heading">Advanced<br>search</h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                                <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"34px","bottom":"38px","left":"34px"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                            <div class="wp-block-group height-full has-white-background-color has-background" style="border-radius:20px;padding-top:36px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-145" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                                <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Advanced<br>security</h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                                <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
                    <div class="wp-block-columns alignwide"><!-- wp:column {"className":"height-full"} -->
                        <div class="wp-block-column height-full"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"34px","bottom":"38px","left":"34px"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                            <div class="wp-block-group height-full has-white-background-color has-background" style="border-radius:20px;padding-top:36px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-145" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                                <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Fully<br>customizable</h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                                <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","right":"34px","bottom":"38px","left":"34px"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                            <div class="wp-block-group height-full has-white-background-color has-background" style="border-radius:20px;padding-top:36px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-145" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                                <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Global<br>community</h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                                <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"right","wideSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}}},"textColor":"white","className":"wp-block-heading"} -->
                    <h2 class="wp-block-heading has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px">Advanced technology made plain and simple</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"spacing":{"padding":{"bottom":"10px"}}},"textColor":"white","fontSize":"small"} -->
                    <p class="has-white-color has-text-color has-small-font-size" style="padding-bottom:10px;font-style:normal;font-weight:600;line-height:1.8">Orci molestie nam vulputate nunc habitant gravida. Interdum vitae vivamus ipsum aliquet consectetur aliquam. Nunc neque.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"black","className":"btn-fill"} -->
                        <div class="wp-block-button btn-fill"><a class="wp-block-button__link has-black-color has-primary-background-color has-text-color has-background wp-element-button">Get Started</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
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