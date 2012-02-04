<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Libraries extends Controller_Template {

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
		$this->template->content = View::factory('components/nova1/libraries/index');
		$this->template->title.= 'Libraries';
	}
	
	public function action_auth()
	{
		$this->template->content = View::factory('components/nova1/libraries/auth');
		$this->template->title.= 'Auth Library';
	}
	
	public function action_input()
	{
		$this->template->content = View::factory('components/nova1/libraries/input');
		$this->template->title.= 'Input Library';
	}
	
	public function action_loader()
	{
		$this->template->content = View::factory('components/nova1/libraries/loader');
		$this->template->title.= 'Loader Library';
	}
	
	public function action_menu()
	{
		$this->template->content = View::factory('components/nova1/libraries/menu');
		$this->template->title.= 'Menu Library';
	}
	
	public function action_template()
	{
		$this->template->content = View::factory('components/nova1/libraries/template');
		$this->template->title.= 'Template Library';
	}
	
	public function action_uri()
	{
		$this->template->content = View::factory('components/nova1/libraries/uri');
		$this->template->title.= 'URI Library';
	}
	
	public function action_userpanel()
	{
		$this->template->content = View::factory('components/nova1/libraries/userpanel');
		$this->template->title.= 'User Panel Library';
	}
}
