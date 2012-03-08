<?php

class Controller_Sms_Overview extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'SMS - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/sms/main';
		$this->template->title.= 'Main';
		
		return;
	}
	
	public function action_access()
	{
		$this->_view = 'components/sms/tutorials_access';
		$this->template->title.= 'Fixing Broken Access';
		
		return;
	}
	
	public function action_awards()
	{
		$this->_view = 'components/sms/tutorials_awards';
		$this->template->title.= 'The Awards System';
		
		return;
	}
	
	public function action_buttons()
	{
		$this->_view = 'components/sms/tutorials_buttons';
		$this->template->title.= 'Creating Buttons';
		
		return;
	}
	
	public function action_emails()
	{
		$this->_view = 'components/sms/tutorials_dynamic_messages';
		$this->template->title.= 'Dynamic Activation Emails';
		
		return;
	}
	
	public function action_ranks()
	{
		$this->_view = 'components/sms/tutorials_ranks';
		$this->template->title.= 'Creating New Ranks';
		
		return;
	}
	
	public function action_variables()
	{
		$this->_view = 'components/sms/tutorials_variables';
		$this->template->title.= 'Fixing the Variables File';
		
		return;
	}
}
