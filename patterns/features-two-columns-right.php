<?php

/**
 * Title: Features two columns right
 * Slug: nexara/features-two-columns-right
 * Categories: featured
 * Keywords: Features Two Columns right
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/quality-1.svg",
    $get_url . "/assets/images/quality-2.svg",
    $get_url . "/assets/images/quality-3.svg",
    $get_url . "/assets/images/quality-4.svg",
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|30"}}},"textColor":"secondary"} -->
            <h2 class="wp-block-heading has-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Why do companies partner with us?', 'nexara'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"secondary","fontSize":"small"} -->
            <p class="has-secondary-color has-text-color has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Our commitment to delivering reliable solutions on time and within budget sets us apart, creating long-lasting partnerships built on trust and success.', 'nexara'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'nexara'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"layout":{"type":"default"}} -->
        <div class="wp-block-column"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
            <div class="wp-block-columns alignwide" style="margin-bottom:20px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="object-fit:cover;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Full transparency', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e("We believe in full transparency, providing clear communication and regular updates throughout every stage of the project. Our clients always know what's happening.", 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Affordable cost', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('Our services are designed to be profitable, providing high-quality solutions without breaking the bank. We offer competitive pricing that aligns with your budget.', 'nexara'); ?></p>
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
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Technical expertise', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('With years of experience across multiple industries, we bring a diverse skill set that enhances our ability to solve complex and critical problems and offer innovative solutions that modernize the web.', 'nexara'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xx-small"},"border":{"radius":"20px"}},"backgroundColor":"bg-color","className":"height-full","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group height-full has-bg-color-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"Nexara-Duotone-Primary"} -->
                        <figure class="wp-block-image aligncenter size-full Nexara-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt=""/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}},"typography":{"lineHeight":1.4}},"textColor":"heading","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20);line-height:1.4"><?php esc_html_e('Dedicated Support', 'nexara'); ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
                        <p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9"><?php esc_html_e('We provide personalized, round-the-clock support, ensuring your systems are always running smoothly and any issues are addressed promptly, fostering long-term partnerships.', 'nexara'); ?></p>
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