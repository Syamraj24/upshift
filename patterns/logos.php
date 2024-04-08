<?php

/**
 * Title: Logos
 * Slug: upshift/logos
 * Categories: gallery
 * Keywords:Logos
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/Nextmove.svg",
    $get_url . "/assets/images/Ebooks.svg",
    $get_url . "/assets/images/cloud.svg",
    $get_url . "/assets/images/vision.svg",
    $get_url . "/assets/images/rise.svg",


];
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"horizontal"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit"},"spacing":{"padding":{"top":"0","right":"6px","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xmeadium"} -->
        <p class="has-xmeadium-font-size" style="padding-top:0;padding-right:6px;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Trusted by these brands:', 'upshift'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:image {"id":2965,"sizeSlug":"xlarge","linkDestination":"custom","className":"Upshift-Duotone-Primary"} -->
        <figure class="wp-block-image size-xlarge Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-2965" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2964,"sizeSlug":"xlarge","linkDestination":"custom","className":"Upshift-Duotone-Primary"} -->
        <figure class="wp-block-image size-xlarge Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-2964" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2962,"sizeSlug":"xlarge","linkDestination":"custom","className":"Upshift-Duotone-Primary"} -->
        <figure class="wp-block-image size-xlarge Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-2962" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2963,"sizeSlug":"xlarge","linkDestination":"custom","className":"Upshift-Duotone-Primary"} -->
        <figure class="wp-block-image size-xlarge Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-2963" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2961,"sizeSlug":"xlarge","linkDestination":"custom","className":"Upshift-Duotone-Primary"} -->
        <figure class="wp-block-image size-xlarge Upshift-Duotone-Primary"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-2961" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->