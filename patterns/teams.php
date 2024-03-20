
<?php
/**
 * Title: Team Members
 * Slug: teams
 * Categories: gallery
 */
$get_url = get_template_directory_uri();

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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|55"}}},"backgroundColor":"white","className":"blog-head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide blog-head has-white-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--55)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"569px"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">The amazing team behind our company</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Join Team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Patrick Meyer</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Chairman &amp; CEO</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Cameron Williamson</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Senior manager</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->


<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Jane Cooper</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Project manager</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Wade Warren</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Senior developer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Liam Kim</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Resolution Expert</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[5] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Ava Rodriguez</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Solving Guru</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[6] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Cody Fischer</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Satisfaction Champion</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":354,"width":280,"height":280,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"img-full"} -->
<figure class="wp-block-image size-full is-resized has-custom-border img-full"><img src="<?php echo esc_url( $images[7] ); ?>" alt="" class="wp-image-354" style="border-radius:20px" width="280" height="280"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"2px"}},"typography":{"lineHeight":1.3}},"fontSize":"meadium"} -->
<h5 class="wp-block-heading has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:2px;line-height:1.3">Leslie Alexander</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"naturalgrey","fontSize":"x-small"} -->
<p class="has-naturalgrey-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500">Business Developer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->