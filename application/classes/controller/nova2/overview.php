<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Overview extends Controller_Template {
	
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
		$this->template->content = View::factory('components/nova2/overview/index');
		
		$this->template->title.= 'Main';
	}
}
