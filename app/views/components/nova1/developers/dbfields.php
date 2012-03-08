<script type="text/javascript">
	$(document).ready(function(){
		var tables = $('h2').length;
		var fields = $('table tbody tr').length;
		
		$('dfn.tables').html(tables);
		$('var.fields').html(fields);
	});
</script>
<h1>Database Field Index</h1>

<p>A great deal of effort has gone in to Nova to make the database as fast and extensible as possible. Because of that, admins will notice the Nova database is significantly larger than SMS. Nova currently uses <dfn class="tables"></dfn> tables with <var class="fields"></var> fields to power the system. Below is an index of all the tables and all their fields along with simple descriptions.</p>

<h3>Notes</h3>

<p>For enumerated fields, the first value is the default value of the field.</p>

<h2>nova_access_groups</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>group_id</td>
			<td>INT(6)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>group_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the group</td>
		</tr>
		<tr>
			<td>group_order</td>
			<td>INT(4)</td>
			<td>The numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_access_pages</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>page_id</td>
			<td>INT(6)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>page_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the page</td>
		</tr>
		<tr>
			<td>page_url</td>
			<td>VARCHAR(255)</td>
			<td>The basic URL of the page (controller/method)</td>
		</tr>
		<tr>
			<td>page_level</td>
			<td>VARCHAR(3)</td>
			<td>The level of access for the specific page (pages with different levels need separate entries for each level)</td>
		</tr>
		<tr>
			<td>page_group</td>
			<td>INT(6)</td>
			<td>The group ID the page belongs to; correlates to <dfn>nova_access_groups</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_access_roles</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>role_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>role_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the role</td>
		</tr>
		<tr>
			<td>role_access</td>
			<td>TEXT</td>
			<td>A comma-separated string of page IDs; correlates to <dfn>nova_access_pages</dfn></td>
		</tr>
		<tr>
			<td>role_desc</td>
			<td>TEXT</td>
			<td>A short description of what the role is and who should have it</td>
		</tr>
	</tbody>
</table>

<h2>nova_applications</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>app_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>app_email</td>
			<td>VARCHAR(255)</td>
			<td>The email address of the applicant</td>
		</tr>
		<tr>
			<td>app_user</td>
			<td>INT(8)</td>
			<td>The ID for the user record</td>
		</tr>
		<tr>
			<td>app_user_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the user</td>
		</tr>
		<tr>
			<td>app_character</td>
			<td>INT(8)</td>
			<td>The ID for the character record</td>
		</tr>
		<tr>
			<td>app_character_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the character</td>
		</tr>
		<tr>
			<td>app_position</td>
			<td>VARCHAR(255)</td>
			<td>The name of the position the user applied for</td>
		</tr>
		<tr>
			<td>app_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the user applied</td>
		</tr>
		<tr>
			<td>app_action</td>
			<td>VARCHAR(100)</td>
			<td>The action taken on the application</td>
		</tr>
		<tr>
			<td>app_message</td>
			<td>TEXT</td>
			<td>The email message sent out for acceptances and rejections</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>award_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>award_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the award</td>
		</tr>
		<tr>
			<td>award_image</td>
			<td>VARCHAR(100)</td>
			<td>The name of the award image file</td>
		</tr>
		<tr>
			<td>award_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>award_desc</td>
			<td>TEXT</td>
			<td>A description of the award</td>
		</tr>
		<tr>
			<td>award_cat</td>
			<td>ENUM(ic, ooc, both)</td>
			<td>The category in which the award is found</td>
		</tr>
		<tr>
			<td>award_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the award is displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards_queue</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>queue_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>queue_receive_user</td>
			<td>INT(8)</td>
			<td>The numerical user ID of the person receiving the award</td>
		</tr>
		<tr>
			<td>queue_receive_character</td>
			<td>INT(8)</td>
			<td>The numerical character ID of the person receiving the award</td>
		</tr>
		<tr>
			<td>queue_nominate</td>
			<td>INT(8)</td>
			<td>The numerical character ID of the person nominating for the award</td>
		</tr>
		<tr>
			<td>queue_award</td>
			<td>INT(5)</td>
			<td>The numerical award ID of the award; correlates to <dfn>nova_awards</dfn></td>
		</tr>
		<tr>
			<td>queue_reason</td>
			<td>TEXT</td>
			<td>The reason given for nominating the user/character</td>
		</tr>
		<tr>
			<td>queue_status</td>
			<td>ENUM(pending, accepted, rejected)</td>
			<td>The status of the nomination</td>
		</tr>
		<tr>
			<td>queue_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the award nomination was submitted</td>
		</tr>
	</tbody>
</table>

<h2>nova_awards_received</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>awardrec_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>awardrec_user</td>
			<td>INT(8)</td>
			<td>The numerical user ID of the person who received the award</td>
		</tr>
		<tr>
			<td>awardrec_character</td>
			<td>INT(8)</td>
			<td>The numerical character ID of the person who received the award</td>
		</tr>
		<tr>
			<td>awardrec_nominated_by</td>
			<td>INT(8)</td>
			<td>The numerical character ID of the person who nominated for the award</td>
		</tr>
		<tr>
			<td>awardrec_award</td>
			<td>INT(5)</td>
			<td>The numerical award ID of the award; correlates to <dfn>nova_awards</dfn></td>
		</tr>
		<tr>
			<td>awardrec_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the award was given</td>
		</tr>
		<tr>
			<td>awardrec_reason</td>
			<td>TEXT</td>
			<td>The reason given for nominating the user/character</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_ranks</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>rankcat_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>rankcat_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the rank set</td>
		</tr>
		<tr>
			<td>rankcat_location</td>
			<td>VARCHAR(100)</td>
			<td>The directory on the server where the rank set is located</td>
		</tr>
		<tr>
			<td>rankcat_preview</td>
			<td>VARCHAR(50)</td>
			<td>The name of the preview rank image; default is preview.png</td>
		</tr>
		<tr>
			<td>rankcat_blank</td>
			<td>VARCHAR(50)</td>
			<td>The name of the blank rank image; default is blank.png</td>
		</tr>
		<tr>
			<td>rankcat_extension</td>
			<td>VARCHAR(5)</td>
			<td>The image extension of the images used in the rank set; default is .png</td>
		</tr>
		<tr>
			<td>rankcat_status</td>
			<td>ENUM(active, inactive, development)</td>
			<td>The status of the rank set</td>
		</tr>
		<tr>
			<td>rankcat_credits</td>
			<td>TEXT</td>
			<td>Credits for the rank set that will be displayed on the Site Credits page</td>
		</tr>
		<tr>
			<td>rankcat_url</td>
			<td>TEXT</td>
			<td>The URL of the site where the source rank images can be found</td>
		</tr>
		<tr>
			<td>rankcat_default</td>
			<td>ENUM(n, y)</td>
			<td>Whether the rank set is the default or not</td>
		</tr>
		<tr>
			<td>rankcat_genre</td>
			<td>VARCHAR(10)</td>
			<td>The genre the rank item belongs to</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_skins</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>skin_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>skin_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the skin</td>
		</tr>
		<tr>
			<td>skin_location</td>
			<td>VARCHAR(100)</td>
			<td>The directory on the server where the skin is located</td>
		</tr>
		<tr>
			<td>skin_credits</td>
			<td>TEXT</td>
			<td>Credits for the skin that will be displayed on the Site Credits page</td>
		</tr>
	</tbody>
