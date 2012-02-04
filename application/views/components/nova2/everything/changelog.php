<script type="text/javascript">
	$(document).ready(function(){
		$('.show_versions').toggle(function(){
			var id = $(this).attr('myID');
			$('#versions_' + id).slideDown();
			$(this).find('span.action').html('Hide');
			return false;
		}, function(){
			var id = $(this).attr('myID');
			$('#versions_' + id).slideUp();
			$(this).find('span.action').html('Show');
			return false;
		});
	});
</script>

<h1>Nova 2 Changelog</h1>

<h2>Version 2.0</h2>

<p><strong>Release Date:</strong> 04 February 2012</p>


<ul>
	<li>Site Messages can now contain previously disallowed HTML tags (like <code>embed</code>, <code>iframe</code>, etc) for adding media from YouTube and Vimeo to site messages (like the welcome message) without needing to use seamless substitution.</li>
	<li>Mission groups can now be added inside other mission groups (nesting only allowed one level deep).</li>
	<li>Users with Level 2 user admin access rights can now reset someone's password for them. The new password will be generated and emailed to the user and they'll be prompted to reset the password the next time they log in. At no time does the user with Level 2 user admin access rights see what the newly generated password is. (<a href="https://github.com/anodyne/nova/issues/16" target="_blank">#16</a>)</li>
	<li>Multi-author posts are now locked during editing to prevent users editing the same post at the same time. The lock is released after the user saves their changes or they've gone 5 minutes without making a change. (In the event a user has changed something and walked away, their changes will be saved to the post first.)</li>
	<li>Admins now have the option of showing the latest personal logs and mission posts on the main page. (Admins will be able to select any combination of news, logs and posts.)</li>
	<li>Admins now have the option of setting the top open positions (from Position Management) that will be shown at the top of each manifest (not manifest-specific).</li>
	<li>Added a rules page to the main section that can be updated from the Site Messages page.</li>
	<li>The instructions on the upload page now include the maximum file size and maximum image dimensions (pulled from the upload config file) for reference to anyone uploading images. (<a href="https://github.com/anodyne/nova/issues/143">#143</a>)</li>
	<li>The deck listing page now uses a table-less layout for a cleaner look.</li>
	<li>The deck listing page now has a menu of decks at the top of the page for quickly moving to a deck item without having to scroll. (We think RPGs with a lot of decks are going to love this!)</li>
	<li>Overhauled the user interface for mission groups to provide more information (and look a lot better too).</li>
	<li>When composing a mission post, the dropdown will now show who owns a linked NPC.</li>
	<li>When composing a mission post, personal log or private message, users only have to start typing a name and the options will be narrowed down for them. (<a href="https://github.com/anodyne/nova/issues/23">#23</a>)</li>
	<li>The skin catalogue now allows removing an entire skin (with sections) and letting admins choose which skin users will beupdated to for each section.</li>
	<li>The user account page now has options to make activating and deactivating users a lot easier.
		<ul>
			<li>When deactivating a user, all active characters associated with that account with also be deactivated.</li>
			<li>When activating a user, admins will be prompted about which of the user's inactive characters should be reactivated.</li>
		</ul>
	</li>
	<li>The character bio page now has options to make activating and deactivating characters a lot easier.
		<ul>
			<li>Activating an inactive character (and all related actions) can now be done with the push of a button.</li>
			<li>Deactivating an active character (and all related actions) can now be done with the push of a button.</li>
			<li>Making an NPC an active character (and all related actions) can now be done with the push of a button.</li>
			<li>Making a character an NPC (and all related actions) can now be done with the push of a button.</li>
		</ul>
	</li>
	<li>When viewing a character's posts, the entries will be paginated to help with load times and usability.</li>
	<li>When viewing a character's logs, the entries will be paginated to help with load times and usability.</li>
	<li>Site manifests can now store default view information so that different manifests can have different view settings. (This is now handled through Site Manifest management instead of Site Settings.) (<a href="https://github.com/anodyne/nova/issues/157">#157</a>)</li>
	<li>Gave the Pulsar skin a refreshed look and feel.</li>
	<li>Gave the Titan skin a refreshed look and feel. (If you're interested in changing the header image, please see Titan's README.md file for instructions.)</li>
	<li>The Writing Control Panel now shows a notification for any entires that have been commented on in the last 30 days (along with a link to the comments section of the entry).</li>
	<li>The manifest has been reorganized (for the first time ever) with a slightly different look.</li>
	<li>The email sent to the game master when a user applies now goes to anyone who can approve or reject character applications.</li>
	<li>Acceptance and rejection emails now CC in anyone who can approve or reject character applications.</li>
	<li>Users can now search within their sent and received private messages.</li>
	<li>Private messages have now been split in to separate inbox and sent message pages. This will help improve performance since the page doesn't have to load all the messages at once then split them off in to tabs.</li>
	<li>Private messages in the inbox and sent messages list are now paginated.</li>
	<li>The Reply to All link when reading a private message is only displayed if there's more than one recipient.</li>
	<li>The Reply, Reply to All and Forward options when reading a private message are now displayed above and below the private message.</li>
	<li>Users can now mark all unread private messages as read with a single click.</li>
	<li>An all-new redesigned character bio page provides a better, cleaner user experience.</li>
</ul>

<h3>The Nova Core</h3>

<ul>
	<li>Moved to CodeIgniter 2.1 (was previously 1.7.3).</li>
	<li>Moved to a brand new file structure that further removes the Nova Core from any changes an admin might be making.</li>
	<li>Added <strong>experimental</strong> module support.</li>
	<li>Updated to jQuery 1.7.1.</li>
	<li>Updated to jQuery UI 1.8.17.</li>
	<li>Updated to jQuery Uniform 1.7.5.</li>
	<li>Updated to jQuery prettyPhoto 3.1.3.</li>
	<li>Updated to markItUp! 1.1.12.</li>
	<li>Added the jQuery Chosen plugin.</li>
	<li>Added the Bootstrap by Twitter Twipsy plugin (version 1.4).</li>
	<li>Added the Bootstrap by Twitter Popover plugin (version 1.4).</li>
	<li>Removed the qTip plugin. (Please use the Bootstrap Twipsy plugin instead.)</li>
	<li>Changed the <code>banned.php</code> file to <code>message.php</code> that now contains notifications of Level 2 bans, a missing <code>nova</code> directory and incompatible PHP version information.</li>
	<li>Seamless substitution can now be used to override email view files from the <code>_base_override</code> directory.</li>
	<li>Added seaQuest DSV as a genre option. (<a href="https://github.com/anodyne/nova/issues/144">#144</a>)</li>
	<li>Changed the Location helper into a library with static methods (<code>Location::view</code> instead of <code>view_location</code>).</li>
	<li>Removed the RSS model. (It isn't necessary since most of the calls were duplicated in the appropriate post type models.)</li>
	<li>Added constants to the Access model for the default access roles.</li>
	<li>The Missions model now allows group missions to be pulled from <code>get_all_missions()</code>.</li>
	<li>The Missions model now has a method to count mission groups: <code>count_mission_groups()</code>.</li>
	<li>The Users model now has a method to pull all of a user's LOA records: <code>get_user_loa_records()</code>.</li>
	<li>The Auth library now uses static methods to be able to call quicker (<code>Auth::check_access()</code> instead of <code>$this-&gt;auth-&gt;check_access()</code>).</li>
	<li>Nova will always check for the existence of the database config file. If the file isn't found, Nova will enter a new config setup wizard that will walk admins through setting up the config file, test the connection and then write the file for them.</li>
	<li>The SMS Upgrade process will now migrate SMS Database entries to the Thresher wiki page format.</li>
	<li>Completely re-wrote the upgrade process to not use config files (admins select the components they want upgraded through a user interface), to show more useful validation messages and be a shorter, more pleasant process (reduced the number of steps from 14 to 4).</li>
	<li>View files now check for the existence of the BASEPATH constant before rendering. On some servers, random <code>error_log</code> files are generated all over the place. A big part of this is view files that are accessed apart from the framework and generate PHP fatal errors. This fix should help eliminate those error log files.</li>
	<li>In preparation for future deprecation, we've removed all references to jQuery's <code>.live()</code> method. Third party developers should ensure their own code is updated as soon as possible to avoid any issues once the method is removed from the jQuery core.</li>
</ul>

<h3>Thresher</h3>

<ul>
	<li>Changed the way users manage categories when creating and editing a wiki page. (<a href="https://github.com/anodyne/nova/issues/137">#137</a>)</li>
	<li>Users with the proper permissions can now create categories when creating and editing a wiki page. (<a href="https://github.com/anodyne/nova/issues/64">#64</a>)</li>
	<li>If there are no categories set in Thresher and the user has the proper permissions, they will be prompted to create some new categories when creating and editing a wiki page.</li>
	<li>Changed the user experience for managing wiki pages that puts more controls at the user's disposal and simplifies the entire page. (<a href="https://github.com/anodyne/nova/issues/141">#141</a>)</li>
	<li>Changed the user interface for viewing wiki pages to make it simpler.</li>
	<li>Users must have Level 1 wiki page access to see the page history now.</li>
	<li>Only users who are logged in can see comments on a wiki page.</li>
	<li>Added system pages to Thresher that allow some of the system pages to have their content changed like a normal wiki page. (<a href="https://github.com/anodyne/nova/issues/123">#123</a>)</li>
	<li>Users can now search Thresher from the main Thresher page.</li>
	<li>Fixed several bugs with the listing of Thresher search results.</li>
	<li>Removed the recently changed and recently updated listings from the main Thresher page.</li>
	<li>Users can now subscribe to an RSS feed for created wiki pages as well as updated wiki pages.</li>
	<li>Admins can now restrict access to a wiki page based on access role. (<a href="https://github.com/anodyne/nova/issues/11">#11</a>, <a href="https://github.com/anodyne/nova/issues/12">#12</a>)</li>
</ul>

<h3>Bug Fixes</h3>

<ul>
	<li>Seamless substitution of images wouldn't work when the images were in the <code>_base_override</code> directory.</li>
	<li>The <code>RE:</code> and <code>FWD:</code> tags would be added to private message subjects when replying and forwarding indefinitely until there was no space left for the actual subject line. Now, Nova will make sure it's only added once. (<a href="https://github.com/anodyne/nova/issues/158">#158</a>)</li>
	<li>When replying to a private message, the author of the message would be added to the recipient list, so any message they send would also show up in their inbox as well. (This behavior can be duplicated by manually adding themselves to the recipients list.)</li>
	<li>The join form could be submitted without an email address or password.</li>
	<li>Users who were deactivated kept their account flags (system administrator, game master, webmaster) and their access role. Now, all account flags and access roles are changed on deactivation.</li>
	<li>Users who were reactivated didn't have their access role set to Standard User.</li>
	<li>Inactive users were shown a link in the sub-navigation to upload an image even though they don't have permissions to upload images.</li>
	<li>A password could be reset for a user even if they don't have a security question chosen.</li>
	<li>Patched several potential security and access issues.</li>
	<li>Positions weren't properly updated when deleting an active character.</li>
	<li>Pulsar styling issues in Internet Explorer 9.</li>
	<li>Titan styling issues in Internet Explorer 9.</li>
	<li>When viewing character or user award, the "Nominated By" line was shown even if there was no nomineed. (This is only an issue for RPGs who upgraded from SMS.)</li>
	<li>The Enterprise-era (ENT) genre install file had several issues and typos. (<a href="https://github.com/anodyne/nova/issues/155">#155</a>)</li>
	<li>The database automatically set a default rank for pending users potentially resulting in some confusion as to why a pending user already has a rank. (<a href="https://github.com/anodyne/nova/issues/148">#148</a>)</li>
	<li>If there is only one specification item, the list of items would be dispalyed instead of automatically sending the user to the only specification item. (<a href="https://github.com/anodyne/nova/issues/146">#146</a>)</li>
	<li>If there is only one specification item, the list of decks would be dispalyed instead of automatically sending the user to the only deck listing. (<a href="https://github.com/anodyne/nova/issues/147">#147</a>)</li>
	<li>During fresh installs, the user ID constraint wasn't consistent with the rest of the user ID fields throughout the system.</li>
	<li>Under some circumstances, users could edit posts they weren't even a part of. (Thanks to evshell18 on the Anodyne forums for pointing this out and getting the ball rolling on a fix.)</li>
</ul>

<p><strong><a href="#" class="show_versions" myID="12"><span class="action">Show</span> Nova 1.2.x Changes &raquo;</a></strong></p>

<div id="versions_12" class="hide">
	<h2>Version 1.2.4</h2>
	
	<p><strong>Release Date:</strong> &ndash; 25 January 2011</p>
	
	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.2.4 update file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Characters controller to fix a bug with the character acceptance email</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Models</span>
			<ul>
				<li>Updated the Posts model to fix a bug where mission posts weren't accurately counted in some situations</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Fixed bug in IE7 with the manifest not loading (_base/main/js/personnel_index_js.php)</li>
			</ul>
		</li>
	</ul>
	
	<h3>Bug Fixes</h3>
	
	<ul>
		<li>Fixed bug with the character acceptance emails</li>
		<li>Fixed bug in IE7 where the manifest wouldn't load</li>
		<li>Fixed bug where mission posts weren't counted properly in some situations</li>
	</ul>
	
	<h2>Version 1.2.3</h2>
	
	<p><strong>Release Date:</strong> &ndash; 04 January 2011</p>
	
	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.2.3 update file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Sim controller to fix bug with handling deck listings and multiple specification items</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Fixed bug with handling deck listings and multiple specification items (_base/main/pages/sim_decks.php)</li>
			</ul>
		</li>
	</ul>
	
	<h3>Bug Fixes</h3>
	
	<ul>
		<li>Fixed bug with handling deck listings and multiple specification items</li>
	</ul>
	
	<h2>Version 1.2.2</h2>
	
	<p><strong>Release Date:</strong> &ndash; 30 December 2010</p>
	
	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.2.2 update file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Manage controller to allow sub departments to be managed</li>
				<li>Updated the Write controller to fix a bug with how authors are displayed in the emails</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Fixed bug with managing sub departments (_base/admin/pages/manage_depts.php)</li>
			</ul>
		</li>
	</ul>
	
	<h3>Bug Fixes</h3>
	
	<ul>
		<li>Fixed bug where sub departments couldn't be managed from the department management page</li>
		<li>Fixed bug where post authors weren't displayed properly in emails</li>
		<li>Fixed bug in the 1.1.2 to 1.2 update file that would cause access issues</li>
	</ul>
	
	<h2>Version 1.2.1</h2>
	
	<p><strong>Release Date:</strong> &ndash; 23 December 2010</p>
	
	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.2.1 update file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Ajax controller to fix some errors being thrown</li>
				<li>Updated the RSS feed controller to fix an error being thrown</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Fixed bug with positions disappearing when updating them (_base/admin/pages/manage_positions.php)</li>
			</ul>
		</li>
	</ul>
	
	<h3>Bug Fixes</h3>
	
	<ul>
		<li>Fixed bug with positions disappearing when updating them</li>
		<li>Fixed errors thrown when trying to update character images when there aren't any images present</li>
		<li>Fixed error thrown in the RSS feed</li>
	</ul>
	
	<h2>Version 1.2</h2>
	
	<p><strong>Release Date:</strong> &ndash; 20 December 2010</p>
	
	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.2 update file</li>
				<li>Added a page that level 2 ban users are sent to when they try to view the site</li>
				<li>Added the jQuery UI draggable plugin</li>
				<li>Added the jQuery UI droppable plugin</li>
				<li>Added the jQuery prettyPhoto plugin</li>
				<li>Updated jQuery to version 1.4.4</li>
				<li>Updated jQuery UI to version 1.8.7</li>
				<li>Updated CodeIgniter to version 1.7.3</li>
				<li>Updated jQuery markItUp! plugin to version 1.1.9</li>
				<li>Removed the jQuery fancybox plugin</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Main controller to show an applicant's IP address in the email sent to the game master</li>
				<li>Updated the Main controller to use a simpler contact form with proper validation</li>
				<li>Updated the Report controller to show an applicant's email address and IP address</li>
				<li>Updated the Site controller to add a page for managing site bans</li>
				<li>Updated the Ajax controller to handle deleting a ban</li>
				<li>Updated the Ajax controller to handle updating the assigned manifest of a department</li>
				<li>Updated the Ajax controller to handle confirming duplication of a department</li>
				<li>Updated the Admin controller to fix a bug with users without an active character being shown in the activity panel</li>
				<li>Updated the Sim controller to show the manifest a department is associated with on the departments and positions page</li>
				<li>Updated the Manage controller to allow for duplicating a department and its positions</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Config</span>
			<ul>
				<li>Updated the hooks configuration file to call the ban hook after the browser hook is run</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Helpers</span>
			<ul>
				<li>Updated the Form helper to show the manifest a department is associated with in both department and position dropdowns</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Hooks</span>
			<ul>
				<li>Updated the Utility hook to do a search for level 2 bans as the site is spinning up</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Languages</span>
			<ul>
				<li>Added labels_ban key to base_lang</li>
				<li>Added labels_bans key to base_lang</li>
				<li>Added labels_ipaddr key to base_lang</li>
				<li>Added labels_manifests key to base_lang</li>
				<li>Added misc_level1_only key to base_lang</li>
				<li>Added labels_unassigned key to base_lang</li>
				<li>Added labels_header to base_lang</li>
				<li>Added labels_listings to base_lang</li>
				<li>Added labels_refresh to base_lang</li>
				<li>Updated email_content_private_message in email_lang</li>
				<li>Added error_wcp_1 to error_lang</li>
				<li>Added text_bans key to text_lang</li>
				<li>Added text_ban_join key to text_lang</li>
				<li>Added text_duplicate_dept to text_lang</li>
				<li>Added text_manifest_delete_departments to text_lang</li>
				<li>Added text_manifest to text_lang</li>
				<li>Added text_manifest_assign to text_lang</li>
				<li>Updated text_manage_depts in text_lang</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Libraries</span>
			<ul>
				<li>Updated the User Panel library to fix some errors thrown about counting characters posts and not being able to find the character</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Models</span>
			<ul>
				<li>Added method to the system model to retrieve site bans</li>
				<li>Added method to the system model to delete site bans</li>
				<li>Added method to the system model to create site bans</li>
				<li>Added methods to the departments model for dealing with multiple manifests</li>
				<li>Added method to the users model to pull users based on character status</li>
				<li>Updated the departments model to not optimize the add_dept() method because we need the insert ID at some points</li>
				<li>Updated the positions model to fix a potential bug where a model method would return nothing at all</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Added view files for ban management
					<ul>
						<li class="black">_base/admin/ajax/del_ban.php</li>
						<li class="black">_base/admin/js/site_bans_js.php</li>
						<li class="black">_base/admin/pages/site_bans.php</li>
					</ul>
				</li>
				<li>Added view files for manifest management
					<ul>
						<li class="black">_base/admin/js/site_manifests_js.php</li>
						<li class="black">_base/admin/pages/site_manifests.php</li>
						<li class="black">_base/admin/pages/site_manifests_assign.php</li>
					</ul>
				</li>
				<li>Updated the application report to show the email address and IP address of applicants (_base/admin/pages/report_applications.php)</li>
				<li>Updated the contact page to be simpler and use proper validation (_base/main/pages/main_contact.php)</li>
				<li>Updated department management to handle duplicating departments
					<ul>
						<li class="black">_base/admin/ajax/add_dept.php</li>
						<li class="black">_base/admin/ajax/dup_dept.php</li>
						<li class="black">_base/admin/js/manage_depts_js.php</li>
						<li class="black">_base/admin/pages/manage_depts.php</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	
	<h3>Bug Fixes</h3>
	
	<ul>
		<li>Fixed bug where users without an active character are displayed in the activity warning panel on the ACP</li>
		<li>Fixed a potential bug where a method in the positions model could return nothing at all under certain circumstances</li>
		<li>Fixed bug where the sample post in the join application email was just a massive wall of text</li>
		<li>Fixed bug where specifications weren't properly upgraded during the SMS upgrade process</li>
		<li>Fixed bug with a missing closing tag on the create characters page that created some display issues</li>
		<li>Fixed bug where the timezone menu in site/settings pulled the wrong value to populate the field with</li>
		<li>Fixed bug where the join page was pulling an image from the admin section</li>
		<li>Fixed several spacing bugs in the admin section</li>
		<li>Fixed several errors thrown throughout the system</li>
		<li>Fixed bug where the flash message view couldn't be overwritten with seamless substitution</li>
		<li>Fixed bug where post emails were sent out with the user's primary character name attached even if their primary character wasn't associated with the post</li>
		<li>Fixed bug where the private message emails didn't have the content of the private message</li>
		<li>Fixed errors thrown through the system related to not being able to count character posts</li>
		<li>Fixed bug where personal logs didn't have the right date when they're saved first then posted</li>
		<li>Fixed bug where pending users would appear in the dropdown of potential recipients for a private message</li>
		<li>Fixed bug where changing a dynamic field form from text/textarea to dropdown wouldn't trigger the dropdown values section to open, rendering the field pretty much useless</li>
	</ul>
</div>

<p><strong><a href="#" class="show_versions" myID="11"><span class="action">Show</span> Nova 1.1.x Changes &raquo;</a></strong></p>

<div id="versions_11" class="hide">
	<h2>Version 1.1.2</h2>

	<p><strong>Release Date:</strong> 14 October 2010</p>

	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.1.2 update file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Site controller fix a bug with quick install</li>
				<li>Updated the Site controller so that Nova doesn't try to update the skin_login field (which doesn't exist for users)</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Helpers</span>
			<ul>
				<li>Updated the Form helper to allow for disabled fields in dropdowns</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Fixed issues in the author selection process
					<ul>
						<li class="black">application/views/_base/admin/js/manage_posts_js.php</li>
						<li class="black">application/views/_base/admin/js/write_missionpost_js.php</li>
						<li class="black">application/views/_base/admin/pages/manage_posts.php</li>
						<li class="black">application/views/_base/admin/pages/write_missionpost.php</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
		
	<h3>Bug Fixes</h3>

	<ul>
		<li>Fixed bug where, under very strange circumstances, quick install wouldn't work properly</li>
		<li>Fixed bug where Nova would try to update a field in the user table that didn't exist</li>
		<li>Fixed issues with author selection for mission posts (thanks to Patrick for these fixes)</li>
	</ul>

	<h2>Version 1.1.1</h2>

	<p><strong>Release Date:</strong> September 27, 2010</p>

	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.1 update file</li>
				<li>Updated jQuery UI to version 1.8.5</li>
				<li>Updated markItUp! plugin to version 1.1.8</li>
				<li>Updated the Thresher head include file to fix a presentation issue</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Login controller with some minor comment changes</li>
				<li>Updated all of the controllers to fix a bug where Nova wouldn't display because it couldn't find the template file</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Updated the tour item display page to only show the general items category if there are general tour items (_base/main/pages/sim_tour_all.php)</li>
			</ul>
		</li>
	</ul>
		
	<h3>Bug Fixes</h3>

	<ul>
		<li>Fixed bug where Nova wouldn't display because it couldn't find the template file</li>
		<li>Fixed bug the General Items tour item category would be displayed even if there weren't any general tour items</li>
		<li>Fixed bug where skins with dashboard handles were showing bullets and having weird spacing issues</li>
	</ul>

	<h2>Version 1.1</h2>

	<p><strong>Release Date:</strong> September 4, 2010</p>

	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.1 update file</li>
				<li>Added the FancyBox plugin</li>
				<li>Added the jQuery Reflection plugin</li>
				<li>Removed the ColorBox plugin</li>
				<li>Removed the Reflection.js plugin</li>
				<li>Updated jQuery UI to version 1.8.4</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Manage controller to handle managing multiple specification items</li>
				<li>Updated the Manage controller to handle managing tour items associated with specification items</li>
				<li>Updated the Messages controller to fix bug with the dropdown menus not being set properly when replying to a PM</li>
				<li>Updated the Sim controller to fix bug with the ordering of missions inside mission groups</li>
				<li>Updated the Sim controller to handle multiple specification items</li>
				<li>Updated the Sim controller to tour items tied to specification items</li>
				<li>Updated the Upgrade controller to account for the new schema changes</li>
				<li>Updated the Upload controller to handle uploads for specification items</li>
				<li>Updated the Upload controller to fix an error when deleting uploaded items</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Languages</span>
			<ul>
				<li>Added specitem_select key to text_lang</li>
				<li>Added specitem_empty_fields key to text_lang</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Models</span>
			<ul>
				<li>Fixed bug in the news model where the next/previous link IDs were wrong under certain circumstances</li>
				<li>Fixed bug in the personal logs model where the next/previous link IDs were wrong under certain circumstances</li>
				<li>Fixed bug in the posts model where the next/previous link IDs were wrong under certain circumstances</li>
				<li>Updated the tour model to be able to handle associating tour items with specification items</li>
				<li>Updated the specs model to be able to handle multiple specification items</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Updated the specs management page to handle multiple specification items and use FancyBox instead of ColorBox
					<ul>
						<li class="black">_base/admin/js/manage_specs_js.php</li>
						<li class="black">_base/admin/pages/manage_specs.php</li>
						<li class="black">_base/admin/pages/manage_specs_action.php</li>
					</ul>
				</li>
				<li>Updated the tour management page to handle tying tour items to specification items
					<ul>
						<li class="black">_base/admin/js/manage_tour_js.php</li>
						<li class="black">_base/admin/pages/manage_tour.php</li>
						<li class="black">_base/admin/pages/manage_tour_action.php</li>
					</ul>
				</li>
				<li>Updated the site settings page to use FancyBox instead of ColorBox (_base/admin/js/site_settings_js.php)</li>
				<li>Updated the user options page to use FancyBox instead of ColorBox (_base/admin/js/user_options_js.php)</li>
				<li>Updated the upload management page to handle uploads for specification items (_base/admin/pages/upload_manage.php)</li>
				<li>Updated the character bio page to use FancyBox instead of ColorBox
					<ul>
						<li class="black">_base/main/js/personnel_character_js.php</li>
						<li class="black">_base/main/pages/personnel_character.php</li>
					</ul>
				</li>
				<li>Updated the missions page to use FancyBox instead of ColorBox
					<ul>
						<li class="black">_base/main/js/sim_missions_js.php</li>
						<li class="black">_base/main/pages/sim_missions_one.php</li>
					</ul>
				</li>
				<li>Updated the specifications page to handle multiple specification items
					<ul>
						<li class="black">_base/main/js/sim_specs.php</li>
						<li class="black">_base/main/pages/sim_specs_all.php</li>
						<li class="black">_base/main/pages/sim_specs_one.php</li>
					</ul>
				</li>
				<li>Updated the tour page to handle tour items associated with specification items
					<ul>
						<li class="black">_base/main/js/sim_tour.php</li>
						<li class="black">_base/main/pages/sim_tour_all.php</li>
						<li class="black">_base/main/pages/sim_tour_one.php</li>
					</ul>
				</li>
				<li>Updated the mission groups page to fix bug with missions not being ordered properly (_base/main/pages/sim_missions_groups_all.php)</li>
			</ul>
		</li>
	</ul>
		
	<h3>Bug Fixes</h3>

	<ul>
		<li>Fixed bug where ordered and unordered lists weren't properly styled in Thresher</li>
		<li>Fixed bug in mission group pages where missions didn't respect the mission order that was set for them</li>
		<li>Fixed bug where the private message dropdown didn't populate with an author when replying to a message</li>
		<li>Fixed bug where mission post next/previous links could be wrong under certain circumstances</li>
		<li>Fixed bug where news item next/previous links could be wrong under certain circumstances</li>
		<li>Fixed bug where personal log next/previous links could be wrong under certain circumstances</li>
		<li>Fixed an error about undefined class method when deleting uploaded items</li>
	</ul>
</div>

<p><strong><a href="#" class="show_versions" myID="1"><span class="action">Show</span> Nova 1.0.x Changes &raquo;</a></strong></p>

<div id="versions_1" class="hide">
	<h2>Version 1.0.6</h2>

	<p><strong>Release Date:</strong> July 14, 2010</p>

	<ul>
		<li><span class="fontMedium bold">General</span>
			<ul>
				<li>Added the 1.0.6 update file</li>
				<li>Updated jQuery UI to version 1.8.2</li>
				<li>Updated jQuery Colorbox plugin to version 1.3.8</li>
				<li>Updated the index file to turn down the error reporting since most of the issues are taken care of</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Controllers</span>
			<ul>
				<li>Updated the Admin controller to fix a bug where the udpate check tried to run even if the admin had told it not to</li>
				<li>Updated the Characters controller with information for the loading graphic and message on the bio management page</li>
				<li>Updated the Characters controller to fix an error when trying to delete a character</li>
				<li>Updated the Characters controller to fix a bug where rank history wasn't being properly set</li>
				<li>Updated the Messages controller to separate active and inactive users when composing a private message</li>
				<li>Updated the Personnel controller to fix an error if only one character image was set on the character bio</li>
				<li>Updated the Sim controller to fix an error when posting a mission comment</li>
				<li>Updated the Sim controller to fix an error if only one image was set on the mission detail page</li>
				<li>Updated the Sim controller to fix an error if only one image was set on the tour detail page</li>
				<li>Updated the Update controller to fix an error thrown while updating the system for some users</li>
				<li>Updated the User controller to fix a bug where user preferences weren't handled properly during activation/deactivation/deletion</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Languages</span>
			<ul>
				<li>Added labels_from key to base_lang</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Libraries</span>
			<ul>
				<li>Updated the Auth library to remove some debug code that was filling up the error logs</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Models</span>
			<ul>
				<li>Added method to the characters model for creating promotion records</li>
				<li>Added method to the users model for removing user email preferences</li>
			</ul>
		</li>
		
		<li><span class="fontMedium bold">Views</span>
			<ul>
				<li>Updated the bio management page to show a loading message (_base/admin/js/characters_bio_js.php)</li>
				<li>Updated the bio management page to show a loading message (_base/admin/pages/characters_bio.php)</li>
				<li>Fixed bug where characters changing status to and from active wouldn't set the number of open slots for their position(s)  (_base/admin/pages/characters_bio.php)</li>
				<li>Fixed bug where rank history wasn't being properly set  (_base/admin/pages/characters_bio.php)</li>
				<li>Fixed bug the position dropdown menu when creating a character didn't just show open positions  (_base/admin/pages/characters_create.php)</li>
			</ul>
		</li>
	</ul>
		
	<h3>Bug Fixes</h3>

	<ul>
		<li>Fixed bug where acceptance and rejection messages were went without the changes admins made to them</li>
		<li>Fixed bug where characters changing status to and from active wouldn't set the number of open slots for their position(s)</li>
		<li>Fixed bug where rank history wasn't being properly set</li>
		<li>Fixed bug where the position dropdown when creating characters didn't just show open positions</li>
		<li>Fixed bug where turning off update notifications still attempt to run the check</li>
		<li>Fixed bug where a user's email preferences remained active even after the user was set to inactive</li>
		<li>Fixed bug where a user's email preferences weren't deleted when the user was deleted</li>
		<li>Fixed error thrown when posting a mission post comment</li>
		<li>Fixed error thrown when trying to delete a character</li>
		<li>Fixed error thrown when updating the system</li>
		<li>Fixed error thrown when there's only one mission image set on the mission detail page</li>
		<li>Fixed error thrown when there's only one tour image set on the tour detail page</li>
		<li>Fixed error thrown when there's only one character image set on the character bio page</li>
		<li>Patched security bug in CI's upload class</li>
	</ul>

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
		<li>Fixed bug where the menu library wouldn't respect any access control put on main navigation or sub navigation menu items</li>
		<li>Fixed bug where issues were caused with rank catalogue items when multiple genres were installed</li>
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
</div>