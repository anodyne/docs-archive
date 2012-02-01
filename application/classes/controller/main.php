<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: Main';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/main');
	}

}
