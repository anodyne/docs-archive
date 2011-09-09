<h1><?php echo $header;?></h1>

<p>The Access model provides access to the role database tables for storing, editing and retrieving access information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('access_model', 'access');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->access->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_group()</h2>

<p>Grabs information about a specific role group.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric group ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Which items the method should return. This can be a single string, an array of values or nothing at all</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return information based on what was passed to it. If the return value is empty, an object will be returned with all data. If a single value is provided, the return will be the value of that field. Finally, if an array is provided, the return will be an array with the fields specified. If no data is found, the method will return <dfn>FALSE</dfn>.</p>

<h2>get_page()</h2>

<p>Grabs information about a specific role page.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric group ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Which items the method should return. This can be a single string, an array of values or nothing at all</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return information based on what was passed to it. If the return value is empty, an object will be returned with all data. If a single value is provided, the return will be the value of that field. Finally, if an array is provided, the return will be an array with the fields specified. If no data is found, the method will return <dfn>FALSE</dfn>.</p>

<h2>get_page_groups()</h2>

<p>Grabs all of the page groups from the database.</p>

<h4>Parameters</h4>
<p><em>None</em></p>

<h4>Return</h4>

<p>The method returns an object with all the information about all page groups in the database.</p>

<h2>get_pages()</h2>

<p>Goes out to the database with a comma-separated string of page IDs and pulls back their URLs and access levels as an array.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A comma-separated list of page IDs (most often from <dfn>get_role_data()</dfn>)</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an array containing page URLs as the keys and access levels as the values.</p>

<h2>get_players_with_role()</h2>

<p>Retrieves all players from the database that have the role ID given in the first parameter.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an array with the main character IDs for all players who have the specified role ID. Returns <dfn>FALSE</dfn> if no data is found.</p>

<h2>get_role()</h2>

<p>Grabs all data about a given role.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return the row&rsquo;s query object for use in your pages. Returns <dfn>FALSE</dfn> if no data is found.</p>

<h2>get_role_data()</h2>

<p>Pulls back a comma-separated list of page IDs that someone with the role ID passed to the method has access to view.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>role</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID from the players table</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return a comma-separated list of page IDs that can be passed to <dfn>get_pages()</dfn> to get an array of page URLs and access levels. Returns <dfn>FALSE</dfn> if no role data is found.</p>

<h2>get_role_pages()</h2>

<p>Goes out to the database and pulls back all pages from the roles_pages table.</p>

<h4>Parameters</h4>

<p><em>None</em></p>

<h4>Return</h4>

<p>The method will return a query object with all the records for use in your pages.</p>

<h2>get_roles()</h2>

<p>Returns all roles used by the system.</p>

<h4>Parameters</h4>

<p><em>None</em></p>

<h4>Return</h4>

<p>The method will return a query object with all the records for use in your pages.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_group()</h2>

<p>Updates a given group with the data passed to the method.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric group ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be updated in the database</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>update_page()</h2>

<p>Updates a given page with the data passed to the method.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be updated in the database</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>update_pages()</h2>

<p>Updates a given page with the data passed to the method.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be updated in the database</td>
	</tr>
	<tr>
		<td class="td col1"><strong>where</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array to pass WHERE clauses to method for specialized updates</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>update_role()</h2>

<p>Updates a given role with the data passed to the method.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be updated in the database</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<?php
/**
 * CREATING DATA
 */
?>

<a name="create"></a><h1>Adding Data</h1>

<h2>insert_group()</h2>

<p>Creates an access group in the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be inserted into the database.</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>insert_page()</h2>

<p>Creates an access page in the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be inserted into the database.</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>insert_role()</h2>

<p>Creates an access role in the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to be inserted into the database.</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<?php
/**
 * DELETING DATA
 */
?>

<a name="delete"></a><h1>Deleting Data</h1>

<h2>delete_group()</h2>

<p class="critical"><strong>Warning:</strong> Use caution when deleting access groups!</p>

<p>Deletes the group specified by the group ID passed to the first parameter.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric group ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>delete_page()</h2>

<p class="critical"><strong>Warning:</strong> Use caution when deleting access pages!</p>

<p>Deletes the page specified by the page ID passed to the first parameter.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric page ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>

<h2>delete_role()</h2>

<p class="critical"><strong>Warning:</strong> Use caution when deleting access roles!</p>

<p>Deletes the role specified by the role ID passed to the first parameter.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric role ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The number of affected rows. If successful, the method will return 1. If the operation fails, the method will return 0.</p>