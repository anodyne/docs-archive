<h1><?php echo $header;?></h1>

<p>Nova provides users with the ability to upload images to the server and use them in bios, for award images, mission images or tour images. Once a file is uploaded though, there needs to be a way to manage those files. Nova provides an easy-to-use page for managing all uploads to the system.</p>

<p>When a file is uploaded to the server, Nova creates a record in the database for tracking all the information about that file including who uploaded it, when it was uploaded, the filename and much more. None of this information can be updated. If something about the info is wrong, you need to delete the file and upload it again. While an inconvenience, this ensures that the Nova uploads database table is accurate.</p>

<h3>Permissions</h3>

<p>In order to manage uploads you need to have <kbd>upload/manage</kbd> permissions. When you navigate to the upload management page (located in the left-hand navigation under the Management section), you will be presented with anywhere between 1 and 4 tabs depending on your permissions.</p>

<ul>
	<li>If you have permissions to edit character bios, you'll be shown the listing of bio images</li>
	<li>If you have permissions to manage awards, you'll be shown the listing of award images</li>
	<li>If you have permissions to manage missions, you'll be shown the listing of mission images</li>
	<li>If you have permissions to manage tour items, you'll be shown the listing of tour item images</li>
</ul>

<h2>Deleting an Upload Record</h2>

<p>To delete an upload record, simply click the checkbox to the right of the record. You can select as many items from a single tab as you want and delete several at a time. Once you're satisified with the items you want to delete, click <strong>Submit</strong> and Nova will go through and remove those records. If you have set up your FTP connection, Nova will attempt to connect to the server and delete the files of the records you're deleting. If it isn't able to delete the files, you'll be notified that you need to manually delete the files from the server.</p>

<p class="alert alert-danger"><strong>Warning:</strong> If your FTP connection is set up and Nova deletes the file, there is no way to recover it, so make sure you have a backup!</p>

<h3>Stopping the File Deletion Attempt</h3>

<p>If you want to set up the FTP connection in your upload config file but don't want Nova to attempt to delete uploaded file(s) you can change a setting in the upload config file. In order to change the option, open <samp>application/config/upload.php</samp> and change the <var>attempt_delete</var> config item from <dfn>TRUE</dfn> to <dfn>FALSE</dfn>