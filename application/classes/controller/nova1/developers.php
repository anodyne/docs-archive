<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Developers extends Controller_Template {

	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Url::base().'application/views/design/images/nova1/';
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: Nova 1 - ';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova1/developers/index');
		
		$this->template->title.= 'Developers';
	}
	
	public function action_fields()
	{
		$this->template->content = View::factory('components/pages/nova1/developers/dbfields');
		
		$this->template->title.= 'Database Field Index';
	}
	
	public function action_images()
	{
		$this->template->content = View::factory('components/pages/nova1/developers/images');
		
		$this->template->title.= 'Image Index';
	}
}
