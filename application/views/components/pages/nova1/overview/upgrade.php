<h1>Upgrading SMS 2 to Nova</h1>

<p>Upgrading from SMS to Nova is an easy process that should take anywhere between 5 and 10 minutes to complete depending on your server and Internet connection. In order to upgrade to Nova on your server, you'll need the following information:</p>

<ul>
	<li>Your database location (localhost or another means of connecting)</li>
	<li>Your database name</li>
	<li>Your database username &amp; password (these may or may not be the same as your FTP username &amp; password ... if you have questions, contact your host)</li>
	<li>Your FTP username &amp; password</li>
</ul>

<p>In order to upgrade to Nova, you must be using the same database as your SMS tables are in. If you want to do an upgrade in another table, you'll need to export your SMS tables to a file and then import them into the new table to use during the upgrade process.</p>

<p>Before you begin, you'll also need to set the <a href="#password">upgrade password</a> and <a href="#email">email address</a>.</p>

<p class="important"><strong>Note:</strong> This upgrade guide is long and can seem daunting, but we encourage you to read through the whole thing <strong>before</strong> beginning the upgrade process.</p>

<h2>Step 1: Upload Nova</h2>

<p>The first thing we recommend doing is backing up your SMS files to your computer. Once you have downloaded the files, you can store them some place safe in the event you need to access the files. You can also choose to push the files into their own sub directory on the server, but doing so can create complications if someone is posting on the old site.</p>

<p>To begin with the upgrade, delete all the files from the directory where you'll be storing Nova. Once the directory is cleaned out, you can safely upload the Nova files up to your server.</p>

<h2>Step 2: Configuring Nova</h2>

<p>Before you can begin the installation, there are a couple steps you need to do.</p>

<h3>Database Connection</h3>

<p>The first thing you'll need to do before installing Nova is to set up your database connection parameters. If the connection isn't setup properly, you won't be able to connect to the database to create the tables needed and insert the necessary data. To set your database connection parameters, open <samp>application/config/database.php</samp>. Several variables on the page need to be filled out in order to continue.</p>

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

<p>By default, Nova ships with DS9 as the default genre, but you can change that to a wide variety of options. In order to change this information, open <samp>application/config/nova.php</samp>.</p>

<p>Simply change the genre code to the genre you want. A complete list of available genres can be seen directly above this line of code. Putting in a value that is not in this list and does not have an install file and assets directory will cause the system to break!</p>

<pre>$config['genre'] = "DS9";</pre>

<h3>Other Options</h3>

<p>The Nova config file also gives you other options to change. Besides changing your genre, you can also change the meta data associated with the site and RSS feed information.</p>

<h2>Step 4: Set Your SMS Upgrade Options</h2>

<p>You can choose which SMS items you want upgraded to Nova through the SMS config file located at <samp>application/config/sms.php</samp>. By default, Nova will upgrade the following items:</p>

<ul>
	<li>Awards</li>
	<li>Some SMS global settings
		<ul>
			<li class="black">Ship prefix, name and registry to sim name setting</li>
			<li class="black">The year the sim operates in</li>
			<li class="black">The way joint posts are counted</li>
			<li class="black">Email subject</li>
			<li class="black">The posting requirement in days</li>
		</ul> 
	</li>
	<li>Some SMS messages
		<ul>
			<li class="black">Welcome message</li>
			<li class="black">The Sim message</li>
			<li class="black">Join disclaimer</li>
			<li class="black">Join sample post question</li>
			<li class="black">Acceptance email message</li>
			<li class="black">Rejection email message</li>
		</ul> 
	</li>
	<li>Missions</li>
	<li>Mission Posts</li>
	<li>Personal Logs</li>
	<li>News Items and Categories</li>
	<li>Specifications</li>
	<li>Tour Items</li>
</ul>

<p class="important"><strong>Note:</strong> Characters and players will be automatically upgraded and the option cannot be turned off.</p>

<h3>Changing the Upgrade Options</h3>

<p>If you want to change the options for which items are upgraded, simply change the value of the item to <dfn>FALSE</dfn>. Unlike other places, the words false should <strong>not</strong> be in quotation marks. An updated options array would look like this:</p>

<pre>$config['sms'] = array(
	'awards'		=> TRUE,
	'settings'		=> FALSE,
	'logs'			=> TRUE,
	'missions'		=> TRUE,
	'news'			=> FALSE,
	'posts'			=> TRUE,
	'specs'			=> TRUE,
	'tour'			=> FALSE
);</pre>

