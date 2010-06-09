<?php

class Tutorials extends Controller
{	
	public $title;
	public $module;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/'. $this->module .'/pages/tutorials/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/'. $this->module .'/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Tutorials';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function advanced()
	{
		switch ($this->uri->segment(4))
		{
			case 'appfolder':
				$data['header'] = 'Changing the Application Folder';
				$view = $this->viewpath .'adv_appfolder';
				
				break;
				
			case 'changeindex':
				$data['header'] = 'Changing the Index File';
				$view = $this->viewpath .'adv_changeindex';
				
				break;
				
			case 'changelang':
				$data['header'] = 'Changing Language Items';
				$view = $this->viewpath .'adv_changelang';
				
				break;
				
			case 'helpers':
				$data['header'] = 'Creating &amp; Modifying Helpers';
				$view = $this->viewpath .'adv_helpers';
				
				break;
				
			case 'libraries':
				$data['header'] = 'Creating &amp; Modifying Libraries';
				$view = $this->viewpath .'adv_libraries';
				
				break;
				
			case 'multipleapps':
				$data['header'] = 'Running Multiple Applications of Nova';
				$view = $this->viewpath .'adv_multipleapps';
				
				break;
				
			case 'rankset':
				$data['header'] = 'Creating a Rank Set';
				$view = $this->viewpath .'adv_rankset';
				
				break;
				
			case 'removeindex':
				$data['header'] = 'Removing the Index File from the URL';
				$view = $this->viewpath .'adv_removeindex';
				
				break;
				
			case 'translate':
				$data['header'] = 'Translating Nova to Another Language';
				$view = $this->viewpath .'adv_translate';
				
				break;
				
			case 'usinggithub':
				$data['header'] = 'Nova &amp; Github';
				$view = $this->viewpath .'adv_usinggithub';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function config()
	{
		switch ($this->uri->segment(4))
		{
			case 'ci':
			default:
				$data['header'] = 'CodeIgniter Configuration';
				$view = $this->viewpath .'config_ci';
				
				break;
				
			case 'nova':
				$data['header'] = 'Nova Configuration';
				$view = $this->viewpath .'config_nova';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function extending()
	{
		switch ($this->uri->segment(4))
		{
			case 1:
			default:
				$data['header'] = 'Tutorial: An Introduction to Extending Nova';
				$view = $this->viewpath .'extending_1';
				
				break;
				
			case 2:
				$data['header'] = 'Tutorials: Templates &amp; Views, Oh My!';
				$view = $this->viewpath .'extending_2';
				
				break;
				
			case 3:
				$data['header'] = 'Tutorials: Models, Ooh La La';
				$view = $this->viewpath .'extending_3';
				
				break;
				
			case 4:
				$data['header'] = 'Tutorials: Models, Ooh La La, Part 2';
				$view = $this->viewpath .'extending_4';
				
				break;
				
			case 5:
				$data['header'] = 'Tutorials: Controller, Meet View';
				$view = $this->viewpath .'extending_5';
				
				break;
				
			case 6:
				$data['header'] = 'Extending Nova: Replacing Pages';
				$view = $this->viewpath .'extending_6';
				
				break;
				
			case 7:
				$data['header'] = 'Extending Nova: Replacing Models';
				$view = $this->viewpath .'extending_7';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function intro()
	{
		switch ($this->uri->segment(4))
		{
			case 'backup':
				$data['header'] = 'Backup Guide';
				$view = $this->viewpath .'intro_backup';
				
				break;
				
			case 'folders':
				$data['header'] = 'The Folder Structure';
				$view = $this->viewpath .'intro_folders';
				
				$data['images'] = array(
					'application' => array(
						'src' => APPFOLDER .'/views/modules/'. $this->module .'/images/folders-application.png',
						'alt' => 'application folders',
						'title' => 'Application Folder Structure',
						'style' => 'float: left; margin-right: 28px; margin-left: 5px;'),
					'core' => array(
						'src' => APPFOLDER .'/views/modules/'. $this->module .'/images/folders-core.png',
						'alt' => 'core folders',
						'title' => 'Core Folder Structure',
						'style' => 'float: left; margin-right: 28px; margin-left: 5px;'),
					'root' => array(
						'src' => APPFOLDER .'/views/modules/'. $this->module .'/images/folders-root.png',
						'alt' => 'root folders',
						'title' => 'Nova Root Folder Structure',
						'style' => 'float: left; margin-right: 28px; margin-left: 5px;'),
				);
				
				break;
				
			case 'genres':
				$data['header'] = 'Genres in Nova';
				$view = $this->viewpath .'intro_genres';
				
				break;
				
			case 'urls':
				$data['header'] = 'Nova URLs';
				$view = $this->viewpath .'intro_urls';
				
				break;
				
			case 'versioning':
				$data['header'] = 'Versioning in Nova';
				$view = $this->viewpath .'intro_versioning';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function models()
	{
		switch ($this->uri->segment(4))
		{
			case 1:
			default:
				$data['header'] = 'Tutorial: What is a Model?';
				$view = $this->viewpath .'models_1';
				
				break;
				
			case 2:
				$data['header'] = 'Tutorials: Creating a New Model Method';
				$view = $this->viewpath .'models_2';
				
				break;
				
			case 3:
				$data['header'] = 'Tutorials: Working with Data From a Model';
				$view = $this->viewpath .'models_3';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function skins()
	{
		switch ($this->uri->segment(4))
		{
			case 1:
			default:
				$data['header'] = 'Anatomy of a Skin';
				$view = $this->viewpath .'skins_1';
				
				break;
				
			case 2:
				$data['header'] = 'Inside Seamless Substitution';
				$view = $this->viewpath .'skins_2';
				
				break;
				
			case 3:
				$data['header'] = 'Anatomy of a Template File';
				$view = $this->viewpath .'skins_3';
				
				break;
				
			case 4:
				$data['header'] = 'Anatomy of a Skin Section';
				$view = $this->viewpath .'skins_4';
				
				break;
				
			case 5:
				$data['header'] = 'Nova &amp; jQuery UI Widgets';
				$view = $this->viewpath .'skins_5';
				
				break;
				
			case 6:
				$data['header'] = 'Nova &amp; Javascript';
				$view = $this->viewpath .'skins_6';
				
				break;
			
			case 7:
				$data['header'] = 'Creating a Skin, Part 1';
				$view = $this->viewpath .'skins_7';
				
				break;
				
			case 8:
				$data['header'] = 'Creating a Skin, Part 2';
				$view = $this->viewpath .'skins_8';
				
				break;
				
			case 9:
				$data['header'] = 'Creating a Skin, Part 3';
				$view = $this->viewpath .'skins_9';
				
				break;
				
			case 10:
				$data['header'] = 'Creating a Skin, Part 4';
				$view = $this->viewpath .'skins_10';
				
				break;
				
			case 11:
				$data['header'] = 'Creating a Skin, Part 5';
				$view = $this->viewpath .'skins_11';
				
				break;
		}
		
		$data['sub'] = NULL;
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file tutorials.php */
/* Location: ./application/modules/nova2/controllers/tutorials.php */