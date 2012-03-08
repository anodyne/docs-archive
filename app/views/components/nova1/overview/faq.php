<script type="text/javascript">
	$(document).ready(function(){
		$('.question').toggle(function(){
			$(this).next().slideDown('fast');
			return false;
		}, function(){
			$(this).next().slideUp('fast');
			return false;
		});
	});
</script>

<h1>Frequently Asked Questions</h1>

<p>Below you will find a series of frequently asked questions. Clicking on the question will show the answer.</p>

<h2>System</h2>

<div class="faq">
	<p class="question bold">I've lost my access to the site, how do I fix it?</p>
	<p class="answer hide">If you have lost your access to the site, you can manually reset it by going into the database (usually through an interface like phpMyAdmin) and opening up your record in the players table. (You'll know which record is yours because the email address is one of the first fields in the table.) Set the field <dfn>access_role</dfn> to the number 1 and save the record. Log out of Nova then back in and you will have all your access back.</p>
</div>

<div class="faq">
	<p class="question bold">Why didn't Nova delete the image I uploaded when I deleted it from the Manage Uploads page?</p>
	<p class="answer hide">A lot of free hosts severely restrict the kinds of things applications can do. FTP controls is one of those. If your server doesn't support the necessary FTP controls and deleting files off the server, then it can only delete the database record and you will need to manually delete file from your server. If you have a lot of disk space, leaving those images on your server won't cause any issues. If you don't have a lot of server space, you'll want to delete the files right after deleting the upload record.</p>
</div>

<div class="faq">
	<p class="question bold">How do I install more genres?</p>
	<p class="answer hide">You can install more genres in Nova by going to the install center. If the system is installed, you'll be shown options for updating Nova, installing new genres, adding tables/fields to the database and uninstalling Nova.</p>
</div>

<div class="faq">
	<p class="question bold">How do I add database tables or add database fields?</p>
	<p class="answer hide">You can add database tables and/or fields by going to the install center. If the system is installed, you'll be shown options for updating Nova, installing new genres, adding tables/fields to the database and uninstalling Nova.</p>
</div>

<div class="faq">
	<p class="question bold">I'm not getting application emails from Nova. What happened?</p>
	<p class="answer hide">Hosts have all kinds of different policies about things like email and file writing. If your host requires that emails like the application emails come from an address on their own domain, you can fix that by simply changing the Default Email Address setting in Site Settings to your account email address.</p>
</div>

<h2>General</h2>

<div class="faq">
	<p class="question bold">What is this little black icon (the dashboard link)?</p>
	<p class="answer hide">New to Nova is the User Dashboard. In SMS, you were able to set up your 10 favorite menu items for quick access. The personalized menu option, while handy, was difficult to maintain and nearly impossible to accurately skin. Because of that, we went back to the drawing board and put together the User Dashboard to bring together an easy to skin alternative that provides more information. In addition to your top 5 favorite links, you also have access to all your characters (both viewing and editing their bios) as well as useful account links, like editig your account, requesting an LOA and more. Click the icon (or link) and the dashboard will appear. Click it again and it'll go away!</p>
</div>

<div class="faq">
	<p class="question bold">I can't upload files through the upload page. Help!</p>
	<p class="answer hide">There are two possibilities if this happens. First, make sure you've configured the FTP library to connect to your server. To do this, you can open <samp>application/config/ftp.php</samp> and provide your connection details and Nova will use them. If you've done that and it doesn't work, it's likely your server doesn't support the necessary PHP functions for uploading files.</p>
</div>

<h2>Characters</h2>

<div class="faq">
	<p class="question bold">How do I link additional characters to my/someone else's account?</p>
	<p class="answer hide">The first thing you have to do is make sure you're allowed to have multiple characters associated with accounts. In Site Settings, there are settings for the number of playing characters allowed per account and the number of non-playing characters per account. Those numbers have to be higher than 1 if you're going to use those characters for other accounts. If those numbers are set properly, you'll need to make sure the character is created first. Once the character is created, you can go to the Link Characters page from the User section of the menu. After selecting the user you want, simply click on the add character icon next to the character name and that character will be linked to the account. The player in question will need to log out and log back in for the change to take affect. You can find more information about link characters at the <a href="<?php echo Uri::create('nova1/pages/user/link');?>">Link Character</a> page guide.</p>
</div>

<div class="faq">
	<p class="question bold">How do I add an external image to my character's biography?</p>
	<p class="answer hide">In the final stages of development, a major bug popped up that required us to rewrite the way character images are managed. During that rewrite, we had to drop support for using external character images. Never fear though, Nova allows uploading images to the server, so you can still take those images and upload them manually to the server then use them from there.</p>
</div>

<h2>Players</h2>

<div class="faq">
	<p class="question bold">How do I change a player's access role?</p>
	<p class="answer hide">If you have level 2 user/account privileges (you'll know because you'll see an admin tab when you go to anyone's account) then you can change that player's role from the admin tab of the user account page. You can find more information about user accounts at the <a href="<?php echo Uri::create('nova1/pages/user/account');?>">User Account</a> page guide.</p>
</div>

<div class="faq">
	<p class="question bold">How do I deactivate a player?</p>
	<p class="answer hide">If you have level 2 user/account privileges (you'll know because you'll see an admin tab when you go to anyone's account) then you can change that player's type from active/pending to inactive from the admin tab of the user account page. You can find more information about user accounts at the <a href="<?php echo Uri::create('nova1/pages/user/account');?>">User Account</a> page guide.</p>
</div>

<h2>Posting</h2>

<div class="faq">
	<p class="question bold">Why can't I add NPCs to the authors list when writing a mission post?</p>
	<p class="answer hide">Nova only allows you to write mission posts with playing characters and non-playing character who are linked to a playing character. Once an NPC has been linked to a playing character, their name will appear in the Other Authors dropdown menu when composing a new mission post. More information about linking character can be found on <a href="<?php echo Uri::create('nova1/pages/user/link');?>">this page</a>.</p>
</div>

<div class="faq">
	<p class="question bold">Why can't I add any of my own NPCs to the authors list when writing a mission post?</p>
	<p class="answer hide">This is a limitation of Nova's posting system. You can only add one of your own characters to a post and whatever other playing characters or NPCs that are linked to a player throughout the system. It's a limitation we're well aware of, but fixing it would require re-writing a vast majority of the code surrounding the component (and there's a lot of it). For the time being, you can save the post then edit the post and add the NPCs you want from there.</p>
</div>