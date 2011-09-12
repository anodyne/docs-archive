<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Tour extends Controller_Template {

	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Url::base().'application/views/design/images/nova1/';
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 1 - ';
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/index');
		$this->template->title.= 'Take a Tour';
	}
	
	public function action_characters()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/characters');
		$this->template->title.= 'Nova Tour: Characters';
	}
	
	public function action_forms()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/forms');
		$this->template->title.= 'Nova Tour: Dynamic Forms';
	}
	
	public function action_genres()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/genres');
		$this->template->title.= 'Nova Tour: Genres';
	}
	
	public function action_internationalization()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/internationalization');
		$this->template->title.= 'Nova Tour: Internationalization';
	}
	
	public function action_littlethings()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/little_things');
		$this->template->title.= "Nova Tour: It's the Little Things";
	}
	
	public function action_seamless()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/seamless');
		$this->template->title.= 'Nova Tour: Seamless Substitution';
	}
	
	public function action_wiki()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/wiki');
		$this->template->title.= 'Nova Tour: Thresher';
	}
	
	public function action_writing()
	{
		$this->template->content = View::factory('components/pages/nova1/tour/writing');
		$this->template->title.= 'Nova Tour: Writing';
	}
}
