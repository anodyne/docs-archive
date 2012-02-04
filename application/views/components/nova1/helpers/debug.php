<h1>Debug Helper</h1>

<p>The Debug Helper file contains functions that assist in debugging your own code.</p>

<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>

<pre>$this->load->helper('debug');</pre>

<h2>print_var</h2>

<p>Sometimes, you just have to find out what a variable, array or object is doing, so you need to print it out. Unfortunately, PHP doesn&rsquo;t offer one way to do that; each has their own way of showing their contents. The <dfn>print_var</dfn> helper takes the guess work out. Simply pass the variable to helper and it will print out the contents of that variable.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
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

<h3>Example</h3>

<pre>$array = array('one', 'two', 'three');

print_var($array);

// would produce:
Array(
	[0] => one
	[1] => two
	[2] => three
)</pre>