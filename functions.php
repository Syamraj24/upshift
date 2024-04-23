<?php
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '0.1.0');
}
/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if (!function_exists('upshift_styles')) :

	function upshift_styles()
	{
		// Register Stylesheet
		wp_enqueue_style('upshift-style', trailingslashit(get_template_directory_uri()) . 'assets/css/style.css', array(), _S_VERSION);
	}

endif;

add_action('wp_enqueue_scripts', 'upshift_styles');

require get_template_directory() . '/includes/setup.php';


/**
 * Register block styles.
 */

if ( ! function_exists( 'upshift_register_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Upshift 1.0
	 * @return void
	 */
	function upshift_register_block_styles() {
		if ( function_exists( 'register_block_style' ) ) :
			register_block_style(
				'core/list',
				array(
					'name'            => 'checkmark-list',
					'label'           => __( 'Checkmark', 'upshift' ),
					/*
					* Styles for the custom checkmark list block style
					*/
					   'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2714";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
				)
			);
			register_block_style(
				'core/navigation-link',
				array(
					'name'            => 'arrow-link',
					'label'           => __( 'With arrow', 'upshift' ),
					/*
					* Styles for the custom arrow nav link block style
					*/
					   'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
				)
			);
		endif;
	}
endif;

add_action( 'init', 'upshift_register_block_styles' );