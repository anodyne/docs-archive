<h1><?php echo $title;?></h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="alert alert-info"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Replace these files and directories in your <smap>core</smap> folder with the new versions:</p>

<ul class="changelog">
	<li class="script">core/libraries/Upload.php</li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.1.1.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p>Upload these files/directories in your <samp>application</samp> folder after deleting the original files (if they exist):</p>

<ul class="changelog">
	<li class="folder">application/assets/install</li>
	<li class="folder">application/assets/js</li>
	<li class="folder">application/assets/update</li>
	<li class="script">application/assets/include_head_wiki.php</li>
	<li class="folder">application/controllers/base</li>
	<li class="script">application/config/constants.php</li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>