</table>

<h2>nova_catalogue_skinsecs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>skinsec_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>skinsec_section</td>
			<td>VARCHAR(50)</td>
			<td>The section the skin is for</td>
		</tr>
		<tr>
			<td>skinsec_skin</td>
			<td>VARCHAR(100)</td>
			<td>The skin the skin section is a part of</td>
		</tr>
		<tr>
			<td>skinsec_image_preview</td>
			<td>VARCHAR(50)</td>
			<td>The name of the preview skin section image</td>
		</tr>
		<tr>
			<td>skinsec_status</td>
			<td>ENUM(active, inactive, development)</td>
			<td>The status of the skin section</td>
		</tr>
		<tr>
			<td>skinsec_default</td>
			<td>ENUM(n, y)</td>
			<td>Whether the skin section is the section default or not</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>charid</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user controlling the character</td>
		</tr>
		<tr>
			<td>first_name</td>
			<td>VARCHAR(50)</td>
			<td>The first name of the character</td>
		</tr>
		<tr>
			<td>middle_name</td>
			<td>VARCHAR(50)</td>
			<td>The middle name of the character</td>
		</tr>
		<tr>
			<td>last_name</td>
			<td>VARCHAR(50)</td>
			<td>The last name of the character</td>
		</tr>
		<tr>
			<td>crew_type</td>
			<td>ENUM(active, inactive, pending, npc)</td>
			<td>What type of character it is</td>
		</tr>
		<tr>
			<td>date_activate</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date the character was activated on</td>
		</tr>
		<tr>
			<td>date_deactivate</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date the character was deactivated on</td>
		</tr>
		<tr>
			<td>images</td>
			<td>TEXT</td>
			<td>A comma-separated list of images of the character</td>
		</tr>
		<tr>
			<td>rank</td>
			<td>INT(10)</td>
			<td>The numerical ID of the character's rank</td>
		</tr>
		<tr>
			<td>position_1</td>
			<td>INT(10)</td>
			<td>The numerical ID of the character's first position</td>
		</tr>
		<tr>
			<td>position_2</td>
			<td>INT(10)</td>
			<td>The numerical ID of the character's second position</td>
		</tr>
		<tr>
			<td>last_post</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date of the character's last post</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_data</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>data_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the data is being stored for; correlates to <dfn>nova_characters_fields</dfn></td>
		</tr>
		<tr>
			<td>data_char</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character the data is being stored for; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>data_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user the data is being stored for; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>data_value</td>
			<td>TEXT</td>
			<td>The data being stored</td>
		</tr>
		<tr>
			<td>data_updated</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_fields</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>field_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>field_type</td>
			<td>ENUM(text, select, textarea)</td>
			<td>The type of field</td>
		</tr>
		<tr>
			<td>field_name</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td>field_fid</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td>field_class</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td>field_label_page</td>
			<td>TEXT</td>
			<td>The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td>field_value</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td>field_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td>field_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not to display the field</td>
		</tr>
		<tr>
			<td>field_rows</td>
			<td>INT(3)</td>
			<td>The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td>field_section</td>
			<td>INT(8)</td>
			<td>The numerical ID of the section the field is part of; correlates to <dfn>nova_characters_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_promotions</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>prom_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>prom_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>prom_char</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>prom_old_order</td>
			<td>INT(8)</td>
			<td>The order field of the character's previous rank</td>
		</tr>
		<tr>
			<td>prom_old_rank</td>
			<td>VARCHAR(100)</td>
			<td>The previous rank the character held</td>
		</tr>
		<tr>
			<td>prom_new_order</td>
			<td>INT(8)</td>
			<td>The order field of the character's new rank</td>
		</tr>
		<tr>
			<td>prom_new_rank</td>
			<td>VARCHAR(100)</td>
			<td>The new rank the character holds</td>
		</tr>
		<tr>
			<td>prom_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date when the character's rank was changed</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_sections</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>section_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>section_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the bio section</td>
		</tr>
		<tr>
			<td>section_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>section_tab</td>
			<td>INT(5)</td>
			<td>The numerical ID of the bio tab the section is part of; correlates to <dfn>nova_characters_tabs</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_tabs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>tab_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>tab_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>tab_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the tab</td>
		</tr>
		<tr>
			<td>tab_link_id</td>
			<td>VARCHAR(50)</td>
			<td>The ID used by the tabs to create the tab container</td>
		</tr>
		<tr>
			<td>tab_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the tab should be displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_characters_values</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>value_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>value_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the values are for; correlates to <dfn>nova_characters_fields</dfn></td>
		</tr>
		<tr>
			<td>value_field_value</td>
			<td>VARCHAR(255)</td>
			<td>The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td>value_selected</td>
			<td>VARCHAR(10)</td>
			<td>The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td>value_content</td>
			<td>TEXT</td>
			<td>The content of the value item</td>
		</tr>
		<tr>
			<td>value_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_coc</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>coc_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>coc_crew</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character in the COC slot; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>coc_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_departments_<kbd>{genre}</kbd></h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>dept_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>dept_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the department</td>
		</tr>
		<tr>
			<td>dept_desc</td>
			<td>TEXT</td>
			<td>The description of the department</td>
		</tr>
		<tr>
			<td>dept_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>dept_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the department should be displayed</td>
		</tr>
		<tr>
			<td>dept_type</td>
			<td>ENUM(playing, nonplaying)</td>
			<td>What kind of department it is</td>
		</tr>
		<tr>
			<td>dept_parent</td>
			<td>INT(10)</td>
			<td>The numerical ID of the parent department</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>docking_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>docking_sim_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the sim</td>
		</tr>
		<tr>
			<td>docking_sim_url</td>
			<td>TEXT</td>
			<td>The URL of the sim</td>
		</tr>
		<tr>
			<td>docking_gm_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the sim's game master</td>
		</tr>
		<tr>
			<td>docking_gm_email</td>
			<td>VARCHAR(255)</td>
			<td>The email address of the sim's game master</td>
		</tr>
		<tr>
			<td>docking_status</td>
			<td>ENUM(active, inactive, pending)</td>
			<td>The status of the docked item</td>
		</tr>
		<tr>
			<td>docking_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date the request was submitted</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_data</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>data_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the data is being stored for; correlates to <dfn>nova_docking_fields</dfn></td>
		</tr>
		<tr>
			<td>data_docking_item</td>
			<td>INT(8)</td>
			<td>The numerical ID of the item the data is being stored for; correlates to <dfn>nova_docking</dfn></td>
		</tr>
		<tr>
			<td>data_value</td>
			<td>TEXT</td>
			<td>The data being stored</td>
		</tr>
		<tr>
			<td>data_updated</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_fields</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>field_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>field_type</td>
			<td>ENUM(text, select, textarea)</td>
			<td>The type of field</td>
		</tr>
		<tr>
			<td>field_name</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td>field_fid</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td>field_class</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td>field_label_page</td>
			<td>TEXT</td>
			<td>The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td>field_value</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td>field_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td>field_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not to display the field</td>
		</tr>
		<tr>
			<td>field_rows</td>
			<td>INT(3)</td>
			<td>The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td>field_section</td>
			<td>INT(8)</td>
			<td>The numerical ID of the section the field is part of; correlates to <dfn>nova_docking_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_sections</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>section_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>section_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the docking section</td>
		</tr>
		<tr>
			<td>section_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_docking_values</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>value_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>value_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the values are for; correlates to <dfn>nova_docking_fields</dfn></td>
		</tr>
		<tr>
			<td>value_field_value</td>
			<td>VARCHAR(255)</td>
			<td>The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td>value_selected</td>
			<td>VARCHAR(10)</td>
			<td>The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td>value_content</td>
			<td>TEXT</td>
			<td>The content of the value item</td>
		</tr>
		<tr>
			<td>value_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_login_attempts</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>login_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>login_ip</td>
			<td>VARCHAR(16)</td>
			<td>The IP address of the person attempting to login</td>
		</tr>
		<tr>
			<td>login_email</td>
			<td>VARCHAR(100)</td>
			<td>The email address of the person attempting to login</td>
		</tr>
		<tr>
			<td>login_time</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the exact time someone attempted to login</td>
		</tr>
	</tbody>
