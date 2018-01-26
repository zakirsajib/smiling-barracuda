<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'id' => array( 'type' => 'unique' ),

	'limit' => array(
	    'type'  => 'slider',
	    'value' => 6,
	    'properties' => array(
	        'min' => 1,
	        'max' => 41,
	    ),
	    'label' => esc_html__('Limit posts', 'fw'),
	    'desc'  => esc_html__('Choose post limit. Choose 41 posts to select unlimited posts', 'fw'),
	),

	'style' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Style', 'fw'),
		'desc'  => esc_html__( 'Choose main style for recent posts', 'fw' ),
		'value'	  => 'grid',
		'choices' => array(
			'grid' => esc_html__('Grid', 'fw'),
			'largeimage' => esc_html__('Image only', 'fw'),
			'timeline' => esc_html__('Timeline', 'fw'),
			'classic1' => esc_html__('Classic 1', 'fw'),
			'classic2' => esc_html__('Classic 2', 'fw'),
		)
	),

	'columns' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Columns', 'fw'),
		'desc'  => esc_html__( 'Choose columns count', 'fw' ),
		'value'	  => '2',
		'choices' => array(
			'2' => esc_html__( '2 columns (Only applicable to Grid and Image Only style)', 'fw' ),
			'4' => esc_html__( '4 columns (Only applicable to Grid and Image Only style)', 'fw' ),
		)
	),

    'categories' => array(
        'type'  => 'multi-select',
        'label' => esc_html__('Blog Categories', 'fw'),
        'desc'  => esc_html__('Choose which blog categories you want to show', 'fw'),
        'population' => 'taxonomy',
        'source' => 'category',
        'prepopulate' => 10,
        'limit' => 100,
    ),

	'tags' => array(
        'type'  => 'multi-select',
        'label' => esc_html__('Blog Tags', 'fw'),
        'desc'  => esc_html__('Choose which blog tags you want to show', 'fw'),
        'population' => 'taxonomy',
        'source' => 'post_tag',
        'prepopulate' => 10,
        'limit' => 100,
    ),

	'order_by' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Order By', 'fw'),
		'desc'  => esc_html__( 'Choose product order by', 'fw' ),
		'value'	  => 'date',
		'choices' => array(
			'date' => esc_html__('Date', 'fw'),
			'name' => esc_html__('Name', 'fw'),
			'author' => esc_html__('Author', 'fw'),
			'rand' => esc_html__('Random', 'fw'),
			'comment_count' => esc_html__('Comment Count', 'fw'),
		)
	),

	'order' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Order', 'fw'),
		'desc'  => esc_html__( 'Choose product order', 'fw' ),
		'value'	  => 'desc',
		'choices' => array(
			'asc' => esc_html__('Ascending', 'fw'),
			'desc' => esc_html__('Descending', 'fw'),
		)
	),

);
