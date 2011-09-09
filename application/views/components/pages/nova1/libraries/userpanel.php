<h1>User Panel Library</h1>

<p>Nova's User Panel library handles building the user panel shown when a user is logged in to the system.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<h2>$this->user_panel->panel_1()</h2>

<p>Builds the numbered panel in the user panel.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>Returns the data to be used by the panel views</p>

<h3>Examples</h3>

<pre>$this->user_panel->panel_1();</pre>

<p class="important"><strong>Note:</strong> There are 2 additional panels available to be built, <dfn>panel_2</dfn> and <dfn>panel_3</dfn>. They work identical to <dfn>panel_1</dfn>.</p>

<h2>$this->user_panel->panel_workflow()</h2>

<p>Builds the workflow handle object used by the user panel to display inbox count and writing entry counts.</p>

<h3>Parameters</h3>

<p><em>None</em></p>

<h3>Return</h3>

<p>Returns the rendered workflow handle.</p>

<h3>Examples</h3>

<pre>$this->user_panel->panel_workflow();</pre>

<h2>$this->user_panel->workflow_dashboard()</h2>

<p>Builds a single anchor with necessary code to control the dashboard panel.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
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

<h3>Return</h3>

<p>Returns an anchor to use for controlling the dashboard panel.</p>

<h3>Examples</h3>

<pre>&lt;?php echo $this->user_panel->workflow_dashboard(TRUE, img($image));</pre>

<h2>$this->user_panel->workflow_inbox()</h2>

<p>Builds a single anchor with necessary code to show the inbox link.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
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

<h3>Return</h3>

<p>Returns an anchor to use for linking to the inbox.</p>

<h3>Examples</h3>

<pre>&lt;?php echo $this->user_panel->workflow_inbox(FALSE, TRUE, TRUE, '[x]');

// would produce a link that looked like:
Inbox [2]</pre>

<h2>$this->user_panel->workflow_writing()</h2>

<p>Builds a single anchor with necessary code to show the writing entries link.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
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

<h3>Return</h3>

<p>Returns an anchor to use for linking to the writing control panel.</p>

<h3>Examples</h3>

<pre>&lt;?php echo $this->user_panel->workflow_writing(FALSE, TRUE, TRUE, '- x');

// would produce a link that looked like:
Writing Entries - 2</pre>