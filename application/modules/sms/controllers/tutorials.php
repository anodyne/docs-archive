<?php

class Tutorials extends Controller {

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
		$data['header'] = 'Tutorials';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function awards()
	{
		$data['header'] = 'The Awards System';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_awards';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function buttons()
	{
		$data['header'] = 'Creating Buttons';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_buttons';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function messages()
	{
		$data['header'] = 'Dynamic Activation Emails';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_dynamic_messages';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function ranks()
	{
		$data['header'] = 'Creating New Ranks';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_ranks';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function variables()
	{
		$data['header'] = 'Fixing the Variables File';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'tutorials_variables';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file tutorials.php */
/* Location: ./application/modules/sms/controllers/tutorials.php */