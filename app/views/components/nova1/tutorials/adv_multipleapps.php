<h1><?php echo $header;?></h1>

<p>Because Nova's framework allows the application folder and index file to be changed, it's possible to run multiple applications from the same CodeIgniter core. This can be advantageous for anyone who wants to run a bunch of RPGs from the same location.</p>

<h2>The Scenario</h2>

<p>You are running a small group of Star Trek RPGs. Because there are only 3 RPGs in the group (the Enterprise, Excelsior and Voyager), none of you want to buy separate domains, so you insted decide to pool your money together and buy one domain then run all your RPGs from that domain. Your group is called 1st Fleet, so you buy the domain 1stfleet.com. Now that you have your domain and are set up, you want to run all 3 RPGs from ships.1stfleet.com.</p>

<p class="alert alert-info"><strong>Note:</strong> The RPGs, fleet and all data in this tutorial are fake. Do not attempt to visit the sites or use the connection information.</p>

<h2>The Steps</h2>

<p>For each RPG in your group, you would make the following changes:</p>

<h3>1. Rename the application folder</h3>

<p>The first step is to upload a copy of Nova to your server and rename the application folder to <strong>enterprise</strong> (or whatever your RPG's names are). As you'll see shortly, the reason we do this is so that in the event a new version of Nova comes out that the Enterprise game master wants to update to that the Excelsior game master doesn't want to update to, the Enterprise GM can still do the update without affecting the Excelsior site (that is unless the CodeIgniter version changes, but that's a completely different issue).</p>

<h3>2. Change the application folder variable</h3>

<p>Each copy of Nova references the application folder by name, allowing you to easily change the name and location of the folder. (CodeIgniter, by default, stores the application folder inside the core, which is normally called system instead of core. For Nova, we've renamed the system folder for security reasons and moved the application folder outside of the CI core.) To change this variable, we have to open <code>index.php</code> which is located in the root Nova folder.</p>

<p>In <code>index.php</code>, find the line that defines the variable <var>$app_folder</var>. Make that line read:</p>

<pre>$app_folder = 'enterprise';</pre>

<h3>3. Rename the index file</h3>

<p>Now that we've changed the application folder, we need to change the index file. In this instance, rename <code>index.php</code> to <dfn>enterprise.php</dfn>. This allows us to get to the Enterprise site by going to http://ships.1stfleet.com/enterprise.php. The other RPGs would be referenced by going to excelsior.php and voyager.php.</p>

<p>At this point, your file structure should look something like this:</p>

<pre>+ core
+ enterprise
+ excelsior
+ voyager
   enterprise.php
   excelsior.php
   license_codeigniter.txt
   license_nova.txt
   voyager.php</pre>

<h3>4. Update the Nova config file</h3>

<p>Like the application folder, CodeIgniter references the index file as well so it can be changed to. The index file reference can be found in <code>application/config/config.php</code>. Once open, you need to find the <var>$config['index_page']</var> line and change it to read:</p>

<pre>$config['index_page'] = 'enterprise.php';</pre>

<h3>5. Update the database connections</h3>

<p>Almost there! Since we have three separate RPGs, we'll want them to use their own databases. Nova allows one of two solutions in this case. First, you can run all three RPGs from the same database, just changing the prefix to separate the RPGs from each other. The second option is to use separate databases (if you have them). We'll show you both solutions here.</p>

<p><strong>To use the same database:</strong></p>

<p>Open <code>application/config/database.php</code> and change the connection parameters to use the proper username, password and database that your host gave you. The only line that will need to be different from application to application is the prefix setting. Change the database prefix to look like this:</p>

<pre>$db['default']['dbprefix'] = "enterprise_";</pre>

<p><strong>To use the different databases:</strong></p>

<p>Open <code>application/config/database.php</code> and change the connection parameters to use the proper username, password and database that your host gave you. Unless you have multiple database accounts, it's likely the only line that will need to be different from application to application is the database setting. Change the database line to look like this:</p>

<pre>$db['default']['database'] = "1stfleet_ships_enterprise";</pre>

<h3>6. Upload your files</h3>

<p>With the changes complete, save the files and upload them to your server, overwriting the existing files. You'll access your site now by going to http://ships.1stfleet.com/enterprise.php.</p>