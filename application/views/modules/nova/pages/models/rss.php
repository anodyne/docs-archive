<h1><?php echo $header;?></h1>

<p>The RSS model provides a means of pulling information from various tables for use by Nova's RSS feeds.</p>

<h2>Loading the Model</h2>

<p>This model is loaded using the following code:</p>

<pre>$this->load->model('rss_model', 'rss');</pre>

<h2>Using the Model</h2>

<p>Once you've loaded the model in your controller, you can use the methods in the model and listed on the page in the following manner:</p>

<pre>$this->rss->method_name();</pre>

<h1>Methods</h1>

<h2>get_logs()</h2>

<p>Get personal logs for the RSS feed.</p>

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
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>25</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of logs to limit the query to pull</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the logs that match the criteria.</p>

<h2>get_news()</h2>

<p>Get news items for the RSS feed.</p>

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
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>25</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of news items to limit the query to pull</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the news items that match the criteria.</p>

<h2>get_posts()</h2>

<p>Get mission posts for the RSS feed.</p>

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
		<td class="td col1"><strong>limit</strong></td>
		<td class="td col2"><em>25</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of posts to limit the query to pull</td>
	</tr>
</table>

<h4>Return</h4>

<p>The method will return an object with all the information for the posts that match the criteria.</p>