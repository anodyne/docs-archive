<h1>Upgrading from SMS 2</h1>

<p>So you've been using SMS 2 since it came out or since you started your game. When Nova came out, you were hesitant to make the jump, but now that 2.0 is out, you decide that it's time to make the leap and start using Nova. But wait, what about the <em>years</em> of information you've accumulated in your SMS site? You don't want to lose that. We've already thought about that and have a simple solution to upgrade most (there are some pieces it just isn't possible to upgrade easily) of your SMS data to the newer Nova format.</p>

<h3>What Will/Won't Be Upgraded?</h3>

<p>You probably read the part above about "most" of your SMS data being upgraded, but what exactly will and won't be upgraded? The table below will show you the different pieces and whether they'll be upgraded or not.</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th class="blue span3">Item</th>
			<th class="blue span1">Status</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Access Levels</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>If you've made changes to the default access levels in SMS they will not be saved since Nova uses a new user access control system.</td>
		</tr>
		<tr>
			<td>Awards</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>Any awards you've put in to SMS will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Award Nominations</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Award nominations that have been submitted will not be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Chain of Command</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Because of the complex way we move characters over to Nova and split out characters and users, the chain of command will not be upgraded.</td>
		</tr>
		<tr>
			<td>Characters/Users</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>Characters and users from SMS will be moved to the Nova format. Users will have their passwords and access level automatically reset.</td>
		</tr>
		<tr>
			<td>Database Items</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-yellow" data-icon="!"></span></td>
			<td>Nova doesn't have a "database" feature like SMS, instead, we've built a mini-wiki called Thresher that does similar things. Any of your database entries that are stored in the database will be converted to Thresher pages. Any content on external pages linked through the Database will not be converted.</td>
		</tr>
		<tr>
			<td>Departments</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Departments stored in SMS will not be upgraded to Nova. New departments will be created based on the genre selected.</td>
		</tr>
		<tr>
			<td>Settings (Site Globals)</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-yellow" data-icon="!"></span></td>
			<td>The following settings will be upgraded to Nova: <em>sim name, sim year, post count preference, email subject</em>.</td>
		</tr>
		<tr>
			<td>Menu Items</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>SMS menu items will not be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Site Messages</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-yellow" data-icon="!"></span></td>
			<td>The following messages will be upgraded to Nova: <em>welcome message, sim message, join disclaimer, user accept email message, user reject email message, join codele post</em>.</td>
		</tr>
		<tr>
			<td>Missions</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>All missions will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>News Items</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>All news items will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>News Categories</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>All news categories will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Personal Logs</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>All personal logs will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Positions</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Positions stored in SMS will not be upgraded to Nova. New positions will be created based on the genre selected.</td>
		</tr>
		<tr>
			<td>Mission Posts</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-green" data-icon="y"></span></td>
			<td>All mission posts will be upgraded to the Nova format.</td>
		</tr>
		<tr>
			<td>Private Messages</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>SMS private messages will not be upgraded.</td>
		</tr>
		<tr>
			<td>Ranks</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Ranks stored in SMS will not be upgraded to Nova. New ranks will be created based on the genre selected.</td>
		</tr>
		<tr>
			<td>Specifications</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-yellow" data-icon="!"></span></td>
			<td>Only out-of-the-box specifications will be upgraded. If you have modified the specifications database table, your changes will not be upgraded.</td>
		</tr>
		<tr>
			<td>Docking</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>Nova uses a new, highly dynamic form system and docking records will not be upgraded.</td>
		</tr>
		<tr>
			<td>Strikes</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>There is currently no way to handle strikes in Nova and SMS strikes will not be upgraded.</td>
		</tr>
		<tr>
			<td>Tour</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-yellow" data-icon="!"></span></td>
			<td>Only out-of-the-box tour information will be upgraded. If you have modified the tour database table, your changes will not be upgraded.</td>
		</tr>
		<tr>
			<td>Deck Listing</td>
			<td class="smsupgrade-icon"><span class="icn icn-24 icn-red" data-icon="x"></span></td>
			<td>The deck listing will not be upgraded.</td>
		</tr>
	</tbody>
</table>

<h2>Before You Start</h2>

<p>Upgrading from SMS to Nova 2 is a much different process than upgrading from SMS to Nova 1 (for those who did that process). With 10 fewer steps and a vastly improved user interface, doing a full upgrade from SMS 2 should take less than 10 minutes to do (this will depend on how much data you have to upgrade). In order to do an upgrade from SMS, you'll need to be running SMS 2.6.9 or higher and have the information below. If you don't know any of this, contact your host to get the information.</p>

<ul>
	<li>Your database location (localhost or some other means of connecting)</li>
	<li>Your database name</li>
	<li>Your database username and password (these may or may not be the same as your FTP username and password)</li>
	<li>Your FTP username and password</li>
</ul>

<h2>Step 1 <small>Backup and Remove</small></h2>

<p>Before you get started, you should export your SMS database from phpMyAdmin as a .sql file in case something happens during the upgrade process. Don't drop the tables or do anything like that since you'll still need all the information in those database tables. You should also backup all your SMS files to your desktop in case you need them. Once you've done both backups, delete all the SMS files on your server.</p>

