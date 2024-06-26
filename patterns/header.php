<?php

/**
 * Title: Header
 * Slug: nexara/header
 * Categories: header
 * Keywords: Header
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0","top":"0"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"7.06rem"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:0;padding-bottom:0">
            <!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":40,"shouldSyncIcon":true,"className":"Nexara-Duotone-Secondary"} /-->
                <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"textColor":"secondary","fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:navigation {"textColor":"secondary","className":"nav-menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"2em"}},"fontSize":"x-small"} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Features', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Company', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
        <!-- wp:buttons {"className":"nav-btn","style":{"spacing":{"blockGap":"0.75rem"}},"fontSize":"small"} -->
        <div class="wp-block-buttons has-custom-font-size nav-btn has-small-font-size">
            <!-- wp:button {"textColor":"secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"width":"1px"}},"className":"is-style-outline btn-nofill","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline btn-nofill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-secondary-color has-text-color wp-element-button" style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Sign In', 'nexara'); ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-fill","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-fill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Get Started', 'nexara'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"className":"mob-menu","layout":{"type":"constrained"}} -->
        <div class="wp-block-group mob-menu">
            <!-- wp:navigation {"textColor":"secondary","backgroundColor":"bg-color","overlayMenu":"always","icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"2em"}},"fontSize":"x-small"} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Features', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Company', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'nexara'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:buttons {"className":"mob-nav-btn-","layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"blockGap":"2rem"}},"fontSize":"small"} -->
            <div class="wp-block-buttons has-custom-font-size mob-nav-btn has-small-font-size">
                <!-- wp:button {"textColor":"secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"width":"1px"}},"className":"is-style-outline btn-nofill","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-outline btn-nofill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-secondary-color has-text-color wp-element-button" style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Sign In', 'nexara'); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-fill","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Get Started', 'nexara'); ?></a></div>
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