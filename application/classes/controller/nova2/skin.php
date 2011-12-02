<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Skin extends Controller_Template {
	
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
		$this->template->content = View::factory('components/pages/nova2/developers/skin/index');
		
		$this->template->title.= 'Skinning Nova';
	}
	
	public function action_changes()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/skin/changes');
		
		$this->template->title.= 'Changes to Skinning in Nova 2';
	}
}