</table>

<h2>nova_menu_categories</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>menucat_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>menucat_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>menucat_menu_cat</td>
			<td>VARCHAR(20)</td>
			<td>The menu category associated with the record</td>
		</tr>
		<tr>
			<td>menucat_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the menu category</td>
		</tr>
		<tr>
			<td>menucat_type</td>
			<td>ENUM(sub, adminsub)</td>
			<td>The type of the menu category</td>
		</tr>
	</tbody>
</table>

<h2>nova_menu_items</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>menu_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>menu_name</td>
			<td>VARCHAR(150)</td>
			<td>The name of the menu item</td>
		</tr>
		<tr>
			<td>menu_group</td>
			<td>INT(4)</td>
			<td>The group the menu item is a part of</td>
		</tr>
		<tr>
			<td>menu_order</td>
			<td>INT(4)</td>
			<td>A numerical sort order associated with the menu item's group</td>
		</tr>
		<tr>
			<td>menu_link</td>
			<td>TEXT</td>
			<td>The URL for the menu item</td>
		</tr>
		<tr>
			<td>menu_link_type</td>
			<td>ENUM(onsite, offsite)</td>
			<td>Whether a link points to an onsite page or an offsite page</td>
		</tr>
		<tr>
			<td>menu_need_login</td>
			<td>ENUM(none, y, n)</td>
			<td>Whether or not a menu item requires a user to be logged in to see it</td>
		</tr>
		<tr>
			<td>menu_use_access</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a menu item uses access control</td>
		</tr>
		<tr>
			<td>menu_access</td>
			<td>VARCHAR(255)</td>
			<td>The access URL required to view the link</td>
		</tr>
		<tr>
			<td>menu_access_level</td>
			<td>INT(4)</td>
			<td>The access level required to view the link</td>
		</tr>
		<tr>
			<td>menu_type</td>
			<td>ENUM(main, sub, adminsub)</td>
			<td>The type of menu item</td>
		</tr>
		<tr>
			<td>menu_cat</td>
			<td>VARCHAR(20)</td>
			<td>The category a menu items belongs to</td>
		</tr>
		<tr>
			<td>menu_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not a menu item is displayed</td>
		</tr>
		<tr>
			<td>menu_sim_type</td>
			<td>INT(5)</td>
			<td>A numerical ID of the sim type; correlates to <dfn>nova_sim_type</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_messages</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>message_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>message_key</td>
			<td>VARCHAR(255)</td>
			<td>An alphanumeric key used to identify the message</td>
		</tr>
		<tr>
			<td>message_label</td>
			<td>VARCHAR(255)</td>
			<td>The label used on the page for identifying the message</td>
		</tr>
		<tr>
			<td>message_content</td>
			<td>TEXT</td>
			<td>The content of the message</td>
		</tr>
		<tr>
			<td>message_type</td>
			<td>ENUM(title, message, other)</td>
			<td>The type of message</td>
		</tr>
		<tr>
			<td>message_protected</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a message is protected from being deleted</td>
		</tr>
	</tbody>
