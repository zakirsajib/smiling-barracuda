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
	    'label' => esc_html__('Limit posts', 'jevelin'),
	    'desc'  => esc_html__('Choose post limit. Choose 41 posts to select unlimited posts', 'jevelin'),
	),

	'style' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Style', 'jevelin'),
		'desc'  => esc_html__( 'Choose main style for recent posts', 'jevelin' ),
		'value'	  => 'grid',
		'choices' => array(
			'grid' => esc_html__('Grid', 'jevelin'),
			'largeimage' => esc_html__('Image only', 'jevelin'),
			'timeline' => esc_html__('Timeline', 'jevelin'),
			'classic1' => esc_html__('Classic 1', 'jevelin'),
			'classic2' => esc_html__('Classic 2', 'jevelin'),
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
        'label' => esc_html__('Blog Categories', 'jevelin'),
        'desc'  => esc_html__('Choose which blog categories you want to show', 'jevelin'),
        'population' => 'taxonomy',
        'source' => 'category',
        'prepopulate' => 10,
        'limit' => 100,
    ),

	'tags' => array(
        'type'  => 'multi-select',
        'label' => esc_html__('Blog Tags', 'jevelin'),
        'desc'  => esc_html__('Choose which blog tags you want to show', 'jevelin'),
        'population' => 'taxonomy',
        'source' => 'post_tag',
        'prepopulate' => 10,
        'limit' => 100,
    ),

	'order_by' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Order By', 'jevelin'),
		'desc'  => esc_html__( 'Choose product order by', 'jevelin' ),
		'value'	  => 'date',
		'choices' => array(
			'date' => esc_html__('Date', 'jevelin'),
			'name' => esc_html__('Name', 'jevelin'),
			'author' => esc_html__('Author', 'jevelin'),
			'rand' => esc_html__('Random', 'jevelin'),
			'comment_count' => esc_html__('Comment Count', 'jevelin'),
		)
	),

	'order' => array(
		'type'    => 'radio',
		'label'   => esc_html__('Order', 'jevelin'),
		'desc'  => esc_html__( 'Choose product order', 'jevelin' ),
		'value'	  => 'desc',
		'choices' => array(
			'asc' => esc_html__('Ascending', 'jevelin'),
			'desc' => esc_html__('Descending', 'jevelin'),
		)
	),

);
