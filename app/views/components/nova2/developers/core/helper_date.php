<h1>Date Helper</h1>

<p>The Date Helper file contains functions that help you work with dates.</p>

<p class="alert alert-danger"><strong>Note:</strong> This helper is initialized automatically by Nova so there is no need to do it manually.</p>

<p class="alert alert-info"><strong>Note:</strong> This helper has been extended from the CodeIgniter default. Changes to this library can be found in the <code>MY_date_helper.php</code> file in <code>nova/modules/core/helpers</code>. Do not edit the CodeIgniter core helper file!</p>

<h2>timespan_short</h2>

<p>Formats a UNIX timestamp so that it appears like this:</p>

<pre>1 Year, 10 Months, 2 Weeks, 5 Days, 10 Hours</pre>

<p>The difference between this helper and CodeIgniter's <dfn>timespan</dfn> helper is that this version does not include minutes and seconds in the final output. If the span between the two timestamps is less than 1 hour, the helper will output the string <strong>Less Than 1 Hour</strong>.</p>

<h4>Parameters</h4>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>timestamp</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A UNIX timestamp</td>
	</tr>
	<tr>
		<td class="td col1"><strong>timestamp 2</strong></td>
		<td class="td col2"><em>Current Time</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A second UNIX timestamp that must be greater than the first</td>
	</tr>
</table>

<h4>Example</h4>

<pre>&lt;?php echo timespan_short(1079621429, now());?></pre>