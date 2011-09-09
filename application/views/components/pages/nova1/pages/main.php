<h1><?php echo $header;?></h1>

<div class="main-right">
	<div class="main-panel pages-panel">
		<h4>Login</h4>
		<p>The login pages are where registered users will be able to login and reset their password if they forget it.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/login/main', 'Login Index');?></li>
				<li><?php echo anchor('nova/pages/login/reset', 'Reset Password');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>The Sim</h4>
		<p>The Sim section includes information for every user to see including awards, the tour, stats, specifications and viewing mission posts and personal logs.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/sim/index', 'The Sim');?></li>
				<li><?php echo anchor('nova/pages/sim/awards', 'Crew Awards');?></li>
				<li><?php echo anchor('nova/pages/sim/decks', 'Deck Listing');?></li>
				<li><?php echo anchor('nova/pages/sim/depts', 'Departments &amp; Positions');?></li>
				<li><?php echo anchor('nova/pages/sim/docked', 'Docked Items');?></li>
				<li><?php echo anchor('nova/pages/sim/dockingrequest', 'Docking Request');?></li>
				<li><?php echo anchor('nova/pages/sim/listlogs', 'Personal Logs Listing');?></li>
				<li><?php echo anchor('nova/pages/sim/listposts', 'Mission Posts Listing');?></li>
				<li><?php echo anchor('nova/pages/sim/missions', 'Missions');?></li>
				<li><?php echo anchor('nova/pages/sim/specs', 'Specifications');?></li>
				<li><?php echo anchor('nova/pages/sim/stats', 'Stats');?></li>
				<li><?php echo anchor('nova/pages/sim/tour', 'Tour');?></li>
				<li><?php echo anchor('nova/pages/sim/viewlog', 'View Personal Log');?></li>
				<li><?php echo anchor('nova/pages/sim/viewpost', 'View Mission Post');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Admin Control Panel</h4>
		<p>The ACP is the hub of the admin system and includes a wide array of items for tracking your sim and links to other management features throughout the ACP.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/admin/index', 'Admin Control Panel');?></li>
				<li><?php echo anchor('nova/pages/admin/whatsnew', 'What\'s New in Nova');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Writing</h4>
		<p>The writing features found in Nova are robust and easy-to-use so you can post mission posts and person logs with any characters associated with your account.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/write/main', 'Writing Control Panel');?></li>
				<li><?php echo anchor('nova/pages/write/missionpost', 'Write Mission Post');?></li>
				<li><?php echo anchor('nova/pages/write/newsitem', 'Write News Item');?></li>
				<li><?php echo anchor('nova/pages/write/personallog', 'Write Personal Log');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Data Management</h4>
		<p>Awards, positions, ranks, departments, comments and much more are managed through the Data Management section of the system.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/manage/awards', 'Awards Management');?></li>
				<li><?php echo anchor('nova/pages/manage/comments', 'Comments Management');?></li>
				<li><?php echo anchor('nova/pages/manage/decks', 'Deck Listing');?></li>
				<li><?php echo anchor('nova/pages/manage/depts', 'Department Management');?></li>
				<li><?php echo anchor('nova/pages/manage/docked', 'Docked Item Management');?></li>
				<li><?php echo anchor('nova/pages/manage/logs', 'Personal Log Management');?></li>
				<li><?php echo anchor('nova/pages/manage/missions', 'Mission Management');?></li>
				<li><?php echo anchor('nova/pages/manage/missiongroupss', 'Mission Group Management');?></li>
				<li><?php echo anchor('nova/pages/manage/newscats', 'News Category Management');?></li>
				<li><?php echo anchor('nova/pages/manage/news', 'News Item Management');?></li>
				<li><?php echo anchor('nova/pages/manage/positions', 'Position Management');?></li>
				<li><?php echo anchor('nova/pages/manage/posts', 'Post Management');?></li>
				<li><?php echo anchor('nova/pages/manage/ranks', 'Rank Management');?></li>
				<li><?php echo anchor('nova/pages/manage/specs', 'Specifications');?></li>
				<li><?php echo anchor('nova/pages/manage/tour', 'Tour Management');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Character Management</h4>
		<p>Nova gives admins the ability to manage characters in a simple and straightforward way that lets them get in, make their changes and get out in no time.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/characters/all', 'All Characters');?></li>
				<li><?php echo anchor('nova/pages/characters/npcs', 'All NPCs');?></li>
				<li><?php echo anchor('nova/pages/characters/create', 'Create Character');?></li>
				<li><?php echo anchor('nova/pages/characters/bio', 'Edit Bio');?></li>
				<li><?php echo anchor('nova/pages/characters/coc', 'Chain of Command Management');?></li>
				<li><?php echo anchor('nova/pages/characters/awards', 'Give/Remove Award');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Uploads</h4>
		<p>New to Nova is the ability to upload and manage character, award, mission and award images and use them throughout the system.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/upload/index', 'Upload Image');?></li>
				<li><?php echo anchor('nova/pages/upload/manage', 'Manage Uploads');?></li>
			</ul>
		</div>
	</div>
