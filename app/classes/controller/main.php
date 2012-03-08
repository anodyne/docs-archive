<?php

class Controller_Main extends Controller_Base
{
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Main';
	}
	
	public function action_index()
	{
		$this->_view = 'components/index';
		
		return;
	}
	
	public function action_404()
	{
		$this->_view = 'components/404';
		$this->_status = 404;
		
		return;
	}
}
