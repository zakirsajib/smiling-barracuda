<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Team Member', 'fw' ),
	'description' => __( 'Add a Team Member', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'popup_size'  => 'medium',
	'title_template' => '
    	<b>{{- title }}</b>
    	<div class="item-desc">
            {{ if( typeof o.name != "undefined" && o.name ) { }}
                {{- o.name.replace(/(<([^>]+)>)/ig,"").split(/\s+/, 25).join(" ") }}
            {{ } }}
            {{ if( typeof o.job != "undefined" && o.job ) { }}
                <i>({{- o.job }})</i>
            {{ } }}

    	</div>',
);