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
		
		return;
	}
	
	public function action_backup()
	{
		$this->_view = 'components/nova2/start/backup';
		$this->template->title.= 'Backup Guide';
		
		return;
	}
	
	public function action_install()
	{
		$this->_view = 'components/nova2/start/install';
		$this->template->title.= 'Fresh Install';
		
		return;
	}
	
	public function action_requirements()
	{
		$this->_view = 'components/nova2/start/requirements';
		$this->template->title.= 'Nova 2 Requirements';
		
		return;
	}
	
	public function action_sms()
	{
		$this->_view = 'components/nova2/start/sms';
		$this->template->title.= 'Upgrade from SMS 2';
		
		return;
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
				$view = 'components/nova2/start/update/standard_update';
				
				switch ($this->request->param('id'))
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
		
		return;
	}
	
	public function action_whatsnew()
	{
		$this->_view = 'components/nova2/start/whatsnew';
		$this->template->title.= "What's New in Nova 2";
		
		return;
	}
}
