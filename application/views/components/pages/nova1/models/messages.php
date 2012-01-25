<h1>Messages Model</h1>

<p>The Messages model provides access to the system messages database table for storing, editing deleting and retrieving message information.</p>

<p class="alert alert-danger"><strong>Note:</strong> This model is initialized automatically by the system so there is no need to do it manually.</p>

<h2>Using the Model</h2>

<p>You can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->msgs->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_message()</h2>

<p>Get a message based on its key.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
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
		<td class="td col4">The key of the message being retrieved</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return a string with the content of the message requested.</p>

<h2>get_message_label()</h2>

<p>Get a message label based on the ID of the message.</p>

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
		<td class="td col4">The numeric ID of the message</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return a string with the content of the message label requested.</p>

<h2>get_message_details()</h2>

<p>Get a message label based on the ID of the message.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The data used in the where statement to determine which item to pull</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>key</em></td>
		<td class="td col3"><em>key, id, label</em></td>
		<td class="td col4">The type of item used in the where state to determine which item to pull</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the information for the message being requested.</p>

<h2>get_all_messages()</h2>

<p>Get all the messages stored in the database.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>The method will return an object with the information for all the messages being requested.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_message()</h2>

<p>Update a message in the database.</p>

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
		<td class="td col4">The data to be used for updating the item</td>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The data to be used in the where statement to determine which item to update</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>menu_id</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field to be used in the where statement to determine which item to update</td>
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

<h2>insert_new_message()</h2>

<p>Add a message to the database.</p>

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

<h2>delete_message()</h2>

<p>Delete a message from the database.</p>

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
		<td class="td col4">A numeric ID of the item to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>