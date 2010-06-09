<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Location Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		David VanScott
 */

// ------------------------------------------------------------------------

/**
 * View Location
 *
 * Determine if a view exists in the current skin and if it doesn't, use the
 * system global one instead
 *
 * @access	public
 * @param	string
 * @return	string
 */	
if ( ! function_exists('view_location'))
{
	function view_location($view = '', $skin = 'default', $section = '', $app_loc = APPPATH)
	{
		$array = array();
		$array['view'] = $view;
		$array['sec'] = $section;
		
		if (is_file($app_loc . 'views/' . $skin . '/' . $section . '/pages/' . $view . '.php'))
		{
			$array['skin'] = $skin;
		}
		else
		{
			$array['skin'] = '_global';
		}
		
		$location = $array['skin'] . '/' . $array['sec'] . '/pages/' . $array['view'];
		
		return $location;
	}
}
	
// ------------------------------------------------------------------------

/**
 * Image Location
 *
 * Determine if an image exists in the current skin and if it doesn't, use the
 * system global one instead
 *
 * @access	public
 * @param	string
 * @return	string
 */	
if ( ! function_exists('img_location'))
{
	function img_location($img = '', $skin = 'default', $section = '', $app_loc = APPPATH, $app_folder = APPFOLDER)
	{
		$array = array();
		$array['img'] = $img;
		$array['sec'] = $section;
		
		if (is_file($app_loc . 'views/' . $skin . '/' . $section . '/img/' . $img))
		{
			$array['skin'] = $skin;
		}
		else
		{
			$array['skin'] = '_global';
		}
		
		$image = $array['skin'] . '/' . $array['sec'] . '/img/' . $array['img'];
		
		return $app_folder . '/views/' . $image;
	}
}
	
// ------------------------------------------------------------------------

/**
 * JS Location
 *
 * Determine if a Javascript file exists in the current skin and if it doesn't,
 * check the system global one instead
 *
 * @access	public
 * @param	string
 * @return	string
 */	
if ( ! function_exists('js_location'))
{
	function js_location($file = '', $skin = 'default', $section = '', $app_loc = APPPATH, $app_folder = APPFOLDER)
	{
		$array = array();
		$array['file'] = $file;
		$array['sec'] = $section;
		
		if (is_file($app_loc . 'views/' . $skin . '/' . $section . '/js/' . $file . '.php'))
		{
			$array['skin'] = $skin;
		}
		else
		{
			$array['skin'] = '_global';
		}
		
		$location = $array['skin'] . '/' . $array['sec'] . '/js/' . $array['file'];
		
		return $location;
	}
}
	
// ------------------------------------------------------------------------

/**
 * Assets Location
 *
 * Determine if a view exists in the current skin and if it doesn't, use the
 * system global one instead
 *
 * @access	public
 * @param	string
 * @return	string
 */	
if ( ! function_exists('asset_location'))
{
	function asset_location($location = '', $image = '', $app_loc = APPFOLDER)
	{
		return $app_loc .'/assets/'. $location .'/'. $image;
	}
}
	
// ------------------------------------------------------------------------

/* End of file location_helper.php */
/* Location: ./application/helpers/location_helper.php */