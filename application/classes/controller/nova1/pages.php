<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Nova1_Pages extends Controller_Template {

	private $imagepath;
	
	public function before()
	{
		parent::before();
		
		$this->imagepath = Url::base().'application/views/design/images/nova1/';
		
		$this->template = View::factory('template');
		$this->template->title = 'Nova 1 - ';
		
		// load Spyc
		Kohana::load(Kohana::find_file('vendor', 'spyc/spyc'));
	}
	
	public function after()
	{
		$this->template->title.= ' :: AnodyneDocs';
		
		$this->response->body($this->template);
	}
	
	public function action_index()
	{
		$this->template->content = View::factory('components/pages/nova1/pages/index');
		$this->template->title.= 'Pages';
	}
	
	public function action_admin()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_archive()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_characters()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_login()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_main()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_manage()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_messages()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_personnel()
	{
		$page = 'Personnel';
		
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_report()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function action_sim()
	{
		switch ($this->request->param('id'))
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
		
		$this->template->content = View::factory('components/pages/nova1/pages/'.$view);
		$this->template->content->header = $header;
		$this->template->title.= $header;
	}
	
	public function site()
	{
		$page = 'Site';
		
		switch ($this->request->param('id'))
		{
			case 'index':
			default:
				$header = 'Site';
				$data['sub'] = ($this->request->param('id') == 'main') ? $page : NULL;
				
				$view = 'site_main';
				
				break;
				
			case 'bioform':
				$header = 'Bio Form Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/biosections' => 'Bio Form Sections',
					'nova/pages/site/biotabs' => 'Bio Form Tabs'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-field-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-field-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_bioform';
				
				break;
				
			case 'biosections':
				$header = 'Bio Form Sections';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/bioform' => 'Bio Form Management',
					'nova/pages/site/biotabs' => 'Bio Form Tabs'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-section-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-section-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_biosections';
				
				break;
				
			case 'biotabs':
				$header = 'Bio Form Tabs';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/bioform' => 'Bio Form Management',
					'nova/pages/site/biosections' => 'Bio Form Sections'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-tab-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-tab-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_biotabs';
				
				break;
				
			case 'dockingform':
				$header = 'Docking Form';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/dockingsections' => 'Docking Sections',
					'nova/pages/sim/dockingrequest' => 'Docking Request',
					'nova/pages/sim/docked' => 'Docked Items',
					'nova/pages/manage/docked' => 'Docked Item Management',
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-field-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-field-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_dockingform';
				
				break;
				
			case 'dockingsections':
				$header = 'Docking Sections';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/dockingform' => 'Docking Form',
					'nova/pages/sim/dockingrequest' => 'Docking Request',
					'nova/pages/sim/docked' => 'Docked Items',
					'nova/pages/manage/docked' => 'Docked Item Management'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-section-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-section-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_dockingsections';
				
				break;
				
			case 'manifests':
				$header = 'Site Manifests';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/personnel/index' => 'Manifest'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/icon-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/icon-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_manifests';
				
				break;
				
			case 'menucats':
				$header = 'Menu Categories';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/menus' => 'Menu Management'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-section-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-section-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_menucats';
				
				break;
				
			case 'menus':
				$header = 'Menu Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/menucats' => 'Menu Categories'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/menu-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/menu-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_menus';
				
				break;
				
			case 'messages':
				$header = 'Messages &amp; Titles';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/message-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/message-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_messages';
				
				break;
				
			case 'rankcatalogue':
				$header = 'Rank Set System Catalogue';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/ranks' => 'Rank Management',
					'nova/pages/user/options' => 'User Site Options'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/catalogue-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/catalogue-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_rankcatalogue';
				
				break;
				
			case 'rolegroups':
				$header = 'Access Role Page Groups';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/roles' => 'Access Roles',
					'nova/pages/site/rolepages' => 'Access Role Pages'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/group-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/group-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_rolegroups';
				
				break;
				
			case 'rolepages':
				$header = 'Access Role Pages';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/roles' => 'Access Roles',
					'nova/pages/site/rolegroups' => 'Access Role Page Groups'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/page-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/page-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_rolepages';
				
				break;
				
			case 'roles':
				$header = 'Access Roles';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/rolepages' => 'Access Role Pages',
					'nova/pages/site/rolegroups' => 'Access Role Page Groups'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/role-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/role-delete.png',
						'alt' => 'delete'),
					'view' => array(
						'src' => $this->imagepath .'system/admin/role-view.png',
						'alt' => 'view'),
				);
				
				$view = 'site_roles';
				
				break;
				
			case 'settings':
				$header = 'Settings';
				$data['sub'] = $page;
				
				$view = 'site_settings';
				
				break;
				
			case 'simtypes':
				$header = 'Sim Types';
				$data['sub'] = $page;
				
				$view = 'site_simtypes';
				
				break;
				
			case 'skincatalogue':
				$header = 'Skin Catalogue';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/user/options' => 'User Site Options'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/catalogue-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/catalogue-delete.png',
						'alt' => 'delete'),
					'default' => array(
						'src' => $this->imagepath .'system/admin/icon-green-small.png',
						'alt' => 'default'),
				);
				
				$view = 'site_skincatalogue';
				
				break;
				
			case 'specsform':
				$header = 'Specs Form';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/specssections' => 'Specs Sections',
					'nova/pages/sim/specs' => 'Specs',
					'nova/pages/manage/specs' => 'Specs Management'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-field-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-field-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_specsform';
				
				break;
				
			case 'specssections':
				$header = 'Specs Sections';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/specsform' => 'Specs Form',
					'nova/pages/sim/specs' => 'Specs',
					'nova/pages/manage/specs' => 'Specs Management'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-section-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-section-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_specssections';
				
				break;
				
			case 'tourform':
				$header = 'Tour Form';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/tour' => 'Tour',
					'nova/pages/manage/tour' => 'Tour Management'
				);
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/forms-field-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/forms-field-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'site_tourform';
				
				break;
		}
		
		CI::Library('template')->write('title', $header. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function upload()
	{
		$page = 'Upload';
		
		switch ($this->request->param('id'))
		{
			case 'main':
			default:
				$header = 'Upload';
				$data['sub'] = ($this->request->param('id') == 'main') ? $page : NULL;
				
				$view = 'upload_main';
				
			case 'index':
				$header = 'Upload Images';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/upload/manage' => 'Manage Uploads',
				);
				
				$view = 'upload_index';
				
				break;
				
			case 'manage':
				$header = 'Manage Uploads';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/upload/index' => 'Upload Images',
				);
				
				$view = 'upload_manage';
				
				break;
		}
		
		CI::Library('template')->write('title', $header. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function user()
	{
		$page = 'User';
		
		switch ($this->request->param('id'))
		{
			case 'index':
			default:
				$header = 'User';
				$data['sub'] = ($this->request->param('id') == 'main') ? $page : NULL;
				
				$view = 'user_main';
				
			case 'account':
				$header = 'Account';
				$data['sub'] = $page;
				
				$view = 'user_account';
				
				break;
				
			case 'all':
				$header = 'All Players';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/user-delete.png',
						'alt' => 'delete user'),
					'view' => array(
						'src' => $this->imagepath .'system/admin/user-view.png',
						'alt' => 'view user'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/user-edit.png',
						'alt' => 'edit user')
				);
				
				$view = 'user_all';
				
				break;
				
			case 'link':
				$header = 'Link Characters to Account';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'star' => array(
						'src' => $this->imagepath .'system/admin/icon-star.png',
						'alt' => 'star'),
					'add' => array(
						'src' => $this->imagepath .'system/admin/user-add.png',
						'alt' => 'add user'),
					'remove' => array(
						'src' => $this->imagepath .'system/admin/user-delete.png',
						'alt' => 'remove user')
				);
				
				$view = 'user_characterlink';
				
				break;
				
			case 'nominate':
				$header = 'Nominate for Award';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/awards' => 'Crew Awards',
					'nova/pages/manage/awards' => 'Manage Crew Awards',
				);
				
				$data['images'] = array(
					'approve' => array(
						'src' => $this->imagepath .'system/admin/award-approve.png',
						'alt' => 'approve'),
					'reject' => array(
						'src' => $this->imagepath .'system/admin/award-reject.png',
						'alt' => 'reject'),
				);
				
				$view = 'user_nominate';
				
				break;
				
			case 'options':
				$header = 'Site Options';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/rankcatalogue' => 'Rank Catalogue',
					'nova/pages/site/skincatalogue' => 'Skin Catalogue',
				);
				
				$view = 'user_options';
				
				break;
				
			case 'status':
				$header = 'Request LOA';
				$data['sub'] = $page;
				
				$view = 'user_status';
				
				break;
		}
		
		CI::Library('template')->write('title', $header. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function wiki()
	{
		$page = 'Thresher';
		
		switch ($this->request->param('id'))
		{
			case 'index':
			default:
				$header = 'Thresher';
				$data['sub'] = ($this->request->param('id') == 'main') ? $page : NULL;
				
				$view = 'wiki_main';
				
				break;
				
			case 'main':
				$header = 'Thresher Main Page';
				$data['sub'] = $page;
				
				$view = 'wiki_index';
				
				break;
				
			case 'categories':
				$header = 'Categories Listing';
				$data['sub'] = $page;
				
				$view = 'wiki_categories';
				
				break;
				
			case 'category':
				$header = 'Category Page Listing';
				$data['sub'] = $page;
				
				$view = 'wiki_category';
				
				break;
				
			case 'managecategories':
				$header = 'Manage Categories';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/wiki/icon-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/wiki/icon-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'wiki_managecategories';
				
				break;
				
			case 'managepages':
				$header = 'Manage Pages';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/wiki/page-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/wiki/page-delete.png',
						'alt' => 'delete'),
				);
				
				$view = 'wiki_managepages';
				
				break;
				
			case 'page':
				$header = 'Create/Edit Page';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/wiki/page-view.png',
						'alt' => 'view'),
					'revert' => array(
						'src' => $this->imagepath .'system/wiki/page-revert.png',
						'alt' => 'revert'),
					'comment' => array(
						'src' => $this->imagepath .'system/wiki/comment-add.png',
						'alt' => 'add comment'),
				);
				
				$view = 'wiki_page';
				
				break;
				
			case 'recent':
				$header = 'Recent Changes';
				$data['sub'] = $page;
				
				$view = 'wiki_recent';
				
				break;
				
			case 'view':
				$header = 'View Page/Draft';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/wiki/page-view.png',
						'alt' => 'view'),
					'revert' => array(
						'src' => $this->imagepath .'system/wiki/page-revert.png',
						'alt' => 'revert'),
					'comment' => array(
						'src' => $this->imagepath .'system/wiki/comment-add.png',
						'alt' => 'add comment'),
				);
				
				$view = 'wiki_view';
				
				break;
		}
		
		CI::Library('template')->write('title', $header. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function write()
	{
		$page = 'Write';
		
		switch ($this->request->param('id'))
		{
			case 'index':
			default:
				$header = 'Index';
				$data['sub'] = ($this->request->param('id') == 'main') ? $page : NULL;
				
				$view = 'write_main';
				
				break;
				
			case 'main':
				$header = 'Writing Control Panel';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'unread' => array(
						'src' => $this->imagepath .'system/admin/icon-green-small.png',
						'alt' => 'unread'),
				);
				
				$view = 'write_index';
				
				break;
				
			case 'missionpost':
				$header = 'Mission Post';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewpost' => 'View Post',
					'nova/pages/sim/listposts' => 'Mission Posts Listing',
					'nova/pages/manage/posts' => 'Mission Post Management'
				);
				
				$view = 'write_missionpost';
				
				break;
				
			case 'newsitem':
				$header = 'News Item';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/main/news' => 'News',
					'nova/pages/main/viewnews' => 'View News Item',
					'nova/pages/manage/news' => 'News Item Management',
					'nova/pages/manage/newscats' => 'News Category Management'
				);
				
				$view = 'write_newsitem';
				
				break;
				
			case 'personallog':
				$header = 'Personal Log';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewlog' => 'View Personal Log',
					'nova/pages/sim/listlogs' => 'Personal Logs Listing',
					'nova/pages/manage/logs' => 'Personal Log Management'
				);
				
				$view = 'write_personallog';
				
				break;
		}
		
		CI::Library('template')->write('title', $header. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file pages.php */
/* Location: ./application/modules/nova/controllers/pages.php */