<?php

class Libraries extends Controller {
	
	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/libraries/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Libraries';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function auth()
	{
		$data['header'] = 'Auth Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'auth';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function input()
	{
		$data['header'] = 'Input Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'input';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function loader()
	{
		$data['header'] = 'Loader Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'loader';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function menu()
	{
		$data['header'] = 'Menu Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'menu';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function simplepie()
	{
		$data['header'] = 'SimplePie';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'simplepie';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function template()
	{
		$data['header'] = 'Template Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'template';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function uri()
	{
		$data['header'] = 'URI Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'uri';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function userpanel()
	{
		$data['header'] = 'User Panel Library';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'userpanel';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file libraries.php */
/* Location: ./application/modules/nova/controllers/libraries.php */