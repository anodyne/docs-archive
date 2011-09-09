<?php

class Pages extends Controller {
	
	public $title;
	private $viewpath;
	private $imagepath;
	
	function __construct()
	{
		parent::Controller();
		
		// set the variables
		$this->title		= ' :: Nova User Guide';
		$this->viewpath		= 'modules/nova/pages/pages/';
		$this->imagepath 	= base_url() . APPFOLDER .'/views/modules/nova/images/';
	}
	
	public function index()
	{
		$data['header'] = 'Pages';
		$data['sub'] = NULL;
		
		$view = $this->viewpath .'main';
		$js = 'modules/nova/js/pages_main_js';
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		CI::Library('template')->write_view('javascript', $js);
		
		CI::Library('template')->render();
	}
	
	public function admin()
	{
		$page = 'General Admin Pages';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'General Admin Pages';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'admin_main';
				
				break;
				
			case 'index':
				$data['header'] = 'Admin Control Panel';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'admin_index';
				
				break;
				
			case 'whatsnew':
				$data['header'] = "What's New in Nova";
				$data['sub'] = $page;
				
				$view = $this->viewpath .'admin_whatsnew';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function archive()
	{
		$page = 'SMS Archives';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'SMS Archives';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'archive_main';
				
				break;
				
			case 'characters':
				$data['header'] = 'Characters';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_characters';
				
				break;
				
			case 'database':
				$data['header'] = 'Database Entries';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_database';
				
				break;
				
			case 'decks':
				$data['header'] = 'Deck Listing';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_decks';
				
				break;
				
			case 'departments':
				$data['header'] = 'Departments';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_departments';
				
				break;
				
			case 'positions':
				$data['header'] = 'Positions';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_positions';
				
				break;
				
			case 'index':
				$data['header'] = 'SMS Archives Index';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'archive_index';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function characters()
	{
		$page = 'Characters';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Character Management';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'characters_main';
				
				break;
				
			case 'all':
				$data['header'] = 'All Characters';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'characters_index';
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/user-delete.png',
						'alt' => 'delete'),
					'account' => array(
						'src' => $this->imagepath .'system/admin/user-account.png',
						'alt' => 'account'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/user-edit.png',
						'alt' => 'edit'),
					'view' => array(
						'src' => $this->imagepath .'system/admin/user-view.png',
						'alt' => 'view'),
					'accept' => array(
						'src' => $this->imagepath .'system/admin/user-accept.png',
						'alt' => 'accept'),
					'reject' => array(
						'src' => $this->imagepath .'system/admin/user-reject.png',
						'alt' => 'reject'),
				);
				
				break;
				
			case 'awards':
				$data['header'] = 'Give/Remove Awards';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/user/nominate' => 'Award Nominations',
					'nova/pages/manage/awards' => 'Manage Crew Awards',
				);
				
				$data['images'] = array(
					'remove' => array(
						'src' => $this->imagepath .'system/admin/icon-delete.png',
						'alt' => 'remove'),
				);
				
				$view = $this->viewpath .'characters_awards';
				
				break;
				
			case 'bio':
				$data['header'] = 'Edit Bio';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'characters_bio';
				
				break;
			
			case 'coc':
				$data['header'] = 'Chain of Command Management';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'characters_coc';
				
				break;
				
			case 'create':
				$data['header'] = 'Create Character';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'characters_create';
				
				break;
				
