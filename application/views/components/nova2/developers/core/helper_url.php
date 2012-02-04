<h1>URL Helper</h1>

<p>The URL Helper file contains functions that assist in working with URLs.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by Nova so there is no need to do it manually.</p>

<p class="alert alert-info"><strong>Note:</strong> This helper has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_url_helper.php</samp> file in <samp>nova/modules/core/helpers</samp>. Do not edit the CodeIgniter core helper file! Documentation for the core helper is available <a href="http://codeigniter.com/user_guide/helpers/url_helper.html" target="_blank">here</a>.</p>

<h2>is_working_url</h2>

<p>Checks to see if the URL supplied in the first parameter is a valid URL.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>URL</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The URL to check</td>
	</tr>
</table>

<h4>Returns</h4>

<p>Returns <dfn>TRUE</dfn> if the URL is legitimate and <dfn>FALSE</dfn> if it isn't.</p>

<h2>link_to_if</h2>

<p>Creates a URL if the condition passed to the helper is true.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>condition</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The condition to check (must evaluate to TRUE/FALSE)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>uri</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The URI for the link to direct to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>title</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The title of the link</td>
	</tr>
	<tr>
		<td class="td col1"><strong>attributes</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The attributes being passed to the link</td>
	</tr>
</table>

<h4>Returns</h4>

<p>Returns the link if the condition is true, otherwise it returns <dfn>FALSE</dfn>.</p>

<h2>link_to_unless</h2>

<p>Creates a URL if the condition passed to the helper is false.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>condition</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The condition to check (must evaluate to TRUE/FALSE)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>uri</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The URI for the link to direct to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>title</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The title of the link</td>
	</tr>
	<tr>
		<td class="td col1"><strong>attributes</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The attributes being passed to the link</td>
	</tr>
</table>

<h4>Returns</h4>

<p>Returns the link if the condition is not true, otherwise it returns <dfn>FALSE</dfn>.</p>