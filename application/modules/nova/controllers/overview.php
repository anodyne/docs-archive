<?php

class Overview extends Controller {

	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
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
		$js = 'modules/nova/js/overview_changelog_js';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		CI::Library('template')->write_view('javascript', $js);
		
		CI::Library('template')->render();
	}
	
	public function changes()
	{
		$data['header'] = 'Changes Since SMS';
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
		$js = 'modules/nova/js/overview_faq_js';
		
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
				'src' => APPFOLDER .'/views/modules/nova/images/firefox-buttons.png',
				'alt' => 'buttons in firefox and ie'),
		);
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function godaddy()
	{
		$data['header'] = 'GoDaddy &amp; Nova';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'overview/godaddy';
		
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
			case 'ci':
				$data['header'] = 'CodeIgniter License Agreement';
				$data['sub'] = NULL;
				
				$view = $this->viewpath .'overview/license_ci';
				
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
				
			case 102:
				$data['header'] = 'Updating From 1.0.1 to 1.0.2';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/102';

				break;
				
			case 103:
				$data['header'] = 'Updating From 1.0.2 to 1.0.3';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/103';

				break;
				
			case 104:
				$data['header'] = 'Updating From 1.0.3 to 1.0.4';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/104';

				break;
				
			case 105:
				$data['header'] = 'Updating From 1.0.4 to 1.0.5';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/105';

				break;
				
			case 106:
				$data['header'] = 'Updating From 1.0.5 to 1.0.6';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/106';

				break;
				
			case 110:
				$data['header'] = 'Updating From 1.0.6 to 1.1';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/110';

				break;
				
			case 111:
				$data['header'] = 'Updating From 1.1 to 1.1.1';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/111';

				break;
				
			case 120:
				$data['header'] = 'Updating From 1.1.2 to 1.2';
				$data['sub'] = $page;

				$view = $this->viewpath .'update/120';

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
/* Location: ./application/modules/nova/controllers/overview.php */