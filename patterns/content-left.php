<?php

/**
 * Title: Content left
 * Slug: upshift/content-left
 * Categories: featured
 * Keywords: Content left 
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/support.jpg",
];
?>
<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"textColor":"secondary"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center has-secondary-color has-text-color"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"letterSpacing":"0.01em"}}} -->
                <h2 class="wp-block-heading" style="letter-spacing:0.01em;line-height:1.3"><?php esc_html_e('Up Shift got your back with friendly support', 'upshift'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"}},"fontSize":"xmedium"} -->
                <p class="has-xmedium-font-size" style="font-style:normal;font-weight:700;line-height:1.6"><?php esc_html_e('We are dedicated to helping businesses improve the experience they provide for their customers.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Phasellus dignissim est tempor eros pulvinar luctus nam vulputate risus a efficitur cursus vivera allora .', 'upshift'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('Mauris arcu odio, porttitor nec nunc sit amet, pulvinar vestibulum dui duis viverra erat mauris consectetur viverra quam.', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:20px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->