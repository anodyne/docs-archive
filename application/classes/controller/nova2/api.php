<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Api extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: Nova 2 - ';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/nova2/developers/api/index');
		
		$this->template->title.= 'API';
	}
	
	public function action_methods()
	{
		$this->template->content = View::factory('components/nova2/developers/api/methods');
		
		$this->template->title.= 'API Methods';
	}
	
	public function action_using($type = '')
	{
		switch ($type)
		{
			case 'curl':
				$view = 'components/nova2/developers/api/use_curl';
				$title = 'Using the API through cURL';
			break;
			
			case 'simplexml':
				$view = 'components/nova2/developers/api/use_simplexml';
				$title = 'Using the API through SimpleXML';
			break;
			
			default:
				$view = 'components/nova2/developers/api/use';
				$title = 'Using the API';
			break;
		}
		$this->template->content = View::factory($view);
		
		$this->template->title.= $title;
	}
}
