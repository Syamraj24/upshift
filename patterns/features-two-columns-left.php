<?php

/**
 * Title: Features two columns left
 * Slug: nexara/features-two-columns-left
 * Categories: featured
 * Keywords: Features two columns left
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/features-1.svg",
    $get_url . "/assets/images/features-2.svg",
    $get_url . "/assets/images/features-3.svg",
    $get_url . "/assets/images/features-4.svg",
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"49.15%","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="flex-basis:49.15%"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <div class="wp-block-columns alignwide"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                        <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Custom', 'nexara'); ?><br><?php esc_html_e('API Development', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Custom API development enables seamless integration between different software systems, allowing them to communicate and share data effectively.', 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                        <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Software', 'nexara'); ?><br><?php esc_html_e('Testing', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('We identify and address potential issues through comprehensive testing strategies before they impact your users, guaranteeing a high-quality product.', 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <div class="wp-block-columns alignwide"><!-- wp:column {"className":"height-full"} -->
                <div class="wp-block-column height-full"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                        <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Mobile', 'nexara'); ?><br><?php esc_html_e('Application', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('By developing intuitive and responsive mobile apps, we can help you reach a wider audience and strengthen customer relationships through interactive features and seamless functionality.', 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading"} -->
                        <h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Web', 'nexara'); ?><br><?php esc_html_e('Optimization', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e("By optimizing elements like page load times, and server configurations, we can boost your website's efficiency and search engine rankings, leading to increased traffic and user engagement.", 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"right","wideSize":"480px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}}},"textColor":"secondary","className":"wp-block-heading"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px"><?php esc_html_e('Custom software development', 'nexara'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"spacing":{"padding":{"bottom":"10px"}}},"textColor":"secondary","fontSize":"small"} -->
                <p class="has-secondary-color has-text-color has-small-font-size" style="padding-bottom:10px;font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('We create tailored solutions that address your unique business needs and challenges and ensure that every feature aligns with your goals, offering greater flexibility and scalability than off-the-shelf products.', 'nexara'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-link-color wp-element-button"><?php esc_html_e('Get Started', 'nexara'); ?></a></div>
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