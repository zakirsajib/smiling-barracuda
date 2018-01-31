<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-blog-posts', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/css/styles.css');
	wp_enqueue_script(
	'fw-shortcode-blog-posts-isotope', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/js/isotope.pkgd.min.js');
	wp_enqueue_script(
	'fw-shortcode-blog-posts-ias', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/js/infinite-scroll.pkgd.min.js');
	wp_enqueue_script(
	'fw-shortcode-custom-blog-posts-isotope', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/js/custom.js');