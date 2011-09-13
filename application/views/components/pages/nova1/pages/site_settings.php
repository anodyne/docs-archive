<h1><?php echo $header;?></h1>

<p>Site Settings is where admins can update the various settings that control parts of Nova. In addition, Nova allows admins to create their own settings whose keys can be used in user-created pages or extended pages. User-created settings can be updated from the User-Created Settings tab which is visible if at least one user-created setting exists. More information about user-created settings can be found below.</p>

<h3>Permissions</h3>

<p>In order to manage system settings, a user needs to have <kbd>site/settings</kbd> permissions.</p>

<h2>Nova Settings</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<thead>
		<tr>
			<th class="blue">Setting</th>
			<th class="blue">Key</th>
			<th class="blue">Default</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>Sim Name</strong></td>
			<td class="td col2">sim_name</td>
			<td class="td col3"><em>None</em></td>
			<td class="td">The name of the sim (i.e. USS Enterprise NCC-1701)</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Sim Year</strong></td>
			<td class="td col2">sim_year</td>
			<td class="td col3"><em>None</em></td>
			<td class="td">The year the sim plays in</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Sim Type</strong></td>
			<td class="td col2">sim_type</td>
			<td class="td col3"><em>2 (Ship)</em></td>
			<td class="td">The type of sim it is</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Allowed Playing Characters</strong></td>
			<td class="td col2">allowed_chars_playing</td>
			<td class="td col3"><em>1</em></td>
			<td class="td">The number of playing characters a single user can be associated with</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Allowed Non-Playing Characters</strong></td>
			<td class="td col2">allowed_chars_npc</td>
			<td class="td col3"><em>3</em></td>
			<td class="td">The number of NPCs a single user can be associated with</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Maintenance Mode</strong></td>
			<td class="td col2">maintenance</td>
			<td class="td col3"><em>Off</em></td>
			<td class="td">Whether maintenance mode is turned on or off. When active, maintenance mode only allows system administrators to log in. More information about maintenance mode can be found <?php echo Html::anchor('nova1/pages/login/maintenance', 'here');?>.</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Date Format</strong></td>
			<td class="td col2">date_format</td>
			<td class="td col3"><em>Mon Jan 1st, 2009 @ 12:00pm</em></td>
			<td class="td">The format that dates are displayed in</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Timezone</strong></td>
			<td class="td col2">timezone</td>
			<td class="td col3"><em>UTC</em></td>
			<td class="td">The timezone of the site</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Daylight Savings Time</strong></td>
			<td class="td col2">daylight_savings</td>
			<td class="td col3"><em>FALSE</em></td>
			<td class="td">For US RPGs, this will set whether daylight savings time is active</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Update Notification</strong></td>
			<td class="td col2">updates</td>
			<td class="td col3"><em>major</em></td>
			<td class="td">Which updates admins are notified of</td>
		</tr>
		<tr>
			<td class="td col1"><strong>System Email</strong></td>
			<td class="td col2">system_email</td>
			<td class="td col3"><em>on</em></td>
			<td class="td">Whether system email is turned on or off</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Email Subject Prefix</strong></td>
			<td class="td col2">email_subject</td>
			<td class="td col3"><em>None</em></td>
			<td class="td">The subject line used on all emails sent from the system</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Default Email Name</strong></td>
			<td class="td col2">defalt_email_name</td>
			<td class="td col3"><em>None</em></td>
			<td class="td">The name used by Nova when there is no from email name set</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Default Email Address</strong></td>
			<td class="td col2">default_email_address</td>
			<td class="td col3"><em>None</em></td>
			<td class="td">The email address used by Nova when there is no from email address set</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Main Skin</strong></td>
			<td class="td col2">skin_main</td>
			<td class="td col3"><em>default</em></td>
			<td class="td">The skin used by the main section</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Admin Skin</strong></td>
			<td class="td col2">skin_admin</td>
			<td class="td col3"><em>default</em></td>
			<td class="td">The skin used by the admin section</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Wiki Skin</strong></td>
			<td class="td col2">skin_wiki</td>
			<td class="td col3"><em>default</em></td>
			<td class="td">The skin used by the wiki</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Login Skin</strong></td>
			<td class="td col2">skin_login</td>
			<td class="td col3"><em>default</em></td>
			<td class="td">The skin used by the login page</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Default Rank Set</strong></td>
			<td class="td col2">display_rank</td>
			<td class="td col3"><em>default</em></td>
			<td class="td">The rank set that displays on the site</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Number of Awards on Bio</strong></td>
			<td class="td col2">bio_num_awards</td>
			<td class="td col3"><em>10</em></td>
			<td class="td">The number of awards that display a player's awards section of their player bio</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Number of Logs to List</strong></td>
			<td class="td col2">list_logs_num</td>
			<td class="td col3"><em>25</em></td>
			<td class="td">The number of personal logs shown in the full listing before pagination kicks in</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Number of Posts to List</strong></td>
			<td class="td col2">list_posts_num</td>
			<td class="td col3"><em>25</em></td>
			<td class="td">The number of mission posts shown in the full listing before pagination kicks in</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Default Manifest Display</strong></td>
			<td class="td col2">manifest_defaults</td>
			<td class="td col3"><em>Active &amp; NPCs</em></td>
			<td class="td">The default display options for the manifest</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Show News</strong></td>
			<td class="td col2">show_news</td>
			<td class="td col3"><em>y</em></td>
			<td class="td">Whether news is shown on the main page or not</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Post Count Options</strong></td>
			<td class="td col2">post_count_format</td>
			<td class="td col3"><em>multiple</em></td>
			<td class="td">The format posts are counted with (either a post for every player involved or just a single post)</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Use Sample Post</strong></td>
			<td class="td col2">use_sample_post</td>
			<td class="td col3"><em>y</em></td>
			<td class="td">Whether the join form will contain a sample post field</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Use Mission Notes</strong></td>
			<td class="td col2">use_mission_notes</td>
			<td class="td col3"><em>y</em></td>
			<td class="td">Whether or not to use the system's mission notes</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Who's Online Timespan</strong></td>
			<td class="td col2">online_timespan</td>
			<td class="td col3"><em>5</em></td>
			<td class="td">The number of minutes to use as a baseline for who is currently logged in</td>
		</tr>
		<tr>
			<td class="td col1"><strong>Posting Requirement</strong></td>
			<td class="td col2">posting_requirement</td>
			<td class="td col3"><em>14</em></td>
			<td class="td">The number of days to use as a requirement for how often players have to post</td>
		</tr>
	</tbody>
</table>

<h2>User-Created Settings</h2>

<p>In addition, Nova allows admins to create their own system settings. Why? With Nova's extensible nature, there are bound to be situations where a new page is created and an admin wants to be able to update something right from the Site Settings page. User-created settings allow admins to create their own settings and then programmatically put them into their pages and update them right from the Site Settings page with all the other system settings.</p>

<p>The Site Settings page has a link near the top of the page for managing user-created settings. From that page, admins can create, edit and delete their settings. A setting is made up of a key, a value and a label. The key is a short and simple series of words with no spaces that Nova uses to reference the setting from the database. The value is the value of the setting. The label is the label that will be printed next to the setting on the Site Settings page as well as in the list of user-created settings. User-created settings can only use a simple form input field. Nova does not have the ability to set dropdown menus or radio buttons for user-created settings.</p>