<h1><?php echo $header;?></h1>

<p>The Private Messages model provides access to the private messages database tables for storing, editing deleting and retrieving private messages.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('privmsgs_model', 'pm');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->pm->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
	<li><a href="#count">Counting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_inbox()</h2>

<p>Get the inbox for a given user.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the private messages currently in a user's inbox.</p>

<h2>get_outbox()</h2>

<p>Get the outbox (sent messages) for a given user.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the private messages currently in a user's outbox (sent messages).</p>

<h2>get_messages_for_id()</h2>

<p>Get the content messages for a certain private message ID.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">A numeric private message ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the content messages for the given private message.</p>

<h2>get_message_recipients()</h2>

<p>Get a private message's recipient list.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">A numeric private message ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an array with a list of user ID who received the private message.</p>

<h2>get_message()</h2>

<p>Get a private message by its ID.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">A numeric private message ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with the private message requested.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_message()</h2>

<p>Update the user-specific message item for a private message. This is used by Nova to change the read and display statuses of a user-specific message item.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_private_message()</h2>

<p>Update a private message in the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">A numeric ID of the private message to be updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_to_message()</h2>

<p>Update a user-specific message item for a private message in the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * CREATING DATA
 */
?>

<a name="create"></a><h1>Adding Data</h1>

<h2>insert_pm_recipients()</h2>

<p>Add a user-specific message item for a private message.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">An array of the information to add to the database</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>insert_private_message()</h2>

<p>Add a private message to the database.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
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
		<td class="td col4">An array of the information to add to the database</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * DELETING DATA
 */
?>

<a name="delete"></a><h1>Deleting Data</h1>

<p class="important"><strong>Note:</strong> Nova does not actually delete records from the database, instead, Nova simply hides the messages from being displayed. This was required to ensure that a sender would know exactly who they sent their private messages to.</p>

<?php
/**
 * COUNTING DATA
 */
?>

<a name="count"></a><h1>Counting Data</h1>

<h2>count_unread_pms()</h2>

<p>Counts the number of unread private messages a user has.</p>

<h4>Parameters</h4>

<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>user</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of private messages) returned by the query.</p>