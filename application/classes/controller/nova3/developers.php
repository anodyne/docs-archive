<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Developers extends Controller_Template {
	
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
		$this->template->content = View::factory('components/pages/nova2/developers/index');
		
		$this->template->title.= 'Developers';
	}
	
	public function action_concepts()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/concepts');
		
		$this->template->title.= 'Development Concepts in Nova';
	}
}
