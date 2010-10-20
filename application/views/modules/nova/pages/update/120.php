<h1><?php echo $header;?></h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="important"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Replace these files and directories in your <smap>core</smap> folder with the new versions:</p>

<ul class="changelog">
	<li class="script">core/libraries/Upload.php</li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.2.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories after deleting the original files (if they exist):</p>

<ul class="changelog">
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/update</li>
	<li class="script">application/assets/images/exclamation-red.png</li>
	<li class="script">application/assets/js/jquery.js</li>
	<li class="script">application/assets/js/jquery.ui.draggable.min.js</li>
	<li class="script">application/assets/js/jquery.ui.droppable.min.js</li>
	<li class="script">application/config/constants.php</li>
	<li class="script">application/config/hooks.php</li>
	<li class="script">application/controllers/base/admin_base.php</li>
	<li class="script">application/controllers/base/ajax_base.php</li>
	<li class="script">application/controllers/base/main_base.php</li>
	<li class="script">application/controllers/base/report_base.php</li>
	<li class="script">application/controllers/base/site_base.php</li>
	<li class="script">application/hooks/Utility.php</li>
	<li class="script">application/language/english/base_lang.php</li>
	<li class="script">application/language/english/text_lang.php</li>
	<li class="script">application/models/base/depts_model_base.php</li>
	<li class="script">application/models/base/system_model_base.php</li>
	<li class="script">application/models/base/users_model_base.php</li>
	<li class="script">application/views/_base/admin/ajax/del_ban.php</li>
	<li class="script">application/views/_base/admin/ajax/del_manifest.php</li>
	<li class="script">application/views/_base/admin/js/site_bans_js.php</li>
	<li class="script">application/views/_base/admin/js/site_manifests_js.php</li>
	<li class="script">application/views/_base/admin/images/arrow-circle-double-135.png</li>
	<li class="script">application/views/_base/admin/images/property-import.png</li>
	<li class="script">application/views/_base/admin/pages/report_applications.php</li>
	<li class="script">application/views/_base/admin/pages/site_bans.php</li>
	<li class="script">application/views/_base/admin/pages/site_manifests.php</li>
	<li class="script">application/views/_base/admin/pages/site_manifests_assign.php</li>
	<li class="script">application/views/_base/main/pages/main_contact.php</li>
	<li class="script">banned.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>