<h1><?php echo $header;?></h1>

<p>A great deal of effort has gone in to Nova to make the database as fast and extensible as possible. Because of that, admins will notice the Nova database is significantly larger than SMS. Nova currently uses <dfn class="tables"></dfn> tables with <var class="fields"></var> fields to power the system. Below is an index of all the tables and all their fields along with simple descriptions.</p>

<h3>Notes</h3>

<p>For enumerated fields, the first value is the default value of the field.</p>

<h2>nova_access_groups</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">group_id</td>
			<td class="td col2">INT(6)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">group_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the group</td>
		</tr>
		<tr>
			<td class="td col1">group_order</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">The numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_access_pages</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">page_id</td>
			<td class="td col2">INT(6)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">page_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the page</td>
		</tr>
		<tr>
			<td class="td col1">page_url</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The basic URL of the page (controller/method)</td>
		</tr>
		<tr>
			<td class="td col1">page_level</td>
			<td class="td col2">VARCHAR(3)</td>
			<td class="td col4">The level of access for the specific page (pages with different levels need separate entries for each level)</td>
		</tr>
		<tr>
			<td class="td col1">page_group</td>
			<td class="td col2">INT(6)</td>
			<td class="td col4">The group ID the page belongs to; correlates to <dfn>nova_access_groups</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_access_roles</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">role_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">role_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the role</td>
		</tr>
		<tr>
			<td class="td col1">role_access</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated string of page IDs; correlates to <dfn>nova_access_pages</dfn></td>
		</tr>
		<tr>
			<td class="td col1">role_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A short description of what the role is and who should have it</td>
		</tr>
	</tbody>
</table>

