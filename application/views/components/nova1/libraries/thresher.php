<h1><?php echo $header;?></h1>

<p>Nova's Thresher library handles all interaction between Thresher and the text coming out of the database.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by Thresher so there is no need to do it manually.</p>

<h2>$this->thresher->parse()</h2>

<p>Parses the text passed to the method based on the parsing model set in the Thresher config file.</p>

<h3>Parameters</h3>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>text</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The text to be parsed</td>
	</tr>
</table>

<h3>Return</h3>

<p>This method returns the finalized text after it's been parsed.</p>