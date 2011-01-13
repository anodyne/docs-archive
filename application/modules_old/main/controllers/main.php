<?php

class Main extends Controller {

	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: AnodyneDocs';
		$this->viewpath		= 'modules/main/pages/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/main/images/';
		
		// set the template
		CI::Library('template')->set_template('main');
		
		// set the template file
		CI::Library('template')->set_master_template('template');
	}
	
	public function index()
	{
		$data['header'] = 'Index';
		
		$data['images'] = array(
			'nova' => array(
				'src' => $this->imagepath .'nova.png',
				'alt' => 'Nova'),
			'sms' => array(
				'src' => $this->imagepath .'sms.png',
				'alt' => 'Nova'),
		);
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function credits()
	{
		$data['header'] = 'Credits';
		
		$view = $this->viewpath .'credits';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file main.php */
/* Location: ./application/modules/main/controllers/main.php */