<h1>Menu Model</h1>

<p>The Menu model provides access to the menus database tables for storing, editing deleting and retrieving menu item and category information.</p>

<p class="alert alert-danger"><strong>Note:</strong> This model is initialized automatically by the system so there is no need to do it manually.</p>

<h2>Using the Model</h2>

<p>You can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->menu_model->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_menu_items()</h2>

<p>Get menu items of a certain type or category.</p>

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
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>main, sub, adminsub</em></td>
		<td class="td col4">The type of menu item it is</td>
	</tr>
	<tr>
		<td class="td col1"><strong>category</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>main, personnel, sim, wiki, acp, write, messages, site, manage, characters, user, report</em></td>
		<td class="td col4">The category of menu items</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2"><em>y</em></td>
		<td class="td col3"><em>y, n, none</em></td>
		<td class="td col4">The display flag to pull; use a blank string to pull back everything</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu items that match the criteria.</p>

<h2>get_menu_item()</h2>

<p>Get a specific menu item based on its ID number.</p>

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
		<td class="td col4">The numeric ID of the menu item</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu item.</p>

<h2>get_menu_categories()</h2>

<p>Get all menu categories in the system.</p>

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
		<td class="td col2"><em>sub</em></td>
		<td class="td col3"><em>sub, adminsub, none</em></td>
		<td class="td col4">The type of menu items the menu category contains; use an empty string to return all menu categories</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu categories.</p>

<h2>get_menu_category()</h2>

<p>Get a specific menu category based on data passed to the method.</p>

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
		<td class="td col4">The data to use for pulling information out about a menu category</td>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>menucat_menu_cat</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field to use for pulling information out about a menu category</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu category.</p>

<h2>get_all_item_categories()</h2>

<p>Get the categories used in the menu items table.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu categories.</p>

<h2>get_admin_menu()</h2>

<p>Get the menu items for a specific admin section.</p>

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
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>main, sub, adminsub</em></td>
		<td class="td col4">The type of items to pull back</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the menu items.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_menu_item()</h2>

<p>Update a menu item in the database.</p>

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
		<td class="td col1"><strong>where data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The data to be used in the where statement to determine which item to update</td>
	</tr>
	<tr>
		<td class="td col1"><strong>where field</strong></td>
		<td class="td col2"><em>menu_id</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field to be used in the where statement to determine which item to update</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_menu_category()</h2>

<p>Update a menu category in the database.</p>

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
		<td class="td col4">The data to be used for updating the category</td>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The numeric category ID to be determine which item to update</td>
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

<h2>add_menu_item()</h2>

<p>Add a menu item to the database.</p>

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

<h2>add_menu_category()</h2>

<p>Add a menu category to the database.</p>

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

<h2>delete_menu_item()</h2>

<p>Delete a menu item from the database.</p>

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

<h2>delete_menu_category()</h2>

<p>Delete a menu category from the database.</p>

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
		<td class="td col4">A numeric ID of the category to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>