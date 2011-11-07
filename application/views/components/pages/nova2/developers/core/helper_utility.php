<h1>Utility Helper</h1>

<p>The Utility Helper file contains functions that assist in various actions your own code.</p>

<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>

<pre>$this->load->helper('utility');</pre>

<h2>check_memory</h2>

<p>The check memory helper aids in determining the size of the database and judging what the total memory consumption is against what the server&rsquo;s memory limit is.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>size</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The size in bytes</td>
	</tr>
	<tr>
		<td class="td col1"><strong>usage</strong></td>
		<td class="td col2">3</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The amount of memory currently being used</td>
	</tr>
</table>

<h4>Returns</h4>

<p>Returns <dfn>TRUE</dfn> if the server memory is greater than what Nova is consuming and <dfn>FALSE</dfn> if it isn&rsquo;t.</p>

<h2>file_size</h2>

<p>The file size helper accepts a numerical input in bytes and converts it to megabytes for either displaying on the page or storing in the database or a flat file.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>size</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The file size in bytes</td>
	</tr>
</table>

<h4>Returns</h4>

<p>This function returns the size of the file in megabytes for display or storage.</p>

<h4>Example</h4>

<pre>$size = file_size(1024000);

// would produce:
1.00</pre>

<h2>parse_dynamic_message</h2>

<p>The check memory helper aids in determining the size of the database and judging what the total memory consumption is against what the server&rsquo;s memory limit is.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>message</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The message to be parsed with dynamic tags (#tag#)</td>
	</tr>
	<tr>
		<td class="td col1"><strong>arguments</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">An array with the arguments to be parsed through. The key of the array should be the tag name and the value of the array should be what that tag will be replaced with.</td>
	</tr>
</table>

<h4>Returns</h4>

<p>Returns the parsed message.</p>

<h4>Example</h4>

<pre>$message = 'This message contains #number# dynamic tags that will be #action#.';

$args = array(
	'number' => '2',
	'action' => 'replaced'
);

$content = parse_dynamic_message($message, $args);

// returns This message contains 2 dynamic tags that will be replaced.</pre>

<h2>whos_online</h2>

<p>The Who&rsquo;s Online helper does just what you&rsquo;d think it does, it returns a list of all current users who are logged in based on the timespan given.</p>

<p class="important"><strong>Note:</strong> If you want to use this helper in your template file to show the list at the bottom of the page (or in any other location), you must first auto-load the utility helper as it is not automatically loaded by Nova. You can set the auto-load in <samp>application/config/autoload.php</samp> in the <var>helpers</var> array.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>timespan</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The timespan to use (usually out of the database)</td>
	</tr>
</table>

<h4>Returns</h4>

<p>This function returns a comma-separated string of the players&rsquo; main characters who are logged in.</p>

<h4>Example</h4>

<pre>&lt;?php echo whos_online($this->settings['online_timespan']);?>

// would produce:
Captain Jean-Luc Picard, Commander William Riker, Commander Worf</pre>

<h2>backup_database</h2>

<p>If you're using a MySQL database, you can invoke this helper to backup the contents of the database and either save it to the server or download the file.</p>

<p class="important"><strong>Note:</strong> The backup function used consumes a lot of server memory. Large database will require a significantly higher server memory limit.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>prefix</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The prefix being used for identifying the tables to be backed up</td>
	</tr>
	<tr>
		<td class="td col1"><strong>action</strong></td>
		<td class="td col2"><em>download</em></td>
		<td class="td col3"><em>download/save</em></td>
		<td class="td col4">The action to be taken with the final zip archive of the backed up content. Downloading will offer the zip archive for download by the user and Save will save the zip archive to the server in the <samp>./application/assets/backups</samp> directory.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>name</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The name of the file that will be generated</td>
	</tr>
</table>

<h4>Returns</h4>

<p>This function returns <dfn>TRUE</dfn> when the backup functions run and <dfn>FALSE</dfn> if they do not run. <strong>Note:</strong> Just because the function runs does not mean it does so successfully. If you use this helper, you will need to make sure the file exists after using the helper. In addition, the helper should be used alongside other utility helpers available for checking memory and file sizes.</p>

<h4>Example</h4>

<p>The following example is from the upgrade controller. This code grabs all tables with the <dfn>sms_</dfn> prefix and will generate a zip file with the name sms_backup.zip in the <samp>./application/assets/backups</samp> directory.</p>

<pre>/* set the prefix */
$prefix = 'sms_';

/* check the database size and the server memory limit */
$db_size = file_size($this->sys->get_database_size());
$memory = check_memory($db_size);

if ($memory === TRUE)
{ /* if there's enough memory, continue */
	$backup = backup_database($prefix, 'save');
	
	if ($backup === TRUE)
	{
		if (is_file(APPPATH .'assets/backups/sms_backup.zip'))
		{
			// success error message
		}
		else
		{
			// failure error message
		}
	}
	else
	{
		// no fields error message
	}
}
else
{
	// not enough memory error message
}</pre>

<h2>sms_position_translation</h2>

<p>This helper function will translate a Nova position ID to an SMS position ID.</p>

<p class="important"><strong>Note:</strong> This function assumes the default set of position values found in an SMS installation. If a lot of changes have been made to the positions, this will not translate positions properly.</p>

<h4>Parameters</h4>
<br />
<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>ID</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The numerical position ID</td>
	</tr>
</table>

<h4>Returns</h4>

<p>This function returns the ID of the Nova position that relates to the SMS position passed to the function.</p>

<h2>verify_server</h2>

<p>This helper function will check to see if Nova can be run on the current server.</p>

<h4>Parameters</h4>

<p><em>None</em></p>

<h4>Returns</h4>

<p>This function returns a table with the components checked, required values, actual values and a result.</p>