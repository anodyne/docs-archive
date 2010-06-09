<h1><?php echo $header;?></h1>

<p>The Panel Helper file contains functions that assist in actions related to the <?php echo anchor('nova/libraries/userpanel', 'User Panel Library')?>.</p>

<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>

<pre>$this->load->helper('panel');</pre>

<p class="important"><strong>Note:</strong> If you want to use this in a skin, you should load the helper in your template file instead of auto-loading it since not all skins will use this helper.</p>

<h2>panel_dashboard</h2>

<p>Creates a link that controls the user dashboard.</p>

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
		<td class="td col1"><strong>text</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to print the label "Dashboard"</td>
	</tr>
	<tr>
		<td class="td col1"><strong>content</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any content like a string of text or an image to show instead of the "Dashboard" text</td>
	</tr>
</table>

<h4>Return</h4>

<p>Returns an anchor to use for controlling the dashboard panel.</p>

<h4>Examples</h4>

<pre>&lt;?php echo panel_dashboard(TRUE, img($image));</pre>

<h2>panel_inbox</h2>

<p>Creates a link to the private messages inbox along with notification controls.</p>

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
		<td class="td col1"><strong>icon</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the gray/green icon to the left of the content</td>
	</tr>
	<tr>
		<td class="td col1"><strong>text</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the "Inbox" label</td>
	</tr>
	<tr>
		<td class="td col1"><strong>count</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the unread count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>count decoration</strong></td>
		<td class="td col2"><em>(x)</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The format in which the unread count should be displayed. The <strong>x</strong> is required but can be decorated however you want. Nova will replace the x with the unread count. Examples: {x}, [x], - x, x.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>content</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any content like a string of text or an image to show instead of the "Inbox" text</td>
	</tr>
</table>

<h4>Return</h4>

<p>Returns an anchor to use for linking to the inbox.</p>

<h4>Examples</h4>

<pre>&lt;?php echo panel_inbox(FALSE, TRUE, TRUE, '[x]');

// would produce a link that looked like:
Inbox [2]</pre>

<h2>panel_writing</h2>

<p>Creates a link to the writing control panel along with notification controls.</p>

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
		<td class="td col1"><strong>icon</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the gray/green/yellow icon to the left of the content</td>
	</tr>
	<tr>
		<td class="td col1"><strong>text</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the "Writing Entries" label</td>
	</tr>
	<tr>
		<td class="td col1"><strong>count</strong></td>
		<td class="td col2"><em>TRUE</em></td>
		<td class="td col3"><em>TRUE/FALSE</em></td>
		<td class="td col4">Whether to show the unread count</td>
	</tr>
	<tr>
		<td class="td col1"><strong>count decoration</strong></td>
		<td class="td col2"><em>(x)</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The format in which the unread count should be displayed. The <strong>x</strong> is required but can be decorated however you want. Nova will replace the x with the unread count. Examples: {x}, [x], - x, x.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>content</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any content like a string of text or an image to show instead of the "Writing Entries" text</td>
	</tr>
</table>

<h4>Return</h4>

<p>Returns an anchor to use for linking to the writing control panel.</p>

<h4>Examples</h4>

<pre>&lt;?php echo panel_writing(FALSE, TRUE, TRUE, '- x');

// would produce a link that looked like:
Writing Entries - 2</pre>