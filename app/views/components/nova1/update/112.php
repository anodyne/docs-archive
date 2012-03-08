<h1>Updating From 1.1.1 to 1.1.2</h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="alert alert-info"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Replace these files and directories in your <smap>core</smap> folder with the new versions:</p>

<ul class="changelog">
	<li class="script">core/libraries/Upload.php</li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.1.2.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories after deleting the original files (if they exist):</p>

<ul class="changelog">
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/update</li>
	<li class="script">application/controllers/base/site_base.php</li>
	<li class="script">application/config/constants.php</li>
	<li class="script">application/helpers/MY_form_helper.php</li>
	<li class="script">application/views/_base/admin/js/manage_posts_js.php</li>
	<li class="script">application/views/_base/admin/js/write_missionpost_js.php</li>
	<li class="script">application/views/_base/admin/pages/manage_posts.php</li>
	<li class="script">application/views/_base/admin/pages/write_missionpost.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>