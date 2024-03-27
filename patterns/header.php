<?php

/**
 * Title: Header
 * Slug: upshift/header
 * Categories: header
 * Keywords: Header
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/site-logo.png",
];
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0","top":"0"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"7.06rem"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:0;padding-bottom:0"><!-- wp:image {"id":2956,"sizeSlug":"xlarge","linkDestination":"custom"} -->
            <figure class="wp-block-image size-xlarge"><a href="http://localhost/fse-projects"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-2956" /></a></figure>
            <!-- /wp:image -->
            <!-- wp:navigation {"textColor":"nav-menu","className":"nav-menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"2em"}},"fontSize":"x-small"} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Features', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Company', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
        <!-- wp:buttons {"className":"nav-btn","style":{"spacing":{"blockGap":"0.75rem"}},"fontSize":"small"} -->
        <div class="wp-block-buttons has-custom-font-size nav-btn has-small-font-size"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline btn-nofill","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline btn-nofill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Sign In', 'upshift'); ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-fill","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-fill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"className":"mob-menu","layout":{"type":"constrained"}} -->
        <div class="wp-block-group mob-menu">
            <!-- wp:navigation {"textColor":"nav-menu","overlayMenu":"always","icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"2em"}},"fontSize":"x-small"} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Features', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Company', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'upshift'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:buttons {"className":"mob-nav-btn-","layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"blockGap":"2rem"}},"fontSize":"small"} -->
            <div class="wp-block-buttons has-custom-font-size mob-nav-btn has-small-font-size"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline btn-nofill","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-outline btn-nofill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Sign In', 'upshift'); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-fill","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->