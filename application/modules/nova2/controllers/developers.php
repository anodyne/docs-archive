<?php

class Developers extends Controller
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
		$this->viewpath		= 'modules/'. $this->module.'/pages/developers/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/'. $this->module.'/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Developers';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function differences()
	{
		$data['header'] = 'Differences Between Nova 1 and Nova 2';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'differences';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function fields()
	{
		$data['header'] = 'Database Field Index';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'dbfields';
		$js = 'modules/'. $this->module.'/js/developers_dbfields_js';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		CI::Library('template')->write_view('javascript', $js);
		
		CI::Library('template')->render();
	}
	
	public function images()
	{
		$data['header'] = 'Image Index';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'images';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file developers.php */
/* Location: ./application/modules/nova2/controllers/developers.php */