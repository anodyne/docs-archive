<?php

class Controller_Nova1_Helpers extends Controller_Base
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
		$this->_view = 'components/nova1/helpers/index';
		$this->template->title.= 'Helpers';
		
		return;
	}
	
	public function action_date()
	{
		$this->_view = 'components/nova1/helpers/date';
		$this->template->title.= 'Date Helper';
		
		return;
	}
	
	public function action_debug()
	{
		$this->_view = 'components/nova1/helpers/debug';
		$this->template->title.= 'Debug Helper';
		
		return;
	}
	
	public function action_form()
	{
		$this->_view = 'components/nova1/helpers/form';
		$this->template->title.= 'Form Helper';
		
		return;
	}
	
	public function action_html()
	{
		$this->_view = 'components/nova1/helpers/html';
		$this->template->title.= 'HTML Helper';
		
		return;
	}
	
	public function action_language()
	{
		$this->_view = 'components/nova1/helpers/language';
		$this->template->title.= 'Language Helper';
		
		return;
	}
	
	public function action_location()
	{
		$this->_view = 'components/nova1/helpers/location';
		$this->template->title.= 'Location Helper';
		
		return;
	}
	
	public function action_panel()
	{
		$this->_view = 'components/nova1/helpers/panel';
		$this->template->title.= 'Panel Helper';
		
		return;
	}
	
	public function action_url()
	{
		$this->_view = 'components/nova1/helpers/url';
		$this->template->title.= 'URL Helper';
		
		return;
	}
	
	public function action_utility()
	{
		$this->_view = 'components/nova1/helpers/utility';
		$this->template->title.= 'Utility Helper';
		
		return;
	}
}
