<?php
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
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
