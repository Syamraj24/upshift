<?php

/**
 * Title: Template 404
 * Slug: nexara/template-404
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"className":"wp-block-heading"} -->
    <h1 class="wp-block-heading alignwide has-text-align-center" style="font-style:normal;font-weight:800"><?php esc_html_e('Error 404', 'nexara'); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"aligncenter","fontSize":"large"} -->
        <p class="has-text-align-center aligncenter has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e("Unfortunately, this page doesn't exist.", 'nexara'); ?><br><?php esc_html_e('Try another search?', 'nexara'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}},"className":"is-style-swt-search-minimal"} /-->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->