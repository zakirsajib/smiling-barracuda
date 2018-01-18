<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Button', 'fw' ),
	'description' => __( 'Add a Button', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'popup_size' => 'small',
	'title_template' => '
		{{= title }}
	    	{{ if( typeof o.label != "undefined" && o.label ) { }}
	    		{{- o.label}}
			{{ } }}
		',
);