</table>

<h2>nova_mission_groups</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>misgroup_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>misgroup_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the mission group</td>
		</tr>
		<tr>
			<td>misgroup_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>misgroup_desc</td>
			<td>TEXT</td>
			<td>The description of the mission group</td>
		</tr>
	</tbody>
</table>

<h2>nova_missions</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>mission_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>mission_title</td>
			<td>VARCHAR(255)</td>
			<td>The title of the mission</td>
		</tr>
		<tr>
			<td>mission_images</td>
			<td>TEXT</td>
			<td>A comma-separated list of images for the mission</td>
		</tr>
		<tr>
			<td>mission_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>mission_group</td>
			<td>INT(5)</td>
			<td>A numerical group ID</td>
		</tr>
		<tr>
			<td>mission_status</td>
			<td>ENUM(upcoming, current, completed)</td>
			<td>The status of the mission</td>
		</tr>
		<tr>
			<td>mission_start</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the mission started</td>
		</tr>
		<tr>
			<td>mission_end</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the mission ended</td>
		</tr>
		<tr>
			<td>mission_desc</td>
			<td>TEXT</td>
			<td>The description of the mission</td>
		</tr>
		<tr>
			<td>mission_summary</td>
			<td>TEXT</td>
			<td>The full summary of the mission</td>
		</tr>
		<tr>
			<td>mission_notes</td>
			<td>TEXT</td>
			<td>Notes for the mission</td>
		</tr>
		<tr>
			<td>mission_notes_updated</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the mission notes were last updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_news</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>news_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>news_title</td>
			<td>VARCHAR(255)</td>
			<td>The title of the news item</td>
		</tr>
		<tr>
			<td>news_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user posting the news item; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>news_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character posting the news item; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>news_cat</td>
			<td>INT(5)</td>
			<td>The numerical ID of the news category the news item is assigned to; correlates to <dfn>nova_news_categories</dfn></td>
		</tr>
		<tr>
			<td>news_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the news item was posted</td>
		</tr>
		<tr>
			<td>news_content</td>
			<td>TEXT</td>
			<td>The content of the news item</td>
		</tr>
		<tr>
			<td>news_status</td>
			<td>ENUM(activated, saved, pending)</td>
			<td>The status of the news item</td>
		</tr>
		<tr>
			<td>news_private</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not the news item is private</td>
		</tr>
		<tr>
			<td>news_tags</td>
			<td>TEXT</td>
			<td>The tags assocated with the news item</td>
		</tr>
		<tr>
			<td>news_last_update</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the news item was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_news_categories</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>newscat_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>newscat_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the news category</td>
		</tr>
		<tr>
			<td>newscat_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not a news category is displayed</td>
		</tr>
	</tbody>
</table>

<h2>nova_news_comments</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ncomment_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>ncomment_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>ncomment_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>ncomment_news</td>
			<td>INT(8)</td>
			<td>The numerical ID of the news item being commented on; correlates to <dfn>nova_news</dfn></td>
		</tr>
		<tr>
			<td>ncomment_content</td>
			<td>TEXT</td>
			<td>The content of the comment</td>
		</tr>
		<tr>
			<td>ncomment_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td>ncomment_status</td>
			<td>ENUM(activated, pending)</td>
			<td>The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_personallogs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>log_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>log_title</td>
			<td>VARCHAR(255)</td>
			<td>The title of the personal log</td>
		</tr>
		<tr>
			<td>log_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user posting the personal log; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>log_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character posting the personal log; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>log_content</td>
			<td>TEXT</td>
			<td>The content of the personal log</td>
		</tr>
		<tr>
			<td>log_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the personal log was posted</td>
		</tr>
		<tr>
			<td>log_tags</td>
			<td>TEXT</td>
			<td>The tags associated with the personal log</td>
		</tr>
		<tr>
			<td>log_last_update</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the personal log was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_personallogs_comments</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>lcomment_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>lcomment_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>lcomment_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>lcomment_log</td>
			<td>INT(8)</td>
			<td>The numerical ID of the personal log being commented on; correlates to <dfn>nova_personallogs</dfn></td>
		</tr>
		<tr>
			<td>lcomment_content</td>
			<td>TEXT</td>
			<td>The content of the comment</td>
		</tr>
		<tr>
			<td>lcomment_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td>lcomment_status</td>
			<td>ENUM(activated, pending)</td>
			<td>The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_positions_<kbd>{genre}</kbd></h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>pos_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>pos_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the position</td>
		</tr>
		<tr>
			<td>pos_desc</td>
			<td>TEXT</td>
			<td>The description of the position</td>
		</tr>
		<tr>
			<td>pos_dept</td>
			<td>INT(10)</td>
			<td>The numerical ID of the department the position is part of; correlates to <dfn>nova_departments_{genre}</dfn></td>
		</tr>
		<tr>
			<td>pos_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>pos_open</td>
			<td>INT(5)</td>
			<td>The number of open slots for the position</td>
		</tr>
		<tr>
			<td>pos_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not a position is displayed</td>
		</tr>
		<tr>
			<td>pos_type</td>
			<td>ENUM(officer, senior, enlisted, other)</td>
			<td>The type of the position</td>
		</tr>
	</tbody>
</table>

