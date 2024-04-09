<?php

/**
 * Title: Hero
 * Slug: upshift/hero
 * Categories: banner
 * Keywords: Hero
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"24px"}},"backgroundColor":"secondary","textColor":"bg-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-color-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"><?php esc_html_e('We are Up Shift &', 'upshift'); ?><br><?php esc_html_e('we create digital things', 'upshift'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
        <p class="has-text-align-center has-white-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Create, build and ship your products real faster. With your own customized portal. showcase your Business like never before', 'upshift'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->