<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Modify extends Controller_Template {
	
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
		$this->template->content = View::factory('components/pages/nova2/developers/modify/index');
		
		$this->template->title.= 'Modifying Nova';
	}
	
	public function action_changeicons()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/basic_ss_icons');
		
		$this->template->title.= 'Seamless Substitution: Changing Icons';
	}
	
	public function action_language()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/basic_language');
		
		$this->template->title.= 'Changing Language Items in Nova';
	}
}
