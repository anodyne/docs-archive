<h1>Private Messages Model</h1>

<h1>Get Data</h1>

<h2>get_inbox()</h2>

<p>Get the inbox for a given user.</p>

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

<p>The method will return an object with all the private messages currently in a user's inbox.</p>

<h2>get_outbox()</h2>

<p>Get the outbox (sent messages) for a given user.</p>

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

<p>The method will return an object with all the private messages currently in a user's outbox (sent messages).</p>

<h2>get_messages_for_id()</h2>

<p>Get the content messages for a certain private message ID.</p>

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
		<td class="td col4">A numeric private message ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the content messages for the given private message.</p>

<h2><span class="label label-warning">UPDATED</span> get_message_recipients()</h2>

<p>Get a private message's recipient list.</p>

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
		<td class="td col4">A numeric private message ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>user</em></td>
		<td class="td col3"><em>user, character</em></td>
		<td class="td col4">Whether to return user or character IDs</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an array with a list of user ID who received the private message.</p>

<h2>get_message()</h2>

<p>Get a private message by its ID.</p>

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
		<td class="td col4">A numeric private message ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with the private message requested.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<h1>Update Data</h1>

<h2>update_message()</h2>

<p>Update the user-specific message item for a private message. This is used by Nova to change the read and display statuses of a user-specific message item.</p>

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
		<td class="td col4">A numeric private message ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_private_message()</h2>

<p>Update a private message in the database.</p>

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
		<td class="td col4">A numeric ID of the private message to be updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_to_message()</h2>

<p>Update a user-specific message item for a private message in the database.</p>

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
		<td class="td col4">A numeric private message ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * CREATING DATA
 */
?>

<h1>Create Data</h1>

<h2>insert_pm_recipients()</h2>

<p>Add a user-specific message item for a private message.</p>

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

<h2>insert_private_message()</h2>

<p>Add a private message to the database.</p>

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

<h1>Delete Data</h1>

<p class="alert alert-info"><strong>Note:</strong> Nova does not actually delete records from the database, instead, Nova simply hides the messages from being displayed. This was required to ensure that a sender would know exactly who they sent their private messages to.</p>

<?php
/**
 * COUNTING DATA
 */
?>

<h1>Count Data</h1>

<h2><span class="label label-success">NEW</span> count_pms()</h2>

<p>Counts the number of private messages a user has based on the parameters.</p>

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
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>inbox, sent, unread</em></td>
		<td class="td col4">The type of private messages to include in the count</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of private messages) returned by the query.</p>

<h2><span class="label label-important">DEPRECATED</span> count_unread_pms()</h2>

<p>Counts the number of unread private messages a user has.</p>

<p class="alert alert-danger"><strong>Note:</strong> This method has been deprecated and will be removed in Nova 2.1. Please update any code you have that uses this method to use the <strong>count_pms()</strong> method. As of Nova 2.0, this method is only an alias to <strong>count_pms()</strong>.</p>

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

<p>The method returns the number of rows (number of private messages) returned by the query.</p>

<h1>Search Data</h1>

<h2><span class="label label-success">NEW</span> search_private_messages()</h2>

<p>Search through a user's private messages (sent and received).</p>

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
		<td class="td col1"><strong>term</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The search term to use</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an array of result objects with all the private messages found.</p>