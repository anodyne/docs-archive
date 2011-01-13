<?php

class Overview extends Controller {

	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: SMS User Guide';
		$this->viewpath		= 'modules/sms/pages/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/sms/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Overview';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file overview.php */
/* Location: ./application/modules/sms/controllers/overview.php */