<h2>nova_posts</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>post_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>post_title</td>
			<td>VARCHAR(255)</td>
			<td>The title of the mission post</td>
		</tr>
		<tr>
			<td>post_location</td>
			<td>VARCHAR(255)</td>
			<td>The location of the mission post</td>
		</tr>
		<tr>
			<td>post_timeline</td>
			<td>VARCHAR(255)</td>
			<td>The timeline of the mission post</td>
		</tr>
		<tr>
			<td>post_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the mission post was posted</td>
		</tr>
		<tr>
			<td>post_authors</td>
			<td>TEXT</td>
			<td>A comma-separated string of character IDs of the authors of the mission post</td>
		</tr>
		<tr>
			<td>post_authors_users</td>
			<td>TEXT</td>
			<td>A comma-separated string of user IDs of the authors of the mission post</td>
		</tr>
		<tr>
			<td>post_mission</td>
			<td>INT(8)</td>
			<td>The numerical ID of the mission the post is part of; correlates to <dfn>nova_missions</dfn></td>
		</tr>
		<tr>
			<td>post_saved</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who last saved the post; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>post_status</td>
			<td>ENUM(activated, saved, pending)</td>
			<td>The status of the mission post</td>
		</tr>
		<tr>
			<td>post_content</td>
			<td>TEXT</td>
			<td>The content of the mission post</td>
		</tr>
		<tr>
			<td>post_tags</td>
			<td>TEXT</td>
			<td>The tags associated with the mission post</td>
		</tr>
		<tr>
			<td>post_last_update</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the mission post was last updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_posts_comments</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>pcomment_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>pcomment_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>pcomment_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>pcomment_post</td>
			<td>INT(8)</td>
			<td>The numerical ID of the mission post being commented on; correlates to <dfn>nova_posts</dfn></td>
		</tr>
		<tr>
			<td>pcomment_content</td>
			<td>TEXT</td>
			<td>The content of the comment</td>
		</tr>
		<tr>
			<td>pcomment_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the comment was posted</td>
		</tr>
		<tr>
			<td>pcomment_status</td>
			<td>ENUM(activated, pending)</td>
			<td>The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_privmsgs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>privmsgs_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>privmsgs_author_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who posted the comment; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>privmsgs_author_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who posted the comment; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>privmsgs_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date when the private message was sent</td>
		</tr>
		<tr>
			<td>privmsgs_subject</td>
			<td>VARCHAR(255)</td>
			<td>The subject of the private message</td>
		</tr>
		<tr>
			<td>privmsgs_content</td>
			<td>TEXT</td>
			<td>The content of the private message</td>
		</tr>
		<tr>
			<td>privmsgs_author_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the private message appears in the author's outbox</td>
		</tr>
	</tbody>
</table>

<h2>nova_privmsgs_to</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>pmto_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>pmto_message</td>
			<td>BIGINT(20)</td>
			<td>The numerical ID of the private message; correlates to <dfn>nova_privmsgs</dfn></td>
		</tr>
		<tr>
			<td>pmto_recipient_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who received the private message; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>pmto_recipient_character</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character who received the private message; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>pmto_unread</td>
			<td>ENUM(y, n)</td>
			<td>Whether the recipient has read the private message or not</td>
		</tr>
		<tr>
			<td>pmto_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether the message should appear in the recipient's inbox</td>
		</tr>
	</tbody>
</table>

<h2>nova_ranks_<kbd>{genre}</kbd></h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>rank_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>rank_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the rank</td>
		</tr>
		<tr>
			<td>rank_short_name</td>
			<td>VARCHAR(20)</td>
			<td>The short name of the rank</td>
		</tr>
		<tr>
			<td>rank_image</td>
			<td>VARCHAR(100)</td>
			<td>The name of the image file of the rank</td>
		</tr>
		<tr>
			<td>rank_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>rank_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the rank is displayed</td>
		</tr>
		<tr>
			<td>rank_class</td>
			<td>INT(5)</td>
			<td>The class of the rank that helps order and group the ranks together appropriately</td>
		</tr>
	</tbody>
</table>

<h2>nova_security_questions</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>question_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>question_value</td>
			<td>TEXT</td>
			<td>The content of the security question</td>
		</tr>
	</tbody>
</table>

<h2>nova_sessions</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>session_id</td>
			<td>VARCHAR(40)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>ip_address</td>
			<td>VARCHAR(16)</td>
			<td>The IP address of the user</td>
		</tr>
		<tr>
			<td>user_agent</td>
			<td>VARCHAR(50)</td>
			<td>The user agent of the user</td>
		</tr>
		<tr>
			<td>last_activity</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last activity of the user</td>
		</tr>
		<tr>
			<td>user_data</td>
			<td>TEXT</td>
			<td>Any and all data stored in the session for the user</td>
		</tr>
	</tbody>
</table>

<h2>nova_settings</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>setting_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>setting_key</td>
			<td>VARCHAR(100)</td>
			<td>An alphanumeric key used to identify the setting item</td>
		</tr>
		<tr>
			<td>setting_value</td>
			<td>TEXT</td>
			<td>The value of the setting</td>
		</tr>
		<tr>
			<td>setting_label</td>
			<td>VARCHAR(255)</td>
			<td>The label for the setting item</td>
		</tr>
		<tr>
			<td>setting_user_created</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not a setting item was created by the user</td>
		</tr>
	</tbody>
</table>

