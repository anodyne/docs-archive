<?php

class Controller_Nova2_Start extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/start/index';
		$this->template->title.= 'Getting Started';
	}
	
	public function action_backup()
	{
		$this->_view = 'components/nova2/start/backup';
		$this->template->title.= 'Backup Guide';
	}
	
	public function action_install()
	{
		$this->_view = 'components/nova2/start/install';
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_requirements()
	{
		$this->_view = 'components/nova2/start/requirements';
		$this->template->title.= 'Nova 2 Requirements';
	}
	
	public function action_sms()
	{
		$this->_view = 'components/nova2/start/sms';
		$this->template->title.= 'Upgrade from SMS 2';
	}
	
	public function action_update($id = '')
	{
		switch ($id)
		{
			case 'nova1':
			case '126_to_200':
				$view = 'components/nova2/start/update/nova1';
				$title = 'Updating From Nova 1';
			break;
			
			case '200_to_201':
			case '201_to_202':
			case '202_to_203':
			case '203_to_210':
			case '210_to_211':
			case '211_to_212':
			case '212_to_213':
			case '213_to_220':
			case '220_to_221':
			case '221_to_222':
			case '222_to_223':
				$view = 'components/nova2/start/update/standard_update';
				
				switch ($id)
				{
					case '200_to_201':
						$title = 'Nova 2.0 to Nova 2.0.1';
					break;
					
					case '201_to_202':
						$title = 'Nova 2.0.1 to Nova 2.0.2';
					break;
					
					case '202_to_203':
						$title = 'Nova 2.0.2 to Nova 2.0.3';
					break;
					
					case '203_to_210':
						$title = 'Nova 2.0.3 to Nova 2.1';
					break;
					
					case '210_to_211':
						$title = 'Nova 2.1 to Nova 2.1.1';
					break;
					
					case '211_to_212':
						$title = 'Nova 2.1.1 to Nova 2.1.2';
					break;
					
					case '212_to_213':
						$title = 'Nova 2.1.2 to Nova 2.1.3';
					break;
					
					case '213_to_220':
						$title = 'Nova 2.1.3 to Nova 2.2';
					break;
					
					case '220_to_221':
						$title = 'Nova 2.2 to Nova 2.2.1';
					break;

					case '221_to_222':
						$title = 'Nova 2.2.1 to Nova 2.2.2';
					break;
					
					case '222_to_223':
						$title = 'Nova 2.2.2 to Nova 2.2.3';
					break;
				}
			break;
			
			default:
				$view = 'components/nova2/start/update';
				$title = 'Updating Nova';
			break;
		}
		
		$this->_view = $view;
		$this->_data->title = $title;
		$this->template->title.= $title;
	}
	
	public function action_whatsnew($version = '21')
	{
		$version_safe = $version;
		
		$version = str_replace('2', '2.', $version);
		
		$content = file_get_contents(APPPATH.'views/components/nova2/start/whatsnew_'.$version_safe.'.md');
		
		$title = "What's New in Nova ".$version;
		
		$this->_view = 'components/nova2/start/whatsnew';
		$this->_data->whatsnew = Markdown::parse($content);
		$this->_data->header = $title;
		$this->template->title.= $title;
	}
}
