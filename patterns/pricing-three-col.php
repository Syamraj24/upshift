<?php

/**
 * Title: Pricing Three Column
 * Slug: upshift/pricing-three-column
 * Categories: pricing
 * Keywords: Pricing Three Column
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [$get_url . "assets/images/tickcircle.svg"];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"heading","className":"wp-block-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:800"><?php esc_html_e('Choose a plan, and get creative.', 'upshift'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Choose a plan tailored to your needs', 'upshift'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|55","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--55);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|55","right":"var:preset|spacing|55","bottom":"var:preset|spacing|55","left":"var:preset|spacing|55"},"blockGap":"0"},"border":{"radius":"12px","width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;padding-top:var(--wp--preset--spacing--55);padding-right:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--55);padding-left:var(--wp--preset--spacing--55)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700">
                    <?php esc_html_e('Lite', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size" style="margin-bottom:0"><?php esc_html_e('Perfect to get started', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xlarge"} -->
                <h4 class="wp-block-heading has-text-align-center has-xlarge-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:800"><?php esc_html_e('$19.00', 'upshift'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Analytics', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Email &amp; SMS reminders', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('24 X 7 Customer support', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|55","right":"var:preset|spacing|55","bottom":"var:preset|spacing|55","left":"var:preset|spacing|55"},"blockGap":"0"},"border":{"radius":"12px","width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;padding-top:var(--wp--preset--spacing--55);padding-right:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--55);padding-left:var(--wp--preset--spacing--55)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700">
                    <?php esc_html_e('Pro', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size" style="margin-bottom:0"><?php esc_html_e('Perfect to get started', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xlarge"} -->
                <h4 class="wp-block-heading has-text-align-center has-xlarge-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:800"><?php esc_html_e('$25.00', 'upshift'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Advanced analytics', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Email &amp; SMS reminders', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('100% Template edit', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->


        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|55","right":"var:preset|spacing|55","bottom":"var:preset|spacing|55","left":"var:preset|spacing|55"},"blockGap":"0"},"border":{"radius":"12px","width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;padding-top:var(--wp--preset--spacing--55);padding-right:var(--wp--preset--spacing--55);padding-bottom:var(--wp--preset--spacing--55);padding-left:var(--wp--preset--spacing--55)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Ultimate', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size" style="margin-bottom:0"><?php esc_html_e('Perfect to get started', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xlarge"} -->
                <h4 class="wp-block-heading has-text-align-center has-xlarge-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:800"><?php esc_html_e('$35.00', 'upshift'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Daily performance reports', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Dedicated assistance', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"center","className":"Upshift-Duotone-Primary"} -->
                    <figure class="wp-block-image aligncenter size-large Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"small"} -->
                    <p class="has-heading-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('24 X 7 Customer support', 'upshift'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
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