<?php

/**
 * Title: Features Three Columns
 * Slug: nexara/features-three-columns
 * Categories:featured
 * Keywords: Features Three Columns
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/value-1.svg",
    $get_url . "/assets/images/value-2.svg",
    $get_url . "/assets/images/value-3.svg",
    $get_url . "/assets/images/value-4.svg",
    $get_url . "/assets/images/value-5.svg",
    $get_url . "/assets/images/value-6.svg",
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|55","left":"0"}}},"textColor":"secondary"} -->
    <h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--55);margin-left:0"><?php esc_html_e('The values that', 'nexara'); ?><br><?php esc_html_e('drive our company.', 'nexara'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"left","sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image alignleft size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('Do the right thing', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('Set the bar for quality', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('Celebrate diversity', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('The world a bit better', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[4]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('Live statistics', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"pshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full pshift-Duotone-Primary"><img src="<?php echo esc_url($images[5]); ?>" alt=""/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);line-height:1.4"><?php esc_html_e('Grow your following', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->