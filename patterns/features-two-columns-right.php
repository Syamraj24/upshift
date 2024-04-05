<?php

/**
 * Title: Features two columns right
 * Slug: upshift/features-two-columns-right
 * Categories: featured
 * Keywords: Features Three Columns right
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/res.svg",
    $get_url . "/assets/images/cart.svg",
    $get_url . "/assets/images/grid.svg",
    $get_url . "/assets/images/chat.svg",
];
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|30"}}},"textColor":"bg-color"} -->
            <h2 class="wp-block-heading has-bg-color-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Build your SaaS website with Up Shift', 'upshift'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"bg-color","fontSize":"small"} -->
            <p class="has-bg-color-color has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Create, build and ship your products real faster. With your own customized portal. showcase your Business like never before', 'upshift'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"secondary","className":"btn-2"} -->
                <div class="wp-block-button btn-2"><a class="wp-block-button__link has-secondary-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"layout":{"type":"default"}} -->
        <div class="wp-block-column"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
            <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","id":145,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-145" style="object-fit:cover;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Fully responsive', 'upshift'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","id":145,"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-145" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('E-commerce', 'upshift'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide"><!-- wp:column {"className":"height-full"} -->
                <div class="wp-block-column height-full"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","id":145,"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-145" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Multi layout template', 'upshift'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","id":145,"sizeSlug":"full","linkDestination":"none","className":"Upshift-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-145" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"meadium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Amazing support staff', 'upshift'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Aenean ac bibendum ipsum. Sed et nisi pharetra, blandit justo a, mollis justo. Nunc id fermentum augue. Etiam condimentum vel justo in tincidunt.', 'upshift'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
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