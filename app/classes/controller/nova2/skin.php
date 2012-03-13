<?php

class Controller_Nova2_Skin extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/developers/skin/index';
		$this->template->title.= 'Skinning Nova';
		
		return;
	}
	
	public function action_changes()
	{
		$this->_view = 'components/nova2/developers/skin/changes';
		$this->template->title.= 'Changes to Skinning in Nova 2';
		
		return;
	}
}
