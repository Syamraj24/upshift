<?php

/**
 * Title: Add
 * Slug: upshift/add
 * Categories: featured
 * Keywords: Add
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "assets/images/business.png"
];
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group " style="margin-top:0;margin-bottom:0"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|50"}},"border":{"radius":"20px"}},"backgroundColor":"primary"} -->
    <div class="wp-block-columns alignwide has-primary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center","width":"53.94%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:53.94%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8},"spacing":{"margin":{"bottom":"12px"}}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="margin-bottom:12px;font-style:normal;font-weight:600;line-height:1.8">
                <?php esc_html_e('Join the innovative community', 'upshift'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"fontSize":"xxlarge"} -->
            <h2 class="wp-block-heading has-xxlarge-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e('Still a bit curious?', 'upshift'); ?><br><?php esc_html_e('Get start today', 'upshift'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"btn-2","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size btn-2 has-x-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'upshift'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"43.03%","layout":{"type":"default"}} -->
        <div class="wp-block-column" style="flex-basis:43.03%"><!-- wp:image {"align":"center","id":268,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
            <figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-268" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->