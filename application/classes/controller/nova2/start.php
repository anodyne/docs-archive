<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Start extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 2 - ';
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova2/start/main');
		
		$this->template->title.= 'Getting Started';
	}
	
	public function action_install()
	{
		$this->template->content = View::factory('components/pages/nova2/start/install');
		
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_requirements()
	{
		$this->template->content = View::factory('components/pages/nova2/start/requirements');
		
		$this->template->title.= 'Nova 2 Requirements';
	}
	
	public function action_sms()
	{
		$this->template->content = View::factory('components/pages/nova2/start/sms');
		
		$this->template->title.= 'Upgrade from SMS 2';
	}
	
	public function action_update($version = '')
	{
		switch ($version)
		{
			case '125_to_200':
				$view = 'components/pages/nova2/start/update/125_to_200';
				$title = 'Nova 1.2.5 to Nova 2.0';
			break;
			
			case '124_to_125':
				$view = 'components/pages/nova2/start/update/124_to_125';
				$title = 'Nova 1.2.4 to Nova 1.2.5';
			break;
			
			case '123_to_124':
				$view = 'components/pages/nova2/start/update/123_to_124';
				$title = 'Nova 1.2.3 to Nova 1.2.4';
			break;
			
			case '122_to_123':
				$view = 'components/pages/nova2/start/update/122_to_123';
				$title = 'Nova 1.2.2 to Nova 1.2.3';
			break;
			
			case '121_to_122':
				$view = 'components/pages/nova2/start/update/121_to_122';
				$title = 'Nova 1.2.1 to Nova 1.2.2';
			break;
			
			case '120_to_121':
				$view = 'components/pages/nova2/start/update/120_to_121';
				$title = 'Nova 1.2 to Nova 1.2.1';
			break;
			
			case '112_to_120':
				$view = 'components/pages/nova2/start/update/112_to_120';
				$title = 'Nova 1.1.2 to Nova 1.2';
			break;
			
			case '111_to_112':
				$view = 'components/pages/nova2/start/update/111_to_112';
				$title = 'Nova 1.1.1 to Nova 1.1.2';
			break;
			
			case '110_to_111':
				$view = 'components/pages/nova2/start/update/110_to_111';
				$title = 'Nova 1.1.0 to Nova 1.1.1';
			break;
			
			case '106_to_110':
				$view = 'components/pages/nova2/start/update/106_to_110';
				$title = 'Nova 1.0.6 to Nova 1.1.0';
			break;
			
			case '105_to_106':
				$view = 'components/pages/nova2/start/update/105_to_106';
				$title = 'Nova 1.0.5 to Nova 1.0.6';
			break;
			
			case '104_to_105':
				$view = 'components/pages/nova2/start/update/104_to_105';
				$title = 'Nova 1.0.4 to Nova 1.0.5';
			break;
			
			case '103_to_104':
				$view = 'components/pages/nova2/start/update/103_to_104';
				$title = 'Nova 1.0.3 to Nova 1.0.4';
			break;
			
			case '102_to_103':
				$view = 'components/pages/nova2/start/update/102_to_103';
				$title = 'Nova 1.0.2 to Nova 1.0.3';
			break;
			
			case '101_to_102':
				$view = 'components/pages/nova2/start/update/101_to_102';
				$title = 'Nova 1.0.1 to Nova 1.0.2';
			break;
			
			case '100_to_101':
				$view = 'components/pages/nova2/start/update/100_to_101';
				$title = 'Nova 1.0 to Nova 1.0.1';
			break;
			
			default:
				$view = 'components/pages/nova2/start/update';
				$title = 'Updating Nova';
			break;
		}
		
		$this->template->content = View::factory($view);
		$this->template->content->title = $title;
		
		$this->template->title.= $title;
	}
}
