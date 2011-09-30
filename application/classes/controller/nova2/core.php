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
				$title = 'Access Model';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/access', 'yaml'));
			break;
			
			case 'docking':
				$title = 'Docking Model';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/docking', 'yaml'));
			break;
			
			case 'specs':
				$title = 'Specs Model';
				$model = Spyc::YAMLLoad(Kohana::find_file('assets', 'nova2/models/specs', 'yaml'));
			break;
			
			default:
				$title = false;
				$model = false;
				$view = 'model_index';
			break;
		}
		
		$this->template->content = View::factory('components/pages/nova2/developers/core/'.$view);
		$this->template->content->header = $title;
		$this->template->content->model = $model;
		$this->template->title.= $title;
	}
}
