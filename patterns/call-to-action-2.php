<?php

/**
 * Title: Call to action.
 * Slug: upshift/call-to-action-2
 * Categories: featured
 * Keywords: Call to action
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . 'assets/images/cta-bg.png',
];
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:cover {"url":"<?php echo esc_url($images[0]); ?>","id":39,"dimRatio":50,"align":"wide","style":{"border":{"radius":"24px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-cover alignwide" style="border-radius:24px;margin-top:0;margin-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-39" alt="" src="<?php echo esc_url($images[0]); ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)">

                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"white","className":"wp-block-heading"} -->
                <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-weight:800"><?php esc_html_e('Everything on the web starts with a conversation. Let’s talk.', 'upshift'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Contact', 'upshift'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->