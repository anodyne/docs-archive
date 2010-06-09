<?php

class Models extends Controller {
	
	public $title;
	private $viewpath;
	private $imagepath;
	private $modelpath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/models/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
		$this->modelpath	= APPPATH .'modules/'. $this->router->fetch_module() .'/assets/models/';
		
		// pull in the sfYaml file
		include_once APPPATH .'assets/yaml/sfYaml.php';
	}
	
	public function index()
	{
		$data['header'] = 'Models';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function access()
	{
		$data['header'] = 'Access Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'access';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function applications()
	{
		$data['header'] = 'Applications Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'applications';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function awards()
	{
		$data['header'] = 'Awards Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'awards';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function characters()
	{
		$data['header'] = 'Characters Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'characters';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function depts()
	{
		$data['header'] = 'Departments Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'depts';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function docking()
	{
		$data['header'] = 'Docking Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'docking';
		
		$data['model'] = sfYaml::load($this->modelpath .'docking.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function menu()
	{
		$data['header'] = 'Menu Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'menu';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function messages()
	{
		$data['header'] = 'Messages Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'messages';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function missions()
	{
		$data['header'] = 'Missions Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'missions';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function news()
	{
		$data['header'] = 'News Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'news';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function personallogs()
	{
		$data['header'] = 'Personal Logs Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'personallogs';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function positions()
	{
		$data['header'] = 'Positions Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'positions';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function posts()
	{
		$data['header'] = 'Posts Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'posts';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function privmsgs()
	{
		$data['header'] = 'Private Messages Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'privmsgs';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function ranks()
	{
		$data['header'] = 'Ranks Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'ranks';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function rss()
	{
		$data['header'] = 'RSS Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'rss';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function settings()
	{
		$data['header'] = 'Settings Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'settings';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function specs()
	{
		$data['header'] = 'Specifications Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'specs';
		
		$data['model'] = sfYaml::load($this->modelpath .'specs.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function system()
	{
		$data['header'] = 'System Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'system';
		
		$data['model'] = sfYaml::load($this->modelpath .'system.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function tour()
	{
		$data['header'] = 'Tour Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tour';
		
		$data['model'] = sfYaml::load($this->modelpath .'tour.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function users()
	{
		$data['header'] = 'Users Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'users';
		
		$data['model'] = sfYaml::load($this->modelpath .'users.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function wiki()
	{
		$data['header'] = 'Wiki Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'wiki';
		
		$data['model'] = sfYaml::load($this->modelpath .'wiki.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file models.php */
/* Location: ./application/modules/nova/controllers/models.php */