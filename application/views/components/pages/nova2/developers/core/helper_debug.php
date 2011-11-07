<h1>Debug Helper</h1>

<p>The Debug Helper file contains functions that assist in debugging your own code.</p>

<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>

<pre>$this->load->helper('debug');</pre>

<h2>print_var</h2>

<p>Print out the contents of a variable, be it a standard variable, an array or an object.</p>

<h4>Parameters</h4>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>variable</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The variable you want to test</td>
	</tr>
</table>

<h4>Example</h4>

<pre>$array = array('one', 'two', 'three');

print_var($array);

// would produce:
Array(
	[0] => one
	[1] => two
	[2] => three
)</pre>

<h2>last_query</h2>

<p>Print out the last query run against the database.</p>

<h4>Example</h4>

<pre>last_query();</pre>

<h2>query_result</h2>

<p>Print an array with the results of a given query against the database.</p>

<h4>Parameters</h4>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>query</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The query you want to test</td>
	</tr>
</table>

<h4>Example</h4>

<pre>query_result("SELECT * FROM `nova_characters`");</pre>

<h2>print_session</h2>

<p>Print out the session data.</p>

<h4>Example</h4>

<pre>print_session();</pre>

<h2>write_to_file</h2>

<p>Write the contents passed to the function to an output file.</p>

<h4>Example</h4>

<pre>write_to_file("This is the content of my output file");

// will result in a file at nova/modules/assets/debug/output.txt with the content</pre>