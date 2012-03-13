<?php

class Controller_Nova2_Developers extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/developers/index';
		$this->template->title.= 'Developers';
		
		return;
	}
	
	public function action_concepts()
	{
		$this->_view = 'components/nova2/developers/concepts';
		$this->template->title.= 'Development Concepts in Nova';
		
		return;
	}
}