<h2>nova_applications</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">app_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">app_email</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The email address of the applicant</td>
		</tr>
		<tr>
			<td class="td col1">app_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The ID for the user record</td>
		</tr>
		<tr>
			<td class="td col1">app_user_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the user</td>
		</tr>
		<tr>
			<td class="td col1">app_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The ID for the character record</td>
		</tr>
		<tr>
			<td class="td col1">app_character_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the character</td>
		</tr>
		<tr>
			<td class="td col1">app_position</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the position the user applied for</td>
		</tr>
		<tr>
			<td class="td col1">app_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the user applied</td>
		</tr>
		<tr>
			<td class="td col1">app_action</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The action taken on the application</td>
		</tr>
		<tr>
			<td class="td col1">app_message</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The email message sent out for acceptances and rejections</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">award_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">award_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the award</td>
		</tr>
		<tr>
			<td class="td col1">award_image</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the award image file</td>
		</tr>
		<tr>
			<td class="td col1">award_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">award_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A description of the award</td>
		</tr>
		<tr>
			<td class="td col1">award_cat</td>
			<td class="td col2">ENUM(ic, ooc, both)</td>
			<td class="td col4">The category in which the award is found</td>
		</tr>
		<tr>
			<td class="td col1">award_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the award is displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards_queue</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">queue_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">queue_receive_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical user ID of the person receiving the award</td>
		</tr>
		<tr>
			<td class="td col1">queue_receive_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical character ID of the person receiving the award</td>
		</tr>
		<tr>
			<td class="td col1">queue_nominate</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical character ID of the person nominating for the award</td>
		</tr>
		<tr>
			<td class="td col1">queue_award</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical award ID of the award; correlates to <dfn>nova_awards</dfn></td>
		</tr>
		<tr>
			<td class="td col1">queue_reason</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The reason given for nominating the user/character</td>
		</tr>
		<tr>
			<td class="td col1">queue_status</td>
			<td class="td col2">ENUM(pending, accepted, rejected)</td>
			<td class="td col4">The status of the nomination</td>
		</tr>
		<tr>
			<td class="td col1">queue_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the award nomination was submitted</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards_received</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">awardrec_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">awardrec_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical user ID of the person who received the award</td>
		</tr>
		<tr>
			<td class="td col1">awardrec_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical character ID of the person who received the award</td>
		</tr>
		<tr>
			<td class="td col1">awardrec_nominated_by</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical character ID of the person who nominated for the award</td>
		</tr>
		<tr>
			<td class="td col1">awardrec_award</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical award ID of the award; correlates to <dfn>nova_awards</dfn></td>
		</tr>
		<tr>
			<td class="td col1">awardrec_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the award was given</td>
		</tr>
		<tr>
			<td class="td col1">awardrec_reason</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The reason given for nominating the user/character</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_ranks</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">rankcat_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the rank set</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_location</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The directory on the server where the rank set is located</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_preview</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The name of the preview rank image; default is preview.png</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_blank</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The name of the blank rank image; default is blank.png</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_extension</td>
			<td class="td col2">VARCHAR(5)</td>
			<td class="td col4">The image extension of the images used in the rank set; default is .png</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_status</td>
			<td class="td col2">ENUM(active, inactive, development)</td>
			<td class="td col4">The status of the rank set</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_credits</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">Credits for the rank set that will be displayed on the Site Credits page</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_url</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The URL of the site where the source rank images can be found</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_default</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether the rank set is the default or not</td>
		</tr>
		<tr>
			<td class="td col1">rankcat_genre</td>
			<td class="td col2">VARCHAR(10)</td>
			<td class="td col4">The genre the rank item belongs to</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_skins</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">skin_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">skin_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the skin</td>
		</tr>
		<tr>
			<td class="td col1">skin_location</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The directory on the server where the skin is located</td>
		</tr>
		<tr>
			<td class="td col1">skin_credits</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">Credits for the skin that will be displayed on the Site Credits page</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_skinsecs</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">skinsec_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">skinsec_section</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The section the skin is for</td>
		</tr>
		<tr>
			<td class="td col1">skinsec_skin</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The skin the skin section is a part of</td>
		</tr>
		<tr>
			<td class="td col1">skinsec_image_preview</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The name of the preview skin section image</td>
		</tr>
		<tr>
			<td class="td col1">skinsec_status</td>
			<td class="td col2">ENUM(active, inactive, development)</td>
			<td class="td col4">The status of the skin section</td>
		</tr>
		<tr>
			<td class="td col1">skinsec_default</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether the skin section is the section default or not</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">charid</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user controlling the character</td>
		</tr>
		<tr>
			<td class="td col1">first_name</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The first name of the character</td>
		</tr>
		<tr>
			<td class="td col1">middle_name</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The middle name of the character</td>
		</tr>
		<tr>
			<td class="td col1">last_name</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The last name of the character</td>
		</tr>
		<tr>
			<td class="td col1">crew_type</td>
			<td class="td col2">ENUM(active, inactive, pending, npc)</td>
			<td class="td col4">What type of character it is</td>
		</tr>
		<tr>
			<td class="td col1">date_activate</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date the character was activated on</td>
		</tr>
		<tr>
			<td class="td col1">date_deactivate</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date the character was deactivated on</td>
		</tr>
		<tr>
			<td class="td col1">images</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated list of images of the character</td>
		</tr>
		<tr>
			<td class="td col1">rank</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the character's rank</td>
		</tr>
		<tr>
			<td class="td col1">position_1</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the character's first position</td>
		</tr>
		<tr>
			<td class="td col1">position_2</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the character's second position</td>
		</tr>
		<tr>
			<td class="td col1">last_post</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date of the character's last post</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_data</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">data_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">data_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the data is being stored for; correlates to <dfn>nova_characters_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_char</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character the data is being stored for; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user the data is being stored for; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The data being stored</td>
		</tr>
		<tr>
			<td class="td col1">data_updated</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_fields</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">field_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">field_type</td>
			<td class="td col2">ENUM(text, select, textarea)</td>
			<td class="td col4">The type of field</td>
		</tr>
		<tr>
			<td class="td col1">field_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_fid</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_class</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_label_page</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td class="td col1">field_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td class="td col1">field_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not to display the field</td>
		</tr>
		<tr>
			<td class="td col1">field_rows</td>
			<td class="td col2">INT(3)</td>
			<td class="td col4">The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td class="td col1">field_section</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the section the field is part of; correlates to <dfn>nova_characters_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_promotions</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">prom_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">prom_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">prom_char</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">prom_old_order</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The order field of the character's previous rank</td>
		</tr>
		<tr>
			<td class="td col1">prom_old_rank</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The previous rank the character held</td>
		</tr>
		<tr>
			<td class="td col1">prom_new_order</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The order field of the character's new rank</td>
		</tr>
		<tr>
			<td class="td col1">prom_new_rank</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The new rank the character holds</td>
		</tr>
		<tr>
			<td class="td col1">prom_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date when the character's rank was changed</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_sections</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">section_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">section_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the bio section</td>
		</tr>
		<tr>
			<td class="td col1">section_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">section_tab</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical ID of the bio tab the section is part of; correlates to <dfn>nova_characters_tabs</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_tabs</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">tab_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">tab_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">tab_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the tab</td>
		</tr>
		<tr>
			<td class="td col1">tab_link_id</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The ID used by the tabs to create the tab container</td>
		</tr>
		<tr>
			<td class="td col1">tab_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the tab should be displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_values</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">value_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">value_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the values are for; correlates to <dfn>nova_characters_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">value_field_value</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_selected</td>
			<td class="td col2">VARCHAR(10)</td>
			<td class="td col4">The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the value item</td>
		</tr>
		<tr>
			<td class="td col1">value_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_coc</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">coc_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">coc_crew</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character in the COC slot; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">coc_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_departments_<kbd>{genre}</kbd></h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">dept_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">dept_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the department</td>
		</tr>
		<tr>
			<td class="td col1">dept_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the department</td>
		</tr>
		<tr>
			<td class="td col1">dept_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">dept_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the department should be displayed</td>
		</tr>
		<tr>
			<td class="td col1">dept_type</td>
			<td class="td col2">ENUM(playing, nonplaying)</td>
			<td class="td col4">What kind of department it is</td>
		</tr>
		<tr>
			<td class="td col1">dept_parent</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the parent department</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">docking_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">docking_sim_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the sim</td>
		</tr>
		<tr>
			<td class="td col1">docking_sim_url</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The URL of the sim</td>
		</tr>
		<tr>
			<td class="td col1">docking_gm_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the sim's game master</td>
		</tr>
		<tr>
			<td class="td col1">docking_gm_email</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The email address of the sim's game master</td>
		</tr>
		<tr>
			<td class="td col1">docking_status</td>
			<td class="td col2">ENUM(active, inactive, pending)</td>
			<td class="td col4">The status of the docked item</td>
		</tr>
		<tr>
			<td class="td col1">docking_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date the request was submitted</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_data</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">data_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">data_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the data is being stored for; correlates to <dfn>nova_docking_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_docking_item</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the item the data is being stored for; correlates to <dfn>nova_docking</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The data being stored</td>
		</tr>
		<tr>
			<td class="td col1">data_updated</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_fields</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">field_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">field_type</td>
			<td class="td col2">ENUM(text, select, textarea)</td>
			<td class="td col4">The type of field</td>
		</tr>
		<tr>
			<td class="td col1">field_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_fid</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_class</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_label_page</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td class="td col1">field_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td class="td col1">field_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not to display the field</td>
		</tr>
		<tr>
			<td class="td col1">field_rows</td>
			<td class="td col2">INT(3)</td>
			<td class="td col4">The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td class="td col1">field_section</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the section the field is part of; correlates to <dfn>nova_docking_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_sections</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">section_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">section_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the docking section</td>
		</tr>
		<tr>
			<td class="td col1">section_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_values</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">value_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">value_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the values are for; correlates to <dfn>nova_docking_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">value_field_value</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_selected</td>
			<td class="td col2">VARCHAR(10)</td>
			<td class="td col4">The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the value item</td>
		</tr>
		<tr>
			<td class="td col1">value_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_login_attempts</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">login_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">login_ip</td>
			<td class="td col2">VARCHAR(16)</td>
			<td class="td col4">The IP address of the person attempting to login</td>
		</tr>
		<tr>
			<td class="td col1">login_email</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The email address of the person attempting to login</td>
		</tr>
		<tr>
			<td class="td col1">login_time</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the exact time someone attempted to login</td>
		</tr>
	</tbody>
