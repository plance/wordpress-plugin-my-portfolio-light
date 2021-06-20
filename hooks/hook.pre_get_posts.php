<?php defined('ABSPATH') || exit;
//===========================================================
// CHANGE PAGE QUERY
//===========================================================

add_action('pre_get_posts', function($Query)
{
	if(is_admin())
	{
		if($Query -> query['post_type'] != PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'])
		{
			return true;
		}

		if('' == $Query -> get('orderby'))
		{
			$Query -> set('meta_key', 'wppl_sort');
			$Query -> set('orderby', 'meta_value_num');
			$Query -> set('order', 'DESC');
		}

		if('sort' == $Query -> get('orderby'))
		{
			$Query -> set('meta_key', 'wppl_sort');
			$Query -> set('orderby', 'meta_value_num');
		}
	}
});