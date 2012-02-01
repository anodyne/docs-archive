<h1>Characters Model</h1>

<h1>Get Data</h1>

<h2>get_all_characters()</h2>

<p>Get all the characters from the database that match a set of pre-defined criteria.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>active</em></td>
		<td class="td col3"><em>active, inactive, npc, user_npc, pending, has_user, no_user, all</em></td>
		<td class="td col4">Which type of characters should be pulled from the database</td>
	</tr>
	<tr>
		<td class="td col1"><strong>order</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of fields and directions for ordering the data</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the characters that match the criteria.</p>

<h2>get_authors()</h2>

<p>Pull the author information from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A comma-separated list of character IDs, usually from a mission post</td>
	</tr>
	<tr>
		<td class="td col1"><strong>rank</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether or not the characters' ranks should be printed out</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return a string of characters separated by an ampersand (&amp;).</p>

<h2>get_bio_fields()</h2>

<p>Pull the bio fields for a particular section or of a particular type.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>section</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID of the section you want to pull</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The type of field you want to pull</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_field_details()</h2>

<p>Pull the details for a specific bio field.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID of the field you want to pull the details for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_field_value_details()</h2>

<p>Pull the details for a specific bio field value.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID of the field value you want to pull the details for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_sections()</h2>

<p>Pull all of the bio sections from the database.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_section_details()</h2>

<p>Pull the details for a specific bio section.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID of the bio section you want to pull the details for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_tab_details()</h2>

<p>Pull the details for a specific bio tab.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID of the bio tab you want to pull the details for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_tabs()</h2>

<p>Pull the bio tabs from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y/n/none</em></td>
		<td class="td col4">Which display flag to pull from the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_bio_values()</h2>

<p>If you have a field that uses a dropdown that has values, this method will pull back those values to use.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric field ID to pull bio values for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the requested information.</p>

<h2>get_character()</h2>

<p>Get a specific character from the database based on their ID.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID to pull bio values for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string or array with the values to pull back</td>
	</tr>
</table>

<h3>Return</h3>

<p>If a single value is passed in the second parameter, the method will return just that value. If an array if passed to the second parameter, the method will return an array with the values.</p>

<h2>get_character_emails()</h2>

<p>Get an array of email addresses for a given set of characters.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Either a comma-separated list of character IDs or an array of characters</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an array where the key is the user ID and the value is their email address.</p>

<h2>get_character_name()</h2>

<p>Get a character's name along with their rank if so requested.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>rank</strong></td>
		<td class="td col2"><em>FALSE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether or not to display the rank</td>
	</tr>
	<tr>
		<td class="td col1"><strong>short rank</strong></td>
		<td class="td col2"><em>FALSE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether or not to display the short rank</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method cleans the data to make sure only the information needed is displayed and returns a string with the character name.</p>

<h2>get_characters_for_position()</h2>

<p>Get all characters that hold a specific position.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>position</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric position ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>order</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of ordering options and directions</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an object with the requested information.</p>

<h2>get_characters_minus_user()</h2>

<p>Get a list of characters in the system that include everyone except a specific user.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an object with the requested information.</p>

<h2>get_coc()</h2>

<p>Get the chain of command listing.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>The method returns an object with the requested information.</p>

<h2>get_field_data()</h2>

<p>Get all data associated with a specific field for a specific character.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric bio field ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an object with the requested information.</p>

<h2>get_user_characters()</h2>

<p>Get all of a user's characters.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>active</em></td>
		<td class="td col3"><em>active, inactive, pending, npc, active_npc</em></td>
		<td class="td col4">The type of character(s)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>object</em></td>
		<td class="td col3"><em>object, array</em></td>
		<td class="td col4">The type of character(s)</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an object if the third parameter is passed <dfn>object</dfn> or an array if <dfn>array</dfn> is passed with the requested information. The method will return <dfn>FALSE</dfn> if no information is available.</p>

<h2>get_rank_history()</h2>

<p>Get the rank history for a specific user's characters.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns an object with the requested information.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<h1>Update Data</h1>

<h2>update_bio_field()</h2>

<p>Updates a dynamic form database field.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric field ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the field</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows. In a successful update query, this number should be <dfn>1</dfn>.</p>

<h2>update_bio_field_value()</h2>