</table>

<h2>nova_menu_categories</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">menucat_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">menucat_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">menucat_menu_cat</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">The menu category associated with the record</td>
		</tr>
		<tr>
			<td class="td col1">menucat_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the menu category</td>
		</tr>
		<tr>
			<td class="td col1">menucat_type</td>
			<td class="td col2">ENUM(sub, adminsub)</td>
			<td class="td col4">The type of the menu category</td>
		</tr>
	</tbody>
</table>

<h2>nova_menu_items</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">menu_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">menu_name</td>
			<td class="td col2">VARCHAR(150)</td>
			<td class="td col4">The name of the menu item</td>
		</tr>
		<tr>
			<td class="td col1">menu_group</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">The group the menu item is a part of</td>
		</tr>
		<tr>
			<td class="td col1">menu_order</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">A numerical sort order associated with the menu item's group</td>
		</tr>
		<tr>
			<td class="td col1">menu_link</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The URL for the menu item</td>
		</tr>
		<tr>
			<td class="td col1">menu_link_type</td>
			<td class="td col2">ENUM(onsite, offsite)</td>
			<td class="td col4">Whether a link points to an onsite page or an offsite page</td>
		</tr>
		<tr>
			<td class="td col1">menu_need_login</td>
			<td class="td col2">ENUM(none, y, n)</td>
			<td class="td col4">Whether or not a menu item requires a user to be logged in to see it</td>
		</tr>
		<tr>
			<td class="td col1">menu_use_access</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a menu item uses access control</td>
		</tr>
		<tr>
			<td class="td col1">menu_access</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The access URL required to view the link</td>
		</tr>
		<tr>
			<td class="td col1">menu_access_level</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">The access level required to view the link</td>
		</tr>
		<tr>
			<td class="td col1">menu_type</td>
			<td class="td col2">ENUM(main, sub, adminsub)</td>
			<td class="td col4">The type of menu item</td>
		</tr>
		<tr>
			<td class="td col1">menu_cat</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">The category a menu items belongs to</td>
		</tr>
		<tr>
			<td class="td col1">menu_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not a menu item is displayed</td>
		</tr>
		<tr>
			<td class="td col1">menu_sim_type</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical ID of the sim type; correlates to <dfn>nova_sim_type</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_messages</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">message_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">message_key</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">An alphanumeric key used to identify the message</td>
		</tr>
		<tr>
			<td class="td col1">message_label</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The label used on the page for identifying the message</td>
		</tr>
		<tr>
			<td class="td col1">message_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the message</td>
		</tr>
		<tr>
			<td class="td col1">message_type</td>
			<td class="td col2">ENUM(title, message, other)</td>
			<td class="td col4">The type of message</td>
		</tr>
		<tr>
			<td class="td col1">message_protected</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a message is protected from being deleted</td>
		</tr>
	</tbody>
