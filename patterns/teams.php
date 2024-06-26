<?php

/**
 * Title: Team Members
 * Slug: nexara/teams
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
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|55"}}},"className":"blog-head","layout":{"type":"flex","flexWrap":"ywrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide blog-head" style="padding-bottom:var(--wp--preset--spacing--55)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"569px"}} -->
        <div class="wp-block-group"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('The amazing team behind our company', 'nexara'); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Join Team', 'nexara'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"20px"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column">
                <!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[0]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Patrick Meyer', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Chairman &amp; CEO', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[1]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Cameron Williamson', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Senior manager', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[2]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->


                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Jane Cooper', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Project manager', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[3]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Wade Warren', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Senior developer', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"20px"}}}} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[4]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Liam Kim', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Resolution Expert', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[5]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Ava Rodriguez', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Solving Guru', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[6]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Cody Fischer', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Satisfaction Champion', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
                <figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url($images[7]); ?>" alt="" style="border-radius:20px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"medium"} -->
                <h5 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3"><?php esc_html_e('Leslie Alexander', 'nexara'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"grey","fontSize":"x-small"} -->
                <p class="has-grey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Business Developer', 'nexara'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->