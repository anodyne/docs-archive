<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Core extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 2 - ';
		
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
		$this->template->content = View::factory('components/pages/nova2/developers/core/index');
		
		$this->template->title.= 'Nova Core';
	}
	
	public function action_helpers()
	{
		# code...
	}
	
	public function action_libraries()
	{
		# code...
	}
	
	public function action_models()
	{
		// set the default view
		$view = 'model';
		
		switch ($this->request->param('id'))
		{
			case 'access':
				$title = 'Access';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/access', 'yaml'));
			break;
			
			case 'docking':
				$title = 'Docking';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/docking', 'yaml'));
			break;
			
			case 'specs':
				$title = 'Specs';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/specs', 'yaml'));
			break;
			
			case 'system':
				$title = 'System';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/system', 'yaml'));
			break;
			
			case 'tour':
				$title = 'Tour';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/tour', 'yaml'));
			break;
			
			case 'users':
				$title = 'Users';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/users', 'yaml'));
			break;
			
			case 'wiki':
				$title = 'Wiki';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/wiki', 'yaml'));
			break;
			
			default:
				$item = $this->request->param('id');
				
				if (empty($item))
				{
					$item = 'index';
				}
				
				switch ($item)
				{
					case 'privmsgs':
						$title = 'Private Messages';
					break;
					
					case 'personallogs':
						$title = 'Personal Logs';
					break;
					
					case 'depts':
						$title = 'Departments';
					break;
					
					default:
						$title = ucfirst($item);
					break;
				}
				
				$model = false;
				$view = 'model_'.$item;
			break;
		}
		
		$this->template->content = View::factory('components/pages/nova2/developers/core/'.$view);
		$this->template->content->header = $title;
		$this->template->content->model = $model;
		$this->template->title.= $title.' Model';
	}
}