<h2>Step 2 <small>Upload Nova</small></h2>

<p>Next, you'll need to upload the Nova 2 files up to your server where the SMS files were. If you're not sure how to upload the files to your server, contact your host for help with this step of the process or do a Google search.</p>

<h2>Step 3 <small>Configure Nova</small></h2>

<p>Before beginning the upgrade, you can choose to change any of Nova's configuration options in the config files located in the <code>app/config</code> directory. This is completely optional and Nova 2 will install fine without any changes to any files in the <code>config</code> directory.</p>

<h2>Step 4 <small>Setting Up the Database Connection</small></h2>

<p>This is the part where everyone panics and says it's too complicated and difficult to get started. This is also the part where we prove you wrong.</p>

<p>Setting up your connection to the database is dead simple. All you need to do is open your browser and navigate to the location on your server where you uploaded the Nova files. If your server was <strong>http://example.com</strong> and you uploaded Nova 2 to the root directory (often called www or public_html), then you'd navigate to <strong>http://example.com</strong> and you'd be automatically redirected to the Config Setup page. From this page, you'll be able to tell Nova the information for connecting to your database and then Nova will 1) attempt to connect to the database and make sure it can, then 2) write that information to a connection file. Pretty easy, huh?</p>

<p>If for some reason your server doesn't support creating files from a web script, the setup process will show you the code to copy and paste into the database connection file.</p>

<h3>Explaining the Options</h3>

<ul>
	<li><strong>Database Name</strong> &ndash; The name of the database you're trying to connect to and install Nova to in to. If you don't know the name of your database, contact your host.</li>
	<li><strong>Username</strong> &ndash; The username used to connect to your database. This may or may not be the same as your FTP username, so if you don't know, contact your host.</li>
	<li><strong>Password</strong> &ndash; The password used to connect to your database. This may or may not be the same as your FTP password, so if you don't know, contact your host.</li>
	<li><strong>Database Host</strong> &ndash; This is where the database lives. 99% of the time, this will be <em>localhost</em> though if your host has a different setup, they may have sent you a different host name. If you aren't sure about this, contact your host.</li>
	<li><strong>Table Prefix</strong> &ndash; This is the word or initials that will prefix all table names. This helps to keep Nova's tables together and allows you to install other things in to the database without causing conflicts. This is set to <em>nova_</em> by default.</li>
</ul>

<h2>Step 5 <small>Upgrade to Nova</small></h2>

<p>When you start in to the upgrade process, the first thing that will happen is that Nova 2 will be installed as normal, except you won't be prompted to create your character and set the system settings. Once Nova is installed, there are 3 distinct sections to the upgrade process, but don't worry, they're all very straightforward.</p>

<h3>Select What to Upgrade</h3>

<p>For anyone who attempted (or did) the SMS to Nova 1 upgrade, you'll quickly note the lack of a need to update a config file before starting. The new upgrade process handles everything right in the site. You'll be presented with a list of components and whether you want to upgrade those components to Nova. By default, it will upgrade everything in the list, but you can pick and choose based on your preferences. The upgrade process is smart enough to know when something depends on something else. For instance, if you didn't want characters and users upgrade, the upgrade process won't let you upgrade posts, logs and new items since they depend on characters and users.</p>

<p>Once you've set which things you want to upgrade, you can click on the button to run the first step. An indicator will point out which item is currently running. Once it's finished running icons will be displayed to indicate whether the upgrade of that component was successful, failed or has errors or warnings. Once the final component has run, you'll be able to click the button and move on to the next step.</p>

<h3>Upgrade the Components</h3>

<p>After doing the initial upgrade, there's follow-up work that needs to be done. All that's required for this step is to click the button. Like the first part of the process, an indicator will show you what's running an an icon will let you know its status after it's finished running. Once all the items have been run, you'll be able to click the button and move on to the next step.</p>

<h3>Set Password and Administrator(s)</h3>

<p>Because Nova uses a different method of hashing passwords, none of the SMS passwords will work. The final step of the upgrade process is to specify what you want the new password to be. This password is case sensitive and is the password you'll need to send to the entire crew. The first time a player logs in, they'll be prompted to update their password.</p>

<p>In addition, you can select the members of the crew that should have system administrator rights. Once you've set the password and selected the users, click the button to run the process. Once the process has finished running (you'll know because icons will indicate the success/failure of the two final steps), you'll be able to continue on to your site.</p>

<h2>Step 6 <small>That's It?</small></h2>

<p>Yep, that's it. Pretty easy, huh?</p>

<p>One final thing to note is that at the end of the upgrade Nova will attempt to change several permissions in order to ensure all the backup and upload features work properly. It's possible that your host will have turned off the functions necessary to do this, so if you run in to any problems uploading to Nova, you'll need to change the file permissions on several directories to ensure they're writable (777). If you don't know how to change file permissions, contact your host. The following directories (and their sub-directories) need to be writable:</p>

<ul>
	<li>app/assets/images</li>
	<li>app/assets/backups</li>
	<li>app/cache</li>
	<li>app/logs</li>
</ul>