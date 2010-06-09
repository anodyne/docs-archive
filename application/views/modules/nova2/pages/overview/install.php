<h1><?php echo $header;?></h1>

<p>Installing Nova on your server is a relatively painless process that should only take a few minutes if you have all the pieces you need at the start. In order to install Nova on your server, you'll need the following information:</p>

<ul>
	<li>Your database location (localhost or another means of connecting)</li>
	<li>Your database name</li>
	<li>Your database username &amp; password (these may or may not be the same as your FTP username &amp; password ... if you have questions, contact your host)</li>
	<li>Your FTP username &amp; password</li>
</ul>

<h2>Step 1: Upload Nova</h2>

<p>To begin with the install, you must upload the Nova files up to your server.</p>

<h2>Step 2: Configuring Nova</h2>

<p>Before you can begin the installation, there are a couple steps you need to do.</p>

<h3>Database Connection</h3>

<p>The first thing you'll need to do before installing Nova is to set up your database connection parameters. If the connection isn't setup properly, you won't be able to connect to the database to create the tables needed and insert the necessary data. To set your database connection parameters, open <samp>./application/config/database.php</samp>. Several variables on the page need to be filled out in order to continue.</p>

<p>Simply fill in the variables with your own values, making sure that you don't remove any of the quotation marks in the process.</p>

<pre>$db['default']['hostname'] = "localhost";
$db['default']['username'] = "username";
$db['default']['password'] = "password";
$db['default']['database'] = "database_name";
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = "nova_";</pre>

<h4>Explaining the Parameters</h4>

<ul>
	<li><strong>hostname</strong> &ndash; this is the hostname of your database server. In most cases, this is <em>localhost</em>, but if your host is setup differently or uses a socket, you may have to change this connection parameter.</li>
	<li><strong>username</strong> &ndash; this is the username you use to identify yourself to the database server. This isn't necessarily the same as your FTP username, so make sure you check with your host about what your database username is.</li>
	<li><strong>password</strong> &ndash; this is the password you use to authenticate yourself to the database server. This isn't necessarily the same as your FTP password, so make sure you check with your host about what your database password is.</li>
	<li><strong>database</strong> &ndash; this is the name of your database and tells Nova exactly where to look for the database tables and where to install the data. If you don't know what this is, contact your host.</li>
	<li><strong>dbdriver</strong> &ndash; the database driver is the type of database you're using. Currently, Nova allows MySQL and MySQLi connections to the database. For most users, MySQL is the best option, but if you know you have the mysqli interface on your server and are using a server with PHP 5 and MySQL 4.1 or higher, you can optionally choose to run Nova through the mysqli interface instead.</li>
	<li><strong>dbprefix</strong> &ndash; Nova uses a database prefix before each table name to allow you to install more than one instance of Nova in the same database or even to have multiple systems running from the same database. By default, this is set to <em>nova_</em>, but you can change it to something else if need be.</li>
</ul>

<h4>Advanced Options</h4>

<p>For users who have hosts with other options, CodeIgniter allows setting whether or not to cache queries, where to cache them to, whether to use a persistent connection and allowing changes to the charcter set and collation of the database. Changing these settings is only recommended for advanced users or if absolutely necessary.</p>

<h3>FTP Library</h3>

<p>Nova allows users to upload their own images to the server and use them in their bios. In order to allow this feature, you have to configure the FTP library. In order to do that, you'll need to edit <samp>application/config/ftp.php</samp>.</p>

<ul>
	<li><strong>hostname</strong> &ndash; this is the location of your server like you're connecting with your FTP client</li>
	<li><strong>username</strong> &ndash; this is your FTP username</li>
	<li><strong>password</strong> &ndash; this is your FTP password</li>
	<li><strong>port</strong> &ndash; this is the port you connect to your server over. If you use SFTP, use port 22, otherwise port 21 is fine.</li>
	<li><strong>passive</strong> &ndash; if your host requires a passive connection to the server, change this value to <dfn>TRUE</dfn></li>
	<li><strong>debug</strong> &ndash; if you need debug information for your FTP connection, change this value to <dfn>TRUE</dfn></li>
</ul>

<h2>Step 3: Setting Up Your Genre</h2>

<p>By default, Nova ships with DS9 as the default genre, but you can change that to a wide variety of options. In order to change this information, open <samp>./application/config/nova.php</samp>.</p>

<p>Simply change the genre code to the genre you want. A complete list of available genres can be seen directly above this line of code. Putting in a value that is not in this list and does not have an install file and assets directory will cause the system to break!</p>

<pre>$config['genre'] = "DS9";</pre>

<h3>Other Options</h3>

<p>The Nova config file also gives you other options to change. Besides changing your genre, you can also change the meta data associated with the site and RSS feed information.</p>

<h2>Step 4: Install the System</h2>

<p>Once you have updated the database connection config file and set your genre, you can begin to install the system by opening a browser and navigating to your site. Nova will immediately check to see if the system is installed and if it isn't, redirect you to the installation page. From there, you can choose to do a fresh installation of Nova. Follow the process through to install Nova into your database to use for your RPG. The steps of the install process are as follows:</p>

<ol>
	<li>Create Nova database tables</li>
	<li>Insert basic data into the tables</li>
	<li>Create genre-specific tables and insert data into them</li>
	<li>Set up your player account and the character name, rank and position of your primary character</li>
	<li>Set up some basic system settings</li>
</ol>

<h2>Step 5: Post-Installation</h2>

<p>On PHP 5 systems, Nova will attempt to change several permissions in order to ensure all the upload features and backup features work properly. If you are running a server that uses PHP 4 or your server doesn't support allowing scripts to change permissions, you will have to make those changes manually. If you don't know how to change file permissions on your server, contact your host.</p>

<p>You will need to make sure that several directories are writable (777) in order for all the upload features to work:</p>

<ul>
	<li>application/assets/images</li>
	<li>application/assets/backups</li>
	<li>core/logs</li>
</ul>