<h1><?php echo $header;?></h1>

<p>The Positions model provides access to the positions database table for storing, editing deleting and retrieving position information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('positions_model', 'pos');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->pos->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_all_positions()</h2>

<p>Get all the positions out of the database.</p>

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
		<td class="td col1"><strong>sort</strong></td>
		<td class="td col2"><em>asc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">Determine the order to sort the positions</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">Whether to pull back items that are set to display or not; use a blank string to pull back all positions</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the positions that match the criteria.</p>

<h2>get_dept_positions()</h2>

<p>Get all the positions for a specific department.</p>

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
		<td class="td col1"><strong>department</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric department ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">Whether to pull back items that are set to display or not; use a blank string to pull back all positions</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>object</em></td>
		<td class="td col3"><em>object, array</em></td>
		<td class="td col4">How to return the data to the controller</td>
	</tr>
</table>

<h4>Return</h4>

<p>If the third parameter is set to <dfn>object</dfn>, the method will return an object with the position IDs for the positions that match the criteria. If the third parameter is set to <dfn>array</dfn>, the method will return an array with the position IDs for the positions that match the criteria.</p>

<h2>get_open_positions()</h2>

<p>Get all the open positions out of the database.</p>

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
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">Whether to pull back items that are set to display or not; use a blank string to pull back all open positions</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the positions that match the criteria.</p>

<h2>get_position()</h2>

<p>Get a specific position from the database based on its ID.</p>

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
		<td class="td col4">A numeric position ID to pull values for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>return</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string or array with the values to pull back</td>
	</tr>
</table>

<h4>Return</h4>

<p>If a single value is passed in the second parameter, the method will return just that value. If an array if passed to the second parameter, the method will return an array with the values.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_open_slots()</h2>

<p>Update the open slots of a position in the database.</p>

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
		<td class="td col4">A numeric ID of the position to be updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>direction</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>add_crew, remove_crew</em></td>
		<td class="td col4">Whether to add or remove open slots</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>, otherwise the method will return <dfn>FALSE</dfn>.</p>

<h2>update_position()</h2>

<p>Update a position in the database.</p>

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
		<td class="td col4">A numeric ID of the position to be updated</td>
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

<h2>add_position()</h2>

<p>Add a position to the database.</p>

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

<h2>delete_position()</h2>

<p>Delete a position from the database.</p>

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
		<td class="td col4">A numeric ID of the position to be deleted</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>