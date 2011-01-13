<?php

class Helpers extends Controller
{	
	public $title;
	public $module;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->module		= $this->router->fetch_module();
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/'. $this->module .'/pages/helpers/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/'. $this->module .'/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Helpers';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function date()
	{
		$data['header'] = 'Date Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'date';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function debug()
	{
		$data['header'] = 'Debug Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'debug';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function form()
	{
		$data['header'] = 'Form Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'form';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function html()
	{
		$data['header'] = 'HTML Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'html';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function language()
	{
		$data['header'] = 'Language Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'language';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function location()
	{
		$data['header'] = 'Location Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'location';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function panel()
	{
		$data['header'] = 'Panel Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'panel';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function url()
	{
		$data['header'] = 'URL Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'url';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function utility()
	{
		$data['header'] = 'Utility Helper';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'utility';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file helpers.php */
/* Location: ./application/modules/nova2/controllers/helpers.php */