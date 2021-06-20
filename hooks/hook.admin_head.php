<?php defined('ABSPATH') || exit;

add_action('admin_head', function()
{
	global $post_type;

	if(PLG_MY_PORTFOLIO_LIGHT['POST_TYPE_PORTFOLIO'] == $post_type)
	{
		?>
			<style type="text/css">
				.column-column_preview {
					width: 75px;
					text-align: center;
				 }
				 .column-column_sort {
					 width: 100px;
					 text-align: center;
				  }
			</style>
		<?php
	}
});