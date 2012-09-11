<?php

class Controller_Nova1_Libraries extends Controller_Base
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
		$this->_view = 'components/nova1/libraries/index';
		$this->template->title.= 'Libraries';
	}
	
	public function action_auth()
	{
		$this->_view = 'components/nova1/libraries/auth';
		$this->template->title.= 'Auth Library';
	}
	
	public function action_input()
	{
		$this->_view = 'components/nova1/libraries/input';
		$this->template->title.= 'Input Library';
	}
	
	public function action_loader()
	{
		$this->_view = 'components/nova1/libraries/loader';
		$this->template->title.= 'Loader Library';
	}
	
	public function action_menu()
	{
		$this->_view = 'components/nova1/libraries/menu';
		$this->template->title.= 'Menu Library';
	}
	
	public function action_template()
	{
		$this->_view = 'components/nova1/libraries/template';
		$this->template->title.= 'Template Library';
	}
	
	public function action_thresher()
	{
		$this->_view = 'components/nova1/libraries/thresher';
		$this->template->title.= 'Thresher Library';
	}
	
	public function action_uri()
	{
		$this->_view = 'components/nova1/libraries/uri';
		$this->template->title.= 'URI Library';
	}
	
	public function action_userpanel()
	{
		$this->_view = 'components/nova1/libraries/userpanel';
		$this->template->title.= 'User Panel Library';
	}
}
