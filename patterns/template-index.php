<?php

/**
 * Title: Template Index
 * Slug: upshift/template-index
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"alignfull has-white-color has-black-background-color has-text-color has-background"} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="margin-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"><?php esc_html_e('Latest Posts', 'upshift'); ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"upshift/posts-grid"} /-->