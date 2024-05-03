<?php

/**
 * Title: Features two columns
 * Slug: nexara/features-two-columns
 * Categories: featured
 * Keywords: Features two columns
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/service-1.svg",
    $get_url . "/assets/images/service-2.svg",
    $get_url . "/assets/images/service-3.svg",
    $get_url . "/assets/images/service-4.svg",
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"secondary"} -->
    <div class="wp-block-columns alignwide has-secondary-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0","right":"0","left":"0"}}},"textColor":"secondary"} -->
            <h2 class="wp-block-heading has-text-align-left has-secondary-color has-text-color" style="margin-top:0;margin-right:0;margin-left:0"><?php esc_html_e("We offer a lot more!", 'nexara'); ?><br><?php esc_html_e(" Our host of services encompasses a wide audience.", 'nexara'); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
            <p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('No matter what your requirement is, conversing it together opens up various possibilities and helps you convert your vision into a reality.', 'nexara'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|55"}}}} -->
            <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--55)">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'nexara'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"Border","backgroundColor":"bg-color","className":"height-full has-Border-border-color","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-Border-border-color has-border-color has-border-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Optimized online stores', 'nexara'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
                <p class="has-secondary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Get your store up and running with proper optimizations from day one itself. Sell more and more efficiently with zero chances of downtime for your online stores.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"Border","backgroundColor":"bg-color","className":"height-full has-Border-border-color","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-Border-border-color has-border-color has-border-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt="" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('SEO Optimization', 'nexara'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
                <p class="has-secondary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Multiply and drive your current organic traffic with our SEO optimization techniques. From optimizing the page speed to keyword research, we help you rank better and faster in no time.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"Border","backgroundColor":"bg-color","className":"height-full has-Border-border-color","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-Border-border-color has-border-color has-border-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt="" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Copywriting', 'nexara'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
                <p class="has-secondary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Create copies that convert visitors to users with our in-house talented copywriters who know how to tell a story that drives actions.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"Border","backgroundColor":"bg-color","className":"height-full has-Border-border-color","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-Border-border-color has-border-color has-border-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt="" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Collaborations', 'nexara'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
                <p class="has-secondary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Integrate your team members with all the leading apps and services to stay connected and work from anywhere.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->