<p>Updates a dynamic form database field value option.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric field value ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the field value</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows. In a successful update query, this number should be <dfn>1</dfn>.</p>

<h2>update_bio_section()</h2>

<p>Updates a bio section.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric section ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the section</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows. In a successful update query, this number should be <dfn>1</dfn>.</p>

<h2>update_bio_tab()</h2>

<p>Updates a bio tab.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric tab ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the tab</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows. In a successful update query, this number should be <dfn>1</dfn>.</p>

<h2>update_character()</h2>

<p>Updates a given character's main information (does not include dynamic data).</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the character</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows. In a successful update query, this number should be <dfn>1</dfn>.</p>

<h2>update_character_data()</h2>

<p>Updates a given character's dynamic bio information (does not include main data).</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric field ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the character</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows.</p>

<h2>update_character_data_all()</h2>

<p>Updates all of a given character's dynamic bio information (does not include main data).</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>data_user</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Can be any field from the character data table used to pull the proper data</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of data to be used for updating the character</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows.</p>

<h2>update_field_sections()</h2>

<p>Updates the bio fields from their old section to a new section (in the instance of deleting a section).</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>old ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric section ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>new ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric section ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows.</p>

<h2>update_section_tabs()</h2>

<p>Updates the bio sections from their old tab to a new tab (in the instance of deleting a tab).</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>old ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric section ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>new ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric section ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows.</p>

<?php
/**
 * CREATING DATA
 */
?>

<h1>Create Data</h1>

<h2>add_bio_field()</h2>

<p>Adds a bio field to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the field information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_bio_field_data()</h2>

<p>Adds data to a given bio field in the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the field data to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query.</p>

<h2>add_bio_field_value()</h2>

<p>Adds a field value option to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the field value option information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_bio_sec()</h2>

<p>Adds a field section to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the section information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_bio_tab()</h2>

<p>Adds a section tab to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the tab information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>create_character()</h2>

<p>Adds a character and their main information to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the character information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2><span class="label warning">UPDATED</span> create_character_data_fields()</h2>

<p>Adds all of the character data to the database as blank values.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2">0</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2">0</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID. If there is no user associated with the character, you can pass <dfn>0</dfn> to this parameter.</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query.</p>

<h2>create_character_data()</h2>

<p>Adds character data to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the character data information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query.</p>

<h2>create_coc_entry()</h2>

<p>Adds a chain of command entry to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>create_promotion_record()</h2>

<p>Adds a character promotion/demotion entry to the database. <strong>Since: 1.0.6</strong></p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to be added to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * DELETING DATA */
?>

<h1>Delete Data</h1>

<h2>delete_bio_field()</h2>

<p>Deletes a bio field from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the field to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_bio_field_value()</h2>

<p>Deletes a bio field value option from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the field value option to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_bio_section()</h2>

<p>Deletes a bio section from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the section to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_bio_tab()</h2>

<p>Deletes a bio tab from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the tab to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_character()</h2>

<p>Deletes a character and their main information from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the character to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_character_data()</h2>

<p>Deletes a character's dynamic data from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the identifier to delete</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field used to determine what should be removed (often will be something like <dfn>data_char</dfn>)</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query.</p>

<h2>delete_character_field_data()</h2>

<p>Deletes a character field from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the field to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_coc_entry()</h2>

<p>Deletes a chain of command entry from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the chain of command entry to delete</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>empty_coc()</h2>

<p>Clears out the chain of command table.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query.</p>

<?php
/**
 * COUNTING DATA
 */
?>

<h1>Count Data</h1>

<h2>count_characters()</h2>

<p>Counts the number of characters with the sim and optionally includes the ability to filter that by how many characters were on the sim in a given timeframe as well.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>active</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The type of character to include in the count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>timeframe</strong></td>
		<td class="td col2"><em>current</em></td>
		<td class="td col3"><em>current, previous</em></td>
		<td class="td col4">Whether to use a current timeframe or previous timeframe</td>
	</tr>
	<tr>
		<td class="td col1"><strong>this month</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp of the start of the current month. In order to be used this requires <var>timeframe</var> to be set to <dfn>previous</dfn>.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>last month</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp of the start of the previous month. In order to be used this requires <var>timeframe</var> to be set to <dfn>previous</dfn>.</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of characters) returned by the query.</p>