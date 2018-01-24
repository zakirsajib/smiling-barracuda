<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Blog Posts', 'jevelin' ),
		'description' => esc_html__( 'Add a Blog Posts', 'jevelin' ),
		'tab'         => esc_html__( 'Content Elements', 'jevelin' ),
		'popup_size'  => 'medium',
		'icon' => 'dashicons dashicons-welcome-write-blog',
        'title_template' => '
        	<b>{{- title }}</b>
		  	<div class="sh-builder-item-desc">

		        {{ if( typeof o.limit != "undefined" && o.limit ) { }}
		            {{- o.limit }} items,
		        {{ } }}

		        {{ if( typeof o.columns != "undefined" && o.columns ) { }}
		            {{- o.columns }} columns,
		        {{ } }}
		        
		        {{ if( typeof o.style != "undefined" && o.style ) { }}
		            Style {{- o.style }}
		        {{ } }}
		        
			</div>',
	)
);
