<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sms_Overview extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: SMS - ';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/sms/main');
		
		$this->template->title.= 'Main';
	}
	
	public function action_access()
	{
		$this->template->content = View::factory('components/sms/tutorials_access');
		
		$this->template->title.= 'Fixing Broken Access';
	}
	
	public function action_awards()
	{
		$this->template->content = View::factory('components/sms/tutorials_awards');
		
		$this->template->title.= 'The Awards System';
	}
	
	public function action_buttons()
	{
		$this->template->content = View::factory('components/sms/tutorials_buttons');
		
		$this->template->title.= 'Creating Buttons';
	}
	
	public function action_emails()
	{
		$this->template->content = View::factory('components/sms/tutorials_dynamic_messages');
		
		$this->template->title.= 'Dynamic Activation Emails';
	}
	
	public function action_ranks()
	{
		$this->template->content = View::factory('components/sms/tutorials_ranks');
		
		$this->template->title.= 'Creating New Ranks';
	}
	
	public function action_variables()
	{
		$this->template->content = View::factory('components/sms/tutorials_variables');
		
		$this->template->title.= 'Fixing the Variables File';
	}
}
