<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'tab'         => __('Layout Elements', 'fw'),
		'title'       => __('Section', 'fw'),
		'description' => __('Add a Section', 'fw'),
		'type'        => 'section', // WARNING: Do not edit this
		'title_template' => '
        	{{= title }}
	        	{{ if( typeof o.section_class != "undefined" && o.section_class ) { }}
	        		class name: {{- o.section_class }}
	    		{{ } }}
        ',
	)
);