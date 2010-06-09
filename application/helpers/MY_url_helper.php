<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/html_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Is Working URL
 *
 * Checks to make sure the URL supplied is legitimate
 *
 * @access	public
 * @param	string
 * @return	boolean
 */	
if ( ! function_exists('is_working_url'))
{
	function is_working_url($url)
	{
		$url = prep_url($url);
		
		$header_arr = @get_headers($url);
		
		if (is_array($header_arr) && preg_grep('/HTTP\/\d+\.\d+ 200 OK/', $header_arr))
		{
			return TRUE;
		}
		
		return FALSE;
	}
}

// ------------------------------------------------------------------------

/**
 * Anchor Link
 *
 * Creates an anchor based on the local URL.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('anchor'))
{
	function anchor($uri = '', $title = '', $attributes = '', $check_active = FALSE)
	{
		$ci =& get_instance();
		
		$title = (string) $title;

		if ( ! is_array($uri))
		{
			$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
		}
		else
		{
			$site_url = site_url($uri);
		}

		if ($title == '')
		{
			$title = $site_url;
		}

		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
		}
		
		if ($check_active === TRUE)
		{
			$uri_array = explode('/', $uri);
			
			$active = ($uri_array[1] == $ci->uri->rsegment(1)) ? ' class="active"' : NULL;
		}
		else
		{
			$active = NULL;
		}

		return '<a href="'.$site_url.'"'.$attributes.$active.'>'.$title.'</a>';
	}
}

// ------------------------------------------------------------------------

/**
 * Anchor Link
 *
 * Creates an anchor based on the local URL.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('github_issue_link'))
{
	function github_issue_link($id = '', $product = 'nova')
	{
		return '<a href="http://github.com/anodyne/'. $product .'/issues#issue/'. $id .'" target="_blank">#'. $id .'</a>';
	}
}

// ------------------------------------------------------------------------

/* End of file MY_url_helper.php */
/* Location: ./application/helpers/MY_url_helper.php */