<a name="password"></a><h3>Setting the Upgrade Password</h3>

<p>Because of the difference in encryption hashes being used to store passwords, Nova <strong>cannot</strong> transfer passwords from the SMS format to the Nova format. Because of this, you can set the password that all members of the sim will have to use in order to login the first time. Once they've logged in, they can change their password through the Accounts page. To change the password, simply change the <var>sms_password</var> line in the SMS config file.</p>

<pre>$config['sms_password'] = 'password';</pre>

<p class="critical"><strong>Note:</strong> We highly recommend you change the password before beginning the upgrade process!</p>

<a name="email"></a><h3>Setting Your Email Address</h3>

<p>In order to set proper access roles to allow you to login and manage your new Nova site, you will need to set the email address you use for your account in SMS in the SMS config file. This can be set in the SMS config file located at <samp>application/config/sms.php</samp>.</p>

<pre>$config['sms_email'] = 'me@example.com';</pre>

<p class="critical"><strong>Note:</strong> If you don't change the email address, you will not have access to the management features when you log in!</p>

<h2>Step 5: Backup Your Database</h2>

<p>Before you do anything with Nova, we recommend that you follow the <a href="<?php echo Url::site('nova1/tutorials/intro/backup');?>">Backup Guide</a> to back up your SMS files and database before beginning.</p>

<p class="important"><strong>Note:</strong> The first thing Nova attempts to do when upgrading is backup your database and store it as a zip archive on your server. Larger SMS database may not be able to be backed up because of the resources required to do so. You should always manually backup your database before making major changes.</p>

<h2>Step 6: Install Nova</h2>

<p>To begin the upgrade process, open your browser and navigate to your site. Nova will automatically try to see if Nova is installed. If it isn't found, you will be redirected to the installation center where you can select the upgrade option. Simply follow the prompts through the process to install Nova and upgrade your data from the SMS format to the Nova format.</p>

<p>Once Nova is installed, the rest of the upgrade process will continue automatically.</p>

<h2>Step 7: Upgrade SMS</h2>

<p class="important"><strong>Note:</strong> The only time Nova touches the SMS tables is to read or copy them and will never make any changes to them. The SMS tables will remain intact throughout the upgrade process.</p>

<p>Due to the vast amount of data being transferred from the SMS tables to the Nova tables, the upgrade process can take several minutes to complete depending on your server and internet connection. Please be patient and don't hit the back button or close the browser. Doing so may require you to wipe out the Nova database tables and start all over again.</p>

<p>The following items will be upgraded during the upgrade process.</p>

<h3>SMS Site Globals &amp; Messages</h3>

<p>Nova stores site settings in a much different way allowing for admins to create new settings they can use in their own controller methods. Because of that and that many of SMS' site globals are obsolete, we only pull a select few items from the SMS database into the Nova settings table.</p>

<ul>
	<li>The ship prefix, ship name and ship registry from SMS are combined into the sim name setting</li>
	<li>The sim year field is transferred</li>
	<li>The posting requirements field is transferred</li>
	<li>The way joint posts are counted is transferred</li>
	<li>The email subject is transferred</li>
</ul>

<p class="important"><strong>Note:</strong> The first thing Nova does during this step is checks for the existence of a table called <dfn>sms_settings</dfn>. This is done because of issues some users have had that have required changing the name of the globals table in SMS. If Nova doesn't find that table, it'll fall back and use <dfn>sms_globals</dfn>. You do not need to change anything in your database to continue.</p>

<p>In addition to site globals, Nova will also pull six of the messages out of SMS and put them into the proper places. The messages that will be pulled for the upgrade are:</p>

<ul>
	<li>The welcome message</li>
	<li>The sim section message</li>
	<li>The join disclaimer</li>
	<li>The join page sample post question</li>
	<li>The acceptance email message</li>
	<li>The rejection email message</li>
</ul>

<h3>Awards</h3>

<p>Nova will copy the data from the SMS awards table to the Nova awards table. In the process, it will rename the fields to use the proper names and add columns as necessary. The reason we copy the data instead of looping through and inserting is to ensure the award IDs remain the same so that users don't lose their awards.</p>

<h3>Missions</h3>

<p>Nova will copy the data from the SMS missions table to the Nova missions table. In the process, it will rename the fields to use the proper names and add columns as necessary. The reason we copy the data instead of looping through and inserting is to ensure the mission IDs remain the same so that mission posts don't lose their association with their missions.</p>

