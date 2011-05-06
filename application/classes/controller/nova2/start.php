<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Start extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 2 - ';
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova2/start/main');
		
		$this->template->title.= 'Getting Started';
	}
	
	public function action_install()
	{
		$this->template->content = View::factory('components/pages/nova2/start/install');
		
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_requirements()
	{
		$this->template->content = View::factory('components/pages/nova2/start/requirements');
		
		$this->template->title.= 'Nova 2 Requirements';
	}
	
	public function action_sms()
	{
		$this->template->content = View::factory('components/pages/nova2/start/sms');
		
		$this->template->title.= 'Upgrade from SMS 2';
	}
	
	public function action_update()
	{
		$this->template->content = View::factory('components/pages/nova2/start/update');
		
		$this->template->title.= 'Updating Nova';
	}
}
