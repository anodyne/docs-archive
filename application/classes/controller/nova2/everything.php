<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Everything extends Controller_Template {
	
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
		$this->template->content = View::factory('components/pages/nova2/everything/index');
		
		$this->template->title.= 'Main';
	}
	
	public function action_godaddy()
	{
		$this->template->content = View::factory('components/pages/nova2/everything/godaddy');
		
		$this->template->title.= 'GoDaddy &amp; Nova 2';
	}
	
	public function action_license()
	{
		$this->template->content = View::factory('components/pages/nova2/everything/license');
		
		$this->template->title.= 'The Nova License';
	}
	
	public function action_structure()
	{
		$this->template->content = View::factory('components/pages/nova2/everything/structure');
		
		$this->template->title.= 'Nova 2 File Structure';
	}
	
	public function action_urls()
	{
		$this->template->content = View::factory('components/pages/nova2/everything/urls');
		
		$this->template->title.= 'Nova URLs';
	}
	
	public function action_versioning()
	{
		$this->template->content = View::factory('components/pages/nova2/everything/versioning');
		
		$this->template->title.= 'Versioning in Nova';
	}
}
