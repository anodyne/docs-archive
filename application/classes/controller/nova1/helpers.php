<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Helpers extends Controller_Template {

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
		$this->template->content = View::factory('components/nova1/helpers/index');
		$this->template->title.= 'Helpers';
	}
	
	public function action_date()
	{
		$this->template->content = View::factory('components/nova1/helpers/date');
		$this->template->title.= 'Date Helper';
	}
	
	public function action_debug()
	{
		$this->template->content = View::factory('components/nova1/helpers/debug');
		$this->template->title.= 'Debug Helper';
	}
	
	public function action_form()
	{
		$this->template->content = View::factory('components/nova1/helpers/form');
		$this->template->title.= 'Form Helper';
	}
	
	public function action_html()
	{
		$this->template->content = View::factory('components/nova1/helpers/html');
		$this->template->title.= 'HTML Helper';
	}
	
	public function action_language()
	{
		$this->template->content = View::factory('components/nova1/helpers/language');
		$this->template->title.= 'Language Helper';
	}
	
	public function action_location()
	{
		$this->template->content = View::factory('components/nova1/helpers/location');
		$this->template->title.= 'Location Helper';
	}
	
	public function action_panel()
	{
		$this->template->content = View::factory('components/nova1/helpers/panel');
		$this->template->title.= 'Panel Helper';
	}
	
	public function action_url()
	{
		$this->template->content = View::factory('components/nova1/helpers/url');
		$this->template->title.= 'URL Helper';
	}
	
	public function action_utility()
	{
		$this->template->content = View::factory('components/nova1/helpers/utility');
		$this->template->title.= 'Utility Helper';
	}
}
