<?php

/**
 * Title: Features two columns
 * Slug: features-two-columns
 * Categories: features
 */
$get_url = get_template_directory_uri();

$images = [
    $get_url . "/assets/images/service-1.svg",
    $get_url . "/assets/images/service-2.svg",
    $get_url . "/assets/images/service-3.svg",
    $get_url . "/assets/images/service-4.svg",
];
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|xlarge"}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"white"} -->
<div class="wp-block-columns alignwide has-white-color has-text-color" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0","right":"0","left":"0"}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-left has-white-color has-text-color" style="margin-top:0;margin-right:0;margin-left:0">Still not convinced? Here's a few more services for you</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.8">Mauris sed lectus ipsum. Ut at tincidunt quam. Nunc rhoncus tempus ipsum vitae pharetra. Ut et leo at metus luctus condimentum quis eget lectus. Cras sed feugiat eros. Maecenas aliquet facilisis .</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"black","className":"btn-2"} -->
<div class="wp-block-button btn-2"><a class="wp-block-button__link has-black-color has-primary-background-color has-text-color has-background wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"padding":{"top":"4px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:4px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"38px","right":"34px","bottom":"38px","left":"34px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"left","wideSize":"503px"}} -->
<div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-white-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:38px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service-1.svg")); ?>" alt="" class="wp-image-145"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Create projects</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"38px","right":"34px","bottom":"38px","left":"34px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"left","wideSize":"503px"}} -->
<div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-white-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:38px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service-2.svg")); ?>" alt="" class="wp-image-145"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Get detailed stats</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"padding":{"top":"4px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:4px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"38px","right":"34px","bottom":"38px","left":"34px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"left","wideSize":"503px"}} -->
<div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-white-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:38px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service-3.svg")); ?>" alt="" class="wp-image-145"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Automatic backup</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"38px","right":"34px","bottom":"38px","left":"34px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"dawnpink","backgroundColor":"white","className":"height-full","layout":{"type":"constrained","justifyContent":"left","wideSize":"503px"}} -->
<div class="wp-block-group height-full has-border-color has-dawnpink-border-color has-white-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:38px;padding-right:34px;padding-bottom:38px;padding-left:34px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service-4.svg")); ?>" alt="" class="wp-image-145"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"12px"}},"typography":{"lineHeight":1.4}},"textColor":"heading","className":"wp-block-heading","fontSize":"meadium"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-meadium-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:12px;line-height:1.4">Multiple teams</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.9,"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.02em;line-height:1.9">Morbi magna sapien, ullamcorper a eleifend vitae, iaculis eget massa. Ut feugiat bibendum diam, ut interdum dolor rhoncus in. Maecenas vel nunc enim. Orci varius natoque penatibus et magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->