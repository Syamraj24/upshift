<?php

/**
 * Title: Features Three Columns button
 * Slug: upshift/features-three-columns-button
 * Categories: featured
 * Keywords: Features Three Columns button
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/cloud-computing.svg",
    $get_url . "/assets/images/cube.svg",
    $get_url . "/assets/images/badge.svg",
    $get_url . "/assets/images/chatting.svg",
    $get_url . "/assets/images/design.svg",
    $get_url . "/assets/images/security.svg",
];
?>
<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|55","left":"0"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--55);margin-left:0"><?php esc_html_e('Unique features.', 'upshift'); ?><br><?php esc_html_e('World class support.', 'upshift'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":1.4},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Everything is in the cloud', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":1.4},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Easy management', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Quality assurance', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('24/7 live support', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Customize your UIs', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"primary","className":"height-full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group height-full has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"width":"60px","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                <figure class="wp-block-image size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-145" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Advanced security', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                <p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-buttons alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->