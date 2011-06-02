<style type="text/css">
	.strikethrough { text-decoration: line-through; }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('input[type=checkbox]').click(function(){
			var strike = $(this).next('span').attr('class');
			
			if (strike == 'strikethrough')
				$(this).next('span').removeClass('strikethrough');
			else
				$(this).next('span').addClass('strikethrough');
		});
	});
</script>

<h1><?php echo $title;?></h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="important"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<p>Replace these files and directories in your <samp>core</samp> folder with the new versions:</p>
	
<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<ul class="changelog">
	<li class="script"><input type="checkbox" /> <span>core/codeigniter/CodeIgniter.php</span></li>
	<li class="script"><input type="checkbox" /> <span>core/libraries/Router.php</span></li>
</ul>

<!--<p><em>There are no updates to the CodeIgniter core in Nova 1.2.</em></p>-->

<h2>Step 3: Update the Nova Core</h2>

<p>Upload these files/directories after deleting the original files (if they exist):</p>

<p class="critical"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p class="important"><strong>Note:</strong> To help you out when uploading files, we've included a checkbox to mark when you've deleted and uploaded a file to your server.</p>

<ul class="changelog">
	<li class="folder"><input type="checkbox" /> <span>application/assets/install</span></li>
	<li class="folder"><input type="checkbox" /> <span>application/assets/js</span></li>
	<li class="folder"><input type="checkbox" /> <span>application/assets/update</span></li>
	<li class="folder"><input type="checkbox" /> <span>application/controllers/base</span></li>
	<li class="script"><input type="checkbox" /> <span>application/assets/images/exclamation-red.png</span></li>
	<li class="script"><input type="checkbox" /> <span>application/assets/include_head_admin.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/assets/include_head_main.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/assets/version.yml</span></li>
	<li class="script"><input type="checkbox" /> <span>application/config/constants.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/config/hooks.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/helpers/MY_form_helper.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/hooks/Utility.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/language/english/base_lang.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/language/english/email_lang.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/language/english/error_lang.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/language/english/text_lang.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/libraries/User_panel.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/models/base/depts_model_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/models/base/positions_model_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/models/base/system_model_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/models/base/tour_model_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/models/base/users_model_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/add_dept.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/del_ban.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/del_manifest.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/dup_dept.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/edit_deck.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/edit_dept.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/ajax/edit_manifest.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/images/arrow-circle-double-135.png</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/images/icon-duplicate.png</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/images/property-import.png</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/manage_decks_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/manage_depts_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/site_bans_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/site_manifests_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/site_settings_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/js/user_options_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/characters_create.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_decks.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_depts.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_logs_ajax.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_news_ajax.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_positions.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_posts_ajax.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/report_applications.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/site_bans.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/site_manifests.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/site_manifests_assign.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/site_roles.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/site_settings.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/user_options.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/js/personnel_character_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/js/personnel_index_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/js/sim_missions_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/js/sim_specs_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/js/sim_tour_js.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/main_contact.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/personnel_character.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/personnel_index.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/sim_missions_one.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/sim_specs_one.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/main/pages/sim_tour_one.php</span></li>
	<li class="script"><input type="checkbox" /> <span>banned.php</span></li>
	<li class="script"><input type="checkbox" /> <span>exclamation.png</span></li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>