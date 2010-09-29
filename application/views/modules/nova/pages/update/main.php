<h1><?php echo $header;?></h1>

<p>It isn't enough to just release a system like Nova, you have to maintain it and you have to make it better. Anodyne intends to exactly that with Nova in the same way we've done it with SMS for years now. Because of that, on a regular basis you can expect to be notified of updates to Nova. Some of these may be minor and only address bugs while others will be larger and introduce new functionality to the system.</p>

<p>Please read the update notes that correspond to the version you are updating from.</p>

<p>A complete change can be found <?php echo anchor('nova/overview/changelog', 'here');?>.</p>

<p class="important"><strong>Note:</strong> These update notes only apply to the physical Nova files and not the database update portion. You can update the database from any version of Nova to a higher version.</p>

<ul>
	<li><?php echo anchor('nova/overview/update/120', 'Updating from 1.1.2 to 1.2');?></li>
	<li><?php echo anchor('nova/overview/update/112', 'Updating from 1.1.1 to 1.1.2');?></li>
	<li><?php echo anchor('nova/overview/update/111', 'Updating from 1.1 to 1.1.1');?></li>
	<li><?php echo anchor('nova/overview/update/110', 'Updating from 1.0.6 to 1.1');?></li>
	<li><?php echo anchor('nova/overview/update/106', 'Updating from 1.0.5 to 1.0.6');?></li>
	<li><?php echo anchor('nova/overview/update/105', 'Updating from 1.0.4 to 1.0.5');?></li>
	<li><?php echo anchor('nova/overview/update/104', 'Updating from 1.0.3 to 1.0.4');?></li>
	<li><?php echo anchor('nova/overview/update/103', 'Updating from 1.0.2 to 1.0.3');?></li>
	<li><?php echo anchor('nova/overview/update/102', 'Updating from 1.0.1 to 1.0.2');?></li>
	<li><?php echo anchor('nova/overview/update/101', 'Updating from 1.0 to 1.0.1');?></li>
</ul>

<h2>Upload Notes</h2>

<p>In each update page, we provide a list of files that have been changed. If you'd rather not go through files one by one, you can simply upload all the files at once, taking careful note of the situation below for Windows users.</p>

<h4>Windows Users</h4>

<p>Over the years, we've come to realize that FTP clients on Windows aren't as robust as those found on Linux and Mac. Because of that, simply trying to overwrite a file(s) with your FTP client may not work and in fact, may end up causing issues in the long run. Because of the issue, we recommend that you first delete the files you're trying to update and then upload the fresh copies from the Nova zip archive to ensure everything is properly updated.</p>

<h4>Linux &amp; Mac Users</h4>

<p>To date, we have yet to see any issues with Linux or Mac FTP clients with regards to overwriting files. If you're still worried about the issue though, you can take the above precautions as well.</p>

<h3>Important Note</h3>

<p class="critical">When uploading files to your server, there are some files you don't want to overwrite. Pay careful attention to the list below!</p>

<ul>
	<li>application/assets/backups</li>
	<li>application/assets/common</li>
	<li>application/assets/images (unless specified)</li>
	<li>application/config/database.php</li>
	<li>application/config/nova.php</li>
	<li>application/controllers/base</li>
	<li>application/models/base</li>
	<li>application/views/_base</li>
</ul>