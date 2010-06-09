<h1><?php echo $header;?></h1>

<p>Nova&rsquo;s Thresher library handles all interaction between Thresher and the text coming out of the database.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by Thresher so there is no need to do it manually.</p>

<h2>$this->thresher->parse()</h2>

<p>Parses the text passed to the method based on the parsing model set in the Thresher config file.</p>

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
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The text to be parsed</td>
	</tr>
</table>

<h4>Return</h4>

<p>This method returns the finalized text after it's been parsed.</p>