</table>

<h2>nova_mission_groups</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">misgroup_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">misgroup_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the mission group</td>
		</tr>
		<tr>
			<td class="td col1">misgroup_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">misgroup_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the mission group</td>
		</tr>
	</tbody>
</table>

<h2>nova_missions</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">mission_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">mission_title</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The title of the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_images</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated list of images for the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">mission_group</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical group ID</td>
		</tr>
		<tr>
			<td class="td col1">mission_status</td>
			<td class="td col2">ENUM(upcoming, current, completed)</td>
			<td class="td col4">The status of the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_start</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the mission started</td>
		</tr>
		<tr>
			<td class="td col1">mission_end</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the mission ended</td>
		</tr>
		<tr>
			<td class="td col1">mission_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_summary</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The full summary of the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_notes</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">Notes for the mission</td>
		</tr>
		<tr>
			<td class="td col1">mission_notes_updated</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the mission notes were last updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_news</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">news_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">news_title</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The title of the news item</td>
		</tr>
		<tr>
			<td class="td col1">news_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user posting the news item; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">news_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character posting the news item; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">news_cat</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical ID of the news category the news item is assigned to; correlates to <dfn>nova_news_categories</dfn></td>
		</tr>
		<tr>
			<td class="td col1">news_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the news item was posted</td>
		</tr>
		<tr>
			<td class="td col1">news_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the news item</td>
		</tr>
		<tr>
			<td class="td col1">news_status</td>
			<td class="td col2">ENUM(activated, saved, pending)</td>
			<td class="td col4">The status of the news item</td>
		</tr>
		<tr>
			<td class="td col1">news_private</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not the news item is private</td>
		</tr>
		<tr>
			<td class="td col1">news_tags</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The tags assocated with the news item</td>
		</tr>
		<tr>
			<td class="td col1">news_last_update</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the news item was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_news_categories</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">newscat_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">newscat_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the news category</td>
		</tr>
		<tr>
			<td class="td col1">newscat_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not a news category is displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_news_comments</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">ncomment_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">ncomment_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">ncomment_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">ncomment_news</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the news item being commented on; correlates to <dfn>nova_news</dfn></td>
		</tr>
		<tr>
			<td class="td col1">ncomment_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the comment</td>
		</tr>
		<tr>
			<td class="td col1">ncomment_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td class="td col1">ncomment_status</td>
			<td class="td col2">ENUM(activated, pending)</td>
			<td class="td col4">The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_personallogs</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">log_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">log_title</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The title of the personal log</td>
		</tr>
		<tr>
			<td class="td col1">log_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user posting the personal log; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">log_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character posting the personal log; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">log_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the personal log</td>
		</tr>
		<tr>
			<td class="td col1">log_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the personal log was posted</td>
		</tr>
		<tr>
			<td class="td col1">log_tags</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The tags associated with the personal log</td>
		</tr>
		<tr>
			<td class="td col1">log_last_update</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the personal log was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_personallogs_comments</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">lcomment_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">lcomment_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">lcomment_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">lcomment_log</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the personal log being commented on; correlates to <dfn>nova_personallogs</dfn></td>
		</tr>
		<tr>
			<td class="td col1">lcomment_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the comment</td>
		</tr>
		<tr>
			<td class="td col1">lcomment_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td class="td col1">lcomment_status</td>
			<td class="td col2">ENUM(activated, pending)</td>
			<td class="td col4">The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_positions_<kbd>{genre}</kbd></h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">pos_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">pos_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the position</td>
		</tr>
		<tr>
			<td class="td col1">pos_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the position</td>
		</tr>
		<tr>
			<td class="td col1">pos_dept</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the department the position is part of; correlates to <dfn>nova_departments_{genre}</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pos_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">pos_open</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The number of open slots for the position</td>
		</tr>
		<tr>
			<td class="td col1">pos_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not a position is displayed</td>
		</tr>
		<tr>
			<td class="td col1">pos_type</td>
			<td class="td col2">ENUM(officer, senior, enlisted, other)</td>
			<td class="td col4">The type of the position</td>
		</tr>
	</tbody>
