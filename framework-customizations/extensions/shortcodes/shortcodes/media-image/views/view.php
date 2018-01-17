<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	return;
}

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';

if ( ! empty( $width ) && ! empty( $height ) ) {
	$image = fw_resize( $atts['image']['attachment_id'], $width, $height, true );
	$class = $atts['image_class'];
} else {
	$image = $atts['image']['url'];
	$class = $atts['image_class'];
}

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$img_attributes = array(
	'src' => $image,
	'alt' => $alt ? $alt : $image,
	'class'	=> $class,
);

if(!empty($width)){
	$img_attributes['width'] = $width;
}

if(!empty($height)){
	$img_attributes['height'] = $height;
}

$margin = '';
$section_style ='';
if ( ! empty( $atts['margin'] ) ) {
	$margin = 'margin:' . $atts['margin'] . ';';
	$section_style = 'style="' . esc_attr($margin) . '"';
}

if ( empty( $atts['link'] ) ) {
	echo '<div '.$section_style.' >';
	echo fw_html_tag('img', $img_attributes);
	echo '</div>';
} else {
	echo '<div '. $section_style.' >';
	echo fw_html_tag('a', array(
		'href' => $atts['link'],
		'target' => $atts['target']
	), fw_html_tag('img',$img_attributes));
	echo '</div>';
}
