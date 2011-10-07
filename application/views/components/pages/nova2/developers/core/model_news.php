<h1>News Model</h1>

<h1>Get Data</h1>

<h2>get_category_news()</h2>

<p>Get news items from a specific category.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>category</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The numeric category ID of the category being requested</td>
	</tr>
	<tr>
		<td class="td col1"><strong>session</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">A boolean value of whether or not a user is logged in</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<h2><span class="label success">NEW</span> get_character_news()</h2>

<p>Get news items for a specific character.</p>

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
		<td class="td col4">The numeric ID of the character being requested</td>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2">0</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">How many items to limit the results to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2">activated</td>
		<td class="td col3"><em>activated, pending, saved, none</em></td>
		<td class="td col4">What status to limit the results to</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<h2>get_link_id()</h2>

<p>Get the next or previous ID for the next/previous links.</p>

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
		<td class="td col4">The numeric ID of the current news item</td>
	</tr>
	<tr>
		<td class="td col1"><strong>direction</strong></td>
		<td class="td col2"><em>next</em></td>
		<td class="td col3"><em>next, prev</em></td>
		<td class="td col4">The direction the link should go</td>
	</tr>
	<tr>
		<td class="td col1"><strong>session</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">A boolean value of whether or not a user is logged in</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an integer with the ID of the next or previous news item ID or <dfn>FALSE</dfn> if nothing is found.</p>

<h2>get_news_categories()</h2>

<p>Get the news categories.</p>

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
		<td class="td col4">The display flag for news categories; use a blank string to pull all news categories</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news categories that match the criteria.</p>

<h2>get_news_category()</h2>

<p>Get a specific news category from the database based on its ID.</p>

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
		<td class="td col4">A numeric category ID to pull values for</td>
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

<h2>get_news_comment()</h2>

<p>Get a specific news comment from the database based on its ID.</p>

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
		<td class="td col4">A numeric comment ID to pull values for</td>
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

<h2>get_news_comments()</h2>

<p>Get news comments from the database based on the news item they're associated with.</p>

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
		<td class="td col4">A numeric news item ID to pull comments for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending</em></td>
		<td class="td col4">The status of the news comment</td>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>ncomment_date</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The data to use for ordering the results</td>
	</tr>
	<tr>
		<td class="td col1"><strong>order</strong></td>
		<td class="td col2"><em>asc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">The direction to order the results</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news comments that match the criteria.</p>

<h2>get_news_item()</h2>

<p>Get a specific news item from the database based on its ID.</p>

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
		<td class="td col4">A numeric news item ID to pull values for</td>
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

<h2>get_news_items()</h2>

<p>Get news items from the database.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>5</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of items to limit the query to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>session</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">A boolean value of whether or not the user is logged in</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<h2>get_news_list()</h2>

<p>Get a specific number and subset of news items from the database. This method is used for generating data for paginated news results.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of items to limit the query to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>offset</strong></td>
		<td class="td col2"><em>0</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number by which to offset the query</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending, saved, none</em></td>
		<td class="td col4">The status of the news items to pull; use a blank string to pull all news items</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<h2>get_user_news()</h2>

<p>Get news items from a specific user.</p>

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
		<td class="td col4">A numeric user ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>0</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number by which to limit the query; use zero for no limit</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending, none</em></td>
		<td class="td col4">The status of the news items; use a blank string to pull all news items</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<h1>Update Data</h1>

<h2>update_news_category()</h2>

<p>Update a news category in the database.</p>

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
		<td class="td col4">A numeric ID of the category to be updated</td>
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

<h2>update_news_comment()</h2>

<p>Update a news comment in the database.</p>

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
		<td class="td col4">A numeric ID of the comment to be updated</td>
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

<h2>update_news_item()</h2>

<p>Update a news item in the database.</p>

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
		<td class="td col4">A numeric ID of the news item to be updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>data</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array of the information to updated</td>
	</tr>
	<tr>
		<td class="td col1"><strong>identifier</strong></td>
		<td class="td col2"><em>news_id</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The field to use to identify which news item should be updated</td>
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

<h2>add_news_category()</h2>

<p>Add a news category to the database.</p>

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

<h2>add_news_comment()</h2>

<p>Add a news comment to the database.</p>

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

<h2>create_news_item()</h2>

<p>Add a news item to the database.</p>

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

<h1>Delete Data</h1>

<h2>delete_news_category()</h2>

<p>Delete a news category from the database.</p>

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
		<td class="td col4">A numeric ID of the category to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_news_comment()</h2>

<p>Delete a news comment from the database.</p>

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
		<td class="td col4">A numeric ID of the comment to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_news_item()</h2>

<p>Delete a news item from the database.</p>

<p class="critical"><strong>Warning:</strong> To avoid orphan news comment records, Nova will also delete all news comments associated with the news item.</p>

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
		<td class="td col4">A numeric ID of the news item to be deleted</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * COUNTING DATA
 */
?>

<h1>Count Data</h1>

<h2>count_character_news()</h2>

<p>Counts the number of news items a character has.</p>

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
		<td class="td col4">A numeric character ID (can also be an array of numeric IDs)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending</em></td>
		<td class="td col4">The status of the news items to count</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of news items) returned by the query.</p>

<h2>count_news_comments()</h2>

<p>Counts the number of news item comments a news item has.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending</em></td>
		<td class="td col4">The status of the news items to count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric news item ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of news comments) returned by the query.</p>

<h2>count_news_items()</h2>

<p>Counts the number of news item in the system.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending, none</em></td>
		<td class="td col4">The status of the news items to count; use a blank string to pull back all news items</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of news items) returned by the query.</p>

<h2>count_user_news()</h2>

<p>Counts the number of news item a user has.</p>

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
		<td class="td col4">A numeric user ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending</em></td>
		<td class="td col4">The status of the news items to count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>timeframe</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp to start counting from (the method will look for dates greater than or equal to the date)</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of news items) returned by the query.</p>

<h2>count_user_news_comments()</h2>

<p>Counts the number of news comments a user has.</p>

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
		<td class="td col4">A numeric user ID</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method returns the number of rows (number of news comments) returned by the query.</p>

<?php
/**
 * SEARCHING DATA
 */
?>

<a name="search"></a><h1>Searching Data</h1>

<h2>search_news()</h2>

<p>Search for news items.</p>

<h3>Parameters</h3>


<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>component</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The component by which to search the news items</td>
	</tr>
	<tr>
		<td class="td col1"><strong>input</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The string to search for</td>
	</tr>
</table>

<h3>Return</h3>

<p>The method will return an object with all the information for the news items that match the search criteria.</p>