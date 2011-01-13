<?php

class Models extends Controller
{	
	public $title;
	public $module;
	private $viewpath;
	private $imagepath;
	private $modelpath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->module		= $this->router->fetch_module();
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/'. $this->module .'/pages/models/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/'. $this->module .'/images/';
		$this->modelpath	= APPPATH .'modules/'. $this->module .'/assets/models/';
		
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
	
	public function character()
	{
		$data['header'] = 'Character Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'character';
		
		$data['model'] = sfYaml::load($this->modelpath .'character.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function core()
	{
		$data['header'] = 'Core Model';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'core';
		
		$data['model'] = sfYaml::load($this->modelpath .'core.yaml');
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file models.php */
/* Location: ./application/modules/nova2/controllers/models.php */