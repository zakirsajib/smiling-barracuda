<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-blog-posts', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/css/styles.css');