			case 'npcs':
				$data['header'] = 'All NPCs';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/user-delete.png',
						'alt' => 'delete'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/user-edit.png',
						'alt' => 'edit'),
					'view' => array(
						'src' => $this->imagepath .'system/admin/user-view.png',
						'alt' => 'view'),
				);
				
				$view = $this->viewpath .'characters_npcs';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function login()
	{
		$page = 'Login';
		
		switch ($this->uri->segment(4))
		{
			case 'index':
			default:
				$data['header'] = 'Login';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'login_main';
				
				break;
				
			case 'main':
				$data['header'] = 'Login';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'login_index';
				
				break;
				
			case 'reset':
				$data['header'] = 'Reset Password';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'login_reset';
				
				break;
				
			case 'maintenance':
				$data['header'] = 'Maintenance Mode';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'login_maintenance';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function main()
	{
		$page = 'Main';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Main';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'main_main';
			
				break;
				
			case 'index':
				$data['header'] = 'Index';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_index';
				
				break;
				
			case 'contact':
				$data['header'] = 'Contact';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_contact';
				
				break;
				
			case 'credits':
				$data['header'] = 'Site Credits';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_credits';
				
				break;
				
			case 'join':
				$data['header'] = 'Join';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_join';
				
				break;
				
			case 'news':
				$data['header'] = 'News';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_news';
				
				break;
				
			case 'viewnews':
				$data['header'] = 'View News';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'main_viewnews';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function manage()
	{
		$page = 'Manage';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Data Management';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'manage_main';
			
				break;
				
			case 'awards':
				$data['header'] = 'Awards Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/awards' => 'Awards Listing',
					'nova/pages/personnel/viewawards' => 'View Personnel Awards',
				);
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/award-delete.png',
						'alt' => 'delete'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/award-edit.png',
						'alt' => 'edit'),
				);
				
				$view = $this->viewpath .'manage_awards';
				
				break;
				
			case 'comments':
				$data['header'] = 'Comments Management';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/comment-delete.png',
						'alt' => 'delete'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/comment-edit.png',
						'alt' => 'edit'),
					'approve' => array(
						'src' => $this->imagepath .'system/admin/comment-approve.png',
						'alt' => 'approve'),
				);
				
				$view = $this->viewpath .'manage_comments';
				
				break;
				
			case 'decks':
				$data['header'] = 'Deck Listing';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/decks' => 'View Deck Listing',
				);
				
				$view = $this->viewpath .'manage_decks';
				
				break;
				
			case 'depts':
				$data['header'] = 'Department Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/positions' => 'Position Management',
					'nova/pages/sim/depts' => 'Departments &amp; Positions',
				);
				
				$view = $this->viewpath .'manage_depts';
				
				break;
				
			case 'docked':
				$data['header'] = 'Docked Item Management';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/admin/icon-view.png',
						'alt' => 'view'),
					'accept' => array(
						'src' => $this->imagepath .'system/admin/icon-check.png',
						'alt' => 'accept'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/icon-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/icon-delete.png',
						'alt' => 'delete'),
					'reject' => array(
						'src' => $this->imagepath .'system/admin/icon-cross.png',
						'alt' => 'reject'),
				);
				
				$data['related'] = array(
					'nova/pages/site/dockingform' => 'Docking Form',
					'nova/pages/site/dockingsections' => 'Docking Sections',
					'nova/pages/sim/dockingrequest' => 'Docking Request',
					'nova/pages/sim/docked' => 'Docked Items',
				);
				
				$view = $this->viewpath .'manage_docked';
				
				break;
				
			case 'logs':
				$data['header'] = 'Personal Log Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/write/personallog' => 'Write Personal Log',
					'nova/pages/sim/listlogs' => 'Personal Logs Listing',
					'nova/pages/sim/viewlog' => 'View Personal Log',
				);
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/admin/write-log-view.png',
						'alt' => 'view news'),
					'approve' => array(
						'src' => $this->imagepath .'system/admin/write-log-approve.png',
						'alt' => 'approve news'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/write-log-edit.png',
						'alt' => 'edit news'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/write-log-delete.png',
						'alt' => 'delete news'),
				);
				
				$view = $this->viewpath .'manage_logs';
				
				break;
			
			case 'missiongroups':
				$data['header'] = 'Mission Groups';
				$data['sub'] = $page;

				$data['related'] = array(
					'pages/sim/missions' => 'View Missions',
					'pages/manage/missions' => 'Mission Management',
				);
				
				$view = $this->viewpath .'manage_missiongroups';

				break;
				
			case 'missions':
				$data['header'] = 'Missions';
				$data['sub'] = $page;

				$data['related'] = array(
					'pages/sim/missions' => 'View Missions',
					'pages/manage/missiongroups' => 'Mission Group Management'
				);
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/icon-delete.png',
						'alt' => 'delete'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/icon-edit.png',
						'alt' => 'edit'),
				);
				
				$view = $this->viewpath .'manage_missions';

				break;
				
			case 'news':
				$data['header'] = 'News Item Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/write/newsitem' => 'Write News Item',
					'nova/pages/main/news' => 'All News',
					'nova/pages/main/viewnews' => 'View News Item',
					'nova/pages/manage/newscats' => 'Manage News Categories'
				);
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/admin/write-news-view.png',
						'alt' => 'view news'),
					'approve' => array(
						'src' => $this->imagepath .'system/admin/write-news-approve.png',
						'alt' => 'approve news'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/write-news-edit.png',
						'alt' => 'edit news'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/write-news-delete.png',
						'alt' => 'delete news'),
				);
				
				$view = $this->viewpath .'manage_news';
				
				break;
				
			case 'newscats':
				$data['header'] = 'News Category Management';
				$data['sub'] = $page;

				$data['related'] = array(
					'nova/pages/write/newsitem' => 'Write News Item',
					'nova/pages/main/news' => 'All News',
					'nova/pages/main/viewnews' => 'View News Item',
				);
				
				$view = $this->viewpath .'manage_newscats';

				break;
			
			case 'positions':
				$data['header'] = 'Position Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/depts' => 'Department Management',
					'nova/pages/sim/depts' => 'Departments &amp; Positions',
				);
				
				$view = $this->viewpath .'manage_positions';
				
				break;
				
			case 'posts':
				$data['header'] = 'Mission Posts Management';
				$data['sub'] = $page;

				$data['related'] = array(
					'nova/pages/write/missionpost' => 'Write Mission Post',
					'nova/pages/sim/listposts' => 'Mission Posts Listing',
					'nova/pages/sim/viewpost' => 'View Mission Post',
					'nova/pages/sim/missions' => 'View Missions',
					'nova/pages/manage/missions' => 'Mission Management'
				);

				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/admin/write-post-view.png',
						'alt' => 'view news'),
					'approve' => array(
						'src' => $this->imagepath .'system/admin/write-post-approve.png',
						'alt' => 'approve news'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/write-post-edit.png',
						'alt' => 'edit news'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/write-post-delete.png',
						'alt' => 'delete news'),
				);
				
				$view = $this->viewpath .'manage_posts';

				break;
			
			case 'ranks':
				$data['header'] = 'Rank Management';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'manage_ranks';
				
				break;
				
			case 'specs':
				$data['header'] = 'Specifications';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/specs' => 'Specifications Listing',
					'nova/pages/site/specsform' => 'Specifications Form Fields',
					'nova/pages/site/specssections' => 'Specifications Form Sections',
				);
				
				$view = $this->viewpath .'manage_specs';
				
				break;
				
			case 'tour':
				$data['header'] = 'Tour Management';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/tour' => 'Tour Items',
					'nova/pages/sim/decks' => 'Deck Listing',
					'nova/pages/site/tourform' => 'Tour Form Fields',
					'nova/pages/manage/decks' => 'Manage Deck Listing'
				);
				
				$data['images'] = array(
					'delete' => array(
						'src' => $this->imagepath .'system/admin/tour-delete.png',
						'alt' => 'delete'),
					'edit' => array(
						'src' => $this->imagepath .'system/admin/tour-edit.png',
						'alt' => 'edit'),
				);
				
				$view = $this->viewpath .'manage_tour';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function messages()
	{
		$page = 'Private Messages';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Private Messages';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'messages_main';
				
				break;
				
			case 'index':
				$data['header'] = 'Inbox';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'unread' => array(
						'src' => $this->imagepath .'system/admin/mail-unread.png',
						'alt' => 'unread email'),
				);
				
				$view = $this->viewpath .'messages_index';
				
				break;
				
			case 'read':
				$data['header'] = 'Reading Private Messages';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'messages_read';
				
				break;
				
			case 'write':
				$data['header'] = 'Writing Private Messages';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'messages_write';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function personnel()
	{
		$page = 'Personnel';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Personnel';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'personnel_main';
				
				break;
				
			case 'index':
				$data['header'] = 'Manifest';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/manifests' => 'Site Manifests',
				);
				
				$view = $this->viewpath .'personnel_index';
				
				break;
				
			case 'character':
				$data['header'] = 'Character Bio';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_character';
				
				break;
				
			case 'coc':
				$data['header'] = 'Chain of Command';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_coc';
				
				break;
				
			case 'player':
				$data['header'] = 'Player Bio';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_player';
				
				break;
				
			case 'viewawards':
				$data['header'] = 'View Personnel Awards';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_viewawards';
				
				break;
				
			case 'viewlogs':
				$data['header'] = 'View Personnel Personal Logs';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_viewlogs';
				
				break;
				
			case 'viewposts':
				$data['header'] = 'View Personnel Mission Posts';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'personnel_viewposts';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function report()
	{
		$page = 'Reporting';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Reports';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'report_main';
				
				break;
				
			case 'activity':
				$data['header'] = 'Crew Activity';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/login/index' => 'Logging In',
					'nova/pages/write/missionpost' => 'Write Mission Post',
					'nova/pages/write/personallog' => 'Write Personal Log'
				);
				
				$view = $this->viewpath .'report_activity';
				
				break;
				
			case 'applications':
				$data['header'] = 'Sim Applications';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'green' => array(
						'src' => $this->imagepath .'system/admin/icon-green.png',
						'alt' => 'accepted'),
					'red' => array(
						'src' => $this->imagepath .'system/admin/icon-red.png',
						'alt' => 'rejected'),
					'yellow' => array(
						'src' => $this->imagepath .'system/admin/icon-yellow.png',
						'alt' => 'pending'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/icon-delete.png',
						'alt' => 'deleted'),
					'view' => array(
						'src' => $this->imagepath .'system/admin/icon-view.png',
						'alt' => 'view'),
				);
				
				$data['related'] = array(
					'nova/pages/main/join' => 'Join Page',
				);
				
				$view = $this->viewpath .'report_applications';
				
				break;
				
			case 'awardnominations':
				$data['header'] = 'Award Nominations';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'green' => array(
						'src' => $this->imagepath .'system/admin/icon-green.png',
						'alt' => 'accepted'),
					'red' => array(
						'src' => $this->imagepath .'system/admin/icon-red.png',
						'alt' => 'rejected'),
					'yellow' => array(
						'src' => $this->imagepath .'system/admin/icon-yellow.png',
						'alt' => 'pending'),
				);
				
				$data['related'] = array(
					'nova/pages/user/nominate' => 'Award Nominations',
				);
				
				$view = $this->viewpath .'report_awardnominations';
				
				break;
				
			case 'loa':
				$data['header'] = 'LOA Records';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/user/status' => 'Request LOA'
				);
				
				$view = $this->viewpath .'report_loa';
				
				break;
				
			case 'milestones':
				$data['header'] = 'Player Milestones';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'report_milestones';
				
				break;
			
			case 'moderation':
				$data['header'] = 'Moderation Status';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'green' => array(
						'src' => $this->imagepath .'system/admin/icon-green.png',
						'alt' => 'un-moderated'),
					'red' => array(
						'src' => $this->imagepath .'system/admin/icon-red.png',
						'alt' => 'moderated'),
				);
				
				$data['related'] = array(
					'nova/pages/user/account' => 'User Account',
					'nova/pages/manage/comments' => 'Manage Comments',
					'nova/pages/manage/posts' => 'Manage Mission Posts',
					'nova/pages/manage/logs' => 'Manage Personal Logs',
					'nova/pages/manage/news' => 'Manage News Items',
				);
				
				$view = $this->viewpath .'report_moderation';
				
				break;
				
			case 'posting':
				$data['header'] = 'Posting Levels';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/write/missionpost' => 'Write Mission Post',
					'nova/pages/write/personallog' => 'Write Personal Log',
				);
				
				$view = $this->viewpath .'report_posting';
				
				break;
				
			case 'versions':
				$data['header'] = 'System Information &amp; Version History';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'report_versions';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function sim()
	{
		$page = 'Sim';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Sim';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'sim_main';
				
				break;
				
			case 'index':
				$data['header'] = 'Index';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/messages' => 'Site Messages Management'
				);
				
				$view = $this->viewpath .'sim_index';
				
				break;
				
			case 'awards':
				$data['header'] = 'Crew Awards';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/personnel/viewawards' => 'View Personnel Awards',
					'nova/pages/manage/awards' => 'Award Management'
				);
				
				$view = $this->viewpath .'sim_awards';
				
				break;
				
			case 'decks':
				$data['header'] = 'Deck Listing';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/tour' => 'Sim Tour',
					'nova/pages/manage/decks' => 'Deck Listing Management'
				);
				
				$view = $this->viewpath .'sim_decks';
				
				break;
				
			case 'depts':
				$data['header'] = 'Departments &amp; Positions';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/depts' => 'Department Management',
					'nova/pages/manage/positions' => 'Position Management',
				);
				
				$view = $this->viewpath .'sim_depts';
				
				break;
				
			case 'docked':
				$data['header'] = 'Docked Items';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'sim_docked';
				
				$data['images'] = array(
					'view' => array(
						'src' => $this->imagepath .'system/main/icon-view.png',
						'alt' => 'view'),
				);
				
				$data['related'] = array(
					'nova/pages/site/dockingform' => 'Docking Form',
					'nova/pages/site/dockingsections' => 'Docking Sections',
					'nova/pages/sim/dockingrequest' => 'Docking Request',
					'nova/pages/manage/docked' => 'Docked Item Management',
				);
				
				break;
				
			case 'dockingrequest':
				$data['header'] = 'Docking Request';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'sim_docking_request';
				
				$data['related'] = array(
					'nova/pages/site/dockingform' => 'Docking Form',
					'nova/pages/site/dockingsections' => 'Docking Sections',
					'nova/pages/sim/docked' => 'Docked Items',
					'nova/pages/manage/docked' => 'Docked Item Management',
				);
				
				break;
				
			case 'listlogs':
				$data['header'] = 'Personal Logs Listing';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewlog' => 'View Personal Log',
					'nova/pages/personnel/viewlogs' => 'View Personnel Personal Logs',
					'nova/pages/manage/logs' => 'Personal Log Management',
					'nova/pages/write/personallog' => 'Write Personal Log',
				);
				
				$view = $this->viewpath .'sim_listlogs';
				
				break;
				
			case 'listposts':
				$data['header'] = 'Mission Posts Listing';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewpost' => 'View Mission Post',
					'nova/pages/personnel/viewposts' => 'View Personnel Mission Posts',
					'nova/pages/manage/posts' => 'Mission Post Management',
					'nova/pages/write/missionpost' => 'Write Mission Post',
				);
				
				$view = $this->viewpath .'sim_listposts';
				
				break;
				
			case 'missions':
				$data['header'] = 'Missions';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/missions' => 'Mission Management',
					'nova/pages/manage/missiongroups' => 'Mission Group Management'
				);
				
				$view = $this->viewpath .'sim_missions';
				
				break;
				
			case 'specs':
				$data['header'] = 'Specifications';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/specs' => 'Specifications Management',
					'nova/pages/site/specsform' => 'Specifications Form Management',
					'nova/pages/site/specssections' => 'Specifications Form Sections Management',
				);
				
				$view = $this->viewpath .'sim_specs';
				
				break;
				
			case 'stats':
				$data['header'] = 'Stats';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'sim_stats';
				
				break;
				
			case 'tour':
				$data['header'] = 'Tour';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/manage/tour' => 'Tour Management',
					'nova/pages/site/tourform' => 'Tour Form Management',
				);
				
				$view = $this->viewpath .'sim_tour';
				
				break;
				
			case 'viewlog':
				$data['header'] = 'View Personal Log';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/write/personallog' => 'Write Personal Log',
					'nova/pages/sim/listlogs' => 'Personal Logs Listing',
					'nova/pages/personnel/viewlogs' => 'View Personnel Personal Logs',
					'nova/pages/manage/logs' => 'Personal Log Management'
				);
				
				$data['images'] = array(
					'rss' => array(
						'src' => $this->imagepath .'system/main/feed.png',
						'alt' => 'rss'),
					'comment' => array(
						'src' => $this->imagepath .'system/main/comment-add.png',
						'alt' => 'add comment'),
				);
				
				$view = $this->viewpath .'sim_viewlog';
				
				break;
				
			case 'viewpost':
				$data['header'] = 'View Mission Post';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/write/missionpost' => 'Write Mission Post',
					'nova/pages/sim/listposts' => 'Mission Posts Listing',
					'nova/pages/personnel/viewposts' => 'View Personnel Mission Posts',
					'nova/pages/manage/posts' => 'Mission Post Management'
				);
				
				$data['images'] = array(
					'rss' => array(
						'src' => $this->imagepath .'system/main/feed.png',
						'alt' => 'rss'),
					'comment' => array(
						'src' => $this->imagepath .'system/main/comment-add.png',
						'alt' => 'add comment'),
				);
				
				$view = $this->viewpath .'sim_viewpost';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function site()
	{
		$page = 'Site';
		
		switch ($this->uri->segment(4))
		{
			case 'index':
			default:
				$data['header'] = 'Site';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'site_main';
				
				break;
				
			case 'bioform':
				$data['header'] = 'Bio Form Management';
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
				
				$view = $this->viewpath .'site_bioform';
				
				break;
				
			case 'biosections':
				$data['header'] = 'Bio Form Sections';
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
				
				$view = $this->viewpath .'site_biosections';
				
				break;
				
			case 'biotabs':
				$data['header'] = 'Bio Form Tabs';
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
				
				$view = $this->viewpath .'site_biotabs';
				
				break;
				
			case 'dockingform':
				$data['header'] = 'Docking Form';
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
				
				$view = $this->viewpath .'site_dockingform';
				
				break;
				
			case 'dockingsections':
				$data['header'] = 'Docking Sections';
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
				
				$view = $this->viewpath .'site_dockingsections';
				
				break;
				
			case 'manifests':
				$data['header'] = 'Site Manifests';
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
				
				$view = $this->viewpath .'site_manifests';
				
				break;
				
			case 'menucats':
				$data['header'] = 'Menu Categories';
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
				
				$view = $this->viewpath .'site_menucats';
				
				break;
				
			case 'menus':
				$data['header'] = 'Menu Management';
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
				
				$view = $this->viewpath .'site_menus';
				
				break;
				
			case 'messages':
				$data['header'] = 'Messages &amp; Titles';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/admin/message-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/admin/message-delete.png',
						'alt' => 'delete'),
				);
				
				$view = $this->viewpath .'site_messages';
				
				break;
				
			case 'rankcatalogue':
				$data['header'] = 'Rank Set System Catalogue';
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
				
				$view = $this->viewpath .'site_rankcatalogue';
				
				break;
				
			case 'rolegroups':
				$data['header'] = 'Access Role Page Groups';
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
				
				$view = $this->viewpath .'site_rolegroups';
				
				break;
				
			case 'rolepages':
				$data['header'] = 'Access Role Pages';
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
				
				$view = $this->viewpath .'site_rolepages';
				
				break;
				
			case 'roles':
				$data['header'] = 'Access Roles';
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
				
				$view = $this->viewpath .'site_roles';
				
				break;
				
			case 'settings':
				$data['header'] = 'Settings';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'site_settings';
				
				break;
				
			case 'simtypes':
				$data['header'] = 'Sim Types';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'site_simtypes';
				
				break;
				
			case 'skincatalogue':
				$data['header'] = 'Skin Catalogue';
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
				
				$view = $this->viewpath .'site_skincatalogue';
				
				break;
				
			case 'specsform':
				$data['header'] = 'Specs Form';
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
				
				$view = $this->viewpath .'site_specsform';
				
				break;
				
			case 'specssections':
				$data['header'] = 'Specs Sections';
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
				
				$view = $this->viewpath .'site_specssections';
				
				break;
				
			case 'tourform':
				$data['header'] = 'Tour Form';
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
				
				$view = $this->viewpath .'site_tourform';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function upload()
	{
		$page = 'Upload';
		
		switch ($this->uri->segment(4))
		{
			case 'main':
			default:
				$data['header'] = 'Upload';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'upload_main';
				
			case 'index':
				$data['header'] = 'Upload Images';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/upload/manage' => 'Manage Uploads',
				);
				
				$view = $this->viewpath .'upload_index';
				
				break;
				
			case 'manage':
				$data['header'] = 'Manage Uploads';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/upload/index' => 'Upload Images',
				);
				
				$view = $this->viewpath .'upload_manage';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function user()
	{
		$page = 'User';
		
		switch ($this->uri->segment(4))
		{
			case 'index':
			default:
				$data['header'] = 'User';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'user_main';
				
			case 'account':
				$data['header'] = 'Account';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'user_account';
				
				break;
				
			case 'all':
				$data['header'] = 'All Players';
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
				
				$view = $this->viewpath .'user_all';
				
				break;
				
			case 'link':
				$data['header'] = 'Link Characters to Account';
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
				
				$view = $this->viewpath .'user_characterlink';
				
				break;
				
			case 'nominate':
				$data['header'] = 'Nominate for Award';
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
				
				$view = $this->viewpath .'user_nominate';
				
				break;
				
			case 'options':
				$data['header'] = 'Site Options';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/site/rankcatalogue' => 'Rank Catalogue',
					'nova/pages/site/skincatalogue' => 'Skin Catalogue',
				);
				
				$view = $this->viewpath .'user_options';
				
				break;
				
			case 'status':
				$data['header'] = 'Request LOA';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'user_status';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function wiki()
	{
		$page = 'Thresher';
		
		switch ($this->uri->segment(4))
		{
			case 'index':
			default:
				$data['header'] = 'Thresher';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'wiki_main';
				
				break;
				
			case 'main':
				$data['header'] = 'Thresher Main Page';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'wiki_index';
				
				break;
				
			case 'categories':
				$data['header'] = 'Categories Listing';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'wiki_categories';
				
				break;
				
			case 'category':
				$data['header'] = 'Category Page Listing';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'wiki_category';
				
				break;
				
			case 'managecategories':
				$data['header'] = 'Manage Categories';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/wiki/icon-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/wiki/icon-delete.png',
						'alt' => 'delete'),
				);
				
				$view = $this->viewpath .'wiki_managecategories';
				
				break;
				
			case 'managepages':
				$data['header'] = 'Manage Pages';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'edit' => array(
						'src' => $this->imagepath .'system/wiki/page-edit.png',
						'alt' => 'edit'),
					'delete' => array(
						'src' => $this->imagepath .'system/wiki/page-delete.png',
						'alt' => 'delete'),
				);
				
				$view = $this->viewpath .'wiki_managepages';
				
				break;
				
			case 'page':
				$data['header'] = 'Create/Edit Page';
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
				
				$view = $this->viewpath .'wiki_page';
				
				break;
				
			case 'recent':
				$data['header'] = 'Recent Changes';
				$data['sub'] = $page;
				
				$view = $this->viewpath .'wiki_recent';
				
				break;
				
			case 'view':
				$data['header'] = 'View Page/Draft';
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
				
				$view = $this->viewpath .'wiki_view';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
	
	public function write()
	{
		$page = 'Write';
		
		switch ($this->uri->segment(4))
		{
			case 'index':
			default:
				$data['header'] = 'Index';
				$data['sub'] = ($this->uri->segment(4) == 'main') ? $page : NULL;
				
				$view = $this->viewpath .'write_main';
				
				break;
				
			case 'main':
				$data['header'] = 'Writing Control Panel';
				$data['sub'] = $page;
				
				$data['images'] = array(
					'unread' => array(
						'src' => $this->imagepath .'system/admin/icon-green-small.png',
						'alt' => 'unread'),
				);
				
				$view = $this->viewpath .'write_index';
				
				break;
				
			case 'missionpost':
				$data['header'] = 'Mission Post';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewpost' => 'View Post',
					'nova/pages/sim/listposts' => 'Mission Posts Listing',
					'nova/pages/manage/posts' => 'Mission Post Management'
				);
				
				$view = $this->viewpath .'write_missionpost';
				
				break;
				
			case 'newsitem':
				$data['header'] = 'News Item';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/main/news' => 'News',
					'nova/pages/main/viewnews' => 'View News Item',
					'nova/pages/manage/news' => 'News Item Management',
					'nova/pages/manage/newscats' => 'News Category Management'
				);
				
				$view = $this->viewpath .'write_newsitem';
				
				break;
				
			case 'personallog':
				$data['header'] = 'Personal Log';
				$data['sub'] = $page;
				
				$data['related'] = array(
					'nova/pages/sim/viewlog' => 'View Personal Log',
					'nova/pages/sim/listlogs' => 'Personal Logs Listing',
					'nova/pages/manage/logs' => 'Personal Log Management'
				);
				
				$view = $this->viewpath .'write_personallog';
				
				break;
		}
		
		CI::Library('template')->write('title', $data['header']. $this->title);
		CI::Library('template')->write_view('content', $view, $data);
		
		CI::Library('template')->render();
	}
}

/* End of file pages.php */
/* Location: ./application/modules/nova/controllers/pages.php */