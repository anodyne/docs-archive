<?php

class Controller_Nova1_Overview extends Controller_Base
{	
	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Uri::base(false).'app/views/design/images/nova1/';
		
		$this->template->title.= 'Nova 1 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova1/overview/index';
		$this->template->title.= 'Main';
	}
	
	public function action_changelog()
	{
		$this->_view = 'components/nova1/overview/changelog';
		$this->template->title.= 'Changelog';
	}
	
	public function action_changes()
	{
		$this->_view = 'components/nova1/overview/changes';
		$this->template->title.= 'Changes Since SMS 2';
	}
	
	public function action_faq()
	{
		$this->_view = 'components/nova1/overview/faq';
		$this->template->title.= 'Frequently Asked Questions';
	}
	
	public function action_godaddy()
	{
		$this->_view = 'components/nova1/overview/godaddy';
		$this->template->title.= 'GoDaddy &amp; Nova';
	}
	
	public function action_install()
	{
		$this->_view = 'components/nova1/overview/install';
		$this->template->title.= 'Installation';
	}
	
	public function action_license($type = 'nova')
	{
		switch ($type)
		{
			case 'ci':
				$this->_view = 'components/nova1/overview/license_ci';
				$this->template->title.= 'CodeIgniter License Agreement';
			break;
				
			default:
			case 'nova':
				$this->_view = 'components/nova1/overview/license_nova';
				$this->template->title.= 'Nova License Agreement';
			break;
		}
	}
	
	public function action_requirements()
	{
		$this->_view = 'components/nova1/overview/requirements';
		$this->template->title.= 'Requirements';
	}
	
	public function action_update($id = '')
	{
		$page = 'Updating Nova';
		
		switch ($id)
		{
			case 101:
				$this->_view = 'components/nova1/update/101';
				$this->template->title.= 'Updating From 1.0 to 1.0.1';
			break;
				
			case 102:
				$this->_view = 'components/nova1/update/102';
				$this->template->title.= 'Updating From 1.0.1 to 1.0.2';
			break;
				
			case 103:
				$this->_view = 'components/nova1/update/103';
				$this->template->title.= 'Updating From 1.0.2 to 1.0.3';
			break;
				
			case 104:
				$this->_view = 'components/nova1/update/104';
				$this->template->title.= 'Updating From 1.0.3 to 1.0.4';
			break;
				
			case 105:
				$this->_view = 'components/nova1/update/105';
				$this->template->title.= 'Updating From 1.0.4 to 1.0.5';
			break;
				
			case 106:
				$this->_view = 'components/nova1/update/106';
				$this->template->title.= 'Updating From 1.0.5 to 1.0.6';
			break;
				
			case 110:
				$this->_view = 'components/nova1/update/110';
				$this->template->title.= 'Updating From 1.0.6 to 1.1';
			break;
				
			case 111:
				$this->_view = 'components/nova1/update/111';
				$this->template->title.= 'Updating From 1.1 to 1.1.1';
			break;
				
			case 112:
				$this->_view = 'components/nova1/update/112';
				$this->template->title.= 'Updating From 1.1.1 to 1.1.2';
			break;
			
			case 120:
				$this->_view = 'components/nova1/update/120';
				$this->template->title.= 'Updating From 1.1.2 to 1.2';
			break;
			
			case 121:
				$this->_view = 'components/nova1/update/121';
				$this->template->title.= 'Updating From 1.2 to 1.2.1';
			break;
			
			case 122:
				$this->_view = 'components/nova1/update/122';
				$this->template->title.= 'Updating From 1.2.1 to 1.2.2';
			break;
			
			case 123:
				$this->_view = 'components/nova1/update/123';
				$this->template->title.= 'Updating From 1.2.2 to 1.2.3';
			break;
			
			case 124:
				$this->_view = 'components/nova1/update/124';
				$this->template->title.= 'Updating From 1.2.3 to 1.2.4';
			break;
			
			case 125:
				$this->_view = 'components/nova1/update/125';
				$this->template->title.= 'Updating From 1.2.4 to 1.2.5';
			break;
			
			case 126:
				$this->_view = 'components/nova1/update/126';
				$this->template->title.= 'Updating From 1.2.5 to 1.2.6';
			break;
			
			default:
			case 'index':	
				$this->_view = 'components/nova1/update/index';
				$this->template->title.= 'Updating Nova';
			break;
		}
	}
	
	public function action_upgrade()
	{
		$this->_view = 'components/nova1/overview/upgrade';
		$this->template->title.= 'Upgrading SMS 2 to Nova';
	}
	
	public function action_whatsnew()
	{
		$this->_view = 'components/nova1/overview/whatsnew';
		$this->template->title.= "What's New?";
	}
}
