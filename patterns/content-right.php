<?php

/**
 * Title: Content right
 * Slug: nexara/content-right
 * Categories: featured
 * Keywords: Content right
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/business-products.jpg",
];
?>

<!-- wp:group {"align":"fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|xlarge"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained","wideSize":"980px"}} -->
    <div class="wp-block-group alignwide has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"textColor":"secondary"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center has-secondary-color has-text-color"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:20px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"letterSpacing":"0.01em"}}} -->
                    <h2 class="wp-block-heading" style="letter-spacing:0.01em;line-height:1.3"><?php esc_html_e('Building apps and websites that stand out.', 'nexara'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"}},"fontSize":"xmedium"} -->
                    <p class="has-xmedium-font-size" style="font-style:normal;font-weight:700;line-height:1.6"><?php esc_html_e('We are always on the lookout for ways to make each of our projects stand out and deliver the best to our clients.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
                    <p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8"><?php esc_html_e('From incorporating modern trends to the constant lookout for recent developments,  we always live up to the hype with our projects.', 'nexara'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->