<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova2_Everything extends Controller_Template {
	
	public function before()
	{
		parent::before();
		
		$this->template = View::factory('template');
		$this->template->title = 'AnodyneDocs :: Nova 2 - ';
	}
	
	public function after()
	{
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/nova2/everything/index');
		
		$this->template->title.= 'Main';
	}
	
	public function action_changelog()
	{
		$this->template->content = View::factory('components/nova2/everything/changelog');
		
		// find the markdown plugin
		$path = Kohana::find_file('vendor', 'markdown/markdown');
		
		// load markdown if it exists
		if ($path)
		{
			Kohana::load($path);
		}
		
		$nova20 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova20.md');
		$nova12 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova12.md');
		$nova11 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova11.md');
		$nova10 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova10.md');
		
		$this->template->content->nova20 = Markdown($nova20);
		$this->template->content->nova12 = Markdown($nova12);
		$this->template->content->nova11 = Markdown($nova11);
		$this->template->content->nova10 = Markdown($nova10);
		
		$this->template->title.= 'Nova 2 Changelog';
	}
	
	public function action_changes()
	{
		switch ($this->request->param('id'))
		{
			default:
			case 'sms':
				$view = 'components/nova2/everything/changes_sms';
				$title = 'Changes Since SMS';
			break;
			
			case 'nova':
				$view = 'components/nova2/everything/changes_nova';
				$title = 'Changes Since Nova 1.2';
			break;
		}
		
		$this->template->content = View::factory($view);
		
		$this->template->title.= $title;
	}
	
	public function action_configure()
	{
		switch ($this->request->param('id'))
		{
			default:
			case 'nova':
				$view = 'components/nova2/everything/configure_nova';
				$title = 'Configuring Nova';
			break;
			
			case 'codeigniter':
				$view = 'components/nova2/everything/configure_ci';
				$title = 'Configuring CodeIgniter';
			break;
		}
		
		$this->template->content = View::factory($view);
		
		$this->template->title.= $title;
	}
	
	public function action_genres()
	{
		$this->template->content = View::factory('components/nova2/everything/genres');
		
		$this->template->title.= 'Genres in Nova';
	}
	
	public function action_godaddy()
	{
		$this->template->content = View::factory('components/nova2/everything/godaddy');
		
		$this->template->title.= 'GoDaddy &amp; Nova 2';
	}
	
	public function action_license()
	{
		$this->template->content = View::factory('components/nova2/everything/license');
		
		$this->template->title.= 'The Nova License';
	}
	
	public function action_structure()
	{
		$this->template->content = View::factory('components/nova2/everything/structure');
		
		$this->template->title.= 'Nova 2 File Structure';
	}
	
	public function action_urls()
	{
		$this->template->content = View::factory('components/nova2/everything/urls');
		
		$this->template->title.= 'Nova URLs';
	}
	
	public function action_versioning()
	{
		$this->template->content = View::factory('components/nova2/everything/versioning');
		
		$this->template->title.= 'Versioning in Nova';
	}
}
