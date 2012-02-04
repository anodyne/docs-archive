<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Start extends Controller_Template {
	
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
		$this->template->content = View::factory('components/nova2/start/index');
		
		$this->template->title.= 'Getting Started';
	}
	
	public function action_backup()
	{
		$this->template->content = View::factory('components/nova2/start/backup');
		
		$this->template->title.= 'Backup Guide';
	}
	
	public function action_install()
	{
		$this->template->content = View::factory('components/nova2/start/install');
		
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_requirements()
	{
		$this->template->content = View::factory('components/nova2/start/requirements');
		
		$this->template->title.= 'Nova 2 Requirements';
	}
	
	public function action_sms()
	{
		$this->template->content = View::factory('components/nova2/start/sms');
		
		$this->template->title.= 'Upgrade from SMS 2';
	}
	
	public function action_update()
	{
		switch ($this->request->param('id'))
		{
			case '126_to_200':
				$view = 'components/nova2/start/update/126_to_200';
				$title = 'Nova 1.2.6 to Nova 2.0';
			break;
			
			case '200_to_201':
				$view = 'components/nova2/start/update/200_to_201';
				$title = 'Nova 2.0 to Nova 2.0.1';
			break;
			
			default:
				$view = 'components/nova2/start/update';
				$title = 'Updating Nova';
			break;
		}
		
		$this->template->content = View::factory($view);
		$this->template->content->title = $title;
		
		$this->template->title.= $title;
	}
	
	public function action_whatsnew()
	{
		$this->template->content = View::factory('components/nova2/start/whatsnew');
		
		$this->template->title.= "What's New in Nova 2";
	}
}