<h3>News Categories &amp; Items</h3>

<p>Nova will copy the data from the SMS news categories and new items tables to the respective Nova tables. In the process, it will rename the fields to use the proper names and add or remove columns as necessary. The reason we copy the data instead of looping through and inserting is to ensure the category IDs remain intact for the news items to use.</p>

<h3>Personal Logs</h3>

<p>Nova will copy the data from the SMS personal logs table to the Nova personal logs table. In the process, it will rename the fields to use the proper names and add or remove columns as necessary.</p>

<h3>Mission Posts</h3>

<p>Nova will copy the data from the SMS posts table to the Nova posts table. In the process, it will rename the fields to use the proper names and add or remove columns as necessary. Depending on the number of mission posts you have, this process could take several minutes to run.</p>

<h3>Specifications</h3>

<p>Nova's specifications system was built in a very similar way to the way SMS is set up for specifications, so upgrading the data is relatively easy, though you may find some things are slightly off when it comes to defensive systems and weapons systems that you may have to manually update to be more accurate. Besides these minor issues, all your information should be transferred.</p>

<p class="important"><strong>Note:</strong> If you have made modifications to the specs pages and database table, those changes will not be transferred and you'll have to make those changes after the upgrade process is complete.</p>

<h3>Tour Items</h3>

<p>Nova's tour items system was built in a very similar way to the way SMS is set up for tour items, so upgrading the data is relatively easy.</p>

<p class="important"><strong>Note:</strong> If you have made modifications to the tour pages and database table, those changes will not be transferred and you'll have to make those changes after the upgrade process is complete.</p>

<h3>Characters &amp; Players</h3>

<p>Easily the most intensive part of the upgrade process, Nova needs to take data from a single SMS table and disperse it across four different database tables and maintain the relationships between the data.</p>

<p>The first thing that'll be done is pulling player data from SMS and populating the Nova players table. Because people can have multiple accounts, Nova collects the most recent information for inserting into the database into a single entry. (The exception to this is the join date which uses the earliest entry.) Nova will use the real name, email address, join date, leave date, status and moderation flags.</p>

<p>After creating the player records, Nova will pull the character specific information out of SMS and insert basic data into the characters table and the rest of the data into the characters data table. For the basic information, Nova will use first name, middle name, last name, first position, second position, rank and images.</p>

<p class="important"><strong>Note:</strong> Nova uses a position translation function to try and convert SMS positions to Nova DS9 positions. For this to work perfectly, you need to have not made any changes to your positions table. If you have, you'll just have to update some of the characters' positions after the upgrade process is finished. The same goes for ranks.</p>

<h4>Passwords</h4>

<p>SMS uses a 32-bit MD5 hash to store passwords, ensuring that only the account holder knows the password. Nova uses a more secure 40-bit SHA1 hash to store passwords. Because of the fact that MD5 hashes can't easily be decrypted, all users will have the same password until they login to change it. You can set the password in the SMS config file located at <samp>application/config/sms.php</samp>.</p>

<h2>Step 8: Post-Installation</h2>

<p>On PHP 5 systems, Nova will attempt to change several permissions in order to ensure all the upload features and backup features work properly. If you are running a server that uses PHP 4 or your server doesn't support allowing scripts to change permissions, you will have to make those changes manually. If you don't know how to change file permissions on your server, contact your host.</p>

<p>You will need to make sure that several directories are writable (777) in order for all the upload features to work:</p>

<ul>
	<li>application/assets/images</li>
	<li>application/assets/backups</li>
	<li>core/logs</li>
</ul>

<h2>Known Errors</h2>

<p>While we strive to make the upgrade process as seamless and accurate as possible, there's just no way to make it 100% accurate for 100% of the sims using SMS. If you've made any changes to your positions, departments or ranks, you'll have to manually make changes to characters. Because of the need to make these changes, Nova may throw errors (depending on what you've set your error reporting level to). These errors will go away when you've made the necessary updates. Below is a list of the errors you may encounter after an upgrade:</p>

<h3>Characters Management Page</h3>

<p>Nova may throw an error about an undefined index in the characters_index.php file. This is caused by Nova looking for a department ID that doesn't exist. Once all your characters have been reassigned to their proper positions, the error will go away.</p>

<h3>NPCs Management Page</h3>

<p>Nova may throw an error about an undefined index in the characters_npcs.php file. This is caused by Nova looking for a department ID that doesn't exist. Once all your NPCs have been reassigned to their proper positions, the error will go away.</p>