</table>

<h2>nova_posts</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">post_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">post_title</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The title of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_location</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The location of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_timeline</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The timeline of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the mission post was posted</td>
		</tr>
		<tr>
			<td class="td col1">post_authors</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated string of character IDs of the authors of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_authors_users</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated string of user IDs of the authors of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_mission</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the mission the post is part of; correlates to <dfn>nova_missions</dfn></td>
		</tr>
		<tr>
			<td class="td col1">post_saved</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who last saved the post; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">post_status</td>
			<td class="td col2">ENUM(activated, saved, pending)</td>
			<td class="td col4">The status of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_tags</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The tags associated with the mission post</td>
		</tr>
		<tr>
			<td class="td col1">post_last_update</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the mission post was last updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_posts_comments</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">pcomment_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">pcomment_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pcomment_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pcomment_post</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the mission post being commented on; correlates to <dfn>nova_posts</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pcomment_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the comment</td>
		</tr>
		<tr>
			<td class="td col1">pcomment_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td class="td col1">pcomment_status</td>
			<td class="td col2">ENUM(activated, pending)</td>
			<td class="td col4">The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_privmsgs</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">privmsgs_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date when the private message was sent</td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_subject</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The subject of the private message</td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the private message</td>
		</tr>
		<tr>
			<td class="td col1">privmsgs_author_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the private message appears in the author's outbox</td>
		</tr>
	</tbody>
</table>

<h2>nova_privmsgs_to</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">pmto_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">pmto_message</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">The numerical ID of the private message; correlates to <dfn>nova_privmsgs</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pmto_recipient_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who received the private message; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pmto_recipient_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character who received the private message; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">pmto_unread</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether the recipient has read the private message or not</td>
		</tr>
		<tr>
			<td class="td col1">pmto_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether the message should appear in the recipient's inbox</td>
		</tr>
	</tbody>
</table>

<h2>nova_ranks_<kbd>{genre}</kbd></h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">rank_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">rank_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the rank</td>
		</tr>
		<tr>
			<td class="td col1">rank_short_name</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">The short name of the rank</td>
		</tr>
		<tr>
			<td class="td col1">rank_image</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the image file of the rank</td>
		</tr>
		<tr>
			<td class="td col1">rank_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">rank_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the rank is displayed</td>
		</tr>
		<tr>
			<td class="td col1">rank_class</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The class of the rank that helps order and group the ranks together appropriately</td>
		</tr>
	</tbody>
</table>

<h2>nova_security_questions</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">question_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">question_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the security question</td>
		</tr>
	</tbody>
</table>

<h2>nova_sessions</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">session_id</td>
			<td class="td col2">VARCHAR(40)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">ip_address</td>
			<td class="td col2">VARCHAR(16)</td>
			<td class="td col4">The IP address of the user</td>
		</tr>
		<tr>
			<td class="td col1">user_agent</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The user agent of the user</td>
		</tr>
		<tr>
			<td class="td col1">last_activity</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last activity of the user</td>
		</tr>
		<tr>
			<td class="td col1">user_data</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">Any and all data stored in the session for the user</td>
		</tr>
	</tbody>
</table>

<h2>nova_settings</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">setting_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">setting_key</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">An alphanumeric key used to identify the setting item</td>
		</tr>
		<tr>
			<td class="td col1">setting_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value of the setting</td>
		</tr>
		<tr>
			<td class="td col1">setting_label</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The label for the setting item</td>
		</tr>
		<tr>
			<td class="td col1">setting_user_created</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not a setting item was created by the user</td>
		</tr>
	</tbody>
</table>

