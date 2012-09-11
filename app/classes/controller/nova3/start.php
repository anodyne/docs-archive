<?php

class Controller_Nova3_Start extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 3 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova3/start/index';
		$this->template->title.= 'Getting Started';
	}
	
	public function action_install()
	{
		$this->_view = 'components/nova3/start/install';
		$this->template->title.= 'Fresh Install';
	}
	
	public function action_nova2()
	{
		$this->_view = 'components/nova3/start/nova2';
		$this->template->title.= 'Upgrade from Nova 2';
	}
	
	public function action_requirements()
	{
		$this->_view = 'components/nova3/start/requirements';
		$this->template->title.= 'Nova 3 Requirements';
	}
}
