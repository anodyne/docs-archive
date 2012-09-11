<?php

class Controller_Nova2_Overview extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/index';
		$this->template->title.= 'Main';
	}
}
