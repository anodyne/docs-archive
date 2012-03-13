<?php

class Controller_Nova1_Tutorials extends Controller_Base
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
		$this->_view = 'components/nova1/tutorials/index';
		$this->template->title.= 'Tutorials';
		
		return;
	}
	
	public function action_advanced($page = '')
	{
		switch ($page)
		{
			case 'appfolder':
				$header = 'Changing the Application Folder';
				$view = 'adv_appfolder';
			break;
				
			case 'changeindex':
				$header = 'Changing the Index File';
				$view = 'adv_changeindex';
			break;
				
			case 'changelang':
				$header = 'Changing Language Items';
				$view = 'adv_changelang';
			break;
				
			case 'gitserver':
				$header = 'Setting Up Git on Your Server for Updating';
				$view = 'adv_gitserver';
			break;
				
			case 'helpers':
				$header = 'Creating &amp; Modifying Helpers';
				$view = 'adv_helpers';
			break;
				
			case 'libraries':
				$header = 'Creating &amp; Modifying Libraries';
				$view = 'adv_libraries';
			break;
				
			case 'multipleapps':
				$header = 'Running Multiple Applications of Nova';
				$view = 'adv_multipleapps';
			break;
				
			case 'rankset':
				$header = 'Creating a Rank Set';
				$view = 'adv_rankset';
			break;
				
			case 'removeindex':
				$header = 'Removing the Index File from the URL';
				$view = 'adv_removeindex';
			break;
				
			case 'translate':
				$header = 'Translating Nova to Another Language';
				$view = 'adv_translate';
			break;
				
			case 'usinggithub':
				$header = 'Nova &amp; Github';
				$view = 'adv_usinggithub';
			break;
			
			default:
				$this->request->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_config($page = '')
	{
		switch ($page)
		{
			case 'ci':
				$header = 'CodeIgniter Configuration';
				$view = 'config_ci';
			break;
				
			case 'nova':
				$header = 'Nova Configuration';
				$view = 'config_nova';
			break;
			
			default:
				$this->response->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_extending($page = '')
	{
		switch ($page)
		{
			case 1:
				$header = 'Tutorial: An Introduction to Extending Nova';
				$view = 'extending_1';
			break;
				
			case 2:
				$header = 'Tutorials: Templates &amp; Views, Oh My!';
				$view = 'extending_2';
			break;
				
			case 3:
				$header = 'Tutorials: Models, Ooh La La';
				$view = 'extending_3';
			break;
				
			case 4:
				$header = 'Tutorials: Models, Ooh La La, Part 2';
				$view = 'extending_4';
			break;
				
			case 5:
				$header = 'Tutorials: Controller, Meet View';
				$view = 'extending_5';
			break;
				
			case 6:
				$header = 'Extending Nova: Replacing Pages';
				$view = 'extending_6';
			break;
				
			case 7:
				$header = 'Extending Nova: Replacing Models';
				$view = 'extending_7';
			break;
			
			default:
				$this->request->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_intro($page = '')
	{
		switch ($page)
		{
			case 'backup':
				$header = 'Backup Guide';
				$view = 'intro_backup';
			break;
				
			case 'folders':
				$header = 'The Folder Structure';
				$view = 'intro_folders';
			break;
				
			case 'genres':
				$header = 'Genres in Nova';
				$view = 'intro_genres';
			break;
				
			case 'terms':
				$header = 'Glossary of Terms';
				$view = 'intro_terms';
			break;
				
			case 'urls':
				$header = 'Nova URLs';
				$view = 'intro_urls';
			break;
				
			case 'versioning':
				$header = 'Versioning in Nova';
				$view = 'intro_versioning';
			break;
				
			default:
				$this->response->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_models($page = '')
	{
		switch ($page)
		{
			case 1:
				$header = 'Tutorial: What is a Model?';
				$view = 'models_1';
			break;
				
			case 2:
				$header = 'Tutorials: Creating a New Model Method';
				$view = 'models_2';
			break;
				
			case 3:
				$header = 'Tutorials: Working with Data From a Model';
				$view = 'models_3';
			break;
				
			default:
				$this->request->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_practical($page = '')
	{
		switch ($this->request->param('id'))
		{
			case 'replacingpage':
				$header = 'Replacing a Page';
				$view = 'prac_replacing_page';
			break;
			
			case 'replacingview':
				$header = 'Replacing View Files';
				$view = 'prac_replacing_views';
			break;
			
			default:
				$this->response->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_reference($page = '')
	{
		switch ($page)
		{
			case 'controllers':
				$header = 'Controllers';
				$view = 'ref_controllers';
			break;
			
			case 'libraries':
				$header = 'Libraries';
				$view = 'ref_libraries';
			break;
			
			case 'views':
				$header = 'Views';
				$view = 'ref_views';
			break;
			
			default:
				$this->response->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
	
	public function action_skins($page = '')
	{
		switch ($page)
		{
			case 1:
				$header = 'Anatomy of a Skin';
				$view = 'skins_1';
			break;
				
			case 2:
				$header = 'Inside Seamless Substitution';
				$view = 'skins_2';
			break;
				
			case 3:
				$header = 'Anatomy of a Template File';
				$view = 'skins_3';
			break;
				
			case 4:
				$header = 'Anatomy of a Skin Section';
				$view = 'skins_4';
			break;
				
			case 5:
				$header = 'Nova &amp; jQuery UI Widgets';
				$view = 'skins_5';
			break;
				
			case 6:
				$header = 'Nova &amp; Javascript';
				$view = 'skins_6';
			break;
			
			case 7:
				$header = 'Creating a Skin, Part 1';
				$view = 'skins_7';
			break;
				
			case 8:
				$header = 'Creating a Skin, Part 2';
				$view = 'skins_8';
			break;
				
			case 9:
				$header = 'Creating a Skin, Part 3';
				$view = 'skins_9';
			break;
				
			case 10:
				$header = 'Creating a Skin, Part 4';
				$view = 'skins_10';
			break;
				
			case 11:
				$header = 'Creating a Skin, Part 5';
				$view = 'skins_11';
			break;
				
			default:
				$this->response->redirect('nova1/tutorials/index');
			break;
		}
		
		$this->_view = 'components/nova1/tutorials/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
		
		return;
	}
}
