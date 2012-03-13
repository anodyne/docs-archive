<?php

class Controller_Nova2_Api extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/developers/api/index';
		$this->template->title.= 'API';
		
		return;
	}
	
	public function action_methods()
	{
		$this->_view = 'components/nova2/developers/api/methods';
		$this->template->title.= 'API Methods';
		
		return;
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
		
		$this->_view = $view;
		$this->template->title.= $title;
		
		return;
	}
}