<h2>nova_sim_type</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">simtype_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">simtype_name</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The name of the sim type</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_data</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">data_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">data_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the data is being stored for; correlates to <dfn>nova_specs_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The data being stored</td>
		</tr>
		<tr>
			<td class="td col1">data_updated</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_fields</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">field_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">field_type</td>
			<td class="td col2">ENUM(text, select, textarea)</td>
			<td class="td col4">The type of field</td>
		</tr>
		<tr>
			<td class="td col1">field_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_fid</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_class</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_label_page</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td class="td col1">field_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_selected</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">The value that'll be inserted into the field's SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td class="td col1">field_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not to display the field</td>
		</tr>
		<tr>
			<td class="td col1">field_rows</td>
			<td class="td col2">INT(3)</td>
			<td class="td col4">The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td class="td col1">field_section</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the section the field is part of; correlates to <dfn>nova_specs_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_sections</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">section_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">section_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the bio section</td>
		</tr>
		<tr>
			<td class="td col1">section_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_values</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">value_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">value_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the values are for; correlates to <dfn>nova_specs_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">value_type</td>
			<td class="td col2">ENUM(option)</td>
			<td class="td col4">The type of field the value is</td>
		</tr>
		<tr>
			<td class="td col1">value_field_value</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_selected</td>
			<td class="td col2">VARCHAR(10)</td>
			<td class="td col4">The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the value item</td>
		</tr>
		<tr>
			<td class="td col1">value_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_components</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">comp_id</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">comp_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the component</td>
		</tr>
		<tr>
			<td class="td col1">comp_version</td>
			<td class="td col2">VARCHAR(25)</td>
			<td class="td col4">The version of the component</td>
		</tr>
		<tr>
			<td class="td col1">comp_url</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The URL where the source component can be found</td>
		</tr>
		<tr>
			<td class="td col1">comp_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the component</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_info</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">sys_id</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">sys_uid</td>
			<td class="td col2">VARCHAR(32)</td>
			<td class="td col4">An alphanumeric unique identifier for the RPG</td>
		</tr>
		<tr>
			<td class="td col1">sys_install_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date the system was installed (or upgraded)</td>
		</tr>
		<tr>
			<td class="td col1">sys_last_update</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date the system was last updated (does not include install)</td>
		</tr>
		<tr>
			<td class="td col1">sys_version_major</td>
			<td class="td col2">INT(1)</td>
			<td class="td col4">The major version number of the currently installed version</td>
		</tr>
		<tr>
			<td class="td col1">sys_version_minor</td>
			<td class="td col2">INT(2)</td>
			<td class="td col4">The minor version number of the currently installed version</td>
		</tr>
		<tr>
			<td class="td col1">sys_version_update</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">The update version number of the currently installed version</td>
		</tr>
		<tr>
			<td class="td col1">sys_version_ignore</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">A version to ignore for checking for updates</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_versions</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">version_id</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">version</td>
			<td class="td col2">VARCHAR(25)</td>
			<td class="td col4">A full string with the version designation</td>
		</tr>
		<tr>
			<td class="td col1">version_major</td>
			<td class="td col2">INT(1)</td>
			<td class="td col4">The major version number</td>
		</tr>
		<tr>
			<td class="td col1">version_minor</td>
			<td class="td col2">INT(2)</td>
			<td class="td col4">The minor version number</td>
		</tr>
		<tr>
			<td class="td col1">version_update</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">The update version number </td>
		</tr>
		<tr>
			<td class="td col1">version_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the version was released</td>
		</tr>
		<tr>
			<td class="td col1">version_launch</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The launch text with a brief description of the changes in the version</td>
		</tr>
		<tr>
			<td class="td col1">version_changes</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The complete list of changes in the version</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">tour_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">tour_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the tour item</td>
		</tr>
		<tr>
			<td class="td col1">tour_order</td>
			<td class="td col2">INT(4)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">tour_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not the tour item is displayed</td>
		</tr>
		<tr>
			<td class="td col1">tour_images</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated list of images of the tour item</td>
		</tr>
		<tr>
			<td class="td col1">tour_summary</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The summary of the tour item</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_data</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">data_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">data_tour_item</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical ID of the tour item the data is being stored for; correlates to <dfn>nova_tour</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the data is being stored for; correlates to <dfn>nova_tour_fields</dfn></td>
		</tr>
		<tr>
			<td class="td col1">data_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The data being stored</td>
		</tr>
		<tr>
			<td class="td col1">data_updated</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_decks</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">deck_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">deck_name</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The name of the deck</td>
		</tr>
		<tr>
			<td class="td col1">deck_order</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
		<tr>
			<td class="td col1">deck_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The contents of the deck</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_fields</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">field_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">field_type</td>
			<td class="td col2">ENUM(text, select, textarea)</td>
			<td class="td col4">The type of field</td>
		</tr>
		<tr>
			<td class="td col1">field_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_fid</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_class</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_label_page</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td class="td col1">field_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_selected</td>
			<td class="td col2">VARCHAR(20)</td>
			<td class="td col4">The value that'll be inserted into the field's SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">field_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td class="td col1">field_display</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not to display the field</td>
		</tr>
		<tr>
			<td class="td col1">field_rows</td>
			<td class="td col2">INT(3)</td>
			<td class="td col4">The number of rows in a textarea field; default is 5</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_values</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">value_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">value_field</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numerical ID of the field the values are for; correlates to <dfn>nova_tour_fields</dfn></td>
		</tr><tr>
			<td class="td col1">value_field_value</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_selected</td>
			<td class="td col2">VARCHAR(10)</td>
			<td class="td col4">The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td class="td col1">value_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the value item</td>
		</tr>
		<tr>
			<td class="td col1">value_order</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_uploads</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">upload_id</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">upload_filename</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The filename of the uploaded item</td>
		</tr>
		<tr>
			<td class="td col1">upload_mime_type</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The MIME type of the uploaded item</td>
		</tr>
		<tr>
			<td class="td col1">upload_resource_type</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The type of uploaded item it is</td>
		</tr>
		<tr>
			<td class="td col1">upload_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user who uploaded the item; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">upload_ip</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The IP address of the user uploading</td>
		</tr>
		<tr>
			<td class="td col1">upload_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the date when the item was uploaded</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_loa</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">loa_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">loa_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">loa_start_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when a user's LOA began</td>
		</tr>
		<tr>
			<td class="td col1">loa_end_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when a user's LOA ended</td>
		</tr>
		<tr>
			<td class="td col1">loa_duration</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">How long the user specified their LOA would last</td>
		</tr>
		<tr>
			<td class="td col1">loa_reason</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The reason the user gave for the LOA</td>
		</tr>
		<tr>
			<td class="td col1">loa_type</td>
			<td class="td col2">ENUM(loa, active, eloa)</td>
			<td class="td col4">The current status of the LOA request</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_prefs</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">pref_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">pref_key</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">An alphanumeric key for identifying the preference</td>
		</tr>
		<tr>
			<td class="td col1">pref_label</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The label for the preference</td>
		</tr>
		<tr>
			<td class="td col1">pref_default</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The default value for the preference</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_prefs_values</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">prefvalue_id</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">prefvalue_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td class="td col1">prefvalue_key</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The preference key; correlates to <dfn>nova_user_prefs</dfn></td>
		</tr>
		<tr>
			<td class="td col1">prefvalue_value</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The value of the preference</td>
		</tr>
	</tbody>
