<?php

class Overview extends Controller
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
		$this->title		= ' :: Nova 2 User Guide';
		$this->viewpath		= 'modules/'. $this->module .'/pages/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/'. $this->module .'/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Index';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function changelog()
	{
		$data['header'] = 'Change Log';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/changelog';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function changes()
	{
		$data['header'] = 'Changes Since Nova 1';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/changes';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function faq()
	{
		$data['header'] = 'Frequently Asked Questions';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/faq';
		$js = 'modules/'. $this->module .'/js/overview_faq_js';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		CI::Library('template')->write_view('javascript', $js);
		
		CI::Library('template')->render();
	}
	
	public function firefox()
	{
		$data['header'] = 'Why Firefox?';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/firefox';
		
		$data['images'] = array(
			'buttons' => array(
				'src' => APPFOLDER .'/views/modules/'. $this->module .'/images/firefox-buttons.png',
				'alt' => 'buttons in firefox and ie'),
		);
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function install()
	{
		$data['header'] = 'Installation';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/install';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function license()
	{
		switch ($this->uri->segment(4))
		{
			case 'kohana':
				$data['header'] = 'Kohana License Agreement';
				$data['sub'] = NULL;
				
				$view = $this->viewpath .'overview/license_kohana';
				
				break;
				
			case 'nova':
			default:
				$data['header'] = 'Nova License Agreement';
				$data['sub'] = NULL;
				
				$view = $this->viewpath .'overview/license_nova';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function requirements()
	{
		$data['header'] = 'Requirements';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/requirements';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function update()
	{
		$page = 'Updating Nova';
		
		switch ($this->uri->segment(4))
		{
			case 101:
				$data['header'] = 'Updating From 1.0 to 1.0.1';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'update/101';
				
				break;
			
			case 'main':	
			default:
				$data['header'] = 'Updating Nova';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'update/main';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function upgrade()
	{
		$data['header'] = 'Upgrading SMS 2 to Nova';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/upgrade';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file overview.php */
/* Location: ./application/modules/nova2/controllers/overview.php */