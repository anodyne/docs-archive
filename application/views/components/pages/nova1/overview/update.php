<h1><?php echo $header;?></h1>

<p>It isn't enough to just release a system like Nova, you have to maintain it and you have to make it better. Anodyne intends to exactly that with Nova in the same way we've done it with SMS for years now. Because of that, on a regular basis you can expect to be notified of updates to Nova. Some of these may be minor and only address bugs while others will be larger and introduce new functionality to the system. Regardless, the process for updating the system is the same.</p>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This isn't just handy when doing updates, it's actually required. Nova will not let you update the system without first turning maintenance mode on. This ensures that no one is accessing the database while you're running the update.</p>

<p>You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Download, Unzip and Upload. Oh My.</h2>

<p>It may seem counterintuitive to download the files after you've turned maintenance mode on, but if there are users still logged in to the site, it's best to give them a few minutes to be kicked out of the site to ensure the database isn't being read from or written to. While you wait, you can go to the Anodyne site and download the necessary zip archive. You'll need to remember the genre you're using and download the zip archive of that genre. If you created a custom download, you can simply download any of the zip archives since you won't be touching the genre files.</p>

<p>After you have the file downloaded to your desktop, you should use a program like WinZip to extract the files to your desktop. Once the files are on your desktop, then you can upload the files to your server.</p>

<h3>Upload Notes</h3>

<p>On some Windows computers, simply trying to overwrite a file with your FTP client won't work and cause issues. Because of that, you should delete the files you're trying to update and then upload fresh copies to ensure everything is properly updated.</p>

<p class="alert alert-danger"><strong>Warning:</strong> When uploading files to your server, there are some files you don't want to overwrite. Pay careful attention to the list below!</p>

<ul>
	<li>application/assets/backups</li>
	<li>application/assets/common</li>
	<li>application/assets/images (unless specified)</li>
	<li>application/config/database.php</li>
	<li>application/config/nova.php</li>
	<li>Anything outside of application/controllers/_base</li>
	<li>Anything outside of application/models/_base</li>
</ul>