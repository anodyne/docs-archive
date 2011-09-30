<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova3_Start extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 3 - ';
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova3/start/index');
		
		$this->template->title.= 'Getting Started';
	}
	
	public function action_install()
	{
		$this->template->content = View::factory('components/pages/nova3/start/install');
		
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_requirements()
	{
		$this->template->content = View::factory('components/pages/nova3/start/requirements');
		
		$this->template->title.= 'Nova 3 Requirements';
	}
	
	public function action_update($version = '')
	{
		switch ($version)
		{
			case '300_to_301':
				$view = 'components/pages/nova3/start/update/300_to_301';
				$title = 'Nova 3.0 to Nova 3.0.1';
			break;
			
			default:
				$view = 'components/pages/nova3/start/update';
				$title = 'Updating Nova';
			break;
		}
		
		$this->template->content = View::factory($view);
		$this->template->content->title = $title;
		
		$this->template->title.= $title;
	}
	
	public function action_whatsnew()
	{
		$this->template->content = View::factory('components/pages/nova3/start/whatsnew');
		
		$this->template->title.= "What's New in Nova 3";
	}
}
