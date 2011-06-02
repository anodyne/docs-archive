<h1><?php echo $title;?></h1>

<h2>Step 1: Backup and Remove</h2>

<p>As with all updates to the system, you should backup both your database and your files to your desktop in the event something goes wrong. Without backups, there will be no way to revert back to an older version if something happens. It's also important to have a copy of all the changes you've made to Nova 1 since you'll have to manually re-apply those changes after the update is finished.</p>

<p>Once you've finished backing up your stuff, remove all of the files in your site.</p>

<h2>Step 2: Upload Nova 2</h2>

<p>Now that you've got an empty directory (kinda scary to hit that delete button, huh?), it's time to upload Nova 2 to your site. It may take a few minutes since there are a lot of files that will need to be uploaded. In addition, if you have any skins you want, you can upload those from the backups on your desktop to the <samp>application/views</samp> directory on your server.</p>

<h2>Step 3: Setup Your Database Connection</h2>

<p>Wait, haven't I done this before?</p>

<p>Yes, when you installed Nova, but the new setup process is a breeze. To get started, just point your browser toward your site. Nova will take over and push you in to the Setup Config process and step you through the process of setting up a connection to your database. If you've forgotten some of the pieces of your connection, you can always refer to the database file from your backup (ah, see, you're glad you did a backup now). You'll find that file in the <samp>application/config/database.php</samp> file.</p>

<h2>Step 4: Update to Nova 2</h2>

<p>Once you finish the Setup Config process, you'll be given the options you have, the primary of which should be updating Nova. The update process works just like the update process before. Step through the process to update your database. When you're done, Nova will direct you back to your site and you're all set.</p>

<h2>What About My Mods?</h2>

<p>Nova's file structure has changed, but the controllers themselves have also changed. You won't simply be able to copy and paste your old code in to Nova 2 and have it working again. You'll need to copy the appropriate controller method from <samp>nova/modules/core/controllers</samp> and paste it into the appropriate controller in <samp>application/controllers</samp> and re-apply your modifications that way. Sadly, there's no quick and easy way to do this.</p>

<p class="important">Fortunately, one of Nova 2's new features is that you can embed YouTube and other media tags right in site messages, so if you've used seamless substitution to add stuff to a page because certain types of HTML tags aren't allowed, you won't have to do that again, simply copy and paste the HTML into the site message in the Admin Control Panel!</p>