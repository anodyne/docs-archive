<h1>URI Library</h1>

<p>The URI Class provides functions that help you retrieve information from your URI strings. If you use URI routing, you can also retrieve information about the re-routed segments.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This library has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_URI.php</samp> file in <samp>nova/modules/core/libraries</samp>. Do not edit the CodeIgniter core library file!</p>

<h2>$this->uri->segment()</h2>

<p class="important">The original documentation on the segment method can be found in the <a href="http://codeigniter.com/user_guide/libraries/uri.html" target="_blank">CodeIgniter User Guide</a>.</p>

<p>Permits you to retrieve a specific segment. Where <var>n</var> is the segment number you wish to retrieve. Segments are numbered from left to right.</p>

<h4>Parameters</h4>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>segment</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A number matching the segment you want to pull back</td>
	</tr>
	<tr>
		<td class="td col1"><strong>no result</strong></td>
		<td class="td col2">FALSE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">What the method returns if nothing is found</td>
	</tr>
	<tr>
		<td class="td col1"><strong>numeric</strong></td>
		<td class="td col2">FALSE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Whether or not a segment must be numerical or not</td>
	</tr>
	<tr>
		<td class="td col1"><strong>values</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A variable or array of variables defining what the segment can be</td>
	</tr>
</table>

<h4>Return</h4>

<p>This method can return a variety of things based on the parameters passed in to it. If only the first parameter is passed in (which is required), the method will return the value of the segment specified or the no result value (<dfn>FALSE</dfn> by default) otherwise. If the third parameter is changed to <dfn>TRUE</dfn>, the method will return the value only if it is numeric, otherwise, it will return the no result value. Finally, if a variable or array is passed to the method through the fourth parameter, the method will return the segment value only if it matches the variable/array. If it does not, the no result value will be returned.</p>