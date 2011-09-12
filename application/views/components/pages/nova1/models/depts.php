<h1>Departments Model</h1>

<p>The Departments model provides access to the departments database table for storing, editing deleting and retrieving department information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('depts_model', 'dept');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->dept->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_all_depts()</h2>

<p>Get all the departments that match the criteria passed to the method.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>sort</strong></td>
		<td class="td col2"><em>asc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">The order in which the items should be displayed</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">What the display flag should be, or a blank string if you don't want to ignore the display flag</td>
	</tr>
	<tr>
		<td class="td col1"><strong>parent</strong></td>
		<td class="td col2"><em>0</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of a department that is a parent department</td>
	</tr>
	<tr>
		<td class="td col1"><strong>sort column</strong></td>
		<td class="td col2"><em>dept_order</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any column from the departments table to sort by</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the departments that match the criteria.</p>

<h2>get_all_manifests()</h2>

<p>Get all the manifests that match the criteria passed to the method.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">What the display flag should be, or a blank string if you don't want to ignore the display flag</td>
	</tr>
	<tr>
		<td class="td col1"><strong>sort</strong></td>
		<td class="td col2"><em>asc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">The order in which the results should be sorted</td>
	</tr>
	<tr>
		<td class="td col1"><strong>sort column</strong></td>
		<td class="td col2"><em>manifest_order</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any column from the manifests table to sort by</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the manifests that match the criteria.</p>

<h2>get_default_manifest()</h2>

<p>Gets the ID of the default manifest from the database.</p>

<h3>Parameters</h3>

<em>None</em>

<h3>Return</h3>

<p>The method will return the ID of the default manifest from the database.</p>

<h2>get_dept()</h2>

<p>Get a single department based on the ID passed to the method.</p>

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
		<td class="td col4">A numeric ID of the department to retrieve</td>
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

<h2>get_manifest()</h2>

<p>Get a single manifest based on the ID passed to the method.</p>

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
		<td class="td col4">A numeric ID of the manifest to retrieve</td>
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

<h2>get_sub_depts()</h2>

<p>Get the sub departments for the department passed to the method.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>department</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric ID of the department that is the parent</td>
	</tr>
	<tr>
		<td class="td col1"><strong>sort</strong></td>
		<td class="td col2"><em>asc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">The direction in which to sort the results</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">Which display flag to pull. Use an empty string to pull back all sub departments regardless of the display flag</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the departments that match the criteria.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_dept()</h2>

<p>Update a department in the database.</p>

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
		<td class="td col4">A numeric ID of the department to be updated</td>
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

<h2>update_manifest()</h2>

<p>Update a manifest in the database.</p>

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
		<td class="td col4">A numeric ID of the manifest to be updated</td>
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

<a name="create"></a><h1>Adding Data</h1>

<h2>add_dept()</h2>

<p>Add a department to the database.</p>

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

<h2>add_manifest()</h2>

<p>Add a manifest to the database.</p>

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

<h2>delete_dept()</h2>

<p>Delete a department from the database.</p>

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
		<td class="td col4">A numeric ID of the department to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_manifest()</h2>

<p>Delete a manifest from the database.</p>

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
		<td class="td col4">A numeric ID of the manifest to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>