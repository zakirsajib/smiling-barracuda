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

$image_alignment = !empty($atts['image_alignment']) ? "{$atts['image_alignment']}" : '';

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$img_attributes = array(
	'src' => $image,
	'alt' => $alt ? $alt : $image,
	'class'	=> $class .' '. $image_alignment,
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

$img_hover = !empty($atts['image_hover']) ? "{$atts['image_hover']}" : '';

if ( empty( $atts['link'] ) ) {
	echo '<div class="fw-image-hover '.$img_hover.'" '.$section_style.' >';
	echo fw_html_tag('img', $img_attributes);
	echo '</div>';
} else {
	echo '<div class="fw-image-hover '.$img_hover.'" '. $section_style.' >';
	echo fw_html_tag('a', array(
		'href' => $atts['link'],
		'target' => $atts['target']
	), fw_html_tag('img',$img_attributes));
	echo '</div>';
}
