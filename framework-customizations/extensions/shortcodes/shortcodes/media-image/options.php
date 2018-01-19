<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'image_class'  => array(
		'type'  => 'text',
		'label' => __( 'CSS Class', 'fw' ),
		'desc'  => __( '', 'fw' )
	),
	'margin'   => array(
		'label' => esc_html__( 'Margin for Image', 'fw' ),
		'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
	),
	'image_hover'  => array(
		'label'   => __( 'Image Hover effect', 'fw' ),
		'desc'    => __( 'Add a mouse hover effect to the image', 'fw' ),
		'type'    => 'select',
		'choices' => array(
			'no'      => __('No', 'fw'),
			'yes' => __( 'Yes, slightly increase the image size', 'fw' ),
		)
	),
	'image_alignment'  => array(
		'label'   => __( 'Image Alignment', 'fw' ),
		'desc'    => __( 'Choose here, how to align your image', 'fw' ),
		'type'    => 'select',
		'choices' => array(
			'aligncenter'      => __('Center', 'fw'),
			'alignright' => __( 'Right', 'fw' ),
			'alignleft' => __( 'Left', 'fw' ),
			'alignnone' => __( 'No Alignment', 'fw' ),
		)
	),
	'size'             => array(
		'type'    => 'group',
		'options' => array(
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'fw' ),
				'desc'  => __( 'Set image width', 'fw' ),
				'value' => 300
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'fw' ),
				'desc'  => __( 'Set image height', 'fw' ),
				'value' => 200
			)
		)
	),
	'image-link-group' => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'type'  => 'text',
				'label' => __( 'Image Link', 'fw' ),
				'desc'  => __( 'Where should your image link to?', 'fw' )
			),
			'target' => array(
				'type'         => 'switch',
				'label'        => __( 'Open Link in New Window', 'fw' ),
				'desc'         => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
				'right-choice' => array(
					'value' => '_blank',
					'label' => __( 'Yes', 'fw' ),
				),
				'left-choice'  => array(
					'value' => '_self',
					'label' => __( 'No', 'fw' ),
				),
			),
		)
	)
);