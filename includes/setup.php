<?php
add_action('init', function () {
    remove_theme_support('core-block-patterns');
}, 9);

function nexara_register_block_pattern_category()
{
    register_block_pattern_category(
        'pricing',
        array(
            'label' => esc_html__('Pricing', 'nexara'),
        )
    );
}
add_action('init', 'nexara_register_block_pattern_category');
