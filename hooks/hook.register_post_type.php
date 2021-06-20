<?php defined('ABSPATH') || exit;
//===========================================================
// POST TYPE
//===========================================================

add_action('init', function()
{
	register_post_type(PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'], [
		'labels'		=> [
			'name'			=> 'Портфолио',
			'singular_name'	=> 'Портфолио',
		],
		'public'		=> false,
		'show_ui'		=> true,
		'has_archive'	=> true,
		'rewrite'		=> [
			'slug'		=> PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO']
		],
		'can_export'	=> true,
		'menu_icon'		=> 'dashicons-format-gallery',	
		'supports'		=> [
			'title', 
			'editor', 
			'thumbnail', 
		],
	]);

	add_filter('manage_'.PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'].'_posts_columns', function($defaults)
	{
		$columns = array();

		foreach($defaults as $k => $v)
		{
			if($k == 'title')
			{
				$columns['column_preview'] = 'Превью';
			}
			if($k == 'date')
			{
				$columns['column_sort'] = 'Сортировка';
			}
			$columns[$k] = $v;
		}

		return $columns;
	}, 10);

	add_action('manage_'.PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'].'_posts_custom_column', function($column_name, $post_ID) {
		switch($column_name)
		{
			case 'column_preview':
				echo get_the_post_thumbnail($post_ID, array(50));
			break;
			case 'column_sort':
				echo get_post_meta($post_ID, 'wppl_sort', true);
			break;
		}
	}, 10, 2);

	/** Set column as sorting */
	add_filter('manage_edit-'.PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'].'_sortable_columns', function($columns)
	{
		$columns['column_sort'] = 'sort';

		return $columns;
	});
});