</table>

<h2>nova_users</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">userid</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">status</td>
			<td class="td col2">ENUM(active, inactive, pending)</td>
			<td class="td col4">The status of the user</td>
		</tr>
		<tr>
			<td class="td col1">name</td>
			<td class="td col2">VARCHAR(150)</td>
			<td class="td col4">The name of the user</td>
		</tr>
		<tr>
			<td class="td col1">email</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The email of the user</td>
		</tr>
		<tr>
			<td class="td col1">password</td>
			<td class="td col2">VARCHAR(40)</td>
			<td class="td col4">The user's password as an SHA1 hash</td>
		</tr>
		<tr>
			<td class="td col1">date_of_birth</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The user's date of birth</td>
		</tr>
		<tr>
			<td class="td col1">instant_message</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The instant message handles of the user</td>
		</tr>
		<tr>
			<td class="td col1">main_char</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numerical ID of the character that is the user's main character; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td class="td col1">access_role</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical ID of the access role the user is assigned; correlates to <dfn>nova_access_roles</dfn></td>
		</tr>
		<tr>
			<td class="td col1">is_sysadmin</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user is a system admin</td>
		</tr>
		<tr>
			<td class="td col1">is_game_master</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user is a game master</td>
		</tr>
		<tr>
			<td class="td col1">is_webmaster</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user is a webmaster</td>
		</tr>
		<tr>
			<td class="td col1">is_firstlaunch</td>
			<td class="td col2">ENUM(y, n)</td>
			<td class="td col4">Whether or not it is the first launch of Nova for a user (after install, after update)</td>
		</tr>
		<tr>
			<td class="td col1">timezone</td>
			<td class="td col2">VARCHAR(5)</td>
			<td class="td col4">The timezone code of the user</td>
		</tr>
		<tr>
			<td class="td col1">daylight_savings</td>
			<td class="td col2">VARCHAR(1)</td>
			<td class="td col4">Whether the user is observing daylight savings time</td>
		</tr>
		<tr>
			<td class="td col1">language</td>
			<td class="td col2">VARCHAR(50)</td>
			<td class="td col4">The language preference of the user</td>
		</tr>
		<tr>
			<td class="td col1">join_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the user joined</td>
		</tr>
		<tr>
			<td class="td col1">leave_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the user left the sim</td>
		</tr>
		<tr>
			<td class="td col1">last_post</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the user last posted</td>
		</tr>
		<tr>
			<td class="td col1">last_login</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the user last logged in</td>
		</tr>
		<tr>
			<td class="td col1">loa</td>
			<td class="td col2">ENUM(active, loa, eloa)</td>
			<td class="td col4">The LOA status of the user</td>
		</tr>
		<tr>
			<td class="td col1">display_rank</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The rank set preference of the user</td>
		</tr>
		<tr>
			<td class="td col1">skin_main</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The main section skin preference of the user</td>
		</tr>
		<tr>
			<td class="td col1">skin_wiki</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The wiki section skin preference of the user</td>
		</tr>
		<tr>
			<td class="td col1">skin_admin</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The admin section skin preference of the user</td>
		</tr>
		<tr>
			<td class="td col1">location</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The user's location for their user bio</td>
		</tr>
		<tr>
			<td class="td col1">bio</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The user's biography for their user bio</td>
		</tr>
		<tr>
			<td class="td col1">security_question</td>
			<td class="td col2">INT(5)</td>
			<td class="td col4">The numerical ID of the security question the user has chosen; correlates to <dfn>nova_security_questions</dfn></td>
		</tr>
		<tr>
			<td class="td col1">security_answer</td>
			<td class="td col2">VARCHAR(40)</td>
			<td class="td col4">The answer to the user's security question as an SHA1 hash</td>
		</tr>
		<tr>
			<td class="td col1">password_reset</td>
			<td class="td col2">INT(1)</td>
			<td class="td col4">A 0/1 (FALSE/TRUE) for whether a user is using a reset password</td>
		</tr>
		<tr>
			<td class="td col1">moderate_posts</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their mission post privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_logs</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their personal log privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_news</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their news item privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_post_comments</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their post comment privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_log_comments</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their log comment privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_news_comments</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their news comment privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">moderate_wiki_comments</td>
			<td class="td col2">ENUM(n, y)</td>
			<td class="td col4">Whether or not a user has their wiki comment privileges moderated</td>
		</tr>
		<tr>
			<td class="td col1">my_links</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated list of menu item IDs for a user's personalized links</td>
		</tr>
		<tr>
			<td class="td col1">last_update</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of the last time a user updated their information</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_categories</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">wikicat_id</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">wikicat_name</td>
			<td class="td col2">VARCHAR(100)</td>
			<td class="td col4">The name of the category</td>
		</tr>
		<tr>
			<td class="td col1">wikicat_desc</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The description of the category</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_comments</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">wcomment_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric user ID of the person leaving the comment</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric character ID of the main character of the person leaving the comment</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_page</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numeric page ID of the page the comment is being left for</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_date</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestampe of when the comment was left</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_content</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The content of the comment</td>
		</tr>
		<tr>
			<td class="td col1">wcomment_status</td>
			<td class="td col2">ENUM(activated, pending)</td>
			<td class="td col4">The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_drafts</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">draft_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">draft_id_old</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The old draft ID; this is only used when reverting to a previous draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_title</td>
			<td class="td col2">VARCHAR(255)</td>
			<td class="td col4">The title of the page draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_author_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric user ID of the person who authored the draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_author_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric character ID of the main character of the person who authored the draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_summary</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The summary of the draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_content</td>
			<td class="td col2">LONGTEXT</td>
			<td class="td col4">The content of the draft</td>
		</tr>
		<tr>
			<td class="td col1">draft_page</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numeric page ID of the page the draft is associated with</td>
		</tr>
		<tr>
			<td class="td col1">draft_created_at</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the draft was created</td>
		</tr>
		<tr>
			<td class="td col1">draft_categories</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">A comma-separated list of category IDs</td>
		</tr>
		<tr>
			<td class="td col1">draft_changed_comments</td>
			<td class="td col2">TEXT</td>
			<td class="td col4">The changes made to a draft</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_pages</h2>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<thead>
		<tr>
			<th>Field</th>
			<th>Field Information</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1">page_id</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td class="td col1">page_draft</td>
			<td class="td col2">INT(10)</td>
			<td class="td col4">The numeric ID of the current draft making up the page content</td>
		</tr>
		<tr>
			<td class="td col1">page_created_at</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the page was created</td>
		</tr>
		<tr>
			<td class="td col1">page_created_by_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric user ID of the person who created the page</td>
		</tr>
		<tr>
			<td class="td col1">page_created_by_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric character ID of the main character of the person who created the page</td>
		</tr>
		<tr>
			<td class="td col1">page_updated_at</td>
			<td class="td col2">BIGINT(20)</td>
			<td class="td col4">A UNIX timestamp of when the page was last updated</td>
		</tr>
		<tr>
			<td class="td col1">page_updated_by_user</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric user ID of the person who last updated the page</td>
		</tr>
		<tr>
			<td class="td col1">page_updated_by_character</td>
			<td class="td col2">INT(8)</td>
			<td class="td col4">The numeric character ID of the main character of the person who last updated the page</td>
		</tr>
		<tr>
			<td class="td col1">page_comments</td>
			<td class="td col2">ENUM(open,closed)</td>
			<td class="td col4">Whether or not comments are opened/closed on a page</td>
		</tr>
	</tbody>
</table>