<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id' => array( 'type' => 'unique' ),
	'general' => array(
		'title'   => esc_html__( 'General', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text' => array(
				'type'   => 'wp-editor',
				'label'  => __( 'Content', 'fw' ),
				'desc'   => __( 'Enter some content for this texblock', 'fw' )
			),
		),
	),
	'styling' => array(
		'title'   => esc_html__( 'Styling', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text_class' => array(
				'label' => __('Text Block Class', 'fw'),
				'desc'  => __('Enter custom css class name', 'fw'),
				'type'  => 'text',
			),
			'text_size'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Font Size', 'fw' ),
				'desc'  => __( 'Enter title size (with <b>px</b>)', 'fw' ),
				'help'  => esc_html__( 'Example: 16px;', 'fw' ), 
			),
			'text_weight'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Font Weight', 'fw' ),
				'desc'  => __( 'Enter title weight i.e. 300/400/500/600/700/800', 'fw' ),
				'help'  => esc_html__( 'Example: 400;', 'fw' ), 
			),
			'line_height'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Line height', 'fw' ),
				'desc'  => __( 'Enter line height (with <b>px</b>)', 'fw' ),
				'help'  => esc_html__( 'Example: 30px;', 'fw' ), 
			),
		
			'text_color' => array(
			    'label' => esc_html__('Text Color', 'fw'),
			    'desc' => esc_html__( 'Select text color', 'fw' ),
			    'type'  => 'color-picker',
			),
		
			'margin'   => array(
				'label' => esc_html__( 'Margin', 'fw' ),
				'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
				'type'  => 'text',
				'value' => '0px 0px 0px 0px',
				'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
			),
			'padding'   => array(
				'label' => esc_html__( 'Padding', 'fw' ),
				'desc'  => __( 'Enter your custom padding (<b>top right bottom left</b>)', 'fw' ),
				'type'  => 'text',
				'value' => '0px 0px 0px 0px',
				'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
			),
			'background_color' => array(
				'label' => __('Background Color', 'fw'),
				'desc'  => __('Please select the background color', 'fw'),
				'type'  => 'color-picker',
			),
		),
	),
);