<h2>nova_sim_type</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>simtype_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>simtype_name</td>
			<td>VARCHAR(50)</td>
			<td>The name of the sim type</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>specs_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>specs_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the specification item</td>
		</tr>
		<tr>
			<td>specs_order</td>
			<td>INT(5)</td>
			<td>The order of the specification item</td>
		</tr>
		<tr>
			<td>specs_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not to display the specification item</td>
		</tr>
		<tr>
			<td>specs_images</td>
			<td>TEXT</td>
			<td>The images of the specification item</td>
		</tr>
		<tr>
			<td>specs_summary</td>
			<td>TEXT</td>
			<td>The summary of the specification item</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_data</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>data_item</td>
			<td>INT(5)</td>
			<td>The numerical ID of the specification item the data is being stored for; correlates to <dfn>nova_specs</dfn></td>
		</tr>
		<tr>
			<td>data_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the data is being stored for; correlates to <dfn>nova_specs_fields</dfn></td>
		</tr>
		<tr>
			<td>data_value</td>
			<td>TEXT</td>
			<td>The data being stored</td>
		</tr>
		<tr>
			<td>data_updated</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_fields</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>field_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>field_type</td>
			<td>ENUM(text, select, textarea)</td>
			<td>The type of field</td>
		</tr>
		<tr>
			<td>field_name</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td>field_fid</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td>field_class</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td>field_label_page</td>
			<td>TEXT</td>
			<td>The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td>field_value</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td>field_selected</td>
			<td>VARCHAR(20)</td>
			<td>The value that'll be inserted into the field's SELECTED attribute</td>
		</tr>
		<tr>
			<td>field_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td>field_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not to display the field</td>
		</tr>
		<tr>
			<td>field_rows</td>
			<td>INT(3)</td>
			<td>The number of rows in a textarea field; default is 5</td>
		</tr>
		<tr>
			<td>field_section</td>
			<td>INT(8)</td>
			<td>The numerical ID of the section the field is part of; correlates to <dfn>nova_specs_sections</dfn></td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_sections</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>section_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>section_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the bio section</td>
		</tr>
		<tr>
			<td>section_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_specs_values</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>value_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>value_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the values are for; correlates to <dfn>nova_specs_fields</dfn></td>
		</tr>
		<tr>
			<td>value_type</td>
			<td>ENUM(option)</td>
			<td>The type of field the value is</td>
		</tr>
		<tr>
			<td>value_field_value</td>
			<td>VARCHAR(255)</td>
			<td>The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td>value_selected</td>
			<td>VARCHAR(10)</td>
			<td>The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td>value_content</td>
			<td>TEXT</td>
			<td>The content of the value item</td>
		</tr>
		<tr>
			<td>value_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_components</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>comp_id</td>
			<td>INT(4)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>comp_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the component</td>
		</tr>
		<tr>
			<td>comp_version</td>
			<td>VARCHAR(25)</td>
			<td>The version of the component</td>
		</tr>
		<tr>
			<td>comp_url</td>
			<td>VARCHAR(255)</td>
			<td>The URL where the source component can be found</td>
		</tr>
		<tr>
			<td>comp_desc</td>
			<td>TEXT</td>
			<td>The description of the component</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_info</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>sys_id</td>
			<td>INT(4)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>sys_uid</td>
			<td>VARCHAR(32)</td>
			<td>An alphanumeric unique identifier for the RPG</td>
		</tr>
		<tr>
			<td>sys_install_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date the system was installed (or upgraded)</td>
		</tr>
		<tr>
			<td>sys_last_update</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date the system was last updated (does not include install)</td>
		</tr>
		<tr>
			<td>sys_version_major</td>
			<td>INT(1)</td>
			<td>The major version number of the currently installed version</td>
		</tr>
		<tr>
			<td>sys_version_minor</td>
			<td>INT(2)</td>
			<td>The minor version number of the currently installed version</td>
		</tr>
		<tr>
			<td>sys_version_update</td>
			<td>INT(4)</td>
			<td>The update version number of the currently installed version</td>
		</tr>
		<tr>
			<td>sys_version_ignore</td>
			<td>VARCHAR(20)</td>
			<td>A version to ignore for checking for updates</td>
		</tr>
	</tbody>
</table>

<h2>nova_system_versions</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>version_id</td>
			<td>INT(4)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>version</td>
			<td>VARCHAR(25)</td>
			<td>A full string with the version designation</td>
		</tr>
		<tr>
			<td>version_major</td>
			<td>INT(1)</td>
			<td>The major version number</td>
		</tr>
		<tr>
			<td>version_minor</td>
			<td>INT(2)</td>
			<td>The minor version number</td>
		</tr>
		<tr>
			<td>version_update</td>
			<td>INT(4)</td>
			<td>The update version number </td>
		</tr>
		<tr>
			<td>version_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the version was released</td>
		</tr>
		<tr>
			<td>version_launch</td>
			<td>TEXT</td>
			<td>The launch text with a brief description of the changes in the version</td>
		</tr>
		<tr>
			<td>version_changes</td>
			<td>TEXT</td>
			<td>The complete list of changes in the version</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>tour_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>tour_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the tour item</td>
		</tr>
		<tr>
			<td>tour_order</td>
			<td>INT(4)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>tour_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not the tour item is displayed</td>
		</tr>
		<tr>
			<td>tour_images</td>
			<td>TEXT</td>
			<td>A comma-separated list of images of the tour item</td>
		</tr>
		<tr>
			<td>tour_summary</td>
			<td>TEXT</td>
			<td>The summary of the tour item</td>
		</tr>
		<tr>
			<td>tour_spec_item</td>
			<td>INT(5)</td>
			<td>The ID of the specification item the tour item is associated with</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_data</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>data_tour_item</td>
			<td>INT(5)</td>
			<td>The numerical ID of the tour item the data is being stored for; correlates to <dfn>nova_tour</dfn></td>
		</tr>
		<tr>
			<td>data_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the data is being stored for; correlates to <dfn>nova_tour_fields</dfn></td>
		</tr>
		<tr>
			<td>data_value</td>
			<td>TEXT</td>
			<td>The data being stored</td>
		</tr>
		<tr>
			<td>data_updated</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time the field was updated</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_decks</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>deck_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>deck_name</td>
			<td>VARCHAR(255)</td>
			<td>The name of the deck</td>
		</tr>
		<tr>
			<td>deck_order</td>
			<td>INT(10)</td>
			<td>A numerical sort order</td>
		</tr>
		<tr>
			<td>deck_content</td>
			<td>TEXT</td>
			<td>The contents of the deck</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_fields</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>field_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>field_type</td>
			<td>ENUM(text, select, textarea)</td>
			<td>The type of field</td>
		</tr>
		<tr>
			<td>field_name</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's NAME attribute</td>
		</tr>
		<tr>
			<td>field_fid</td>
			<td>VARCHAR(100)</td>
			<td>The value that'll be inserted into the field's ID attribute</td>
		</tr>
		<tr>
			<td>field_class</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's CLASS attribute</td>
		</tr>
		<tr>
			<td>field_label_page</td>
			<td>TEXT</td>
			<td>The value that'll be used as a label for the field on the page</td>
		</tr>
		<tr>
			<td>field_value</td>
			<td>TEXT</td>
			<td>The value that'll be inserted into the field's VALUE attribute</td>
		</tr>
		<tr>
			<td>field_selected</td>
			<td>VARCHAR(20)</td>
			<td>The value that'll be inserted into the field's SELECTED attribute</td>
		</tr>
		<tr>
			<td>field_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order for the fields</td>
		</tr>
		<tr>
			<td>field_display</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not to display the field</td>
		</tr>
		<tr>
			<td>field_rows</td>
			<td>INT(3)</td>
			<td>The number of rows in a textarea field; default is 5</td>
		</tr>
	</tbody>
