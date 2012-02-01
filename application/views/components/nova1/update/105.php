<h1>Updating From 1.0.4 to 1.0.5</h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="alert alert-info"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p>Replace these files and directories in your <smap>core</smap> folder with the new versions:</p>

<ul>
	<li><dfn>core/codeigniter</dfn></li>
	<li><dfn>core/database</dfn></li>
	<li><dfn>core/helpers</dfn></li>
	<li><dfn>core/language</dfn></li>
	<li><dfn>core/libraries</dfn></li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.0.5.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories in your <samp>application</samp> folder with the new versions, making sure to replace the old versions if they exist:</p>

<ul class="changelog">
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/update</li>
	<li class="script">application/config/constants.php</li>
	<li class="script">application/controllers/base/ajax_base.php</li>
	<li class="script">application/controllers/base/install_base.php</li>
	<li class="script">application/controllers/base/main_base.php</li>
	<li class="script">application/controllers/base/manage_base.php</li>
	<li class="script">application/controllers/base/sim_base.php</li>
	<li class="script">application/controllers/base/site_base.php</li>
	<li class="script">application/controllers/base/update_base.php</li>
	<li class="script">application/controllers/base/upgrade_base.php</li>
	<li class="script">application/controllers/base/user_base.php</li>
	<li class="script">application/controllers/base/wiki_base.php</li>
	<li class="script">application/helpers/MY_form_helper.php</li>
	<li class="script">application/views/_base/admin/pages/characters_index.php</li>
	<li class="script">application/views/_base/admin/pages/characters_npcs.php</li>
	<li class="script">application/views/_base/main/pages/main_join_2.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>