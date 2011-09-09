<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Modify extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 2 - ';
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/index');
		
		$this->template->title.= 'Modifying Nova';
	}
	
	/**
	 * Basic Tutorials
	 */
	
	public function action_addimage()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/basic_ss_addimage');
		
		$this->template->title.= 'Seamless Substitution: Adding an Image to a Page';
	}
	
	public function action_changeicons()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/basic_ss_icons');
		
		$this->template->title.= 'Seamless Substitution: Changing Icons';
	}
	
	public function action_language()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/basic_language');
		
		$this->template->title.= 'Changing Language Items in Nova';
	}
	
	/**
	 * Intermediate Tutorials
	 */
	 
	public function action_changeappfolder()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/int_change_appfolder');
		
		$this->template->title.= 'Changing the Name of the Application Folder';
	}
	
	public function action_changeindex()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/int_change_index');
		
		$this->template->title.= 'Changing the Index File';
	}
	
	public function action_newpage()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/int_new_page');
		
		$this->template->title.= 'Creating a New Page';
	}
	
	/**
	 * Advanced Tutorials
	 */
	
	public function action_github()
	{
		$this->template->content = View::factory('components/pages/nova2/developers/modify/adv_github');
		
		$this->template->title.= 'Nova and Github';
	}
}
