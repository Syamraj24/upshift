<?php

/**
 * Title: Features two columns icons
 * Slug: nexara/features-two-columns-icons
 * Categories: featured
 * Keywords: Features two columns icons
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/support-1.svg",
    $get_url . "/assets/images/support-2.svg",
    $get_url . "/assets/images/support-3.svg",
    $get_url . "/assets/images/support-4.svg",
    $get_url . "/assets/images/support-5.svg",
    $get_url . "/assets/images/support-6.svg",
];
?>

<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|55","left":"0"},"padding":{"bottom":"10px"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--55);margin-left:0;padding-bottom:10px"><?php esc_html_e('Features that make', 'nexara'); ?><br><?php esc_html_e('us stand out', 'nexara'); ?> </h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-secondary-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Backup with a single click', 'nexara'); ?></h5>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color","fontSize":"x-small"} -->
                <p class="has-bg-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Keep logs of your progress and revisions and push them to the cloud storage with a single click and access them from anywhere.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Tertiary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Tertiary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                    <!-- /wp:image -->

                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Project Tracking', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Track multiple projects across various teams all from the dashboard. Review status, and pending tasks and alert members of news tasks effortlessly.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","textColor":"secondary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-secondary-color has-primary-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Content strategy', 'nexara'); ?></h5>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Level up your social media strategy and landing pages with effective content plans. Rank higher on SERP and gain the attention you deserve.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Tertiary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Tertiary"><img src="<?php echo esc_url($images[2]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-secondary-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Chat support', 'nexara'); ?></h5>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color","fontSize":"x-small"} -->
                <p class="has-bg-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Our team of expert support staff is available round the clock. From troubleshooting to providing the right solution our team is always there.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-secondary-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Built-in analytics', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|bg-color"}}}},"textColor":"bg-color","fontSize":"x-small"} -->
                <p class="has-bg-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Keep track of your growth and progress as your business scales. The analytics shows you the areas you need to focus more on.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Tertiary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Tertiary"><img src="<?php echo esc_url($images[4]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4"><?php esc_html_e('Cross-platform compatibility', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('All our apps are cross-platform compatible without compromising on features. This ensures all users are prioritized and no one misses out on anything.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                    <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[5]); ?>" alt=""/></figure>
                    <!-- /wp:image -->
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