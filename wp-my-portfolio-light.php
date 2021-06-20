<?php defined('ABSPATH') || exit;
/*
Plugin Name: wp-my-portfolio-light
Description: Create your portfolio
Version: 1.20210620.1227
Author: Pavel
Author URI: //plance.top
*/


define('PLG_MY_PORTFOLIO_LIGHT', [
	'PATH' => __DIR__,
	'URL' => plugin_dir_url(__FILE__),
	'POST_TYPE_PORTFOLIO' => 'portfolio-light',
	'TAXONOMY_PORTFOLIO' => 'portfolio-light_category',
]);


/** Include Core */
include plugin_dir_path(__FILE__) . 'includes' . DIRECTORY_SEPARATOR . 'functions.php';


my_portfolio_light__includes(__DIR__, [
	'includes/*',
	'hooks/*',
]);