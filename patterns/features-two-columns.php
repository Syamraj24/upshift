<?php

/**
 * Title: Features two columns
 * Slug: features-two-columns
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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"text-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"bg-color"} -->
    <div class="wp-block-columns alignwide has-bg-color-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0","right":"0","left":"0"}}},"textColor":"bg-color"} -->
            <h2 class="wp-block-heading has-text-align-left has-bg-color-color has-text-color" style="margin-top:0;margin-right:0;margin-left:0"><?php esc_html_e("Still not convinced? Here's a few more services for you", 'upshift'); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Mauris sed lectus ipsum. Ut at tincidunt quam. Nunc rhoncus tempus ipsum vitae pharetra. Ut et leo at metus luctus condimentum quis eget lectus. Cras sed feugiat eros. Maecenas aliquet facilisis .', 'upshift'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|55"}}}} -->
            <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--55)"><!-- wp:button {"backgroundColor":"primary","textColor":"text-color","className":"btn-2"} -->
                <div class="wp-block-button btn-2"><a class="wp-block-button__link has-text-color-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-145" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Create projects', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontSize":"x-small"} -->
                <p class="has-text-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-145" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Get detailed stats', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontSize":"x-small"} -->
                <p class="has-text-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-145" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Automatic backup', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontSize":"x-small"} -->
                <p class="has-text-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-bg-color-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-145" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
                <h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Multiple teams', 'upshift'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontSize":"x-small"} -->
                <p class="has-text-color-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->