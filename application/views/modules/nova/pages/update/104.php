<h1><?php echo $header;?></h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="important"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p>Replace these files and directories in your <smap>core</smap> folder with the new versions:</p>

<ul>
	<li><dfn>core/codeigniter</dfn></li>
	<li><dfn>core/database</dfn></li>
	<li><dfn>core/helpers</dfn></li>
	<li><dfn>core/language</dfn></li>
	<li><dfn>core/libraries</dfn></li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.0.4.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories in your <samp>application</samp> folder with the new versions, making sure to replace the old versions if they exist:</p>

<ul class="changelog">
	<li class="added">application/libraries/MY_Email.php</li>
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/update</li>
	<li class="script">application/assets/js/jquery.ui.accordion.min.js</li>
	<li class="script">application/assets/js/jquery.ui.core.min.js</li>
	<li class="script">application/assets/js/jquery.ui.datepicker.min.js</li>
	<li class="script">application/assets/js/jquery.ui.mouse.min.js</li>
	<li class="script">application/assets/js/jquery.ui.progressbar.min.js</li>
	<li class="script">application/assets/js/jquery.ui.slider.min.js</li>
	<li class="script">application/assets/js/jquery.ui.sortable.min.js</li>
	<li class="script">application/assets/js/jquery.ui.tabs.min.js</li>
	<li class="script">application/assets/js/jquery.ui.widget.min.js</li>
	<li class="script">application/assets/js/markitup/jquery.markitup.js</li>
	<li class="script">application/config/constants.php</li>
	<li class="script">application/controllers/base/archive_base.php</li>
	<li class="script">application/controllers/base/characters_base.php</li>
	<li class="script">application/controllers/base/main_base.php</li>
	<li class="script">application/controllers/base/manage_base.php</li>
	<li class="script">application/controllers/base/user_base.php</li>
	<li class="script">application/controllers/base/wiki_base.php</li>
	<li class="script">application/libraries/MY_Input.php</li>
	<li class="script">application/libraries/Thresher_Textile.php</li>
	<li class="script">application/models/base/personallogs_model_base.php</li>
	<li class="script">application/views/_base/admin/js/manage_posts_js.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>