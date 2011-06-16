<h1><?php echo $title;?></h1>

<h2>Step 1: Backup and Remove</h2>

<p>As with all updates to the system, you should backup both your database and your files to your desktop in the event something goes wrong. Without backups, there will be no way to revert back to an older version if something happens. It's also important to have a copy of all the changes you've made to Nova 1 since you'll have to manually re-apply those changes after the update is finished.</p>

<p>Once you've finished backing up your stuff, remove all of the files in your site.</p>

<h2>Step 2: Upload Nova 2</h2>

<p>Now that you've got an empty directory (kinda scary to hit that delete button, huh?), it's time to upload Nova 2 to your site. It may take a few minutes since there are a lot of files that will need to be uploaded. In addition, if you have any skins you want, you can upload those from the backups on your desktop to the <samp>application/views</samp> directory on your server.</p>

<p class="important"><strong>Important:</strong> Don't try to cram all of your modifications and skins in at this point. Do the update from Nova 1 and <strong>then</strong> go back and do your modifications and skins after the fact.</p>

<h2>Step 3: Setup Your Database Connection</h2>

<p>Wait, haven't I done this before?</p>

<p>Yes, when you installed Nova, but the new setup process is a breeze. To get started, just point your browser toward your site. Nova will take over and push you in to the Setup Config process and step you through the process of setting up a connection to your database. If you've forgotten some of the pieces of your connection, you can always refer to the database file from your backup (ah, see, you're glad you did a backup now). You'll find that file in the <samp>application/config/database.php</samp> file.</p>

<h2>Step 4: Update to Nova 2</h2>

<p>Once you finish the Setup Config process, you'll be given the options you have, the primary of which should be updating Nova. The update process works just like the update process before. Step through the process to update your database. When you're done, Nova will direct you back to your site and you're all set.</p>

<h2>What About My Skins?</h2>

<p>Nova's skinning system didn't change for version 2, so any of your skins from Nova 1 should work with little modification (we say "little" modification because there was a small change that needs to be made to Thresher for Nova 2). For each of your Nova 1 skins you want to use in Nova 2, use the following steps to make sure they're working as expected in Nova 2.</p>

<ol>
	<li>Determine if your skin uses a light-colored background or a dark-colored background. If you're using a light-colored background, your reference material for these steps will be the Pulsar skin located in <samp>application/views/default</samp>. If you're using a dark-colored background, your reference material for these steps will be the Titan skin located in <samp>application/views/titan</samp>.</li>
	<li>Copy the <dfn>wiki.css</dfn> file from the appropriate skin (Pulsar for light-colored backgrounds and Titan for dark-colored backgrounds) and paste it into to your skin's <samp>wiki/css</samp> directory (if you've skinned the wiki).</li>
	<li>Edit your skin's <dfn>main.css</dfn> stylesheet in the wiki section to add an import for the new <dfn>wiki.css</dfn> file you just pasted in. Save the file and make sure everything is uploaded to the server. (This new stylesheet controls the look and feel of the new Thresher Manage Pages section and the new category selection piece.)</li>
	<li>If you don't like the colors used, you can change them from the <dfn>wiki.css</dfn> stylesheet.</li>
	<li>Copy the <dfn>cat-add.png</dfn> image from the images directory of whichever skin you grabbed the <dfn>wiki.css</dfn> stylesheet from and paste it into your own wiki section images directory.</li>

<h2>What About My Mods?</h2>

<p>Nova's file structure has changed, but the controllers themselves have also changed. You won't simply be able to copy and paste your old code in to Nova 2 and have it working again. You'll need to copy the appropriate controller method from <samp>nova/modules/core/controllers</samp> and paste it into the appropriate controller in <samp>application/controllers</samp> and re-apply your modifications that way. Sadly, there's no quick and easy way to do this.</p>

<p class="important">Fortunately, one of Nova 2's new features is that you can embed YouTube and other media tags right in site messages, so if you've used seamless substitution to add stuff to a page because certain types of HTML tags aren't allowed, you won't have to do that again, simply copy and paste the HTML into the site message in the Admin Control Panel!</p>