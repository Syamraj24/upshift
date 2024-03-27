<?php
//  function upshift_register() {
//     register_block_pattern_category(
//         'hero',
//         [ 
//             'label' => __( 'Hero', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'gallery',
//         [ 
//             'label' => __( 'Gallery', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'features',
//         [ 
//             'label' => __( 'Features', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'testimonial',
//         [ 
//             'label' => __( 'Testimonial', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'blog',
//         [ 
//             'label' => __( 'blog', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'faq',
//         [ 
//             'label' => __( 'Faq', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'contact',
//         [ 
//             'label' => __( 'Contact', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'content',
//         [ 
//             'label' => __( 'Content', 'upshift' )
//         ]
//     );
//     register_block_pattern_category(
//         'count',
//         [ 
//             'label' => __( 'counts', 'upshift' )
//         ]
//     );
//  }
// add_action( 'init', 'upshift_register' );

add_action('init', function() {
    remove_theme_support('core-block-patterns');
}, 9);

function add_custom_meta_box() {
    add_meta_box(
        'custom-meta-box',
        'Custom Meta Box',
        'render_custom_meta_box',
        'post',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');
function render_custom_meta_box($post) {
    // Retrieve the existing meta value
    $meta_value = get_post_meta($post->ID, 'custom_meta_key', true);

    // Output the meta box content
    ?>
    <label for="custom-meta-field">Read Time :</label>
    <input type="text" id="custom-meta-field" name="custom_meta_field" value="<?php echo esc_attr($meta_value); ?>">
    <?php
}
function save_custom_meta_box($post_id) {
    if (isset($_POST['custom_meta_field'])) {
        $meta_value = sanitize_text_field($_POST['custom_meta_field']);
        update_post_meta($post_id, 'custom_meta_key', $meta_value);
    }
}
add_action('save_post', 'save_custom_meta_box');

function custom_metabox() {
    global $post;
    $meta_content = get_post_meta($post->ID, 'custom_meta_key', true);
    return $meta_content;
}
add_shortcode('custom_metabox_shortcode', 'custom_metabox');