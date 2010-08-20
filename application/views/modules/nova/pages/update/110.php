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

<p><em>There are no updates to the CodeIgniter core in Nova 1.1.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories in your <samp>application</samp> folder after deleting the original files (if they exist):</p>

<ul class="changelog">
	<li class="folder">application/assets/images/specs</li>
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/js</li>
	<li class="folder">application/assets/update</li>
	<li class="folder">application/controllers/base</li>
	<li class="script">application/assets/include_head_admin.php</li>
	<li class="script">application/assets/include_head_login.php</li>
	<li class="script">application/assets/include_head_main.php</li>
	<li class="script">application/assets/include_head_wiki.php</li>
	<li class="script">application/config/constants.php</li>
	<li class="script">application/language/english/text_lang.php</li>
	<li class="script">application/models/base/news_model_base.php</li>
	<li class="script">application/models/base/personallogs_model_base.php</li>
	<li class="script">application/models/base/posts_model_base.php</li>
	<li class="script">application/models/base/specs_model_base.php</li>
	<li class="script">application/models/base/tour_model_base.php</li>
	<li class="script">application/models/base/users_model_base.php</li>
	<li class="script">application/views/_base/admin/ajax/del_spec_item.php</li>
	<li class="script">application/views/_base/admin/js/manage_specs_js.php</li>
	<li class="script">application/views/_base/admin/js/manage_tour_js.php</li>
	<li class="script">application/views/_base/admin/js/site_settings_js.php</li>
	<li class="script">application/views/_base/admin/js/user_options_js.php</li>
	<li class="script">application/views/_base/admin/pages/manage_specs.php</li>
	<li class="script">application/views/_base/admin/pages/manage_specs_action.php</li>
	<li class="script">application/views/_base/admin/pages/manage_tour.php</li>
	<li class="script">application/views/_base/admin/pages/manage_tour_action.php</li>
	<li class="script">application/views/_base/admin/pages/upload_manage.php</li>
	<li class="script">application/views/_base/main/js/personnel_character_js.php</li>
	<li class="script">application/views/_base/main/js/sim_missions_js.php</li>
	<li class="script">application/views/_base/main/js/sim_specs_js.php</li>
	<li class="script">application/views/_base/main/js/sim_tour_js.php</li>
	<li class="script">application/views/_base/main/pages/personnel_character.php</li>
	<li class="script">application/views/_base/main/pages/sim_missions_groups_all.php</li>
	<li class="script">application/views/_base/main/pages/sim_missions_one.php</li>
	<li class="script">application/views/_base/main/pages/sim_specs_all.php</li>
	<li class="script">application/views/_base/main/pages/sim_specs_one.php</li>
	<li class="script">application/views/_base/main/pages/sim_tour_all.php</li>
	<li class="script">application/views/_base/main/pages/sim_tour_one.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>