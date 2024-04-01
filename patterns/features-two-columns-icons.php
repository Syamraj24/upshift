<?php

/**
 * Title: Features two columns icons
 * Slug: features-two-columns-icons
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

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|55","left":"0"},"padding":{"bottom":"10px"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--55);margin-left:0;padding-bottom:10px">Unique features.<br> World class support.</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"text-color","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-text-color-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Everything is in the cloud</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-145" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Easy management</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-145" /></figure>
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
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","textColor":"text-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-text-color-color has-primary-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Quality assurance</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-145" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"text-color","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-text-color-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">24/7 live support</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-145" /></figure>
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
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"text-color","textColor":"bg-color","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-bg-color-color has-text-color-background-color has-text-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"bg-color","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-bg-color-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Customize your UIs</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-145" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"className":"min-height"} -->
        <div class="wp-block-column min-height"><!-- wp:group {"style":{"spacing":{"padding":{"top":"37px","right":"34px","bottom":"32px","left":"34px"},"blockGap":"12px"},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-radius:20px;padding-top:37px;padding-right:34px;padding-bottom:32px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Advanced security</h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-145" /></figure>
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