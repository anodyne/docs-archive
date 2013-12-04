<h1>Fresh Install</h1>

<p>Installing Nova 3 on your server is a painless process that should only take a few minutes if you have all the pieces you need at the start. In order to do a fresh install of Nova 3, you'll need the information below. If you don't know any of this, contact your host to get the information.</p>

<ul>
	<li>Your database location (localhost or some other means of connecting)</li>
	<li>Your database name</li>
	<li>Your database username and password (these may or may not be the same as your FTP username and password)</li>
	<li>Your FTP username and password</li>
</ul>

<h2>Step 1: Upload Nova</h2>

<p>To begin the installation, you need to upload the Nova 3 files up to your server. If you're not sure how to upload the files to your server, contact your host for help with this step of the process or do a Google search.</p>

<p class="alert alert-info">Once you've uploaded the files, you'll need to make sure that you have the proper permissions on the <em>app/storage/cache</em> and <em>app/storage/logs</em> directories. You should set the permissions to <strong>777</strong>. If you don't know how to do that, contact your host.</p>

<h2>Step 2: Setting Up the Database Connection</h2>

<p>This is the part where everyone panics and says it's too complicated and difficult to get started. This is also the part where we prove you wrong.</p>

<p>Setting up your connection to the database is dead simple. All you need to do is open your browser and navigate to the location on your server where you uploaded the Nova files. If your server was <strong>http://example.com</strong> and you uploaded Nova 3 to the root directory (often called www or public_html), then you'd navigate to <strong>http://example.com</strong> and you'd be automatically redirected to the Config Setup page. From this page, you'll be able to tell Nova the information for connecting to your database and then Nova will 1) attempt to connect to the database and make sure it can, then 2) write that information to a connection file. Pretty easy, huh?</p>

<p>If for some reason your server doesn't support creating files from a web script, the setup process will show you the code to copy and paste into the database connection file.</p>

<h3>Explaining the Options</h3>

<dl>
	<dt>Database Name</dt>
	<dd>The name of the database you're trying to connect to and install Nova to in to. If you don't know the name of your database, contact your host.</dd>
	
	<dt>Username</dt>
	<dd>The username used to connect to your database. This may or may not be the same as your FTP username, so if you don't know, contact your host.</dd>
	
	<dt>Password</dt>
	<dd>The password used to connect to your database. This may or may not be the same as your FTP password, so if you don't know, contact your host.</dd>
	
	<dt>Database Host</dt>
	<dd>This is where the database lives. 99% of the time, this will be <em>localhost</em> though if your host has a different setup, they may have sent you a different host name. If you aren't sure about this, contact your host.</dd>
	
	<dt>Table Prefix</dt>
	<dd>This is the word or initials that will prefix all table names. This helps to keep Nova's tables together and allows you to install other things in to the database without causing conflicts. This is set to <em>nova_</em> by default.</dd>
</dl>

<h2>Step 4: Install the System</h2>

<p>Once you've stepped through creating the config file, you'll be sent over to the Install Center where you'll be given all your available options for installing Nova 3. Select Fresh Install from the list and follow the prompts to install Nova 3 in to your database. The steps of the install process are as follows:</p>

<ol>
	<li>Create Nova database tables, insert the  basic data into the tables and insert the genre-specific data into the database</li>
	<li>Set up some sim information, your user account and the character name, rank and position of your primary character</li>
</ol>

<h2>Step 5: Post-Installation</h2>

<p>At the end of the installation Nova will attempt to change several permissions in order to ensure all the backup and upload features work properly. It's possible that your host will have turned off the functions necessary to do this, so if you run in to any problems uploading to Nova, you'll need to change the file permissions on several directories to ensure they're writable (777). If you don't know how to change file permissions, contact your host. The following directories (and their sub-directories) need to be writable:</p>

<ul>
	<li>app/assets/images</li>
	<li>app/assets/backups</li>
	<li>app/cache</li>
	<li>app/logs</li>
</ul>
