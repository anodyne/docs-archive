<h1>Form Helper</h1>

<p>The Form Helper file contains functions that assist in working with forms.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by Nova so there is no need to do it manually.</p>

<p class="alert alert-info"><strong>Note:</strong> This helper has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_form_helper.php</samp> file in <samp>nova/modules/core/helpers</samp>. Do not edit the CodeIgniter core helper file!</p>

<h2>form_button</h2>

<p class="alert alert-info">The original documentation on the form_button helper can be found in the <a href="http://codeigniter.com/user_guide/helpers/form_helper.html" target="_blank">CodeIgniter User Guide</a>.</p>

<p>We have extended CodeIgniter&rsquo;s form helper to generate buttons that work in both Internet Explorer as well as other more compliant browsers such as Firefox. In order to accomplish this, we use CodeIgniter&rsquo;s built-in User Agent library to detect the browser and version a user has. If the user has IE 7 or older, Nova will display an input element, otherwise, a button element will be used. The extended helper works identically to the original helper save for the output.</p>

<h2>form_dropdown_dept</h2>

<p>This new form helper generates a dropdown menu pre-populated with departments from the database.</p>

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
		<td class="td col1"><strong>name</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string with what you want to name the element</td>
	</tr>
	<tr>
		<td class="td col1"><strong>selected</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or string of pre-selected values</td>
	</tr>
	<tr>
		<td class="td col1"><strong>extra</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any additional code to be appended to the end of the select element</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2">all</td>
		<td class="td col3">all/main</td>
		<td class="td col4">The type of departments to pull. Setting the parameter to all will pull all departments and their sub-departments; setting the parameter to main will pull just main department.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>display</strong></td>
		<td class="td col2">y</td>
		<td class="td col3"><em>None</em>, y, n</td>
		<td class="td col4">Which display flag to use when pulling items from the database</td>
	</tr>
</table>

<h4>Examples</h4>

<p>This example would produce a dropdown of all departments in the database and name the select menu <var>dept</var>. By passing other parameters to the helper, we can change the data being shown, like pre-selecting a value.</p>

<pre>echo form_dropdown_dept('dept', '', '', 'main');

// would produce:
&lt;select name="dept">
	&lt;option value="1">Command&lt;/option>
	&lt;option value="2">Flight Control&lt;/option>
	&lt;option value="3">Security&lt;/option>
	&lt;option value="4">Engineering&lt;/option>
	...
&lt;/select></pre>

<h2>form_dropdown_position</h2>

<p>This new form helper generates a dropdown menu pre-populated with positions from the database.</p>

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
		<td class="td col1"><strong>name</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string with what you want to name the element</td>
	</tr>
	<tr>
		<td class="td col1"><strong>selected</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or string of pre-selected values</td>
	</tr>
	<tr>
		<td class="td col1"><strong>extra</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any additional code to be appended to the end of the select element</td>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2">all</td>
		<td class="td col3">all, open, a numerical value</td>
		<td class="td col4">Determines what positions are pulled from the database. <dfn>All</dfn> will take all positions from the database. <dfn>Open</dfn> will pull only positions that have available slots. Additionally, if a numerical value is passed in to this parameter, it will pull all positions for the department with that ID.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>position display</strong></td>
		<td class="td col2">y</td>
		<td class="td col3"><em>none</em>, y, n</td>
		<td class="td col4">Determines which display flag to use for pulling positions from the database.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>department type</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>none</em>, playing, nonplaying</td>
		<td class="td col4">Determines which department&rsquo;s positions are pulled from the database. <dfn>Playing</dfn> will pull all departments with a type of playing while <dfn>nonplaying</dfn> will pull all departments with a type of nonplaying. Additionally, if nothing is passed to the parameter, Nova will pull all departments.</td>
	</tr>
</table>

<h4>Examples</h4>

<p>This example would produce a dropdown of all positions in the database and name the select menu <var>position_1</var>. For <dfn>all</dfn> and <dfn>open</dfn> positions, optgroups are used to break the options up into their respective departments.</p>

<pre>echo form_dropdown_position('position_1');

// would produce:
&lt;select name="position_1">
	&lt;optgroup label="Command">
		&lt;option value="1">Commanding Officer&lt;/option>
		&lt;option value="2">Executive Officer&lt;/option>
	&lt;/optgroup>
	&lt;optgroup label="Flight Control">
		&lt;option value="3">Chief Flight Control Officer&lt;/option>
	&lt;/optgroup>
	&lt;optgroup label="Engineering">
		&lt;option value="4">Chief Engineer&lt;/option>
	&lt;/optgroup>
	...
&lt;/select></pre>

<p>By passing other parameters to the helper, we can change the data being shown. In this example, we are naming our select menu <var>position_1</var>, making sure that ID number 1 is pre-selected and limiting our results to only the department with an ID of 1 (in this case, Command).</p>

<pre>echo form_dropdown_position('position_1', 1, '', 1);

// would produce:
&lt;select name="position_1">
	&lt;option value="1" selected>Commanding Officer&lt;/option>
	&lt;option value="2">Executive Officer&lt;/option>
&lt;/select></pre>

<h2>form_dropdown_rank</h2>

<p>This new form helper generates a dropdown menu pre-populated with ranks from the database.</p>

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
		<td class="td col1"><strong>name</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">A string with what you want to name the element</td>
	</tr>
	<tr>
		<td class="td col1"><strong>selected</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array or string of pre-selected values</td>
	</tr>
	<tr>
		<td class="td col1"><strong>extra</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any additional code to be appended to the end of the select element</td>
	</tr>
</table>

<h4>Examples</h4>

<p>This example would produce a dropdown of all ranks in the database and name the select menu <var>rank</var>. By passing other parameters to the helper, we can change the data being shown, like pre-selecting a value.</p>

<pre>echo form_dropdown_rank('rank');

// would produce:
&lt;select name="rank">
	&lt;option value="1">&lt;/option>
	&lt;option value="2">Admiral&lt;/option>
	&lt;option value="3">Vice-Admiral&lt;/option>
	&lt;option value="4">Rear-Admiral&lt;/option>
	&lt;option value="5">Commodore&lt;/option>
	&lt;option value="6">Captain&lt;/option>
	...
&lt;/select></pre>