</div>

<div class="main-left">
	<div class="main-panel pages-panel">
		<h4>Main</h4>
		<p>The main pages are what people will see when they first come to your Nova site and include site credits, the contact page, the join page and sim news.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/main/index', 'Welcome Page');?></li>
				<li><?php echo anchor('nova/pages/main/contact', 'Contact');?></li>
				<li><?php echo anchor('nova/pages/main/credits', 'Site Credits');?></li>
				<li><?php echo anchor('nova/pages/main/join', 'Join');?></li>
				<li><?php echo anchor('nova/pages/main/news', 'News');?></li>
				<li><?php echo anchor('nova/pages/main/viewnews', 'View News');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Personnel</h4>
		<p>Personnel pages include the manifest and biography pages where users can get information about characters.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/personnel/index', 'Manifest');?></li>
				<li><?php echo anchor('nova/pages/personnel/character', 'Character Bio');?></li>
				<li><?php echo anchor('nova/pages/personnel/coc', 'Chain of Command');?></li>
				<li><?php echo anchor('nova/pages/personnel/player', 'Player Bio');?></li>
				<li><?php echo anchor('nova/pages/personnel/viewawards', 'View Personnel Awards');?></li>
				<li><?php echo anchor('nova/pages/personnel/viewlogs', 'View Personnel Personal Logs');?></li>
				<li><?php echo anchor('nova/pages/personnel/viewposts', 'View Personnel Mission Posts');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>SMS Archives (Upgrades Only)</h4>
		<p>For sims that have upgraded from SMS, the archive section provides access to some items that aren't upgraded by the Nova upgrade script.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/archive/index', 'SMS Archives');?></li>
				<li><?php echo anchor('nova/pages/archive/characters', 'Characters');?></li>
				<li><?php echo anchor('nova/pages/archive/database', 'Database Entries');?></li>
				<li><?php echo anchor('nova/pages/archive/decks', 'Deck Listing');?></li>
				<li><?php echo anchor('nova/pages/archive/departments', 'Departments');?></li>
				<li><?php echo anchor('nova/pages/archive/positions', 'Positions');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Private Messaging</h4>
		<p>Private messages allow users to exchange messages with each other all from within Nova, never having to leave to dig through their email.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/messages/index', 'Inbox');?></li>
				<li><?php echo anchor('nova/pages/messages/read', 'Reading Private Messages');?></li>
				<li><?php echo anchor('nova/pages/messages/write', 'Writing Private Messages');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Site Management</h4>
		<p>Some of Nova's biggest features involve making site management significantly easier, such as skin and rank catalogues and dynamic forms, all which are managed through the Site Management section.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/site/bioform', 'Bio Form Management');?></li>
				<li><?php echo anchor('nova/pages/site/biosections', 'Bio Form Sections');?></li>
				<li><?php echo anchor('nova/pages/site/biotabs', 'Bio Form Tabs');?></li>
				<li><?php echo anchor('nova/pages/site/dockingform', 'Docking Form');?></li>
				<li><?php echo anchor('nova/pages/site/dockingsections', 'Docking Sections');?></li>
				<li><?php echo anchor('nova/pages/site/menucats', 'Menu Categories');?></li>
				<li><?php echo anchor('nova/pages/site/menus', 'Menu Management');?></li>
				<li><?php echo anchor('nova/pages/site/messages', 'Messages &amp; Titles');?></li>
				<li><?php echo anchor('nova/pages/site/rankcatalogue', 'Rank Set System Catalogue');?></li>
				<li><?php echo anchor('nova/pages/site/rolepages', 'Access Role Pages');?></li>
				<li><?php echo anchor('nova/pages/site/roles', 'Access Roles');?></li>
				<li><?php echo anchor('nova/pages/site/settings', 'Settings');?></li>
				<li><?php echo anchor('nova/pages/site/simtypes', 'Sim Types');?></li>
				<li><?php echo anchor('nova/pages/site/manifests', 'Site Manifests');?></li>
				<li><?php echo anchor('nova/pages/site/skincatalogue', 'Skin System Catalogue');?></li>
				<li><?php echo anchor('nova/pages/site/specsform', 'Specs Form');?></li>
				<li><?php echo anchor('nova/pages/site/specssections', 'Specs Sections');?></li>
				<li><?php echo anchor('nova/pages/site/tourform', 'Tour Form');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>User Management</h4>
		<p>Users are arguably the most important part of Nova and the user management features are incredibly powerful, giving admins the ability to link characters to accounts, manage user details and more.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/user/account', 'User Account');?></li>
				<li><?php echo anchor('nova/pages/user/all', 'All Players');?></li>
				<li><?php echo anchor('nova/pages/user/link', 'Link Characters to Account');?></li>
				<li><?php echo anchor('nova/pages/user/status', 'Request LOA');?></li>
				<li><?php echo anchor('nova/pages/user/options', 'Site Options');?></li>
				<li><?php echo anchor('nova/pages/user/nominate', 'Nominate for Award');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Reports</h4>
		<p>Nova includes a wide array of reports for tracking various parts of your RPG like crew activity, LOAs, user milestones, post levels and much more.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/report/activity', 'Crew Activity');?></li>
				<li><?php echo anchor('nova/pages/report/loa', 'LOA Records');?></li>
				<li><?php echo anchor('nova/pages/report/moderation', 'Moderation Status');?></li>
				<li><?php echo anchor('nova/pages/report/milestones', 'User Milestones');?></li>
				<li><?php echo anchor('nova/pages/report/posting', 'Posting Levels');?></li>
				<li><?php echo anchor('nova/pages/report/applications', 'Sim Applications');?></li>
				<li><?php echo anchor('nova/pages/report/versions', 'System Information &amp; Version History');?></li>
			</ul>
		</div>
	</div>
	
	<div class="main-panel pages-panel">
		<h4>Thresher Integrated Mini-Wiki</h4>
		<p>Nova comes with Thresher, our integrated mini-wiki that allows user collaboration on a level never offered by any of Anodyne's products.</p>
		<p><a href="#" class="bold panel-toggle">Show pages &raquo;</a></p>
		<div class="hidden">
			<ul>
				<li><?php echo anchor('nova/pages/wiki/main', 'Thresher Main Page');?></li>
				<li><?php echo anchor('nova/pages/wiki/categories', 'Categories Listing');?></li>
				<li><?php echo anchor('nova/pages/wiki/category', 'Category Page Listing');?></li>
				<li><?php echo anchor('nova/pages/wiki/managecategories', 'Manage Categories');?></li>
				<li><?php echo anchor('nova/pages/wiki/managepages', 'Manage Pages');?></li>
				<li><?php echo anchor('nova/pages/wiki/page', 'Create/Edit Page');?></li>
				<li><?php echo anchor('nova/pages/wiki/recent', 'Recent Changes');?></li>
				<li><?php echo anchor('nova/pages/wiki/view', 'View Page/Draft');?></li>
			</ul>
		</div>
	</div>
</div>