</table>

<h2>nova_tour_values</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>value_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>value_field</td>
			<td>INT(10)</td>
			<td>The numerical ID of the field the values are for; correlates to <dfn>nova_tour_fields</dfn></td>
		</tr><tr>
			<td>value_field_value</td>
			<td>VARCHAR(255)</td>
			<td>The value that'll be inserted in to the VALUE attribute</td>
		</tr>
		<tr>
			<td>value_selected</td>
			<td>VARCHAR(10)</td>
			<td>The value that'll be inserted in to the SELECTED attribute</td>
		</tr>
		<tr>
			<td>value_content</td>
			<td>TEXT</td>
			<td>The content of the value item</td>
		</tr>
		<tr>
			<td>value_order</td>
			<td>INT(5)</td>
			<td>A numerical sort order</td>
		</tr>
	</tbody>
</table>

<h2>nova_uploads</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>upload_id</td>
			<td>BIGINT(20)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>upload_filename</td>
			<td>TEXT</td>
			<td>The filename of the uploaded item</td>
		</tr>
		<tr>
			<td>upload_mime_type</td>
			<td>VARCHAR(255)</td>
			<td>The MIME type of the uploaded item</td>
		</tr>
		<tr>
			<td>upload_resource_type</td>
			<td>VARCHAR(100)</td>
			<td>The type of uploaded item it is</td>
		</tr>
		<tr>
			<td>upload_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user who uploaded the item; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>upload_ip</td>
			<td>VARCHAR(100)</td>
			<td>The IP address of the user uploading</td>
		</tr>
		<tr>
			<td>upload_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the date when the item was uploaded</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_loa</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>loa_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>loa_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>loa_start_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when a user's LOA began</td>
		</tr>
		<tr>
			<td>loa_end_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when a user's LOA ended</td>
		</tr>
		<tr>
			<td>loa_duration</td>
			<td>TEXT</td>
			<td>How long the user specified their LOA would last</td>
		</tr>
		<tr>
			<td>loa_reason</td>
			<td>TEXT</td>
			<td>The reason the user gave for the LOA</td>
		</tr>
		<tr>
			<td>loa_type</td>
			<td>ENUM(loa, active, eloa)</td>
			<td>The current status of the LOA request</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_prefs</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>pref_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>pref_key</td>
			<td>VARCHAR(100)</td>
			<td>An alphanumeric key for identifying the preference</td>
		</tr>
		<tr>
			<td>pref_label</td>
			<td>VARCHAR(255)</td>
			<td>The label for the preference</td>
		</tr>
		<tr>
			<td>pref_default</td>
			<td>TEXT</td>
			<td>The default value for the preference</td>
		</tr>
	</tbody>
</table>

<h2>nova_user_prefs_values</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>prefvalue_id</td>
			<td>INT(5)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>prefvalue_user</td>
			<td>INT(8)</td>
			<td>The numerical ID of the user; correlates to <dfn>nova_users</dfn></td>
		</tr>
		<tr>
			<td>prefvalue_key</td>
			<td>VARCHAR(100)</td>
			<td>The preference key; correlates to <dfn>nova_user_prefs</dfn></td>
		</tr>
		<tr>
			<td>prefvalue_value</td>
			<td>TEXT</td>
			<td>The value of the preference</td>
		</tr>
	</tbody>
</table>

