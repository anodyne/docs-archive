<h1>Template Library</h1>

<p>The Template library, written for the CodeIgniter PHP-framework, is a wrapper for CI's View implementation. Template is a reaction to the numerous questions from the CI community regarding how one would display multiple views for one controller, and how to embed &ldquo;views within views&rdquo; in a standardized fashion. In addition, Template provides extra Views loading capabilities, the ability to utilize any template parser (like Smarty), and shortcuts for including CSS, JavaScript, and other common elements in your final rendered HTML.</p>

<p>More information about this library, including documentation, can be found at <a href="http://williamsconcepts.com/ci/codeigniter/libraries/template/" target="_blank">WillamsConcepts.com</a>.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This library has been extended from the Template library created by Colin Williams. Changes to this library can be found in the <samp>MY_Template.php</samp> file in <samp>application/libraries</samp>. Do not edit the core library file! Any bugs with the library should be reported to WilliamsConcepts.</p>

<h2>$this->template->add_redirect()</h2>

<p>Adds a redirect META tag to the head of your document to automatically redirect to the URL of your choosing after a delay (in seconds) of your choosing.</p>

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
		<td class="td col1"><strong>location</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Where you want to redirect to</td>
	</tr>
	<tr>
		<td class="td col1"><strong>time</strong></td>
		<td class="td col2">5</td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">How long of a delay (in seconds)</td>
	</tr>
</table>

<h4>Return</h4>

<p>This method returns the proper META tag for automatic redirection to the currently active template file.</p>

<h4>Example</h4>

<pre>$this->template->add_redirect('install/index', 15);</pre>

<h2>$this->template->set_regions()</h2>

<p class="important"><strong>Note:</strong> This method has been extended from the original in the library.</p>

<p>Sets the regions usable by the library.</p>

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
		<td class="td col1"><strong>regions</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The regions to use</td>
	</tr>
</table>

<h4>Return</h4>

<p><em>None</em></p>