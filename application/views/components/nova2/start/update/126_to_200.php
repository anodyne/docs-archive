<h1><?php echo $title;?></h1>

<p>The process of updating from Nova 1 to Nova 2 is pretty simple and straightforward, but it's important that you follow these instructions otherwise something could go wrong and you'll have to start all over again, or worst-case scenario, you lose your data (yet another reason you should <strong>always</strong> backup first).</p>
<br>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#start" data-toggle="tab">1. Getting Started</a></li>
		<li><a href="#update" data-toggle="tab">2. Updating</a></li>
		<li><a href="#cleanup" data-toggle="tab">3. Everything Else</a></li>
	</ul>
	
	<div class="tab-content">
		<div id="start" class="tab-pane active">
			<div class="tabbable">
				<ul class="nav nav-pills">
					<li class="active"><a href="#1_backup" data-toggle="pill">Backup</a></li>
					<li><a href="#1_remove" data-toggle="pill">Remove</a></li>
					<li><a href="#1_upload" data-toggle="pill">Upload</a></li>
				</ul>
				
				<div class="pill-content">
					<div id="1_backup" class="pill-pane active">
						<h2>Backup</h2>
						
						<p>As with all updates to the system, you should backup both your database and your files to your desktop in the event something goes wrong. Without backups, there will be no way to revert back to an older version if something happens. It's also important to have a copy of all the changes you've made to Nova 1 since you'll have to manually re-apply those changes after the update is finished.</p>
					</div>
					
					<div id="1_remove" class="pill-pane">
						<h2>Remove</h2>
						
						<p>Once you've finished backing up all of your stuff, delete all of the Nova files in your site.</p>

						<p class="alert alert-danger">When we say delete, we mean it. Delete every Nova file on your server and <strong>then</strong> upload the new copy. There have been a massive number of changes to Nova since the release of 1.2.6 and if you don't delete all the files and upload fresh copies, there's no telling what your FTP client might do to the files (attempt to merge them, not overwrite them, etc.).</p>
					</div>
					
					<div id="1_upload" class="pill-pane">
						<h2>Upload</h2>
						
						<p>Now that you've got an empty directory (kinda scary to hit that delete button, huh?), it's time to upload Nova 2 to your site.</p>
						
						<p>It'll likely take a few minutes to upload everything since there are a lot of files that'll need to be uploaded.</p>
						
						<p class="alert alert-info"><strong>Important:</strong> Don't try to cram all of your modifications and skins in at this point. Do the update from Nova 1 and <strong>then</strong> go back and do your modifications and skins after you know Nova 2 is up and running.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div id="update" class="tab-pane">
			<div class="tabbable">
				<ul class="nav nav-pills">
					<li class="active"><a href="#2_database" data-toggle="pill">Database Connection</a></li>
					<li><a href="#2_update" data-toggle="pill">Update</a></li>
				</ul>
				
				<div class="pill-content">
					<div id="2_database" class="pill-pane active">
						<h2>Setup Your Database Connection</h2>
						
						<p>Wait, haven't I done this before?</p>

						<p>You have indeed, but don't worry, the new process is a breeze and takes less than a minute to complete.</p>
						
						<p>To get started, just open your browser and head to your site. From there, Nova will take over, push you in to the Setup Config page, and walk you through the process of setting up a connection to your database. Once you've put your information in, Nova will actually try to connect to the database and if there's a problem, will tell you right away so you can correct. After everything is correct, it'll write the database connection file to the right location on your server and you'll be on your way.</p>
						
						<p class="alert alert-info">If you've forgotten some of the pieces of your connection, you can always refer to the database file from your backup (ah, see, you're glad you did a backup now). You'll find that in the <strong>application/config/database.php</strong> file wherever you backed Nova 1 up to.</p>
					</div>
					
					<div id="2_update" class="pill-pane">
						<h2>Update to Nova 2</h2>
						
						<p>Whew! That was easy. Now that the Setup Config process is finished, you have a couple of options for how to proceed. What we want to do right here is update Nova.</p>
						
						<p>The update process works just like the update process in Nova 1. The first step will try to do an automatic backup for you, but you don't have to worry about that too much since you manually backed up everything before you started. (You did back up everything before you started, right?)</p>
						
						<p>Let the update process do its thing and when you're done, you'll be back on the front Nova page and ready to keep continuing the udpate process.</p>
						
						<p class="alert alert-info">Technically speaking, the update process is done, but odds are you have skins to update, MODs to re-apply, and other such clean-up work you'll want to do.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div id="cleanup" class="tab-pane">
			<div class="tabbable">
				<ul class="nav nav-pills">
					<li class="active"><a href="#3_skins" data-toggle="pill">Skins</a></li>
					<li><a href="#3_mods" data-toggle="pill">MODs</a></li>
				</ul>
				
				<div class="pill-content">
					<div id="3_skins" class="pill-pane active">
						<h2>What About My Skins?</h2>

						<p>Nova's skinning system didn't change for version 2, so any of your skins from Nova 1 should work with only a few minor modification (we say "minor" modification because there are some small changes that need to be made to Thresher and the admin system for Nova 2). For each of your Nova 1 skins you want to use in Nova 2, use the following steps to make sure they're working as expected in Nova 2.</p>

						<p>The first thing to do is classify whether your skin is light or dark. In other words, do you have a light-colored background or a dark-colored background? If the skin you're updating has a light-colored background, all of the materials you'll need to copy can be found in the Pulsar skin <strong>application/views/default</strong>. If the skin you're updating uses a dark-colored background, all of the materials you'll need to copy can be found in the Titan skin <strong>application/views/titan</strong>. If you've edited a skin taken off of AnodyneXtras, you can download the new copy of the skin now and use the resources found in those skins instead.</p>

						<h3>Thresher Updates</h3>

						<ol>
							<li>Copy the <strong>wiki.css</strong> file from the appropriate skin's <strong>wiki/css</strong> directory (mentioned above) and paste it into to your skin's <strong>wiki/css</strong> directory (if you've skinned the wiki).</li>
							<li>Edit the <strong>main.css</strong> stylesheet in <strong>wiki/css</strong> and add an import statement at the end of the file for the new <strong>wiki.css</strong> file you just pasted in (you can simply copy and paste one of the import statements already in there). Save the file and make sure everything is uploaded to the server. (This new stylesheet controls the look and feel of the new Thresher Manage Pages section and the new category selection piece.)</li>
							<li>If you don't like the colors used, you can change them from the <strong>wiki.css</strong> stylesheet you just added.</li>
							<li>Copy the <strong>cat-add.png</strong> image from the <strong>wiki/images</strong> directory of whichever skin you're using as reference and paste it into your own <strong>wiki/images</strong> directory.</li>
						</ol>

						<h3>Admin Updates</h3>

						<ol>
							<li>Copy the <strong>jquery.chosen.css</strong> file from the appropriate skin's <strong>admin/css</strong> directory (mentioned above) and paste it into to your skin's <strong>admin/css</strong> directory (if you've skinned the admin system).</li>
							<li>Nova 2 will automatically look for this stylesheet and import if it exists, so you don't have to do anything else.</li>
							<li>If you don't like the colors used, you can change them from the <strong>jquery.chosen.css</strong> stylesheet.</li>
							<li>Copy the <strong>chosen-sprite.png</strong> image from the <strong>admin/images</strong> directory of whichever skin you're using as reference and paste it into your own <strong>admin/images</strong> directory.</li>
							<li>If you're using Titan or a modified version of Titan, you will need to pull Titan 2.0's <strong>admin.css</strong> file from the <strong>admin/css</strong> directory of the new version of Titan and paste it into to your skin's <strong>admin/css</strong> directory (if you've skinned the admin section). The reason this is needed only for Titan is because of the use of popovers that are styled with white backgrounds instead of dark backgrounds.</li>
						</ol>
					</div>
					
					<div id="3_mods" class="pill-pane">
						<h2>What About My MODs?</h2>

						<p>Not only has Nova's file structure has changed, but the controllers themselves have also changed. You won't simply be able to copy and paste your old code in to Nova 2 and have it work. The best way to go about it is to copy the method from the base controller in <strong>nova/modules/core/controllers</strong> and paste it into the appropriate controller in <strong>application/controllers</strong>. Then, you can re-apply the MOD that way. Sadly, there's no quick and easy way to do this.</p>
						
						<p>If you have questions about a specific MOD working in Nova 2, you should contact the MOD developer.</p>

						<p class="alert alert-info">Before you re-apply a MOD, you should verify that the MOD is necessary any more. For instance, one of Nova 2's new features is that you can use previously disallowed HTML tags like script and embed (for YouTube videos, for example) in site messages. This means that any MODs where you've overridden view files to get some code or video in to a page no longer need that MOD. If you have questions about these kinds of things, post something on the <a href="http://forums.anodyne-productions.com" target="_blank">forums</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>