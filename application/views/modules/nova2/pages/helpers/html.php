<h1><?php echo $header;?></h1>

<p>The HTML Helper file contains functions that assist in working with HTML.</p>

<p class="critical"><strong>Note:</strong> This helper is initialized automatically by Nova so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This helper has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_html_helper.php</samp> file in <samp>application/helpers</samp>. Do not edit the CodeIgniter core helper file!</p>

<h2>table_row_spacer</h2>

<p>Sometimes, when working with tables, you need to put some space between rows for the best possible presentation. Using this helper function makes it easy to insert space into your tables.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th>Parameter</th>
		<th>Default Value</th>
		<th>Options</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>columns</strong></td>
		<td class="td col2">1</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The number of columns in the table row spacer</td>
	</tr>
	<tr>
		<td class="td col1"><strong>height</strong></td>
		<td class="td col2">1</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The height of the table row spacer</td>
	</tr>
</table>

<h4>Example</h4>

<pre>&lt;?php echo table_row_spacer(3, 15);?>

// would produce:
&lt;tr>
	&lt;td colspan="3" height="15">&lt;/td>
&lt;/tr></pre>