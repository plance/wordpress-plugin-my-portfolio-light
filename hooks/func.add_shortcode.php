<?php defined('ABSPATH') || exit;

add_shortcode('wp-portfolio-light', 	function()
{
	wp_enqueue_style('wp-my-portfolio-light');
	
	$Posts = get_posts([
		'orderby'		=> 'meta_value',
		'order'			=> 'DESC',
		'post_type'		=> PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'],
		'post_status'	=> 'publish',
		'numberposts'	=> -1,
		'meta_query' => [
			[
				'key' => 'wppl_sort',
				'type' => 'NUMERIC'
			]
		]
	]);
	
	return my_portfolio_light__view(PLG_MY_PORTFOLIO_LIGHT['PATH'] . '/views/shortcode/grid', array(
		'Posts' => $Posts
	));
});