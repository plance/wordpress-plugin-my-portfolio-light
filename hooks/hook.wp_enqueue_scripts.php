<?php defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', function()
{
	wp_register_style('wp-my-portfolio-light', PLG_MY_PORTFOLIO_LIGHT['URL'] .'assets/css/style.css');
	
});
