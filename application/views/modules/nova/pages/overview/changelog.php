<h1><?php echo $header;?></h1>

<h2>Version 1.0.5</h2>

<p><strong>Release Date:</strong> June 6, 2010</p>

<ul>
	<li><span class="fontMedium bold">General</span>
		<ul>
			<li>Added the 1.0.5 update file</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Controllers</span>
		<ul>
			<li>Updated the Wiki controller to fix errors thrown when editing a wiki page</li>
			<li>Patched a security issue with the docking form</li>
			<li>Updated the emails sent to GMs when a docking request was submitted</li>
			<li>Updated the User controller to fix an error thrown when setting a user to inactive</li>
			<li>Updated the User controller to fix bug where admins couldn't select in development skins</li>
			<li>Updated the Character controller to do some sanity checking on variables when deactivating characters</li>
			<li>Updated the Ajax controller to fix some errors thrown when rejecting docking applications</li>
			<li>Updated the Main controller with the join instructions from the database</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Helpers</span>
		<ul>
			<li>Updated the Form controller to fix an issue where hidden department positions were still shown</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Views</span>
		<ul>
			<li>Fixed errors thrown for upgrades on the character management page (_base/admin/pages/characters_index.php)</li>
			<li>Fixed error thrown for upgrades on the NPC management page (_base/admin/pages/characters_npcs.php)</li>
			<li>Fixed bug where join instructions weren't displayed (_base/main/pages/main_join_2.php)</li>
		</ul>
	</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Fixed errors thrown for upgrades on the character management page</li>
	<li>Fixed error thrown for upgrades on the NPC management page</li>
	<li>Fixed errors thrown when editing a wiki page</li>
	<li>Fixed bug where position dropdowns showed hidden department positions</li>
	<li>Fixed a wrong variable that was used in a model method call</li>
	<li>Fixed bugs in the email sent to GMs when a docking application was submitted</li>
	<li>Fixed error thrown when setting a user to inactive</li>
	<li>Fixed bug where there was no sanity checking done on some variables when deactivating a character</li>
	<li>Fixed errors thrown when rejecting a docking application</li>
	<li>Fixed bug where unlinked NPCs wouldn't be able to use new bio form fields</li>
	<li>Fixed bug where admins couldn't select in development skins</li>
	<li>Fixed bug where join instructions weren't displayed</li>
</ul>

<h2>Version 1.0.4</h2>

<p><strong>Release Date:</strong> May 12, 2010</p>

<ul>
	<li><span class="fontMedium bold">General</span>
		<ul>
			<li>Added the 1.0.4 update file</li>
			<li>Updated jQuery UI to version 1.8.1</li>
			<li>Updated markItUp! plugin to version 1.1.7</li>
			<li>Updated Thresher's Textile library to a newer version</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Controllers</span>
		<ul>
			<li>Updated the User controller to hide some of the logic and variable definition from user/account level 1 users</li>
			<li>Updated the Manage controller to explicitly set a Javascript tab value even if there are no tabs because of an exception IE throws when it isn't there</li>
			<li>Updated the Characters controller to do things only when access levels are right</li>
			<li>Updated the Wiki controller to display an error if its being accessed on a server with PHP4</li>
			<li>Updated the Archive controller to display an error if its being accessed on a server with PHP4</li>
			<li>Updated the User controller to populate the subject and from fields for the status change request email as well as passing in the proper session variable</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Libraries</span>
		<ul>
			<li>Added the MY_Email library to extend CodeIgniter's library to fix an issue with sending email through PHP mail</li>
			<li>Updated the MY_Input library to try and filter for illegal characters in MS Word better than before</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Models</span>
		<ul>
			<li>Updated the Personal Logs model to change the way queries were built for getting character logs from an array</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Views</span>
		<ul>
			<li>Updated the comments in the manage posts Javascript view (_base/admin/js/manage_posts_js.php)</li>
		</ul>
	</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Fixed error thrown when a user with user/account level 1 privileges updated their account</li>
	<li>Fixed bug where saved personal logs could be shown in along with activated logs for users with multiple characters associated with their account</li>
	<li>Fixed bug where IE threw an exception on the post, log, news and docked item management pages</li>
	<li>Fixed error thrown on the contact page</li>
	<li>Fixed issues people were having with emails being sent out on some servers</li>
	<li>Fixed errors thrown when users with level 1 characters/bio privileges update a character</li>
	<li>Fixed bug where position open slots were updated when they shouldn't be</li>
	<li>Fixed bug where the status change request email wasn't populated properly</li>
</ul>

<h2>Version 1.0.3</h2>

<p><strong>Release Date:</strong> April 26, 2010</p>

