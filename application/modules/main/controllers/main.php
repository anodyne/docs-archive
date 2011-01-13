<?php

class Main extends Controller {
	
	protected $_template_pieces = array();
	
	public function __construct()
	{
		parent::Controller();
		
		// set the template file
		Template::$file = 'template';
		
		// assign all of the items to the template with false values to prevent errors
		$this->_template_pieces += array(
			'content'		=> false,
			'javascript'	=> false,
			'ajax'			=> false,
			'flash_message'	=> false,
			'title'			=> false,
		);
	}
	
	public function index()
	{
		$data['header'] = 'Index';
		
		// assign the info the pieces array
		$this->_template_pieces['content'] = $this->load->view('pages/main_index', $data, true);
		$this->_template_pieces['title'] = $data['header'];
		
		// assign the data to the template
		Template::assign($this->_template_pieces);
		
		// render the template
		Template::render();
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
