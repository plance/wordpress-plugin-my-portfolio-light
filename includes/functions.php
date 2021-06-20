<?php defined('ABSPATH') || exit;
//===========================================================
// FUNCTIONS
//===========================================================

function my_portfolio_light__view($path, $array = [], $ext = 'php')
{
	if(is_array($array))
	{
		extract($array, EXTR_SKIP);
	}

	ob_start();

	try
	{
		include $path.'.'.$ext;
	}
	catch (Exception $e)
	{
		ob_end_clean();

		throw $e;
	}

	return ob_get_clean();
}


/**
 * Include files
 *
 * @param  string $dir
 * @param  array $folders
 * @return void
 * 
 */
function my_portfolio_light__includes($dir, array $folders)
{
	foreach($folders as $folder)
	{
		$includes_array = glob( $dir . DIRECTORY_SEPARATOR . $folder . '.php');

		if(!empty( $includes_array ))
		{
			foreach($includes_array as $include)
			{
				if(is_file($include))
				{
					require_once($include);
				}
			}
		}
	}
}