<ul>
	<li><span class="fontMedium bold">General</span>
		<ul>
			<li>Added the 1.0.3 update file</li>
			<li>Updated the install data to fix a bug in Thresher</li>
			<li>Updated Thresher to use the proper regions in the template config file</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Controllers</span>
		<ul>
			<li>Updated the Ajax controller to have a separate method for removing NPCs instead of piggybacking off of the delete character method</li>
			<li>Updated the Characters controller to put the NPC removal inside its own method instead of using the character removal process</li>
			<li>Updated the panel tabs on the Admin Control Panel to display a notice if there's no content available</li>
			<li>Updated the dynamic form management pages (bio, docking, specs) to show notices if there are no fields in a section</li>
			<li>Updated Thresher to use the proper regions in the template config file</li>
			<li>Updated the user deactivation process to also deactivate a users' characters at the same time</li>
			<li>Updated the Sim controller with the default_email_address and default_email_name settings in the options array</li>
			<li>Updated the Manage controller with the email_subject setting in the options array</li>
			<li>Updated the Update controller to rely less on the versions array file and pull a directory listing instead to use in building the list of files to be used (we still use the versions array file in the event the directory listing fails)</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Languages</span>
		<ul>
			<li>Added labels_you key to base_lang</li>
			<li>Added character_change key to text_lang</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Libraries</span>
		<ul>
			<li>Updated the Auth library to add some debugging code to help track down the remember me bug</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Models</span>
		<ul>
			<li>Updated the posts model to clean some code up</li>
			<li>Updated the posts model to add a parameter to the unattended posts method</li>
			<li>Updated the wiki model to have a default value of NULL for the first parameter of the get_pages method and to check for the null status instead of the parameter being empty</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Views</span>
		<ul>
			<li>Added the delete NPC Ajax view file (_base/admin/ajax/del_npc.php)</li>
			<li>Updated update center view file to show links for starting the update regardless of whether there's update information available (_base/update/pages/update_main_check.php)</li>
			<li>Updated the manage NPCs Javascript view file to point to the right location (_base/admin/js/characters_npcs_js.php)</li>
			<li>Updated the admin panel to show notices in the event there's no content in the tab panel (_base/admin/pages/admin_index.php)</li>
			<li>Updated the dynamic form management pages to show notices in the event there are no fields/content (_base/admin/pages/site_bioform_all.php, _base/admin/pages/site_dockingsections.php, _base/admin/pages/site_specsform_all.php)</li>
			<li>Updated the third dashboard panel view file to do logic to make sure an error wasn't thrown (_base/ajax/userpanel_3.php)</li>
		</ul>
	</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Fixed bug where the menu items for creating a new wiki page and managing existing pages wasn't displayed</li>
	<li>Fixed bug where the posts model wasn't accurately counting unattended posts when a character ID was passed in as an integer instead of array</li>
	<li>Fixed errors thrown when deleting characters and NPCs</li>
	<li>Fixed error thrown on the write mission post page</li>
	<li>Fixed bug where the post notification stayed active even after a post had been udpated and/or sent out</li>
	<li>Fixed errors thrown when adding a rank</li>
	<li>Fixed error thrown when there are no fields in a specs form section</li>
	<li>Fixed error thrown in the dashboard</li>
	<li>Fixed bug where wiki pages were being put in the uncategorized section even if they had categories</li>
	<li>Fixed error thrown for missing options parameter</li>
	<li>Fixed error thrown when accepting/rejecting a docked ship application</li>
</ul>

<h2>Version 1.0.2</h2>

<p><strong>Release Date:</strong> April 20, 2010</p>

