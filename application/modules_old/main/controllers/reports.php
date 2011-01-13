<?php

class Reports extends Controller {

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
		
		$view = $this->viewpath .'reports_index';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function soa07()
	{
		$data['header'] = 'State of Anodyne - 2007';
		
		$view = $this->viewpath .'reports/2007_soa';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q107()
	{
		$data['header'] = 'Q1 2007';
		
		$view = $this->viewpath .'reports/2007_q1';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q207()
	{
		$data['header'] = 'Q2 2007';
		
		$view = $this->viewpath .'reports/2007_q2';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q307()
	{
		$data['header'] = 'Q3 2007';
		
		$view = $this->viewpath .'reports/2007_q3';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function soa08()
	{
		$data['header'] = 'State of Anodyne - 2008';
		
		$view = $this->viewpath .'reports/2008_soa';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q108()
	{
		$data['header'] = 'Q1 2008';
		
		$view = $this->viewpath .'reports/2008_q1';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q208()
	{
		$data['header'] = 'Q2 2008';
		
		$view = $this->viewpath .'reports/2008_q2';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q308()
	{
		$data['header'] = 'Q3 2008';
		
		$view = $this->viewpath .'reports/2008_q3';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function soa09()
	{
		$data['header'] = 'State of Anodyne - 2009';
		
		$view = $this->viewpath .'reports/2009_soa';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q109()
	{
		$data['header'] = 'Q1 2009';
		
		$view = $this->viewpath .'reports/2009_q1';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q209()
	{
		$data['header'] = 'Q2 2009';
		
		$view = $this->viewpath .'reports/2009_q2';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q309()
	{
		$data['header'] = 'Q3 2009';
		
		$view = $this->viewpath .'reports/2009_q3';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function soa10()
	{
		$data['header'] = 'State of Anodyne - 2010';
		
		$view = $this->viewpath .'reports/2010_soa';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q110()
	{
		$data['header'] = 'Q1 2010';
		
		$view = $this->viewpath .'reports/2010_q1';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q210()
	{
		$data['header'] = 'Q2 2010';
		
		$view = $this->viewpath .'reports/2010_q2';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function q310()
	{
		$data['header'] = 'Q3 2010';
		
		$view = $this->viewpath .'reports/2010_q3';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function soa11()
	{
		$data['header'] = 'State of Anodyne - 2011';
		
		$view = $this->viewpath .'reports/2011_soa';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file reports.php */
/* Location: ./application/modules/main/controllers/reports.php */