<?php

/**
 * Title: Hero banner with background
 * Slug: upshift/hero-banner-bg-cover
 * Categories: banner
 * Keywords: hero Banner with background
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/bg-main.jpg",
];
?>
<!-- wp:cover {"url":"<?php echo esc_url($images[0]); ?>","id":18,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"0","right":"0"}}},"className":"height-mob","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull height-mob" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--100);padding-right:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url($images[0]); ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <h1 class="wp-block-heading has-text-align-left has-white-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:800"><?php esc_html_e('Who are', 'upshift'); ?><br><?php esc_html_e('we?', 'upshift'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:group {"layout":{"type":"constrained","wideSize":"480px","justifyContent":"left","contentSize":"481px"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
                <p class="has-white-color has-text-color has-link-color has-small-font-size"><?php esc_html_e("We are a small team of skilled and enthusiastic professionals who thrive on challenges and excel in turning ideas into reality. upshift was founded in 2024, with a vision to redefine the digital experience.", 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Explore Our Values', 'upshift'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->