<?php

class Controller_Nova1_Models extends Controller_Base
{
	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Uri::base(false).'app/views/design/images/nova1/';
		
		$this->template->title.= 'Nova 1 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova1/models/index';
		$this->template->title.= 'Models';
		
		return;
	}
	
	public function action_access()
	{
		$this->_view = 'components/nova1/models/access';
		$this->template->title.= 'Access Model';
		
		return;
	}
	
	public function action_applications()
	{
		$this->_view = 'components/nova1/models/applications';
		$this->template->title.= 'Applications Model';
		
		return;
	}
	
	public function action_awards()
	{
		$this->_view = 'components/nova1/models/awards';
		$this->template->title.= 'Awards Model';
		
		return;
	}
	
	public function action_characters()
	{
		$this->_view = 'components/nova1/models/characters';
		$this->template->title.= 'Characters Model';
		
		return;
	}
	
	public function action_depts()
	{
		$this->_view = 'components/nova1/models/depts';
		$this->template->title.= 'Departments Model';
		
		return;
	}
	
	public function action_docking()
	{
		$this->_view = 'components/nova1/models/docking';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/docking.yaml'), 'yaml')->to_array();
		$this->template->title.= 'Docking Model';
		
		return;
	}
	
	public function action_menu()
	{
		$this->_view = 'components/nova1/models/menu';
		$this->template->title.= 'Menu Model';
		
		return;
	}
	
	public function action_messages()
	{
		$this->_view = 'components/nova1/models/messages';
		$this->template->title.= 'Messages Model';
		
		return;
	}
	
	public function action_missions()
	{
		$this->_view = 'components/nova1/models/missions';
		$this->template->title.= 'Missions Model';
		
		return;
	}
	
	public function action_news()
	{
		$this->_view = 'components/nova1/models/news';
		$this->template->title.= 'News Model';
		
		return;
	}
	
	public function action_personallogs()
	{
		$this->_view = 'components/nova1/models/personallogs';
		$this->template->title.= 'Personal Logs Model';
		
		return;
	}
	
	public function action_positions()
	{
		$this->_view = 'components/nova1/models/positions';
		$this->template->title.= 'Positions Model';
		
		return;
	}
	
	public function action_posts()
	{
		$this->_view = 'components/nova1/models/posts';
		$this->template->title.= 'Posts Model';
		
		return;
	}
	
	public function action_privmsgs()
	{
		$this->_view = 'components/nova1/models/privmsgs';
		$this->template->title.= 'Private Messages Model';
		
		return;
	}
	
	public function action_ranks()
	{
		$this->_view = 'components/nova1/models/ranks';
		$this->template->title.= 'Ranks Model';
		
		return;
	}
	
	public function action_rss()
	{
		$this->_view = 'components/nova1/models/rss';
		$this->template->title.= 'RSS Model';
		
		return;
	}
	
	public function action_settings()
	{
		$this->_view = 'components/nova1/models/settings';
		$this->template->title.= 'Settings Model';
		
		return;
	}
	
	public function action_specs()
	{
		$this->_view = 'components/nova1/models/specs';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/specs.yaml'), 'yaml')->to_array();
		$this->template->title.= 'Specifications Model';
		
		return;
	}
	
	public function action_system()
	{
		$this->_view = 'components/nova1/models/system';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/system.yaml'), 'yaml')->to_array();
		$this->template->title.= 'System Model';
		
		return;
	}
	
	public function action_tour()
	{
		$this->_view = 'components/nova1/models/tour';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/tour.yaml'), 'yaml')->to_array();
		$this->template->title.= 'Tour Model';
		
		return;
	}
	
	public function action_users()
	{
		$this->_view = 'components/nova1/models/users';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/users.yaml'), 'yaml')->to_array();
		$this->template->title.= 'Users Model';
		
		return;
	}
	
	public function action_wiki()
	{
		$this->_view = 'components/nova1/models/wiki';
		$this->_data->model = Format::forge(file_get_contents(APPPATH.'assets/nova1/models/wiki.yaml'), 'yaml')->to_array();
		$this->template->title.= 'Wiki Model';
		
		return;
	}
}