<ul>
	<li><span class="fontMedium bold">General</span>
		<ul>
			<li>Updated the database schema to use a genre field in the rank catalogue table</li>
			<li>Updated the BAJ genre data with a genre for the rank catalogue items</li>
			<li>Updated the BL5 genre data with a genre for the rank catalogue items</li>
			<li>Updated the BLANK genre data with a genre for the rank catalogue items</li>
			<li>Updated the BSG genre data with a genre for the rank catalogue items</li>
			<li>Updated the CRD genre data with a genre for the rank catalogue items</li>
			<li>Updated the DND genre data with a genre for the rank catalogue items</li>
			<li>Updated the DS9 genre data with a genre for the rank catalogue items</li>
			<li>Updated the ENT genre data with a genre for the rank catalogue items</li>
			<li>Updated the KLI genre data with a genre for the rank catalogue items</li>
			<li>Updated the MOV genre data with a genre for the rank catalogue items</li>
			<li>Updated the ROM genre data with a genre for the rank catalogue items</li>
			<li>Updated the SG1 genre data with a genre for the rank catalogue items</li>
			<li>Updated the SGA genre data with a genre for the rank catalogue items</li>
			<li>Updated the STO genre data with a genre for the rank catalogue items</li>
			<li>Updated the TOS genre data with a genre for the rank catalogue items</li>
			<li>Updated the SG1 genre files with changes to the rank items</li>
			<li>Updated the SGA genre files with changes to the rank items</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Controllers</span>
		<ul>
			<li>Updated the Ajax controller to handle the display of the genre field for adding and editing rank catalogue items</li>
			<li>Updated the Site controller to handle the POST data for the genre field when adding and editing rank catalogue items</li>
			<li>Updated the Manage controller to show rank classes for rank sets that don't have a blank name item</li>
			<li>Updated the Manage controller to fix two fatal errors thrown</li>
			<li>Updated the Write controller to fix a bug with authors being bumped off posts</li>
			<li>Updated the Write controller to make sure a news item won't be sent out without a category</li>
			<li>Updated the Write controller to make sure the mission ID gets passed to the view when it exists</li>
			<li>Updated the Upload controller to show notices if there are no images found in a category</li>
			<li>Updated the Main controller to send the sample post out in the message game masters get</li>
			<li>Updated the Login controller to handle the new error message for pending users attempting to log in</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Languages</span>
		<ul>
			<li>Added labels_genre language key to base_lang</li>
			<li>Added error_login_7 language key to error_lang</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Libraries</span>
		<ul>
			<li>Added the MY_Input library to extend CI's xss_clean() method and filter out MS Word's illegal characters</li>
			<li>Updated the Menu library to allow access control on main navigation and sub navigation items</li>
			<li>Updated the Auth library to check for a user's status and not allow pending users to login to the system</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Models</span>
		<ul>
			<li>Updated get_rank_default() to use the genre in the where clause</li>
			<li>Updated get_rankcat() to use the genre in the where clause</li>
			<li>Updated get_all_rank_sets() to use the genre in the where clause</li>
			<li>Updated get_group_ranks() to have an identifier as the second argument</li>
			<li>Updated get_character_posts() in the posts model to use the proper SQL statement</li>
			<li>Updated get_author_emails() in posts model to fix field typo</li>
		</ul>
	</li>
	
	<li><span class="fontMedium bold">Views</span>
		<ul>
			<li>Updated the Ajax view for adding a new rank catalogue item with the genre field (_base/admin/ajax/add_catalogue_ranks.php)</li>
			<li>Updated the Ajax view for editing a rank catalogue item with the genre field (_base/admin/ajax/edit_catalogue_ranks.php)</li>
			<li>Updated the rank catalogue view file (_base/admin/pages/site_catalogueranks.php)</li>
			<li>Updated the rank Javascript view file (_base/admin/js/manage_ranks_js.php)</li>
			<li>Updated the email view files for the email game masters get when a user applies (_base/emails/html/main_join_gm.php &amp; _base/emails/text/main_join_gm.php)</li>
			<li>Updated the upload management view to allow items to be deleted and to show notices if there are no images in a category (_base/admin/pages/upload_manage.php)</li>
			<li>Updated the user bio view to point the links to the right location (_base/main/pages/personnel_user.php)</li>
			<li>Updated the write mission post view to populate the mission dropdown properly (_base/admin/pages/write_missionpost.php)</li>
		</ul>
	</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Fixed bug where the menu library wouldn't respect any access control put on main navigation or sub navigation menu items (<?php echo github_issue_link('101');?>)</li>
	<li>Fixed bug where issues were caused with rank catalogue items when multiple genres were installed (<?php echo github_issue_link('102');?>)</li>
	<li>Fixed undefined variable error that was being thrown in site/catalogueranks</li>
	<li>Fixed bug where only uploaded bio images could be deleted</li>
	<li>Fixed bug where authors were being dropped off of posts</li>
	<li>Fixed bug where sample post wasn't emailed out to the game master with the rest of the application</li>
	<li>Fixed bug in IE where ranks couldn't be added</li>
	<li>Fixed bug where rank classes wouldn't e shown for rank sets without a blank name rank item</li>
	<li>Fixed bug where the user bio pointed to the wrong location for user posts and awards</li>
	<li>Fixed bug where listing all of a users' posts would display posts beside their own</li>
	<li>Fixed error thrown on commenting on mission post</li>
	<li>Fixed fatal error thrown when updating a news item</li>
	<li>Fixed fatal error thrown when updating a personal log</li>
	<li>Fixed presentational issue with the display of login error #6</li>
	<li>Fixed bug where the mission dropdown (when running multiple missions) wasn't properly populated with the post's mission information</li>
</ul>

<h2>Version 1.0.1</h2>

<p><strong>Release Date:</strong> April 16, 2010</p>

<ul>
	<li><span class="fontMedium bold">Controllers</span>
		<ul>
			<li>Updated the Upgrade controller to create the mission_group field during the upgrade process (which it wasn't doing previously)</li>
		</ul>
	</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Fixed bug in the upgrade process where a field wasn't added to the table</li>
	<li>Fixed two errors with PHP4 installations</li>
</ul>

<h2>Version 1.0</h2>

<p><strong>Release Date:</strong> April 15, 2010</p>

<ul>
	<li>Initial release</li>
</ul>