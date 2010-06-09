<h1><?php echo $header;?></h1>

<p>The Posts model provides access to the mission posts database tables for storing, editing deleting and retrieving post information.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('posts_model', 'posts');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->posts->method_name();</pre>

<ul>
	<li><a href="#get">Getting Data</a></li>
	<li><a href="#update">Updating Data</a></li>
	<li><a href="#create">Adding Data</a></li>
	<li><a href="#delete">Deleting Data</a></li>
	<li><a href="#count">Counting Data</a></li>
	<li><a href="#search">Searching Data</a></li>
</ul>

<a name="get"></a><h1>Getting Data</h1>

<h2>get_author_emails()</h2>

<p>Get the email addresses of the authors of a given post.</p>

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
		<td class="td col1"><strong>post</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric post ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an array of email address if authors are found or <dfn>FALSE</dfn> if no authors are found.</p>

<h2>get_character_posts()</h2>

<p>Get all a character's posts from the database.</p>

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
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>0</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of posts to limit the return to; use zero to return all posts</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the posts that match the criteria.</p>

<h2>get_link_id()</h2>

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
		<td class="td col4">A numeric post ID to use for reference</td>
	</tr>
	<tr>
		<td class="td col1"><strong>direction</strong></td>
		<td class="td col2"><em>next</em></td>
		<td class="td col3"><em>next, previous</em></td>
		<td class="td col4">The direction in which to calculate the link ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an integer with the ID of the next or previous mission post ID or <dfn>FALSE</dfn> if nothing is found.</p>

<h2>get_post()</h2>

<p>Get a specific mission post from the database based on its ID.</p>

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
		<td class="td col4">A numeric post ID to pull values for</td>
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

<h2>get_post_comment()</h2>

<p>Get a specific mission post comment from the database based on its ID.</p>

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
		<td class="td col4">A numeric comment ID to pull values for</td>
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

<h2>get_post_comments()</h2>

<p>Get post comments from the database based on the mission posts they're associated with.</p>

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
		<td class="td col4">A numeric mission post ID to pull comments for</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending</em></td>
		<td class="td col4">The status of the post comment</td>
	</tr>
	<tr>
		<td class="td col1"><strong>field</strong></td>
		<td class="td col2"><em>pcomment_date</em></td>
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

<h4>Return</h4>

<p>The method will return an object with all the information for the post comments that match the criteria.</p>

<h2>get_post_list()</h2>

<p>Get a specific number and subset of mission posts from the database. This method is used for generating data for paginated mission posts results.</p>

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
		<td class="td col1"><strong>mission</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric mission ID; use a blank field to ignore the mission field</td>
	</tr>
	<tr>
		<td class="td col1"><strong>order</strong></td>
		<td class="td col2"><em>desc</em></td>
		<td class="td col3"><em>asc, desc</em></td>
		<td class="td col4">The way the posts should be ordered (posts are ordered by date in this method)</td>
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
		<td class="td col4">The status of the mission posts to pull; use a blank string to pull all posts</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the mission posts that match the criteria.</p>

<h2>get_saved_posts()</h2>

<p>Get saved mission posts for the entire system or for specific characters.</p>

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
		<td class="td col4">A numeric character ID (can also be passed an array of numeric IDs); use a blank string to pull back a character-agnostic list of saved posts</td>
	</tr>
	<tr>
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>0</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number by which to limit the query; use zero for no limit</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the mission posts that match the criteria.</p>

<?php
/**
 * UPDATING DATA
 */
?>

<a name="update"></a><h1>Updating Data</h1>

<h2>update_post()</h2>

<p>Update a mission post in the database.</p>

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
		<td class="td col4">A numeric ID of the mission post to be updated</td>
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

<h2>update_post_comment()</h2>

<p>Update a mission post comment in the database.</p>

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
		<td class="td col4">A numeric ID of the comment to be updated</td>
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

<h2>add_post_comment()</h2>

<p>Add a mission post comment to the database.</p>

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

<h2>create_mission_post()</h2>

<p>Add a mission post to the database.</p>

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

<h2>delete_post()</h2>

<p>Delete a mission post from the database.</p>

<p class="critical"><strong>Warning:</strong> To avoid orphan mission post comment records, Nova will also delete all mission post comments associated with the post you're attempting to delete.</p>

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
		<td class="td col4">A numeric ID of the mission post to be deleted</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_post_comment()</h2>

<p>Delete a mission post comment from the database.</p>

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
		<td class="td col4">A numeric ID of the comment to be deleted</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<?php
/**
 * COUNTING DATA
 */
?>

<a name="count"></a><h1>Counting Data</h1>

<h2>count_all_post_comments()</h2>

<p>Counts the number of post comments associated with a mission post.</p>

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
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending</em></td>
		<td class="td col4">The status of the comments to count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric mission post ID</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of comments) returned by the query.</p>

<h2>count_all_posts()</h2>

<p>Counts the number of mission posts in the system.</p>

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
		<td class="td col1"><strong>mission</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric mission ID; use an empty string to ignore mission</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending, saved, none</em></td>
		<td class="td col4">The status of the posts to count; use a blank string to count all posts</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<h2>count_character_posts()</h2>

<p>Counts the number of mission posts a character has made.</p>

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
		<td class="td col1"><strong>character</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric character ID (can also be an array of numeric IDs)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending, saved, none</em></td>
		<td class="td col4">The status of the posts to count; use a blank string to count all posts</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<h2>count_mission_posts()</h2>

<p>Counts the number of posts in a given mission.</p>

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
		<td class="td col1"><strong>mission</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A numeric mission ID</td>
	</tr>
	<tr>
		<td class="td col1"><strong>preference</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>single, multiple</em></td>
		<td class="td col4">The preferred method of counting posts (single or multiple)</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<h2>count_posts()</h2>

<p>Counts the number of mission posts between two dates.</p>

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
		<td class="td col1"><strong>start</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp of the start of the time to count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>end</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp of the end of the time to count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>preference</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>single, multiple</em></td>
		<td class="td col4">The preferred method of counting posts (single or multiple)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, saved, pending, none</em></td>
		<td class="td col4">The status of the posts to pull; use a blank string to pull all posts regardless of status</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<h2>count_unattended_posts()</h2>

<p>Counts the number of mission posts that a user still needs to take action on.</p>

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
		<td class="td col4">A numeric character ID or array of character IDs</td>
	</tr>
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>saved</em></td>
		<td class="td col3"><em>activated, saved, pending</em></td>
		<td class="td col4">Which status of posts to pull back</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<h2>count_user_post_comments()</h2>

<p>Counts the number of mission post comments a user has made.</p>

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

<p>The method returns the number of rows (number of comments) returned by the query.</p>

<h2>count_user_posts()</h2>

<p>Counts the number of mission posts a user has made.</p>

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
	<tr>
		<td class="td col1"><strong>status</strong></td>
		<td class="td col2"><em>activated</em></td>
		<td class="td col3"><em>activated, pending, saved, none</em></td>
		<td class="td col4">The status of the posts to count; use a blank string to include all posts</td>
	</tr>
	<tr>
		<td class="td col1"><strong>timeframe</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp to start counting from (the method will look for dates greater than or equal to the date)</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method returns the number of rows (number of posts) returned by the query.</p>

<?php
/**
 * SEARCHING DATA
 */
?>

<a name="search"></a><h1>Searching Data</h1>

<h2>search_posts()</h2>

<p>Search for mission posts.</p>

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
		<td class="td col1"><strong>component</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The component by which to search the mission posts</td>
	</tr>
	<tr>
		<td class="td col1"><strong>input</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The string to search for</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the mission posts that match the search criteria.</p>