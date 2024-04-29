<?php

/**
 * Title: Logos
 * Slug: nexara/logos
 * Categories: gallery
 * Keywords:Logos
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/logo-1.svg",
    $get_url . "/assets/images/logo-2.svg",
    $get_url . "/assets/images/logo-3.svg",
    $get_url . "/assets/images/logo-4.svg",
    $get_url . "/assets/images/logo-5.svg",
    $get_url . "/assets/images/logo-6.svg",


];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"horizontal"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit"},"spacing":{"padding":{"top":"0","right":"6px","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xmedium"} -->
        <p class="has-xmedium-font-size" style="padding-top:0;padding-right:6px;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700">Trusted by these brands:</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
                <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
                <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
                <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[4]); ?>" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"xlarge","linkDestination":"custom","align":"center","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-xlarge Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[5]); ?>" alt="" /></figure>
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
</div>
<!-- /wp:group -->