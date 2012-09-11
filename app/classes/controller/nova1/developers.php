<?php

class Controller_Nova1_Developers extends Controller_Base
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
		$this->_view = 'components/nova1/developers/index';
		$this->template->title.= 'Developers';
	}
	
	public function action_fields()
	{
		$this->_view = 'components/nova1/developers/dbfields';
		$this->template->title.= 'Database Field Index';
	}
	
	public function action_images()
	{
		$this->_view = 'components/nova1/developers/images';
		$this->template->title.= 'Image Index';
	}
}
