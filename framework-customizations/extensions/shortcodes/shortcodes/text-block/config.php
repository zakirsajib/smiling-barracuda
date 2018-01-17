<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => '   ' . esc_html__( 'Text Block', 'jevelin' ),
		'description' => esc_html__( 'Add a Text Block', 'jevelin' ),
		'tab'         => esc_html__( 'Content Elements', 'jevelin' ),
		'popup_size'  => 'medium',
        'title_template' => '
        	<b>{{= title }}</b>
        	<div class="sh-builder-item-desc">
	        	{{ if( typeof o.text != "undefined" && o.text ) { }}
	        		{{- o.text.replace(/(<([^>]+)>)/ig,"").split(/\s+/, 25).join(" ") }}
	    		{{ } }}
        	</div>',
	)
);
