<?php defined('ABSPATH') || exit;

add_action('add_meta_boxes', function()
{
	add_meta_box(
		'mb-'.PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'],
		'Параметры работы',
		function($Post)
		{
			echo my_portfolio_light__view(PLG_MY_PORTFOLIO_LIGHT['PATH'] . '/views/admin/metabox/portfolio', [
				'wppl_link' => get_post_meta($Post -> ID, 'wppl_link', true),
				'wppl_sort' => get_post_meta($Post -> ID, 'wppl_sort', true),
			]);
		},
		PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'],
		'normal',
		'high'
	);
});

add_action('save_post_' . PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'], function($post_ID)
{
	update_post_meta($post_ID, 'wppl_link', filter_input(INPUT_POST, 'portfolio_light__wppl_link', FILTER_DEFAULT));
	update_post_meta($post_ID, 'wppl_sort', filter_input(INPUT_POST, 'portfolio_light__wppl_sort', FILTER_SANITIZE_NUMBER_INT));
});