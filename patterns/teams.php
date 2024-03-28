<?php

/**
 * Title: Team Members
 * Slug: teams
 * Categories: gallery
 * Keywords: Team Members
 */
$get_url = trailingslashit(get_template_directory_uri());
$images = [
    $get_url . "/assets/images/team-1.jpg",
    $get_url . "/assets/images/team-2.jpg",
    $get_url . "/assets/images/team-3.jpg",
    $get_url . "/assets/images/team-4.jpg",
    $get_url . "/assets/images/team-5.jpg",
    $get_url . "/assets/images/team-6.jpg",
    $get_url . "/assets/images/team-7.jpg",
    $get_url . "/assets/images/team-8.jpg"

];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|55"}}},"backgroundColor":"white","className":"blog-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide blog-head has-white-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--55)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"569px"}} -->
        <div class="wp-block-group"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('The amazing team behind our company', 'upshift'); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Join Team', 'upshift'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Patrick Meyer', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Chairman &amp; CEO', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Cameron Williamson', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Senior manager', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->


                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Jane Cooper', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Project manager', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Wade Warren', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Senior developer', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Liam Kim', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Resolution Expert', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Ava Rodriguez', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Solving Guru', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[6]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Cody Fischer', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Satisfaction Champion', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[7]); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
                <h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Leslie Alexander', 'upshift'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
                <p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Business Developer', 'upshift'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->