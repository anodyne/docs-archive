<?php

class Developers extends Controller {
	
	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/developers/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
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
	
	public function fields()
	{
		$data['header'] = 'Database Field Index';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'dbfields';
		$js = 'modules/nova/js/developers_dbfields_js';
		
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
	
	public function nova2()
	{
		$data['header'] = 'Nova 2';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'nova2';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file developers.php */
/* Location: ./application/modules/nova/controllers/developers.php */