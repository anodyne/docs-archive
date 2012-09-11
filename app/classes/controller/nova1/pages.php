<?php

class Controller_Nova1_Pages extends Controller_Base
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
		$this->_view = 'components/nova1/pages/index';
		$this->template->title.= 'Pages';
	}
	
	public function action_admin($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'General Admin Pages';
				$view = 'admin_main';
			break;
				
			case 'index':
				$header = 'Admin Control Panel';
				$view = 'admin_index';
			break;
				
			case 'whatsnew':
				$header = "What's New in Nova";
				$view = 'admin_whatsnew';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_archive($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'SMS Archives';
				$view = 'archive_main';
			break;
				
			case 'characters':
				$header = 'Characters';
				$view = 'archive_characters';
			break;
				
			case 'database':
				$header = 'Database Entries';
				$view = 'archive_database';
			break;
				
			case 'decks':
				$header = 'Deck Listing';
				$view = 'archive_decks';
			break;
				
			case 'departments':
				$header = 'Departments';
				$view = 'archive_departments';
			break;
				
			case 'positions':
				$header = 'Positions';
				$view = 'archive_positions';
			break;
				
			case 'index':
				$header = 'SMS Archives Index';
				$view = 'archive_index';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_characters($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Character Management';
				$view = 'characters_main';
			break;
				
			case 'all':
				$header = 'All Characters';
				$view = 'characters_index';
			break;
				
			case 'awards':
				$header = 'Give/Remove Awards';
				$view = 'characters_awards';
			break;
				
			case 'bio':
				$header = 'Edit Bio';
				$view = 'characters_bio';
			break;
			
			case 'coc':
				$header = 'Chain of Command Management';
				$view = 'characters_coc';
			break;
				
			case 'create':
				$header = 'Create Character';
				$view = 'characters_create';
			break;
				
			case 'npcs':
				$header = 'All NPCs';
				$view = 'characters_npcs';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_login($page = '')
	{
		switch ($page)
		{
			case 'index':
			default:
				$header = 'Login';
				$view = 'login_main';
			break;
				
			case 'main':
				$header = 'Login';
				$view = 'login_index';
			break;
				
			case 'reset':
				$header = 'Reset Password';
				$view = 'login_reset';
			break;
				
			case 'maintenance':
				$header = 'Maintenance Mode';
				$view = 'login_maintenance';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_main($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Main';
				$view = 'main_main';
			break;
				
			case 'index':
				$header = 'Index';
				$view = 'main_index';
			break;
				
			case 'contact':
				$header = 'Contact';
				$view = 'main_contact';
			break;
				
			case 'credits':
				$header = 'Site Credits';
				$view = 'main_credits';
			break;
				
			case 'join':
				$header = 'Join';
				$view = 'main_join';
			break;
				
			case 'news':
				$header = 'News';
				$view = 'main_news';
			break;
				
			case 'viewnews':
				$header = 'View News';
				$view = 'main_viewnews';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_manage($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Data Management';
				$view = 'manage_main';
			break;
				
			case 'awards':
				$header = 'Awards Management';
				$view = 'manage_awards';
			break;
				
			case 'comments':
				$header = 'Comments Management';
				$view = 'manage_comments';
			break;
				
			case 'decks':
				$header = 'Deck Listing';
				$view = 'manage_decks';
			break;
				
			case 'depts':
				$header = 'Department Management';
				$view = 'manage_depts';
			break;
				
			case 'docked':
				$header = 'Docked Item Management';
				$view = 'manage_docked';
			break;
				
			case 'logs':
				$header = 'Personal Log Management';
				$view = 'manage_logs';
			break;
			
			case 'missiongroups':
				$header = 'Mission Groups';
				$view = 'manage_missiongroups';
			break;
				
			case 'missions':
				$header = 'Missions';
				$view = 'manage_missions';
			break;
				
			case 'news':
				$header = 'News Item Management';
				$view = 'manage_news';
			break;
				
			case 'newscats':
				$header = 'News Category Management';
				$view = 'manage_newscats';
			break;
			
			case 'positions':
				$header = 'Position Management';
				$view = 'manage_positions';
			break;
				
			case 'posts':
				$header = 'Mission Posts Management';
				$view = 'manage_posts';
			break;
			
			case 'ranks':
				$header = 'Rank Management';
				$view = 'manage_ranks';
			break;
				
			case 'specs':
				$header = 'Specifications';
				$view = 'manage_specs';
			break;
				
			case 'tour':
				$header = 'Tour Management';
				$view = 'manage_tour';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_messages($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Private Messages';
				$view = 'messages_main';
			break;
				
			case 'index':
				$header = 'Inbox';
				$view = 'messages_index';
			break;
				
			case 'read':
				$header = 'Reading Private Messages';
				$view = 'messages_read';
			break;
				
			case 'write':
				$header = 'Writing Private Messages';
				$view = 'messages_write';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_personnel($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Personnel';
				$view = 'personnel_main';
			break;
				
			case 'index':
				$header = 'Manifest';
				$view = 'personnel_index';
			break;
				
			case 'character':
				$header = 'Character Bio';
				$view = 'personnel_character';
			break;
				
			case 'coc':
				$header = 'Chain of Command';
				$view = 'personnel_coc';
			break;
				
			case 'player':
				$header = 'Player Bio';
				$view = 'personnel_player';
			break;
				
			case 'viewawards':
				$header = 'View Personnel Awards';
				$view = 'personnel_viewawards';
			break;
				
			case 'viewlogs':
				$header = 'View Personnel Personal Logs';
				$view = 'personnel_viewlogs';
			break;
				
			case 'viewposts':
				$header = 'View Personnel Mission Posts';
				$view = 'personnel_viewposts';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_report($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Reports';
				$view = 'report_main';
			break;
				
			case 'activity':
				$header = 'Crew Activity';
				$view = 'report_activity';
			break;
				
			case 'applications':
				$header = 'Sim Applications';
				$view = 'report_applications';
			break;
				
			case 'awardnominations':
				$header = 'Award Nominations';
				$view = 'report_awardnominations';
			break;
				
			case 'loa':
				$header = 'LOA Records';
				$view = 'report_loa';
			break;
				
			case 'milestones':
				$header = 'Player Milestones';
				$view = 'report_milestones';
			break;
			
			case 'moderation':
				$header = 'Moderation Status';
				$view = 'report_moderation';
			break;
				
			case 'posting':
				$header = 'Posting Levels';
				$view = 'report_posting';
			break;
				
			case 'versions':
				$header = 'System Information &amp; Version History';
				$view = 'report_versions';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_sim($page = '')
	{
		switch ($page)
		{
			case 'main':
			default:
				$header = 'Sim';
				$view = 'sim_main';
			break;
				
			case 'index':
				$header = 'Index';
				$view = 'sim_index';
			break;
				
			case 'awards':
				$header = 'Crew Awards';
				$view = 'sim_awards';
			break;
				
			case 'decks':
				$header = 'Deck Listing';
				$view = 'sim_decks';
			break;
				
			case 'depts':
				$header = 'Departments &amp; Positions';
				$view = 'sim_depts';
			break;
				
			case 'docked':
				$header = 'Docked Items';
				$view = 'sim_docked';
			break;
				
			case 'dockingrequest':
				$header = 'Docking Request';
				$view = 'sim_docking_request';
			break;
				
			case 'listlogs':
				$header = 'Personal Logs Listing';
				$view = 'sim_listlogs';
			break;
				
			case 'listposts':
				$header = 'Mission Posts Listing';
				$view = 'sim_listposts';
			break;
				
			case 'missions':
				$header = 'Missions';
				$view = 'sim_missions';
			break;
				
			case 'specs':
				$header = 'Specifications';
				$view = 'sim_specs';
			break;
				
			case 'stats':
				$header = 'Stats';
				$view = 'sim_stats';
			break;
				
			case 'tour':
				$header = 'Tour';
				$view = 'sim_tour';
			break;
				
			case 'viewlog':
				$header = 'View Personal Log';
				$view = 'sim_viewlog';
			break;
				
			case 'viewpost':
				$header = 'View Mission Post';
				$view = 'sim_viewpost';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_site($page = '')
	{
		switch ($page)
		{
			default:
			case 'index':
				$header = 'Site';
				$view = 'site_main';
			break;
				
			case 'bioform':
				$header = 'Bio Form Management';
				$view = 'site_bioform';
			break;
				
			case 'biosections':
				$header = 'Bio Form Sections';
				$view = 'site_biosections';
			break;
				
			case 'biotabs':
				$header = 'Bio Form Tabs';
				$view = 'site_biotabs';
			break;
				
			case 'dockingform':
				$header = 'Docking Form';
				$view = 'site_dockingform';
			break;
				
			case 'dockingsections':
				$header = 'Docking Sections';
				$view = 'site_dockingsections';
			break;
				
			case 'manifests':
				$header = 'Site Manifests';
				$view = 'site_manifests';
			break;
				
			case 'menucats':
				$header = 'Menu Categories';
				$view = 'site_menucats';
			break;
				
			case 'menus':
				$header = 'Menu Management';
				$view = 'site_menus';
			break;
				
			case 'messages':
				$header = 'Messages &amp; Titles';
				$view = 'site_messages';
			break;
				
			case 'rankcatalogue':
				$header = 'Rank Set System Catalogue';
				$view = 'site_rankcatalogue';
			break;
				
			case 'rolegroups':
				$header = 'Access Role Page Groups';
				$view = 'site_rolegroups';
			break;
				
			case 'rolepages':
				$header = 'Access Role Pages';
				$view = 'site_rolepages';
			break;
				
			case 'roles':
				$header = 'Access Roles';
				$view = 'site_roles';
			break;
				
			case 'settings':
				$header = 'Settings';
				$view = 'site_settings';
			break;
				
			case 'simtypes':
				$header = 'Sim Types';
				$view = 'site_simtypes';
			break;
				
			case 'skincatalogue':
				$header = 'Skin Catalogue';
				$view = 'site_skincatalogue';
			break;
				
			case 'specsform':
				$header = 'Specs Form';
				$view = 'site_specsform';
			break;
				
			case 'specssections':
				$header = 'Specs Sections';
				$view = 'site_specssections';
			break;
				
			case 'tourform':
				$header = 'Tour Form';
				$view = 'site_tourform';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_upload($page = '')
	{
		switch ($page)
		{
			default:
			case 'main':
				$header = 'Upload';
				$view = 'upload_main';
			break;
				
			case 'index':
				$header = 'Upload Images';
				$view = 'upload_index';
			break;
				
			case 'manage':
				$header = 'Manage Uploads';
				$view = 'upload_manage';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_user($page = '')
	{
		switch ($page)
		{
			default:
			case 'index':
				$header = 'User';
				$view = 'user_main';
			break;
				
			case 'account':
				$header = 'Account';
				$view = 'user_account';
			break;
				
			case 'all':
				$header = 'All Players';
				$view = 'user_all';
			break;
				
			case 'link':
				$header = 'Link Characters to Account';
				$view = 'user_characterlink';
			break;
				
			case 'nominate':
				$header = 'Nominate for Award';
				$view = 'user_nominate';
			break;
				
			case 'options':
				$header = 'Site Options';
				$view = 'user_options';
			break;
				
			case 'status':
				$header = 'Request LOA';
				$view = 'user_status';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_wiki($page = '')
	{
		switch ($page)
		{
			default:
			case 'index':
				$header = 'Thresher';
				$view = 'wiki_main';
			break;
				
			case 'main':
				$header = 'Thresher Main Page';
				$view = 'wiki_index';
			break;
				
			case 'categories':
				$header = 'Categories Listing';
				$view = 'wiki_categories';
			break;
				
			case 'category':
				$header = 'Category Page Listing';
				$view = 'wiki_category';
			break;
				
			case 'managecategories':
				$header = 'Manage Categories';
				$view = 'wiki_managecategories';
			break;
				
			case 'managepages':
				$header = 'Manage Pages';
				$view = 'wiki_managepages';
			break;
				
			case 'page':
				$header = 'Create/Edit Page';
				$view = 'wiki_page';
			break;
				
			case 'recent':
				$header = 'Recent Changes';
				$view = 'wiki_recent';
			break;
				
			case 'view':
				$header = 'View Page/Draft';
				$view = 'wiki_view';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_write($page = '')
	{
		switch ($page)
		{
			default:
			case 'index':
				$header = 'Index';
				$view = 'write_main';
			break;
				
			case 'main':
				$header = 'Writing Control Panel';
				$view = 'write_index';
			break;
				
			case 'missionpost':
				$header = 'Mission Post';
				$view = 'write_missionpost';
			break;
				
			case 'newsitem':
				$header = 'News Item';
				$view = 'write_newsitem';
			break;
				
			case 'personallog':
				$header = 'Personal Log';
				$view = 'write_personallog';
			break;
		}
		
		$this->_view = 'components/nova1/pages/'.$view;
		$this->_data->header = $header;
		$this->template->title.= $header;
	}
}