<h2>nova_users</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>userid</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>status</td>
			<td>ENUM(active, inactive, pending)</td>
			<td>The status of the user</td>
		</tr>
		<tr>
			<td>name</td>
			<td>VARCHAR(150)</td>
			<td>The name of the user</td>
		</tr>
		<tr>
			<td>email</td>
			<td>VARCHAR(100)</td>
			<td>The email of the user</td>
		</tr>
		<tr>
			<td>password</td>
			<td>VARCHAR(40)</td>
			<td>The user's password as an SHA1 hash</td>
		</tr>
		<tr>
			<td>date_of_birth</td>
			<td>VARCHAR(50)</td>
			<td>The user's date of birth</td>
		</tr>
		<tr>
			<td>instant_message</td>
			<td>TEXT</td>
			<td>The instant message handles of the user</td>
		</tr>
		<tr>
			<td>main_char</td>
			<td>INT(8)</td>
			<td>The numerical ID of the character that is the user's main character; correlates to <dfn>nova_characters</dfn></td>
		</tr>
		<tr>
			<td>access_role</td>
			<td>INT(5)</td>
			<td>The numerical ID of the access role the user is assigned; correlates to <dfn>nova_access_roles</dfn></td>
		</tr>
		<tr>
			<td>is_sysadmin</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user is a system admin</td>
		</tr>
		<tr>
			<td>is_game_master</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user is a game master</td>
		</tr>
		<tr>
			<td>is_webmaster</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user is a webmaster</td>
		</tr>
		<tr>
			<td>is_firstlaunch</td>
			<td>ENUM(y, n)</td>
			<td>Whether or not it is the first launch of Nova for a user (after install, after update)</td>
		</tr>
		<tr>
			<td>timezone</td>
			<td>VARCHAR(5)</td>
			<td>The timezone code of the user</td>
		</tr>
		<tr>
			<td>daylight_savings</td>
			<td>VARCHAR(1)</td>
			<td>Whether the user is observing daylight savings time</td>
		</tr>
		<tr>
			<td>language</td>
			<td>VARCHAR(50)</td>
			<td>The language preference of the user</td>
		</tr>
		<tr>
			<td>join_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the user joined</td>
		</tr>
		<tr>
			<td>leave_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the user left the sim</td>
		</tr>
		<tr>
			<td>last_post</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the user last posted</td>
		</tr>
		<tr>
			<td>last_login</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the user last logged in</td>
		</tr>
		<tr>
			<td>loa</td>
			<td>ENUM(active, loa, eloa)</td>
			<td>The LOA status of the user</td>
		</tr>
		<tr>
			<td>display_rank</td>
			<td>VARCHAR(100)</td>
			<td>The rank set preference of the user</td>
		</tr>
		<tr>
			<td>skin_main</td>
			<td>VARCHAR(100)</td>
			<td>The main section skin preference of the user</td>
		</tr>
		<tr>
			<td>skin_wiki</td>
			<td>VARCHAR(100)</td>
			<td>The wiki section skin preference of the user</td>
		</tr>
		<tr>
			<td>skin_admin</td>
			<td>VARCHAR(100)</td>
			<td>The admin section skin preference of the user</td>
		</tr>
		<tr>
			<td>location</td>
			<td>TEXT</td>
			<td>The user's location for their user bio</td>
		</tr>
		<tr>
			<td>bio</td>
			<td>TEXT</td>
			<td>The user's biography for their user bio</td>
		</tr>
		<tr>
			<td>security_question</td>
			<td>INT(5)</td>
			<td>The numerical ID of the security question the user has chosen; correlates to <dfn>nova_security_questions</dfn></td>
		</tr>
		<tr>
			<td>security_answer</td>
			<td>VARCHAR(40)</td>
			<td>The answer to the user's security question as an SHA1 hash</td>
		</tr>
		<tr>
			<td>password_reset</td>
			<td>INT(1)</td>
			<td>A 0/1 (FALSE/TRUE) for whether a user is using a reset password</td>
		</tr>
		<tr>
			<td>moderate_posts</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their mission post privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_logs</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their personal log privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_news</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their news item privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_post_comments</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their post comment privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_log_comments</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their log comment privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_news_comments</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their news comment privileges moderated</td>
		</tr>
		<tr>
			<td>moderate_wiki_comments</td>
			<td>ENUM(n, y)</td>
			<td>Whether or not a user has their wiki comment privileges moderated</td>
		</tr>
		<tr>
			<td>my_links</td>
			<td>TEXT</td>
			<td>A comma-separated list of menu item IDs for a user's personalized links</td>
		</tr>
		<tr>
			<td>last_update</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of the last time a user updated their information</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_categories</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>wikicat_id</td>
			<td>INT(8)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>wikicat_name</td>
			<td>VARCHAR(100)</td>
			<td>The name of the category</td>
		</tr>
		<tr>
			<td>wikicat_desc</td>
			<td>TEXT</td>
			<td>The description of the category</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_comments</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>wcomment_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>wcomment_author_user</td>
			<td>INT(8)</td>
			<td>The numeric user ID of the person leaving the comment</td>
		</tr>
		<tr>
			<td>wcomment_author_character</td>
			<td>INT(8)</td>
			<td>The numeric character ID of the main character of the person leaving the comment</td>
		</tr>
		<tr>
			<td>wcomment_page</td>
			<td>INT(10)</td>
			<td>The numeric page ID of the page the comment is being left for</td>
		</tr>
		<tr>
			<td>wcomment_date</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestampe of when the comment was left</td>
		</tr>
		<tr>
			<td>wcomment_content</td>
			<td>TEXT</td>
			<td>The content of the comment</td>
		</tr>
		<tr>
			<td>wcomment_status</td>
			<td>ENUM(activated, pending)</td>
			<td>The status of the comment</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_drafts</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>draft_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>draft_id_old</td>
			<td>INT(10)</td>
			<td>The old draft ID; this is only used when reverting to a previous draft</td>
		</tr>
		<tr>
			<td>draft_title</td>
			<td>VARCHAR(255)</td>
			<td>The title of the page draft</td>
		</tr>
		<tr>
			<td>draft_author_user</td>
			<td>INT(8)</td>
			<td>The numeric user ID of the person who authored the draft</td>
		</tr>
		<tr>
			<td>draft_author_character</td>
			<td>INT(8)</td>
			<td>The numeric character ID of the main character of the person who authored the draft</td>
		</tr>
		<tr>
			<td>draft_summary</td>
			<td>TEXT</td>
			<td>The summary of the draft</td>
		</tr>
		<tr>
			<td>draft_content</td>
			<td>LONGTEXT</td>
			<td>The content of the draft</td>
		</tr>
		<tr>
			<td>draft_page</td>
			<td>INT(10)</td>
			<td>The numeric page ID of the page the draft is associated with</td>
		</tr>
		<tr>
			<td>draft_created_at</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the draft was created</td>
		</tr>
		<tr>
			<td>draft_categories</td>
			<td>TEXT</td>
			<td>A comma-separated list of category IDs</td>
		</tr>
		<tr>
			<td>draft_changed_comments</td>
			<td>TEXT</td>
			<td>The changes made to a draft</td>
		</tr>
	</tbody>
</table>

<h2>nova_wiki_pages</h2>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th class="blue span3">Field</th>
			<th class="blue span3">Field Information</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>page_id</td>
			<td>INT(10)</td>
			<td>Unique ID for each record in the table (primary key)</td>
		</tr>
		<tr>
			<td>page_draft</td>
			<td>INT(10)</td>
			<td>The numeric ID of the current draft making up the page content</td>
		</tr>
		<tr>
			<td>page_created_at</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the page was created</td>
		</tr>
		<tr>
			<td>page_created_by_user</td>
			<td>INT(8)</td>
			<td>The numeric user ID of the person who created the page</td>
		</tr>
		<tr>
			<td>page_created_by_character</td>
			<td>INT(8)</td>
			<td>The numeric character ID of the main character of the person who created the page</td>
		</tr>
		<tr>
			<td>page_updated_at</td>
			<td>BIGINT(20)</td>
			<td>A UNIX timestamp of when the page was last updated</td>
		</tr>
		<tr>
			<td>page_updated_by_user</td>
			<td>INT(8)</td>
			<td>The numeric user ID of the person who last updated the page</td>
		</tr>
		<tr>
			<td>page_updated_by_character</td>
			<td>INT(8)</td>
			<td>The numeric character ID of the main character of the person who last updated the page</td>
		</tr>
		<tr>
			<td>page_comments</td>
			<td>ENUM(open,closed)</td>
			<td>Whether or not comments are opened/closed on a page</td>
		</tr>
	</tbody>
</table>