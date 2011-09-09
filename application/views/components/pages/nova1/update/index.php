<h1>Updating Nova</h1>

<p>It isn't enough to just release a system like Nova, you have to maintain it and you have to make it better. Anodyne intends to exactly that with Nova in the same way we've done it with SMS for years now. Because of that, on a regular basis you can expect to be notified of updates to Nova. Some of these may be minor and only address bugs while others will be larger and introduce new functionality to the system.</p>

<p>Please read the update notes that correspond to the version you are updating from.</p>

<p>A complete change can be found <a href="<?php echo Url::site('nova1/overview/changelog');?>">here</a>.</p>

<p class="important"><strong>Note:</strong> These update notes only apply to the physical Nova files and not the database update portion. You can update the database from any version of Nova to a higher version.</p>

<ul>
	<li><a href="<?php echo Url::site('nova1/overview/update/126');?>">Updating from 1.2.5 to 1.2.6</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/125');?>">Updating from 1.2.4 to 1.2.5</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/124');?>">Updating from 1.2.3 to 1.2.4</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/123');?>">Updating from 1.2.2 to 1.2.3</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/122');?>">Updating from 1.2.1 to 1.2.2</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/121');?>">Updating from 1.2 to 1.2.1</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/120');?>">Updating from 1.1.2 to 1.2</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/112');?>">Updating from 1.1.1 to 1.1.2</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/111');?>">Updating from 1.1 to 1.1.1</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/110');?>">Updating from 1.0.6 to 1.1</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/106');?>">Updating from 1.0.5 to 1.0.6</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/105');?>">Updating from 1.0.4 to 1.0.5</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/104');?>">Updating from 1.0.3 to 1.0.4</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/103');?>">Updating from 1.0.2 to 1.0.3</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/102');?>">Updating from 1.0.1 to 1.0.2</a></li>
	<li><a href="<?php echo Url::site('nova1/overview/update/101');?>">Updating from 1.0 to 1.0.1</a></li>
</ul>

<h2>Upload Notes</h2>

<p>In each update page, we provide a list of files that have been changed. If you'd rather not go through files one by one, you can simply upload all the files at once, taking careful note of the situation below for Windows users.</p>

<h3>Windows Users</h3>

<p>Over the years, we've come to realize that FTP clients on Windows aren't as robust as those found on Linux and Mac. Because of that, simply trying to overwrite a file(s) with your FTP client may not work and in fact, may end up causing issues in the long run. Because of the issue, we recommend that you first delete the files you're trying to update and then upload the fresh copies from the Nova zip archive to ensure everything is properly updated.</p>

<h3>Linux &amp; Mac Users</h3>

<p>To date, we have yet to see any issues with Linux or Mac FTP clients with regards to overwriting files. If you're still worried about the issue though, you can take the above precautions as well.</p>

<h3>Important Note</h3>

<p class="critical">When uploading files to your server, there are some files you <strong>do not</strong> want to overwrite. Pay careful attention to the list below!</p>

<ul>
	<li>application/assets/backups</li>
	<li>application/assets/common</li>
	<li>application/assets/images (unless specified)</li>
	<li>application/config/database.php</li>
	<li>application/config/nova.php</li>
	<li>application/controllers (except the base directory, you want to overwrite that)</li>
	<li>application/models (except the base directory, you want to overwrite that)</li>
	<li>application/views (except the _base directory, you want to overwrite that)</li>
</ul>