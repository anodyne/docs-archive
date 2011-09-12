<h1>Settings Model</h1>

<p>The Settings model provides access to the settings database table for storing, editing deleting and retrieving system setting information.</p>

<p class="critical"><strong>Note:</strong> This model is initialized automatically by the system so there is no need to do it manually.</p>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->settings->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_all_settings()</h2>

<p>Get all settings from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user created</strong></td>
		<td class="td col2"><em>n</em></td>
		<td class="td col3"><em>y, n</em></td>
		<td class="td col4">Whether to pull back user created settings or existing settings</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object of settings.</p>

<h2>get_setting()</h2>

<p>Get a specific setting from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>key</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The setting key to pull</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return a string with the value of setting.</p>

<h2>get_setting_details()</h2>

<p>Get all the available information about a specific setting.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">The item to pull from the database</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>setting_key</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The database column serving as the identifier for the ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the information for the requested setting.</p>

<h2>get_setting_label()</h2>

<p>Get the label for a specific setting.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">The item to pull from the database</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>setting_key</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The database column serving as the identifier for the ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return a string with the setting's page label.</p>

<h2>get_settings()</h2>

<p>Get a list of system settings.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>keys</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of setting keys to pull from the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an array of setting values.</p>

<h2>get_sim_types()</h2>

<p>Get all the available sim types from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>start ID</strong></td>
		<td class="td col2"><em>2</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The ID to start with (1 is a global item)</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the information for the sim types.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_setting()</h2>

<p>Update a system setting in the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">Some kind of identifying ID for the setting to be updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field to key the ID off of</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * CREATING DATA
 */
?>

<a name="create"></a><h1>Adding Data</h1>

<h2>add_new_setting()</h2>

<p>Add a system setting to the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">An array of the information to add to the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * DELETING DATA
 */
?>

<a name="delete"></a><h1>Deleting Data</h1>

<h2>delete_setting()</h2>

<p>Delete a system setting from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">A numeric ID of the setting to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>