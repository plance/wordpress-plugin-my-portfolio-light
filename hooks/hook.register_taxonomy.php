<?php defined('ABSPATH') || exit;
//===========================================================
// TAXONOMY
//===========================================================

add_action('init', function()
{
	register_taxonomy(PLG_MY_PORTFOLIO_LIGHT['TAXONOMY_PORTFOLIO'], [PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO']], [
		'label'				=> 'Категории',
		'public'			=> false,
		'hierarchical'      => true,
		'show_admin_column' => true,
		'show_ui'			=> true,
		'rewrite'			=> [
			'slug' => 'portfolio-category'
		]
	]);
});