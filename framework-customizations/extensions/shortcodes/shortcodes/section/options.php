<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'section_class' => array(
		'label' => __('Section Class', 'fw'),
		'desc'  => __('CSS class name', 'fw'),
		'type'  => 'text',
	),
	'section_id' => array(
		'label' => __('Section ID', 'fw'),
		'desc'  => __('CSS ID name', 'fw'),
		'type'  => 'text',
	),
	'margin'   => array(
		'label' => esc_html__( 'Margin', 'fw' ),
		'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
	),
	'padding'   => array(
		'label' => esc_html__( 'Padding', 'fw' ),
		'desc'  => __( 'Enter your custom padding (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
	),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'background_position' => array(
		'label' => __('Background Position', 'fw'),
		'desc'  => __('Background Position', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'center center'	=>'Center Center',
			'center bottom'	=>'Center Bottom',
			'center top'	=>'Center Top',
			'left center'	=>'Left Center',
			'left bottom'	=>'Left Bottom',
			'left top'	=>'Left Top',
			'right center'	=>'Right Center',
			'right bottom'	=>'Right Bottom',
			'right top'	=>'Right Top',
		)
	),
	'background_repeat' => array(
		'label' => __('Background Repeat', 'fw'),
		'desc'  => __('Background Repeat', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'repeat'	=>'Repeat',
			'no-repeat'	=>'No Repeat',
			'repeat-x'	=>'Repeat X',
			'repeat-y'	=>'Repeat Y',
		)
	),
	'background_size' => array(
		'label' => __('Background Size', 'fw'),
		'desc'  => __('Background Size', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'auto'	=>'Auto',
			'contain'	=>'Contain',
			'cover'	=>'Cover',
		)
	),
	'background_height' => array(
		'label' => __('Background Height', 'fw'),
		'desc'  => __('Background Height in % or px or vh', 'fw'),
		'type'  => 'text',
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	)	
);
