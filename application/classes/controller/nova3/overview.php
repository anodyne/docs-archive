<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova3_Overview extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: Nova 3 - ';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova3/overview/index');

		$this->template->title.= 'Main';
	}
}
