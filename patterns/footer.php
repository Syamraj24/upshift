<?php

/**
 * Title: footer
 * Slug: upshift/footer
 * Categories: footer
 * Keywords: Footer
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/footer-logo.png",
];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"380px","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","wideSize":"","justifyContent":"left"}} -->
        <div class="wp-block-column" style="flex-basis:380px"><!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"custom"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-63" /></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"body-alt","fontSize":"small"} -->
            <p class="has-body-alt-color has-text-color has-small-font-size" style="font-style:normal;font-weight:600">Advanced creation platform for web professionals.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"footer-menu","layout":{"type":"default"}} -->
        <div class="wp-block-column footer-menu"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"className":"mob-hidden"} -->
            <div class="wp-block-columns alignwide mob-hidden" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}},"typography":{"fontSize":"20px"}},"textColor":"primary"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:6px;font-size:20px">Pages</h2>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":2.7,"fontStyle":"normal","fontWeight":"400"}}} -->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Features', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Company', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact us', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Reviews', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}},"typography":{"fontSize":"20px"}},"textColor":"primary"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:6px;font-size:20px">Support</h2>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":2.7,"fontStyle":"normal","fontWeight":"400"}}} -->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Docs', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Hooks & Functions', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact us', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Support (Tech)', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Feedback', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Roadmap', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}},"typography":{"fontSize":"20px"}},"textColor":"primary"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:6px;font-size:20px">Company</h2>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":2.7,"fontStyle":"normal","fontWeight":"400"}}} -->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('About us', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Other Products', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Career', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog ', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Privacy Policy ', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}},"typography":{"fontSize":"20px"}},"textColor":"primary"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:6px;font-size:20px">Products</h2>
                    <!-- /wp:heading -->
                    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":2.7,"fontStyle":"normal","fontWeight":"400"}}} -->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Products List', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Plans & Pricing', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"<?php esc_html_e('Partners', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- /wp:navigation -->

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