<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Models extends Controller_Template {

	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Url::base().'application/views/design/images/nova1/';
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 1 - ';
		
		// load Spyc
		Kohana::load(Kohana::find_file('vendor', 'spyc/spyc'));
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova1/models/index');
		$this->template->title.= 'Models';
	}
	
	public function action_access()
	{
		$this->template->content = View::factory('components/pages/nova1/models/access');
		$this->template->title.= 'Access Model';
	}
	
	public function action_applications()
	{
		$this->template->content = View::factory('components/pages/nova1/models/applications');
		$this->template->title.= 'Applications Model';
	}
	
	public function action_awards()
	{
		$this->template->content = View::factory('components/pages/nova1/models/awards');
		$this->template->title.= 'Awards Model';
	}
	
	public function action_characters()
	{
		$this->template->content = View::factory('components/pages/nova1/models/characters');
		$this->template->title.= 'Characters Model';
	}
	
	public function action_depts()
	{
		$this->template->content = View::factory('components/pages/nova1/models/depts');
		$this->template->title.= 'Departments Model';
	}
	
	public function action_docking()
	{
		$this->template->content = View::factory('components/pages/nova1/models/docking');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/docking', 'yaml'));
		$this->template->title.= 'Docking Model';
	}
	
	public function action_menu()
	{
		$this->template->content = View::factory('components/pages/nova1/models/menu');
		$this->template->title.= 'Menu Model';
	}
	
	public function action_messages()
	{
		$this->template->content = View::factory('components/pages/nova1/models/messages');
		$this->template->title.= 'Messages Model';
	}
	
	public function action_missions()
	{
		$this->template->content = View::factory('components/pages/nova1/models/missions');
		$this->template->title.= 'Missions Model';
	}
	
	public function action_news()
	{
		$this->template->content = View::factory('components/pages/nova1/models/news');
		$this->template->title.= 'News Model';
	}
	
	public function action_personallogs()
	{
		$this->template->content = View::factory('components/pages/nova1/models/personallogs');
		$this->template->title.= 'Personal Logs Model';
	}
	
	public function action_positions()
	{
		$this->template->content = View::factory('components/pages/nova1/models/positions');
		$this->template->title.= 'Positions Model';
	}
	
	public function action_posts()
	{
		$this->template->content = View::factory('components/pages/nova1/models/posts');
		$this->template->title.= 'Posts Model';
	}
	
	public function action_privmsgs()
	{
		$this->template->content = View::factory('components/pages/nova1/models/privmsgs');
		$this->template->title.= 'Private Messages Model';
	}
	
	public function action_ranks()
	{
		$this->template->content = View::factory('components/pages/nova1/models/ranks');
		$this->template->title.= 'Ranks Model';
	}
	
	public function action_rss()
	{
		$this->template->content = View::factory('components/pages/nova1/models/rss');
		$this->template->title.= 'RSS Model';
	}
	
	public function action_settings()
	{
		$this->template->content = View::factory('components/pages/nova1/models/settings');
		$this->template->title.= 'Settings Model';
	}
	
	public function action_specs()
	{
		$this->template->content = View::factory('components/pages/nova1/models/specs');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/specs', 'yaml'));
		$this->template->title.= 'Specifications Model';
	}
	
	public function action_system()
	{
		$this->template->content = View::factory('components/pages/nova1/models/system');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/system', 'yaml'));
		$this->template->title.= 'System Model';
	}
	
	public function action_tour()
	{
		$this->template->content = View::factory('components/pages/nova1/models/tour');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/tour', 'yaml'));
		$this->template->title.= 'Tour Model';
	}
	
	public function action_users()
	{
		$this->template->content = View::factory('components/pages/nova1/models/users');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/users', 'yaml'));
		$this->template->title.= 'Users Model';
	}
	
	public function action_wiki()
	{
		$this->template->content = View::factory('components/pages/nova1/models/wiki');
		$this->template->content->model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova1/models/wiki', 'yaml'));
		$this->template->title.= 'Wiki Model';
	}
}
