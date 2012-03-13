<?php

class Controller_Nova3_Overview extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 3 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova3/overview/index';
		$this->template->title.= 'Main';
		
		return;
	}
}
