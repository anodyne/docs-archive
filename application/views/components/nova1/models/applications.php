<h1>Applications Model</h1>

<p>The Applications model provides access to the applications database table for storing, editing counting and retrieving application records. You cannot delete application records.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('applications_model', 'apps');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->apps->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#count">Counting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_application()</h2>

<p>Pull a specific application from the database.</p>

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
		<td class="td col4">A numeric ID of an application record</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the application record.</p>

<h2>get_applications()</h2>

<p>Pull all application records from the database.</p>

<h3>Parameters</h3>
<em>None</em>

<h3>Return</h3>

<p>The method will return an object with all the information for every application record.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_application()</h2>

<p>Update an application in the database for the sake of record-keeping. This action happens by default when someone is approved or rejected.</p>

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
		<td class="td col4">An ID with which to identify what record is being updated (the ID correlates to the identifier)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or object of data to insert into the database</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2">app_character</td>
		<td class="td col3">Any column in the database</td>
		<td class="td col4">The database column to use for identifying which items is being updated</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return the query object from the operation.</p>

<h3>Example</h3>

<pre>$character = 1;

$app_array = array(
	'app_action' => 'accepted',
	'app_message' => 'This is the email I sent to the player...'
);

$apps = $this->apps->update_application($character, $app_array);</pre>

<?php
/**
 * ADDING DATA
 */
?>

<a name="create"></a><h1>Adding Data</h1>

<h2>insert_application()</h2>

<p>Insert an application into the database for the sake of record-keeping. This action happens by default with every application received by the system.</p>

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
		<td class="td col4">An array or object of data to insert into the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return the number of affected rows. In a normal case, this will be 1. If no rows are returned, then the query has failed.</p>

<h3>Example</h3>

<pre>$app_array = array(
	'app_email' => $email,
	'app_player_name' => $real_name,
	'app_character_name' => $first_name .' '. $middle_name .' '. $last_name .' '. $suffix,
	'app_position' => $this->pos->get_position_name($position),
	'app_date' => now()
);

$apps = $this->apps->insert_application($app_array);</pre>

<?php
/**
 * COUNTING DATA
 */
?>

<a name="count"></a><h1>Counting Data</h1>

<h2>count_applications()</h2>

<p>Counts all application records in the database.</p>

<h3>Parameters</h3>
<em>None</em>

<h3>Return</h3>

<p>The method will return the number of application records stored in the database.</p>