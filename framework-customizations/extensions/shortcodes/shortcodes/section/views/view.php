<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

/* Custom code*/
$section_class_name ='';
if ( ! empty( $atts['section_class'] ) ) {
	$section_class_name = $atts['section_class'];
	$section_extra_classes .= $section_class_name;
}
$section_id_name ='';
if ( ! empty( $atts['section_id'] ) ) {
	$section_id_name = $atts['section_id'];
}

$background_position ='';
$background_repeat ='';
$background_size ='';
if ( ! empty( $atts['background_image'] )):
	
	if ( ! empty( $atts['background_position'] ) ) {
	$background_position = 'background-position:' . $atts['background_position'] . ';';
	}
	
	if ( ! empty( $atts['background_repeat'] ) ) {
		$background_repeat = 'background-repeat:' . $atts['background_repeat'] . ';';
	}
	
	if ( ! empty( $atts['background_size'] ) ) {
		$background_size = 'background-size:' . $atts['background_size'] . ';';
	}
endif;

$background_height ='';
if ( ! empty( $atts['background_height'] ) ) {
	$background_height = 'height:' . $atts['background_height'] . ';';
}
$padding ='';
if ( ! empty( $atts['padding'] ) ) {
	$padding = 'padding:' . $atts['padding'] . ';';
}
$margin ='';
if ( ! empty( $atts['margin'] ) ) {
	$margin = 'margin:' . $atts['margin'] . ';';
}


$section_style   = 'style="' . esc_attr($bg_color . $bg_image . $background_position . $background_repeat . $background_size . $background_height . $padding . $margin) . '"';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';
?>
<section class="fw-main-row <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?> id="<?php echo esc_attr($section_id_name) ?>">
	<div class="<?php echo esc_attr($container_class); ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>
